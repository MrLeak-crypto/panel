<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
	<title>Database - MyDrugs</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=M+PLUS+2:wght@200&display=swap');
		
		*{
			margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
		}
		body {
  background-color: #111;
  
}

div {
  margin: 20px auto 0;
  color: #aaa;
  font-weight: 100;
}

svg {
  position: absolute;
  font-size: 50px;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.xaxis path,
.xaxis line,
.yaxis path,
.yaxis line {
  stroke: #aaa;
  fill: none;
  shape-rendering: crispEdges;
}

.xaxis text,
.yaxis text {
  font-family: sans-serif;
  font-size: 11px;
  fill: #aaa;
}

.datapoint {
  cursor: pointer;
  stroke: #111;
  fill: rgba(0, 150, 255, 0.75);
  stroke-width: 7;
}

.lineChart {
  fill: none;
  stroke-width: 3;
  stroke: #646464;
}
.navbar{
background: #1a1a1a;
height: 120vh;
width: 10%;
position: fixed;
left: -20px;
top: -40px;
	
}

</style>
</head>
<body style="background: black;">
	<div class="navbar">
<div style="position: fixed; top: 15px; left: 45px; font-size: 25px; color:#b600ff; " class="threebar">
	<i class="fas fa-bars"></i>
</div>
</div>
	<br><br><br><br>
	<div style="color: white;">
<h1 align="left" style="margin-left: 200px;">DATABASE OF <span style="color: #b600ff;">MYDRUGS</span></h1>
<p   style="margin-left: 200px;">You can search a registered account.</p>
<br>
<input align="left" style="margin-left: 200px;padding: 8px 20px; font-family: 'Poppins', sans-serif; background: #1a1919; border: none; outline: none; text-decoration: none; color:#b600ff; border-radius: 10px;" placeholder="Search a account..."  type="text" name="">
</div>
<br><br><br>

<div align="center"><hr align="center" style=" height: 1px; width: 40%; color: white; background: white; border: none;"></div>
<br><br>
<div align="center" style="display: flex; margin-left: 100px;" class="tanleau">
  <div class="pseudo">
    <h3>USERNAME</h3>
  </div>
  <div class="email">
    <h3>EMAIL</h3>
  </div>
  <div class="password">
    <h3>PASSWORD</h3>
  </div>
  <div class="registereddate">
    <h3>REGISTERDATE</h3>
  </div>
</div>
<br><br>
<div align="center" style="display: flex;">
<h3 style="color: white;"><span style="margin-left:210px;">pseudo</span></h3>
<h3  style="color: white;"><span style="margin-left: 200px; ">email@gmail.com</span></h3>
<h3  style="color: white;"><span style="margin-left: 130px;">password123</span></h3> 
<h3  style="color: white;"><span style="margin-left: 220px;"> 29/09/2022 <i style="margin-left: 30px; font-size: 28px; color: red;" class="fas fa-user-minus"></i></span></h3>
</div>
<div align="center" style="display: flex;">
<h3 style="color: white;"><span style="margin-left:210px;">pseudo</span></h3>
<h3  style="color: white;"><span style="margin-left: 200px; ">email@gmail.com</span></h3>
<h3  style="color: white;"><span style="margin-left: 130px;">password123</span></h3> 
<h3  style="color: white;"><span style="margin-left: 220px;"> 29/09/2022 <i style="margin-left: 30px; font-size: 28px; color: red;" class="fas fa-user-minus"></i></span></h3>
</div>
<div align="center" style="display: flex;">
<h3 style="color: white;"><span style="margin-left:210px;">pseudo</span></h3>
<h3  style="color: white;"><span style="margin-left: 200px; ">email@gmail.com</span></h3>
<h3  style="color: white;"><span style="margin-left: 130px;">password123</span></h3> 
<h3  style="color: white;"><span style="margin-left: 220px;"> 29/09/2022 <i style="margin-left: 30px; font-size: 28px; color: red;" class="fas fa-user-minus"></i></span></h3>
</div>
<div align="center" style="display: flex;">
<h3 style="color: white;"><span style="margin-left:210px;">pseudo</span></h3>
<h3  style="color: white;"><span style="margin-left: 200px; ">email@gmail.com</span></h3>
<h3  style="color: white;"><span style="margin-left: 130px;">password123</span></h3> 
<h3  style="color: white;"><span style="margin-left: 220px;"> 29/09/2022 <i style="margin-left: 30px; font-size: 28px; color: red;" class="fas fa-user-minus"></i></span></h3>
</div>
<div align="center" style="display: flex;">
<h3 style="color: white;"><span style="margin-left:210px;">pseudo</span></h3>
<h3  style="color: white;"><span style="margin-left: 200px; ">email@gmail.com</span></h3>
<h3  style="color: white;"><span style="margin-left: 130px;">password123</span></h3> 
<h3  style="color: white;"><span style="margin-left: 220px;"> 29/09/2022 <i style="margin-left: 30px; font-size: 28px; color: red;" class="fas fa-user-minus"></i></span></h3>
</div>
<div align="center" style="display: flex;">
<h3 style="color: white;"><span style="margin-left:210px;">pseudo</span></h3>
<h3  style="color: white;"><span style="margin-left: 200px; ">email@gmail.com</span></h3>
<h3  style="color: white;"><span style="margin-left: 130px;">password123</span></h3> 
<h3  style="color: white;"><span style="margin-left: 220px;"> 29/09/2022 <i style="margin-left: 30px; font-size: 28px; color: red;" class="fas fa-user-minus"></i></span></h3>
</div>
<div align="center" style="display: flex;">
<h3 style="color: white;"><span style="margin-left:210px;">pseudo</span></h3>
<h3  style="color: white;"><span style="margin-left: 200px; ">email@gmail.com</span></h3>
<h3  style="color: white;"><span style="margin-left: 130px;">password123</span></h3> 
<h3  style="color: white;"><span style="margin-left: 220px;"> 29/09/2022 <i style="margin-left: 30px; font-size: 28px; color: red;" class="fas fa-user-minus"></i></span></h3>
</div>
<div align="center" style="display: flex;">
<h3 style="color: white;"><span style="margin-left:210px;">pseudo</span></h3>
<h3  style="color: white;"><span style="margin-left: 200px; ">email@gmail.com</span></h3>
<h3  style="color: white;"><span style="margin-left: 130px;">password123</span></h3> 
<h3  style="color: white;"><span style="margin-left: 220px;"> 29/09/2022 <i style="margin-left: 30px; font-size: 28px; color: red;" class="fas fa-user-minus"></i></span></h3>
</div>
<div align="center" style="display: flex;">
<h3 style="color: white;"><span style="margin-left:210px;">pseudo</span></h3>
<h3  style="color: white;"><span style="margin-left: 200px; ">email@gmail.com</span></h3>
<h3  style="color: white;"><span style="margin-left: 130px;">password123</span></h3> 
<h3  style="color: white;"><span style="margin-left: 220px;"> 29/09/2022 <i style="margin-left: 30px; font-size: 28px; color: red;" class="fas fa-user-minus"></i></span></h3>
</div>



</body>
</html>