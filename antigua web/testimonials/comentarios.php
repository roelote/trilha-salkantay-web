
<?php 
  // Se conecta al SGBD 
  if(!($conexion = mysql_connect("localhost","nctravel_chatnc","Nctravel_chatnC"))) 

  // if(!($conexion = mysql_connect("localhost", "root", ""))) 

    die("Error: No se pudo conectar");
	
  // Selecciona la base de datos 
  // if(!mysql_select_db("comentarios", $conexion)) 
     if(!mysql_select_db("testimonials_new", $conexion)) 
    die("Error: No existe la base de datos");
	
  // Sentencia SQL: muestra todo el contenido de la tabla "books" 
  $sentencia = "SELECT * FROM comentarios ORDER BY ip DESC "; 
  // Ejecuta la sentencia SQL 
  $resultado = mysql_query($sentencia, $conexion); 
  if(!$resultado) 
    die("Error: no se pudo realizar la consulta");

 echo "<div id='comentarios'>";
 echo 
 "<div class='table-responsive'>
 <table class='table table-striped table-bordered '>
  <thead>
      <tr>
        <th>NOME</th>
        <th>COMENTARIOS</th>
      </tr>
    </thead>
 ";
    echo "<tbody id='myTable'>";
   
  while($fila = mysql_fetch_assoc($resultado)) 
  { 
    echo "<tr>";
    echo "<td><p><a href='" . $fila['website'] . "'>" . $fila['usuario'] . "</a></p>
           <p><b>Location:</b>".$fila['location']."</p> 
           <p><b>Date: </b>".$fila['fecha']."</p> </td>";
    echo "<td>".$fila['comentario'] . '</td>';
   echo " </tr>";
  } 
echo " </tbody>";
echo " </table>";
echo " </div>";
echo " </div>";

  // Libera la memoria del resultado
  mysql_free_result($resultado);
  
  // Cierra la conexión con la base de datos 
  mysql_close($conexion); 
?> 
 <div class="col-md-12 text-center">
      <ul class="pagination" id="myPager"></ul>
</div>

<script type="text/javascript">
$.fn.pageMe = function(opts){
    var $this = this,
        defaults = {
            perPage: 7,
            showPrevNext: false,
            hidePageNumbers: false
        },
        settings = $.extend(defaults, opts);
    
    var listElement = $this;
    var perPage = settings.perPage; 
    var children = listElement.children();
    var pager = $('.pager');
    
    if (typeof settings.childSelector!="undefined") {
        children = listElement.find(settings.childSelector);
    }
    
    if (typeof settings.pagerSelector!="undefined") {
        pager = $(settings.pagerSelector);
    }
    
    var numItems = children.size();
    var numPages = Math.ceil(numItems/perPage);

    pager.data("curr",0);
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="prev_link"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a></li>').appendTo(pager);
    }
    
    var curr = 0;
    while(numPages > curr && (settings.hidePageNumbers==false)){
        $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
        curr++;
    }
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="next_link"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></li>').appendTo(pager);
    }
    
    pager.find('.page_link:first').addClass('active');
    pager.find('.prev_link').hide();
    if (numPages<=1) {
        pager.find('.next_link').hide();
    }
      pager.children().eq(1).addClass("active");
    
    children.hide();
    children.slice(0, perPage).show();
    
    pager.find('li .page_link').click(function(){
        var clickedPage = $(this).html().valueOf()-1;
        goTo(clickedPage,perPage);
        return false;
    });
    pager.find('li .prev_link').click(function(){
        previous();
        return false;
    });
    pager.find('li .next_link').click(function(){
        next();
        return false;
    });
    
    function previous(){
        var goToPage = parseInt(pager.data("curr")) - 1;
        goTo(goToPage);
    }
     
    function next(){
        goToPage = parseInt(pager.data("curr")) + 1;
        goTo(goToPage);
    }
    
    function goTo(page){
        var startAt = page * perPage,
            endOn = startAt + perPage;
        
        children.css('display','none').slice(startAt, endOn).show();
        
        if (page>=1) {
            pager.find('.prev_link').show();
        }
        else {
            pager.find('.prev_link').hide();
        }
        
        if (page<(numPages-1)) {
            pager.find('.next_link').show();
        }
        else {
            pager.find('.next_link').hide();
        }
        
        pager.data("curr",page);
        pager.children().removeClass("active");
        pager.children().eq(page+1).addClass("active");
    
    }
};

$(document).ready(function(){
    
  $('#myTable').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:4});
    
});
</script>


