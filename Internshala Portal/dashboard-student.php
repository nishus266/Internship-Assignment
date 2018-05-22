<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <link rel="icon" href="images/int.png">


    <title>Internshala</title>


    <!-- CSS -->

    
<link href="css/main.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
  </head>


 <body class="b">
    <?php
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
$query=" SELECT * FROM UserName where userName like '%{$var1}%' ";
$result= mysql_query($query);
while($row= mysql_fetch_array($result)){
$first=$row['first'];
$last=$row['last'];
$flag=$row['flag'];
}
mysql_close();

    }

?>

      <section class="header" id="header">
           <span class="logo" id="logo"><img src="images/int.png" width="200px" height="100px"></span>
           <div id="nav" class="nav">
                   <span><button style="width:100px;height:30px;background-color:#1295C9;" onclick="bt()">Logout</button></span>
                   <span><p id="usern"></p></span>
           </div>
       </section>
     <section class="stmain" id="stmain">
         <h2>Internships</h2>
           </br>
            <hr>
<?php
       $con=mysql_connect('sql111.epizy.com','epiz_21750226','nishu311') ;
mysql_select_db('epiz_21750226_saved');
$query=" SELECT * FROM ser ; ";
$result= mysql_query($query);
while($row= mysql_fetch_array($result)){
$cname=$row['companyname'];
$des=$row['description'];
$cno=$row['cono'];
$mail=$row['mail'];
$skill=$row['skillrequire'];
$index=$row['internindex'];
echo("<h1>".$cname."</h1>");
echo("<h2>".$des."</h2>");
echo("<h3>".$cno."</h3>");
echo("<h3>".$mail."</h3>");
echo("<h3>".$skill."</h3>");
if($flag==0)
echo("<button style=\"width:150px;height:40px;background-color:#1295C9;\" onclick=\"ft(".$index.")\">Apply</button>");
else
echo("<button>You already Applied</button>");
echo("<hr>");
echo("</br>");

}
mysql_close();

    

?>
     </section>
 <script>
function bt(){
location.href("index.html");
}
var bol=  "<?php echo $first  ?>";
var mol= "<?php echo $last ?>";
var jhol=bol+" "+mol;
document.getElementById("usern").innerHTML = jhol; 
function ft(g){
location.href("applied.php?var="+g);
}
</script>

</body>
</html>