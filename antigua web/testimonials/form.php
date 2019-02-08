
<style type="text/css"> 
form ::-webkit-scrollbar {
    width: 8px;
}
form ::-webkit-scrollbar-button {
    background:#003;
}
 
form ::-webkit-scrollbar-track {
	background:#EEE;
}
 
form ::-webkit-scrollbar-thumb {
	background:#003;
}

input[type=submit] {
	width:99.4%;
	clear:both;
	background:#FFF;
	display:block;
	padding:8px 11px 8px 11px;
	font-family:"Raleway", Arial, Helvetica, sans-serif;
	font-size:18px;
	border:#CCC 1px solid;
	border-radius:0px 0px 18px 18px;

	margin:9px 1px 9px 1px;
	transition:all ease-in-out .3s;

}
input[type=submit]:hover {
	color:#666;
	box-shadow:2px 2px 2px #EEE,-2px -2px 2px #EEE;
	border:#666 1px solid;

}
table p
{
	margin:0 0 10px;
}
.table-fit {
    width: 1px;
}
.bgcolor-c
{
	background-color: #FF7000;
color: #fff;
font-weight: 600;
font-size: 14px;
}
#comentarios {
padding: 4px 4px 4px 12px;
font-family: 'Raleway',sans-serif;
background-color: #E8E8E8;


}
#comentarios:hover {
}
#comentarios a {
	color:#000;
	text-decoration:none;
	transition:all ease-out .3s;
	font-weight: 600;
	text-transform: uppercase;

}
#comentarios a:hover {
	color:#EEE;
}

#comentarios .user {
	clear:both;
	padding:4px 9px 4px 9px;
	margin:4px 0px 4px 4px;
	float:left;
/*	width:30%;*/
	background:#003;
	border-radius:4px 0px 0px 4px;
	font-weight:bold;
	color:#FFF;

}
#comentarios .comment {
	border:1px solid #003;
	margin:4px 4px 4px 0px;
	padding:18px 9px 18px 9px;
	float:left;
	/*width:61%;*/
	border-radius:0px 4px 4px 0px;

}
#comentarios .comment a {
	transition:all ease-in .2s;
	color:#999;
}
#comentarios .comment img {
	width:93%;
	border:7px solid #FFF;
	box-shadow:2px 2px 4px #003;
}
#comentarios .comment a:hover {
	font-weight:bold;
}
.tiempo {
	text-align:right;
	text-transform:uppercase;
	font-size:10px;
}
thead tr {

    background-color: #FF7000 !important;
    color: #fff !important;

}
thead th {

    text-align: center;

}
.table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th
{
	border:1px solid #575757 !important;
}
.table-form
{
	background-color: #efefef;
}
.table-form td
{
	vertical-align: middle;
	font-size: 15px;
}
</style>
</head>


<body>

<div class="col-xs-12 col-md-12">
<?php
include('comentarios.php');
?>

<h2>Adicione seus depoimentos:</h2>


<p>Preencha os campos abaixo para deixar seu testemunho. Depois de enviar sua mensagem,<br>ser devolvido ao livro de testemunhos. Blanks nos campos<br> (*) representar exigido</p>
<p><br></p>


<div id="form" class="result">
<form  method="post" id="reg-form">
  <div class="table-responsive">
<table class="table table-bordered table-form">
  <thead>
      <tr>
        <td colspan="2"><b>Adicione Seus Depoimentos:</b></td>
      </tr>
    </thead>
  <tbody>
 	<tr>
 		<td><label for="exampleInputEmail1">Nome*:</label></td>
        <td><input type="text"  name="usuario" required data-error="Enter your Nome" ></td> 
   </tr> 
   <tr>
 		<td><label for="exampleInputEmail1">Mail*:</label></td>
        <td><input type="email"  name="email" required data-error="Enter your Mail" ></td> 
   </tr> 
      <tr>
 		<td><label for="exampleInputEmail1">Webside:</label></td>
        <td><input type="text"  name="website" placeholder="Website"></td> 
   </tr>
   <tr>
 		<td><label for="exampleInputEmail1">Location*:</label></td>
        <td><input type="text"  name="location" required data-error="Enter yourLocation" ></td> 
   </tr> 
    <tr>
 		<td><label for="exampleInputEmail1">Image:</label></td>
        <td><!-- <input type="hidden" name="size" value="350000"> -->
          <input type="file" name="file"> </td> 
   </tr> 
   <tr>
   	<td><label for="exampleInputEmail1">Comentários*:</label></td>
        <td><textarea class="comentario" name="comentario" cols="60" rows="6" required data-error="Escreva seu comentário"> </textarea></td>
   </tr>
      <tr>
        <td colspan="2"> 
            <div class="col-xs-12 col-md-6 ">
               <div class="g-recaptcha" data-sitekey="6LcWlFIUAAAAAC-XlQRVu773qW__xjpqHNg5WseM"></div> 
             </div>
             <div class="col-xs-12 col-md-6 ">
          <input type="submit" value="Enviar" name="enviar"/> 
            </div>
        </td>

        
   </tr>

   </tbody> 
</table>
 </div>
</form>
</div>

<script type="text/javascript">
$(document).ready(function()
{ 
function()
{
  
}
  $(document).on('submit', '#reg-form', function()
  {
    
    var data = $(this).serialize();
    
    
    $.ajax({
    
    type : 'POST',
    url  : '/testimonials/enviar.php',
    data : data,
    success :  function(data)
           {            
            $("#reg-form").fadeOut(500).hide(function()
            {
              $(".result").fadeIn(500).show(function()
              {
                $(".result").html(data);
              });
            });
            
           }
    });
    return false;
  });
});
</script>

</div>

</body>
</html>
