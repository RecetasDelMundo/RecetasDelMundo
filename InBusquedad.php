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
<title>Busquedad</title>
<meta name="generator" content="WYSIWYG Web Builder 19 Trial Version - https://www.wysiwygwebbuilder.com">
<link href="OMVRA.css" rel="stylesheet">
<link href="InBusquedad.css" rel="stylesheet">
</head>
<body>
<div id="container">
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb19.png" alt="WYSIWYG Web Builder" style="position:absolute;left:1140px;top:773px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<hr id="HorizontalLine1" style="position:absolute;left:0px;top:280px;width:1535px;z-index:1;">
<div id="wb_CssMenu1" style="position:absolute;left:0px;top:240px;width:1536px;height:33px;z-index:2;">
<ul id="CssMenu1" role="menubar" class="nav">
<li role="menuitem" class="nav-item firstmain"><a class="nav-link" href="./Continentes.php" target="_self" onclick="window.location.href='./Ingresado.php';return false;">Inicio</a>
</li>
</ul>
</div>

<div id="wb_Shape1" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:4;">
<img src="images/img0039.png" id="Shape1" alt="" width="300" height="240" style="width:300px;height:240px;"></div>
<div id="wb_Shape2" style="position:absolute;left:300px;top:0px;width:1230px;height:240px;z-index:5;">
<img src="images/img0040.png" id="Shape2" alt="" width="1230" height="240" style="width:1230px;height:240px;"></div>
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:6;">
<img src="images/omvra-removebg-preview.png" id="Image1" alt="" width="300" height="240"></div>
<div id="wb_Heading2" style="position:absolute;left:300px;top:35px;width:1230px;height:89px;z-index:7;">
<h1 id="Heading2">Sabores del Mundo</h1></div>
<div id="wb_Heading1" style="position:absolute;left:300px;top:155px;width:1225px;height:52px;z-index:8;">
<h1 id="Heading1">"La cocina no tiene limites"</h1></div>
<div id="wb_Shape4" style="position:absolute;left:300px;top:120px;width:1230px;height:120px;z-index:9;">
<img src="images/img0085.png" id="Shape4" alt="" width="1230" height="120" style="width:1230px;height:120px;"></div>
<div id="wb_Shape3" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:10;">
<img src="images/img0086.png" id="Shape3" alt="" width="300" height="240" style="width:300px;height:240px;"></div>
<div id="wb_Shape5" style="position:absolute;left:300px;top:0px;width:1230px;height:120px;z-index:11;">
<img src="images/img0087.png" id="Shape5" alt="" width="1230" height="120" style="width:1230px;height:120px;"></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:12;">
<img src="images/omvra-removebg-preview.png" id="Image2" alt="" width="300" height="240"></div>
<div id="wb_Heading3" style="position:absolute;left:300px;top:35px;width:1225px;height:89px;z-index:13;">
<h1 id="Heading3">Sabores del Mundo</h1></div>
<div id="wb_Heading4" style="position:absolute;left:300px;top:155px;width:1225px;height:52px;z-index:14;">
<h1 id="Heading4">"La cocina no tiene limites"</h1></div>
</div>
</body>
</html>