 <?php

    // require 'header.php';
  
?> 

  <!DOCTYPE html>
<html>
  
<head>
	<title>Home|POTTERHEAD</title>
	<link rel="shortcut icon" type="image/jpg" href="6.jpg">
	 <link rel="stylesheet" href="styl.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body class="home"></body>
<header>
	<div id="header"></div>
 
		<nav>
		<ul>
			 <li class="active"><a href="index.php">Home</a></li> 
			<li><a href="regest.php">SignUp</a></li>
			<li><a href="">our Doctor</a></li>
			<li><a href="login.php">login</a></li>
      <li><a href="intro.php">About</a></li>
      	</ul>
		<nav>
	
	</div>

</header>

	<div class="title">
		<h1>WELCOME!</h1>
	</div>
	<div class="title1">
 	</div>
	<div class="button">
		<a href="" class="btn"> Rozaa</a>
	</div>
	<div class="footer">
		<p>  NTI PHP &copy; 2022</p>
	</div>

    
</body>
</html>  



 <!-- <!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
.header {
  grid-area: header;
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-size: 35px;
}

/* The grid container */
.grid-container {
  display: grid;
  grid-template-areas: 
    'header header header header header header' 
    'left left middle middle right right' 
    'footer footer footer footer footer footer';
  /* grid-column-gap: 10px; - if you want gap between the columns */
} 

.left,
.middle,
.right {
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Style the left column */
.left {
  grid-area: left;
}

/* Style the middle column */
.middle {
  grid-area: middle;
}

/* Style the right column */
.right {
  grid-area: right;
}

/* Style the footer */
.footer {
  grid-area: footer;
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .grid-container  {
    grid-template-areas: 
      'header header header header header header' 
      'left left left left left left' 
      'middle middle middle middle middle middle' 
      'right right right right right right' 
      'footer footer footer footer footer footer';
  }
}
</style>
</head>
<body>

<h2>CSS Template using Grid</h2>
<p>In this example, we have created a header, three equal columns and a footer. On smaller screens, the columns will stack on top of each other.</p>
<p>Resize the browser window to see the responsive effect.</p>
<p><strong>Note:</strong> The Grid Layout Module is not supported in Internet Explorer or Edge 15 eand earlier versions.</p>

<div class="grid-container">
  <div class="header">
    <h2>Header</h2>
  </div>
  
  <div class="left" style="background-color:#aaa;">Column</div>
  <div class="middle" style="background-color:#bbb;">Column</div>  
  <div class="right" style="background-color:#ccc;">Column</div>
  
  <div class="footer">
  <p>Footer</p>
  </div>
</div>

</body>
</html> -->
  