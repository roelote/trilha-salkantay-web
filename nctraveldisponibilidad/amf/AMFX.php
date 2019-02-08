<?php
require_once( 'amfphp/core/amf/app/Gateway.php');
require_once( AMFPHP_BASE . 'amf/io/AMFSerializer.php');
require_once( AMFPHP_BASE . 'amf/io/AMFDeserializer.php');

//mi clase
class AMFX
{
	protected $archivo_amf;
	protected $cookie;
	protected $fecha;
	protected $ruta_amf;
	protected $size;
	public $raw;

	public function setcookie($string) {
		$this->cookie=$string;
	}
	public function setsize($size) {
		$this->size=$size;
	}
	public function setfecha($fecha) {
		$this->fecha=$fecha;
	}
	public function setruta($ruta) {
		$this->ruta_amf=$ruta;
	}

	public function ObtenerDisponibilidad(){
		$resultado=0;
		$archivo=$this->ruta_amf.$this->fecha.'.amf';
		if(file_exists($archivo)) {
			$archivo_amf=file_get_contents($archivo);
			include $this->ruta_amf.$this->fecha.'.amf.php';
			$c_header=array(
				'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
				'Accept-Encoding: gzip, deflate',
				'Accept-Language: en-US,en;q=0.5',
				"Cookie: $cookie",
				'Host: machupicchu.gob.pe',
				'User-Agent: Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0',
				'Content-type: application/x-amf',
				"Content-length: $size"
			);
			$c_options = array(
				CURLOPT_HTTPHEADER          => $c_header,
				CURLOPT_POST                => true,
				CURLOPT_POSTFIELDS          => $archivo_amf,
				CURLOPT_RETURNTRANSFER      => true
			);
			$ch = curl_init('http://extranet.machupicchu.gob.pe/flex2gateway/');
			curl_setopt_array($ch, $c_options);
			$res = curl_exec($ch);
			$this->raw=$res;
			$amf_respuesta = new AMFObject($res);
			$des_respuesta = new AMFDeserializer($amf_respuesta->rawData);
			$des_respuesta->deserialize($amf_respuesta);
			$resultado=$amf_respuesta->_bodys[0]->_value['body'];
			return $resultado;
		}
	}
}
