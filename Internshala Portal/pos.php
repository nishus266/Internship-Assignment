<html>
<head>
<title>Internshala</title>
<style>
body{
 background:linear-gradient(#333,#808080);
 background-repeat:no-repeat;
  background-size:cover;
text-align:center;
font-color:white;
}
</style>
</head>
<body >
<?php
$cname=$_POST['cname'];
$des=$_POST['des'];
$cno=$_POST['cno'];
$mail=$_POST['mail'];
$skill=$_POST['skill'];
$con=mysql_connect('sql111.epizy.com','epiz_21750226','nishu311') ;
mysql_select_db('epiz_21750226_saved');
$sql = "INSERT INTO  `epiz_21750226_saved`.`ser` (companyname, description, cono, mail ,skillrequire)
VALUES ('$cname', '$des', '$cno','$mail','$skill');";
$result= mysql_query($sql);
echo "<h2>Internship has been posted</h2>";
mysql_close();
?>
</br>
<a style="text-decoration:none;color:#808080;font-size:30;" href="dashboard-employer.php"> go back to employer Section</a>
</body>
</html>
