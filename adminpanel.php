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
	<title>Admin Panel - MyDrugs</title>
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
	<div align="center" style="color: white;">
<h1>Hi, m1000.</h1>
<p>You have had more than <span style="color: #b600ff;">31</span> new subscribers since your last connection.</p>
</div>

<br><br><br>



  <script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js'></script>
  <script>
  	let w = 800;
let h = 400;
let padding = 25;
let dataset = [
[10, 10],
[20, 50],
[30, 40],
[40, 80],
[50, 90],
[60, 50],
[70, 70],
[80, 60],
[90, 10],
[100, 50],
[110, 40],
[120, 70],
[130, 20],
[140, 40],
[150, 30]];


/*create svg element*/
let svg = d3.
select("body").
append("svg").
attr("width", w).
attr("height", h).
attr("id", "chart");

let drag = d3.behavior.
drag().
on("dragstart", dragstarted).
on("drag", dragged).
on("dragend", dragended);

/*x scale*/
let xScale = d3.scale.
linear().
domain([0, d3.max(dataset, d => d[0])]).
range([padding, w - padding]);

/*y scale*/
let yScale = d3.scale.
linear().
domain([0, d3.max(dataset, d => d[1])]).
range([h - padding, padding]);

/*x axis*/
let xAxis = d3.svg.
axis().
scale(xScale).
orient("bottom");

/*append x axis*/
svg.
append("g").
attr({
  class: "xaxis",
  transform: `translate(0, ${h - padding})` }).

call(xAxis);

/*y axis*/
let yAxis = d3.svg.
axis().
scale(yScale).
orient("left");

/*append y axis*/
svg.
append("g").
attr({
  class: "yaxis",
  transform: `translate(${padding}, 0)` }).

call(yAxis);

/*define line*/
let lines = d3.svg.
line().
x(d => xScale(d[0])).
y(d => yScale(d[1])).
interpolate("monotone");

/*append line*/
let path = svg.append("path").attr({
  d: lines(dataset),
  class: "lineChart" });


svg.
select(".lineChart").
style("opacity", 0).
transition().
duration(2500).
delay(1000).
style("opacity", 1);

/*add points*/
let points = svg.
selectAll("circle").
data(dataset).
enter().
append("circle").
call(drag);

/*point attributes*/
points.
attr("cy", 0).
transition().
duration(1500).
delay((d, i) => i * 100 + 500).
ease("elastic").
attr({
  cx: d => xScale(d[0]),
  cy: d => yScale(d[1]),
  r: 7,
  class: "datapoint",
  id: (d, i) => i }).

style("opacity", 1);

let xMax = d3.max(dataset, d => d[0]),
yMax = d3.max(dataset, d => d[1]);

function dragstarted() {
  d3.event.sourceEvent.stopPropagation();
  d3.select(this).classed("dragging datapoint", true);
}

function dragged() {
  d3.select(this).attr({
    cx: Math.max(padding, Math.min(d3.event.x, w - padding)),
    cy: Math.max(padding, Math.min(d3.event.y, h - padding)) });

}

function dragended() {
  d3.select(this).classed("datapoint", true);
  // get id of dragged point
  let id = d3.select(this).attr("id"),
  // get new absolute position coordinates of the point
  xPos = d3.select(this).attr("cx"),
  yPos = h - d3.select(this).attr("cy");

  // convert absolute position coordinates relative to scales
  xPos = (xPos - padding) * (xMax / (w - padding * 2));
  yPos = (yPos - padding) * (yMax / (h - padding * 2));
  dataset[id][0] = xPos;
  dataset[id][1] = yPos;

  // update line
  svg.
  select(".lineChart").
  transition().
  duration(500).
  attr("d", lines(dataset));
}
  </script>
</body>
</html>