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
$index=$_GET['var1'];
session_start();
    if(!isset($_SESSION['user']))
   {
    header("location:index.html");
   }
   else
   {
    $var1 = $_SESSION['user'];
$con=mysql_connect('sql111.epizy.com','epiz_21750226','nishu311') ;
mysql_select_db('epiz_21750226_saved');
$sql=" UPDATE  `epiz_21750226_saved`.`UserName` SET  `flag` =  '1' WHERE  `UserName`.`userName` =  '$var1';";
$result=mysql_query($sql);
mysql_close();

    }

$con=mysql_connect('sql111.epizy.com','epiz_21750226','nishu311') ;
mysql_select_db('epiz_21750226_saved');
$query=" SELECT * FROM ser where internindex like '%{$index}%' ; ";
$result= mysql_query($query);
while($row= mysql_fetch_array($result)){
$apllyier=$row['applyier'];
}
$new=$apllyier.", ".$user;

$sql1="UPDATE  `epiz_21750226_saved`.`ser` SET  `applyier` =  '$new' WHERE  `ser`.`internindex` ='$index' LIMIT 1 ;";

$result1= mysql_query($sql1);
mysql_close();
?>
</br>
<a style="text-decoration:none;color:#808080;font-size:30;" href="dashboard-student.php"> go back to Dashboard</a>
</body>
</html>
