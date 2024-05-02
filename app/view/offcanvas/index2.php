<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  left: 25px;
  font-size: 36px;
  margin-right: 100%;
}

#main {
  transition: margin-right .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div id="main">
  <h2>Sidenav Push Example</h2>
  <p>Click on the element below to open the side navigation menu, and push this content to the right. Notice that we add a black see-through background-color to body when the sidenav is opened.</p>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
  ddddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>dddddddd
  d<br>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "500px";

  document.getElementById("main").style.marginRight = "500px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginRight= "0";
  document.body.style.backgroundColor = "white";
}

var modal = document.getElementById('main');
modal.addEventListener('click', function(e) {
  if (e.target == this) closeNav();
});
</script>
   
</body>
</html> 
