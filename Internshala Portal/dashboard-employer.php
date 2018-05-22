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
      <section class="header" id="header">
           <span class="logo" id="logo"><img src="images/int.png" width="200px" height="100px"></span>
           <div id="nav" class="nav">
                   <span><button style="width:100px;height:30px;background-color:#1295C9;" onclick="bt()">Logout</button></span>
           </div>
       </section>
       <section class="bg" id="bg">
          </br></br>
          <h1 style="font-size:100px;">Employer Section</h1>
              <span><button style="width:300px;height:40px;background-color:#1295C9;margin-bottom:30px;" id="posti">Post Internship</button></span>              

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
$applyier=$row['applyier'];
$index=$row['internindex'];
echo("<h1>".$cname."</h1>");
echo("<h2>".$des."</h2>");
echo("<h3>".$cno."</h3>");
echo("<h3>".$mail."</h3>");
echo("<h3>".$skill."</h3>");
echo("<h3>Application Recieved: ".$applyier." </h3>"); 
echo("<hr>");
echo("</br>");

}
mysql_close();

    

?>
     </section>

<div id="pos" class="pos">
             <h2>Post an Internship</h2>
                 </br>
              <form action="pos.php" method="post">
                  <input type="text" name="cname" placeholder="  Company Name" style="width:300px;height:40px;border-radius:10px;">
                  </br>
                  </br>
                   <input type="text" name="des" placeholder="  Description" style="width:300px;height:40px;border-radius:10px;">
                  </br>
                  </br>
                  <input type="text" name="cno" placeholder="  Contact No" style="width:300px;height:40px;border-radius:10px;">
                  </br>
                  </br>
                  <input type="text" name="mail" placeholder="  Mail Id" style="width:300px;height:40px;border-radius:10px;">
                  </br>
                  </br>
                  <input type="text" name="skill" placeholder="  Skill Require" style="width:300px;height:40px;border-radius:10px;">
                  </br>
                  </br>
                  
                  <input type="submit" value="Post" style="width:100px;height:40px;background-color:#1295C9;">
           
              </form>  
      </div>
 <script>
   var bt3=document.getElementById("posti");
var box3=document.getElementById("pos");
bt3.onclick= function(){
box3.style.display="block";
}
function bt(){
location.href("index.html");
}

 </script>
</body>
</html>   