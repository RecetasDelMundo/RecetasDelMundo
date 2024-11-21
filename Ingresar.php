<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'loginform')
{
   $success_page = './SesionInicada.php';
   $error_page = './Ingresar.php';
   $mysql_server = 'localhost';
   $mysql_username = 'root';
   $mysql_password = '';
   $mysql_database = 'saboresdelmundo';
   $mysql_table = 'usuarios';
   $crypt_pass = md5($_POST['password']);
   $found = false;
   $db_email = '';
   $db_fullname = '';
   $db_username = '';
   $db_role = '';
   $db_avatar = '';
   $session_timeout = 600;
   $db = mysqli_connect($mysql_server, $mysql_username, $mysql_password);
   if (!$db)
   {
      die('Failed to connect to database server!<br>'.mysqli_error($db));
   }
   mysqli_select_db($db, $mysql_database) or die('Failed to select database<br>'.mysqli_error($db));
   mysqli_set_charset($db, 'utf8');
   $sql = "SELECT * FROM ".$mysql_table." WHERE username = '".mysqli_real_escape_string($db, $_POST['username'])."'";
   $result = mysqli_query($db, $sql);
   if ($data = mysqli_fetch_array($result))
   {
      if ($crypt_pass == $data['password'] && $data['active'] != 0)
      {
         $found = true;
         $db_email = $data['email'];
         $db_fullname = $data['fullname'];
         $db_username = $data['username'];
         $db_role = $data['role'];
         $folder = substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/') + 1);
         $db_avatar = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$folder" . "avatars/" . $data['avatar'];
      }
   }
   mysqli_close($db);
   if ($found == false)
   {
      header('Location: '.$error_page);
      exit;
   }
   else
   {
      $_SESSION['email'] = $db_email;
      $_SESSION['fullname'] = $db_fullname;
      $_SESSION['username'] = $db_username;
      $_SESSION['role'] = $db_role;
      $_SESSION['avatar'] = $db_avatar;
      $_SESSION['expires_by'] = time() + $session_timeout;
      $_SESSION['expires_timeout'] = $session_timeout;
      $rememberme = isset($_POST['rememberme']) ? true : false;
      if ($rememberme)
      {
         setcookie('username', $db_username, time() + 3600*24*30);
         setcookie('password', $_POST['password'], time() + 3600*24*30);
      }
      header('Location: '.$success_page);
      exit;
   }
}
$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
$password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
?>
<!doctype html>
<html lang="es-mx">
<head>
<meta charset="utf-8">
<title>Pagina de Ingreso</title>
<meta name="generator" content="WYSIWYG Web Builder 19 Trial Version - https://www.wysiwygwebbuilder.com">
<link href="fontawesome6.min.css" rel="stylesheet">
<link href="OMVRA.css" rel="stylesheet">
<link href="Ingresar.css" rel="stylesheet">
</head>
<body>
<div id="container">
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb19.png" alt="WYSIWYG Web Builder" style="position:absolute;left:1140px;top:773px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<hr id="HorizontalLine1" style="position:absolute;left:0px;top:280px;width:1535px;z-index:1;">
<div id="wb_CssMenu1" style="position:absolute;left:0px;top:240px;width:1536px;height:33px;z-index:2;">
<ul id="CssMenu1" role="menubar" class="nav">
<li role="menuitem" class="nav-item firstmain"><a class="nav-link" href="./Continentes.php" target="_self" onclick="window.location.href='./index.php';return false;">Inicio</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link" href="" target="_self" onclick="window.location.href='./Busquedad.php';return false;"><i class="fa fa-search"></i>Busquedad</a>
</li>
</ul>
</div>
<div id="wb_Login1" style="position:absolute;left:525px;top:300px;width:484px;height:320px;z-index:3;">
<form name="loginform" method="post" accept-charset="UTF-8" action="<?php echo basename(__FILE__); ?>" id="loginform">
<input type="hidden" name="form_name" value="loginform">
<table id="Login1">
<tr>
   <td class="header">Ingresar</td>
</tr>
<tr>
   <td class="label"><label for="username">Usuario</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="username" type="text" id="username" value="<?php echo $username; ?>"></td>
</tr>
<tr>
   <td class="label"><label for="password">Contraseña</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="password" type="password" id="password" value="<?php echo $password; ?>"></td>
</tr>
<tr>
   <td class="row"><input id="rememberme" type="checkbox" name="rememberme"><label for="rememberme">Recuerdame</label></td>
</tr>
<tr>
   <td style="text-align:center;vertical-align:bottom"><input class="button" type="submit" name="login" value="Ingresar" id="login"></td>
</tr>
</table>
</form>
</div>
<div id="wb_Shape1" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:4;">
<img src="images/img0019.png" id="Shape1" alt="" width="300" height="240" style="width:300px;height:240px;"></div>
<div id="wb_Shape2" style="position:absolute;left:300px;top:0px;width:1230px;height:240px;z-index:5;">
<img src="images/img0020.png" id="Shape2" alt="" width="1230" height="240" style="width:1230px;height:240px;"></div>
<div id="wb_Image2" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:6;">
<img src="images/omvra-removebg-preview.png" id="Image2" alt="" width="300" height="240"></div>
<div id="wb_Heading2" style="position:absolute;left:300px;top:35px;width:1230px;height:89px;z-index:7;">
<h1 id="Heading2">Sabores del Mundo</h1></div>
<div id="wb_Heading1" style="position:absolute;left:300px;top:155px;width:1225px;height:52px;z-index:8;">
<h1 id="Heading1">"La cocina no tiene limites"</h1></div>
<div id="wb_Shape4" style="position:absolute;left:300px;top:120px;width:1230px;height:120px;z-index:9;">
<img src="images/img0055.png" id="Shape4" alt="" width="1230" height="120" style="width:1230px;height:120px;"></div>
<div id="wb_Shape3" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:10;">
<img src="images/img0056.png" id="Shape3" alt="" width="300" height="240" style="width:300px;height:240px;"></div>
<div id="wb_Shape5" style="position:absolute;left:300px;top:0px;width:1230px;height:120px;z-index:11;">
<img src="images/img0057.png" id="Shape5" alt="" width="1230" height="120" style="width:1230px;height:120px;"></div>
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:300px;height:240px;z-index:12;">
<img src="images/omvra-removebg-preview.png" id="Image1" alt="" width="300" height="240"></div>
<div id="wb_Heading3" style="position:absolute;left:300px;top:35px;width:1225px;height:89px;z-index:13;">
<h1 id="Heading3">Sabores del Mundo</h1></div>
<div id="wb_Heading4" style="position:absolute;left:300px;top:155px;width:1225px;height:52px;z-index:14;">
<h1 id="Heading4">"La cocina no tiene limites"</h1></div>
</div>
</body>
</html>