<?php
session_start();
if (!isset($_SESSION['username']))
{
   $_SESSION['referrer'] = $_SERVER['REQUEST_URI'];
   header('Location: ./AcessoNegado.php');
   exit;
}
if (isset($_SESSION['expires_by']))
{
   $expires_by = intval($_SESSION['expires_by']);
   if (time() < $expires_by)
   {
      $_SESSION['expires_by'] = time() + intval($_SESSION['expires_timeout']);
   }
   else
   {
      unset($_SESSION['username']);
      unset($_SESSION['expires_by']);
      unset($_SESSION['expires_timeout']);
      $_SESSION['referrer'] = $_SERVER['REQUEST_URI'];
      header('Location: ./AcessoNegado.php');
      exit;
   }
}
?>
<!doctype html>
<html lang="es-mx">
<head>
<meta charset="utf-8">
<title>España</title>
<meta name="generator" content="WYSIWYG Web Builder 19 Trial Version - https://www.wysiwygwebbuilder.com">
<link href="fontawesome6.min.css" rel="stylesheet">
<link href="OMVRA.css" rel="stylesheet">
<link href="InEspana.css" rel="stylesheet">
</head>
<body>
<div id="container">
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb19.png" alt="WYSIWYG Web Builder" style="position:absolute;left:6px;top:441px;margin: 0;border-width:0;z-index:250" width="88" height="31"></a>
<hr id="HorizontalLine1" style="position:absolute;left:0px;top:280px;width:1535px;z-index:1;">
<div id="wb_Heading3" style="position:absolute;left:487px;top:315px;width:560px;height:82px;z-index:2;">
<h1 id="Heading3">España</h1></div>
<div id="wb_CssMenu2" style="position:absolute;left:230px;top:340px;width:100px;height:32px;z-index:3;">
<ul id="CssMenu2" role="menubar" class="nav">
<li role="menuitem" class="nav-item firstmain"><a class="nav-link" href="./InEuropa.php" target="_self" onclick="window.location.href='./InEuropa.php';return false;"><i class="fa fa-arrow-circle-left"></i></a>
</li>
</ul>
</div>
<div id="wb_Shape4" style="position:absolute;left:300px;top:120px;width:1230px;height:120px;z-index:4;">
<img src="images/img0117.png" id="Shape4" alt="" width="1230" height="120" style="width:1230px;height:120px;"></div>
<div id="wb_Shape1" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:5;">
<img src="images/img0118.png" id="Shape1" alt="" width="300" height="240" style="width:300px;height:240px;"></div>
<div id="wb_Shape2" style="position:absolute;left:300px;top:0px;width:1230px;height:120px;z-index:6;">
<img src="images/img0119.png" id="Shape2" alt="" width="1230" height="120" style="width:1230px;height:120px;"></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:7;">
<img src="images/omvra-removebg-preview.png" id="Image2" alt="" width="300" height="240"></div>
<div id="wb_Heading2" style="position:absolute;left:300px;top:35px;width:1225px;height:89px;z-index:8;">
<h1 id="Heading2">Sabores del Mundo</h1></div>
<div id="wb_Heading1" style="position:absolute;left:300px;top:155px;width:1225px;height:52px;z-index:9;">
<h1 id="Heading1">"La cocina no tiene limites"</h1></div>
<div id="wb_CssMenu1" style="position:absolute;left:0px;top:240px;width:1536px;height:33px;z-index:10;">
<ul id="CssMenu1" role="menubar" class="nav">
<li role="menuitem" class="nav-item firstmain"><a class="nav-link" href="./Continentes.php" target="_self" onclick="window.location.href='./Ingresado.php';return false;">Inicio</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link" href="" target="_self" onclick="window.location.href='./InRegistro.php';return false;">Registrar</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link" href="" target="_self" onclick="window.location.href='./Publicar.php';return false;">Publicar</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link" href="" target="_self" onclick="window.location.href='./InBusquedad.php';return false;"><i class="fa fa-search"></i></a>
</li>
</ul>
</div>

<div id="wb_Heading4" style="position:absolute;left:100px;top:430px;width:429px;height:52px;z-index:12;">
<h1 id="Heading4">Platos Principales</h1></div>
<div id="wb_Heading5" style="position:absolute;left:100px;top:930px;width:200px;height:52px;z-index:13;">
<h1 id="Heading5">Entradas<br></h1></div>
<div id="wb_Heading6" style="position:absolute;left:100px;top:1430px;width:200px;height:52px;z-index:14;">
<h1 id="Heading6">Postres</h1></div>
</div>
</body>
</html>