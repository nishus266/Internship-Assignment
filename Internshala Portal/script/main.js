var box=document.getElementById("close");
var box5=document.getElementById("close1");
var box3=document.getElementById("loginb");
var bt=document.getElementById("login");
var box1=document.getElementById("loginbe");
var bt1=document.getElementById("logine");
var bt2=document.getElementById("inter");
bt.onclick= function(){
document.getElementById("loginb").style.display="block";
}
box.onclick= function(){
box3.style.display="none";
}
box5.onclick= function(){
box1.style.display="none";
}

bt1.onclick= function(){
box1.style.display="block";
}
bt2.onclick= function(){
location.href("inter.php");
}

