<?php
$unique=$_POST['uname'];
$pass=$_POST['pass'];
$con=mysql_connect('sql111.epizy.com','epiz_21750226','nishu311') ;
mysql_select_db('epiz_21750226_saved');
$query=" SELECT * FROM Admin where userName like '%{$unique}%'  ";
$result= mysql_query($query);
while($row= mysql_fetch_array($result)){
if($row['userName']==$unique&&$row['pass']==$pass&&$row['pass']!=NULL)
{
session_start();
       $_SESSION['unique']=$unique;

header("location:dashboard-employer.php");
exit;
break;
}
}

echo("sorry wrong entry");
mysql_close();
?>
