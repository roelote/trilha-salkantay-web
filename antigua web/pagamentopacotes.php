<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>pagamento online</title>
<meta name="keywords" content="Incachuzco">
<meta name="description" content="Weare">
<?php include("include/head.php") ?>
</head>
<body>
<?php include("include/header.php") ?>
<div class="csc">
  <?php include("include/sidebar.php") ?>
<div class="content col-xs-12 col-sm-12 col-md-9">
  <h1> pagamento online</h1>
  <br>
  <div class="center">
    <h3 style=" font-size:18px;">Faça seu pagamento com cartão.</h3>


<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="W9V4QMPW455BJ">
<input type="image" src="https://www.paypalobjects.com/pt_BR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira mais fácil e segura de efetuar pagamentos online!">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>

  </div>
</div>
<div class="clear"></div>
</div>


</div>

<?php include("include/footer.php") ?>


</body>
</html>