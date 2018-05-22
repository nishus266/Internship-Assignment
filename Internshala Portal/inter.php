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
                   <span><button style="width:100px;height:30px;background-color:#1295C9;">Register</button></span>
              
                   <span><button style="width:100px;height:30px;background-color:#1295C9;" id="login">Login</button></span>

                   <span><button style="width:130px;height:30px;background-color:#1295C9;" id="logine">Login as Employer</button></span>              
           </div>
      </section>
      <section class="mainp" id="mainp">
            <h3>Internships Available</h3>
               <hr>
             </br>
             </br>
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
echo("<h1>".$cname."</h1>");
echo("<h2>".$des."</h2>");
echo("<h3>".$cno."</h3>");
echo("<h3>".$mail."</h3>");
echo("<h3>".$skill."</h3>");
echo("<hr>");
echo("</br>");

}
mysql_close();

    

?>

             <div id="i1">
                    <h1 class="comn" id="compn"></h1>
                    <h2 class="conno" id="conno"></h2>
                    <h3 class="skill" id="skill"></h2>

             </div>
      </section>   


 
 <div id="loginb" class="loginb">
             <h2 style="float:left;margin-left:20px;">Login</h2>
             <button id="close" style="float:right;margin-right:0px;margin-left:0px;background:#1295C9;"><img src="images/close.png" width="50px" height="50px" ></button>
             
                 </br>
              <form action="login.php" method="post">
                  <input type="text" name="uname" placeholder="  Username" style="width:300px;height:40px;border-radius:10px;">
                  </br>
                  </br>
                  <input type="password" name="pass" placeholder="  Password" style="width:300px;height:40px;border-radius:10px;">
                  </br>
                  </br>
                  <input type="submit" value="Login" style="width:100px;height:40px;background-color:#1295C9;">
           
              </form>  
      </div>
       <div id="loginbe" class="loginbe">
            <h2 style="float:left;margin-left:10px;">Login as Employer</h2>
              <button id="close1" style="float:right;margin-right:0px;margin-left:0px;background:#1295C9;"><img src="images/close.png" width="50px" height="50px" ></button>
             
                 </br>
              <form action="login1.php" method="post">
                  <input type="text" name="uname" placeholder="  Username" style="width:300px;height:40px;border-radius:10px;">
                  </br>
                  </br>
                  <input type="password" name="pass" placeholder="  Password" style="width:300px;height:40px;border-radius:10px;">
                  </br>
                  </br>
                  <input type="submit" value="Login" style="width:100px;height:40px;background-color:#1295C9;">
           
              </form>  
      </div>
     

<section class="footer" id="footer">
            <div id="about" class="about">
             <h3>About</h3>
             </br>   
             <p>Internshala is a dot com business with the heart of dot org.</br></br>

At the core of the idea is the belief that internships, if managed well, can make a positive difference to the student, to the employer, and to the society at large. Hence, the ad-hoc culture surrounding internships in India should and would change. Internshala aims to be the driver of this change.</p>
            </div>
            <div id="de" class="de">
                  <h2> Design and Develop by Nishant Sharma </h2>
            </div>
      </section>
      <script src="script/main.js"></script>

</body>
</html>