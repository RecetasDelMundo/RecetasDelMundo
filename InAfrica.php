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
<title>Africa</title>
<meta name="generator" content="WYSIWYG Web Builder 19 Trial Version - https://www.wysiwygwebbuilder.com">
<link href="fontawesome6.min.css" rel="stylesheet">
<link href="OMVRA.css" rel="stylesheet">
<link href="InAfrica.css" rel="stylesheet">
</head>
<body>
<div id="container">
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb19.png" alt="WYSIWYG Web Builder" style="position:absolute;left:441px;top:1029px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<hr id="HorizontalLine1" style="position:absolute;left:0px;top:280px;width:1535px;z-index:1;">
<div id="wb_Heading3" style="position:absolute;left:487px;top:310px;width:560px;height:70px;z-index:2;">
<h1 id="Heading3">Africa</h1></div>
<div id="wb_CssMenu2" style="position:absolute;left:230px;top:340px;width:100px;height:32px;z-index:3;">
<ul id="CssMenu2" role="menubar" class="nav">
<li role="menuitem" class="nav-item firstmain"><a class="nav-link" href="" target="_self" onclick="window.location.href='./InContinentes.php';return false;"><i class="fa fa-arrow-circle-left"></i></a>
</li>
</ul>
</div>
<div id="wb_Image2" style="position:absolute;left:240px;top:440px;width:275px;height:145px;z-index:4;">
<a href="#" onclick="window.location.href='./InEgipto.php';return false;"><img src="images/Egipto.png" id="Image2" alt="" width="275" height="184"></a></div>
<div id="wb_Image3" style="position:absolute;left:626px;top:440px;width:275px;height:145px;z-index:5;">
<a href="#" onclick="window.location.href='./InEthiopia.php';return false;"><img src="images/Ethiopia.png" id="Image3" alt="" width="275" height="138"></a></div>
<div id="wb_Image4" style="position:absolute;left:1018px;top:440px;width:275px;height:145px;z-index:6;">
<a href="#" onclick="window.location.href='./InMarruecos.php';return false;"><img src="images/Marruecos.png" id="Image4" alt="" width="275" height="184"></a></div>
<div id="wb_Image5" style="position:absolute;left:462px;top:702px;width:275px;height:145px;z-index:7;">
<a href="#" onclick="window.location.href='./InNigeria.php';return false;"><img src="images/Nigeria.png" id="Image5" alt="" width="275" height="138"></a></div>
<div id="wb_Heading4" style="position:absolute;left:299px;top:621px;width:156px;height:48px;z-index:8;">
<h1 id="Heading4">Egipto</h1></div>
<div id="wb_Heading5" style="position:absolute;left:685px;top:621px;width:156px;height:48px;z-index:9;">
<h1 id="Heading5">Ethiopia</h1></div>
<div id="wb_Heading6" style="position:absolute;left:1069px;top:621px;width:172px;height:48px;z-index:10;">
<h1 id="Heading6">Marruecos</h1></div>
<div id="wb_Image6" style="position:absolute;left:820px;top:702px;width:275px;height:145px;z-index:11;">
<a href="#" onclick="window.location.href='./InSenegal.php';return false;"><img src="images/Senegal.png" id="Image6" alt="" width="275" height="184"></a></div>
<div id="wb_Heading7" style="position:absolute;left:521px;top:874px;width:156px;height:48px;z-index:12;">
<h1 id="Heading7">Nigeria</h1></div>
<div id="wb_Heading8" style="position:absolute;left:875px;top:874px;width:165px;height:72px;z-index:13;">
<h1 id="Heading8">Senegal</h1></div>
<div id="wb_CssMenu1" style="position:absolute;left:0px;top:240px;width:1536px;height:33px;z-index:14;">
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

<div id="wb_Shape1" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:16;">
<img src="images/img0027.png" id="Shape1" alt="" width="300" height="240" style="width:300px;height:240px;"></div>
<div id="wb_Shape2" style="position:absolute;left:300px;top:0px;width:1230px;height:240px;z-index:17;">
<img src="images/img0028.png" id="Shape2" alt="" width="1230" height="240" style="width:1230px;height:240px;"></div>
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:18;">
<img src="images/omvra-removebg-preview.png" id="Image1" alt="" width="300" height="240"></div>
<div id="wb_Heading2" style="position:absolute;left:300px;top:35px;width:1230px;height:89px;z-index:19;">
<h1 id="Heading2">Sabores del Mundo</h1></div>
<div id="wb_Heading1" style="position:absolute;left:300px;top:155px;width:1225px;height:52px;z-index:20;">
<h1 id="Heading1">"La cocina no tiene limites"</h1></div>
<div id="wb_Shape4" style="position:absolute;left:300px;top:120px;width:1230px;height:120px;z-index:21;">
<img src="images/img0067.png" id="Shape4" alt="" width="1230" height="120" style="width:1230px;height:120px;"></div>
<div id="wb_Shape3" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:22;">
<img src="images/img0068.png" id="Shape3" alt="" width="300" height="240" style="width:300px;height:240px;"></div>
<div id="wb_Shape5" style="position:absolute;left:300px;top:0px;width:1230px;height:120px;z-index:23;">
<img src="images/img0069.png" id="Shape5" alt="" width="1230" height="120" style="width:1230px;height:120px;"></div>
<div id="wb_Image7" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:24;">
<img src="images/omvra-removebg-preview.png" id="Image7" alt="" width="300" height="240"></div>
<div id="wb_Heading9" style="position:absolute;left:300px;top:35px;width:1225px;height:89px;z-index:25;">
<h1 id="Heading9">Sabores del Mundo</h1></div>
<div id="wb_Heading10" style="position:absolute;left:300px;top:155px;width:1225px;height:52px;z-index:26;">
<h1 id="Heading10">"La cocina no tiene limites"</h1></div>
</div>
</body>
</html>