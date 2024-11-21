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
<title>Continentes</title>
<meta name="generator" content="WYSIWYG Web Builder 19 Trial Version - https://www.wysiwygwebbuilder.com">
<link href="fontawesome6.min.css" rel="stylesheet">
<link href="OMVRA.css" rel="stylesheet">
<link href="InContinentes.css" rel="stylesheet">
</head>
<body>
<div id="container">
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb19.png" alt="WYSIWYG Web Builder" style="position:absolute;left:1112px;top:1087px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<hr id="HorizontalLine1" style="position:absolute;left:0px;top:280px;width:1535px;z-index:1;">
<div id="wb_AsiaImg" style="position:absolute;left:646px;top:456px;width:250px;height:250px;z-index:2;">
<a href="#" onclick="window.location.href='./InAsia.php';return false;"><img src="images/Asua.png" id="AsiaImg" alt="" width="250" height="250"></a></div>
<div id="wb_NorteImg" style="position:absolute;left:801px;top:763px;width:250px;height:250px;z-index:3;">
<a href="#" onclick="window.location.href='./InNorte.php';return false;"><img src="images/North.png" id="NorteImg" alt="" width="250" height="250"></a></div>
<div id="wb_SurImg" style="position:absolute;left:449px;top:763px;width:250px;height:250px;z-index:4;">
<a href="#" onclick="window.location.href='./InSur.php';return false;"><img src="images/Soutg.png" id="SurImg" alt="" width="250" height="250"></a></div>
<div id="wb_EuropaImg" style="position:absolute;left:1035px;top:456px;width:250px;height:250px;z-index:5;">
<a href="#" onclick="window.location.href='./InEuropa.php';return false;"><img src="images/Eupr.png" id="EuropaImg" alt="" width="250" height="250"></a></div>
<div id="wb_AfricaImg" style="position:absolute;left:251px;top:456px;width:250px;height:250px;z-index:6;">
<a href="#" onclick="window.location.href='./InAfrica.php';return false;"><img src="images/Afruca.png" id="AfricaImg" alt="" width="250" height="250"></a></div>
<div id="wb_Heading3" style="position:absolute;left:491px;top:332px;width:560px;height:70px;z-index:7;">
<h1 id="Heading3">Continentes<br></h1></div>
<div id="wb_Heading4" style="position:absolute;left:293px;top:715px;width:156px;height:48px;z-index:8;">
<h1 id="Heading4">Africa<br></h1></div>
<div id="wb_Heading5" style="position:absolute;left:688px;top:719px;width:146px;height:44px;z-index:9;">
<h1 id="Heading5">Asia</h1></div>
<div id="wb_Heading6" style="position:absolute;left:1104px;top:730px;width:135px;height:33px;z-index:10;">
<h1 id="Heading6">Europa</h1></div>
<div id="wb_Heading7" style="position:absolute;left:507px;top:1042px;width:150px;height:76px;z-index:11;">
<h1 id="Heading7">Sud America<br></h1></div>
<div id="wb_Heading8" style="position:absolute;left:882px;top:1042px;width:134px;height:76px;z-index:12;">
<h1 id="Heading8">Norte America</h1></div>
<div id="wb_CssMenu1" style="position:absolute;left:0px;top:240px;width:1536px;height:33px;z-index:13;">
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

<div id="wb_Shape1" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:15;">
<img src="images/img0025.png" id="Shape1" alt="" width="300" height="240" style="width:300px;height:240px;"></div>
<div id="wb_Shape2" style="position:absolute;left:300px;top:0px;width:1230px;height:240px;z-index:16;">
<img src="images/img0026.png" id="Shape2" alt="" width="1230" height="240" style="width:1230px;height:240px;"></div>
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:17;">
<img src="images/omvra-removebg-preview.png" id="Image1" alt="" width="300" height="240"></div>
<div id="wb_Heading2" style="position:absolute;left:300px;top:35px;width:1230px;height:89px;z-index:18;">
<h1 id="Heading2">Sabores del Mundo</h1></div>
<div id="wb_Heading1" style="position:absolute;left:300px;top:155px;width:1225px;height:52px;z-index:19;">
<h1 id="Heading1">"La cocina no tiene limites"</h1></div>
<div id="wb_Shape4" style="position:absolute;left:300px;top:120px;width:1230px;height:120px;z-index:20;">
<img src="images/img0064.png" id="Shape4" alt="" width="1230" height="120" style="width:1230px;height:120px;"></div>
<div id="wb_Shape3" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:21;">
<img src="images/img0065.png" id="Shape3" alt="" width="300" height="240" style="width:300px;height:240px;"></div>
<div id="wb_Shape5" style="position:absolute;left:300px;top:0px;width:1230px;height:120px;z-index:22;">
<img src="images/img0066.png" id="Shape5" alt="" width="1230" height="120" style="width:1230px;height:120px;"></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:23;">
<img src="images/omvra-removebg-preview.png" id="Image2" alt="" width="300" height="240"></div>
<div id="wb_Heading9" style="position:absolute;left:300px;top:35px;width:1225px;height:89px;z-index:24;">
<h1 id="Heading9">Sabores del Mundo</h1></div>
<div id="wb_Heading10" style="position:absolute;left:300px;top:155px;width:1225px;height:52px;z-index:25;">
<h1 id="Heading10">"La cocina no tiene limites"</h1></div>
</div>
</body>
</html>