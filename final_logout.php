<html>
<head>
<title>Logout</title>
<link rel="icon" 
      type="image/png" 
      href="images/favicon.png">
<style>
body {

padding: 5px 5px;
}

header {

     background: #efefef;
	 padding: 20px 10px;
	 border-radius: 6px;	 
}

button
{
	display: block;
	font-size: 1.1em;
	font-weight: bold;
	text-transform: uppercase;
	padding: 10px 15px;
	margin: 20px auto;
	color: #CCC;
	background-color: #555;
	background: -webkit-linear-gradient(#888, #555);
	background: linear-gradient(#888, #555);
	border: 0 none;
	border-radius: 3px;
	text-shadow: 0 -1px 0 #000;
	box-shadow: 0 1px 0 #666, 0 5px 0 #444, 0 6px 6px rgba(0,0,0,0.6);
	cursor: pointer;
	-webkit-transition: all 150ms ease;
	transition: all 150ms ease;
}

button:hover, button:focus
{
	-webkit-animation: pulsate 1.2s linear infinite;
	animation: pulsate 1.2s linear infinite;
}
	
@-webkit-keyframes pulsate
{
	0%   { color: #ddd; text-shadow: 0 -1px 0 #000; }
	50%  { color: #fff; text-shadow: 0 -1px 0 #444, 0 0 5px #ffd, 0 0 8px #fff; }
	100% { color: #ddd; text-shadow: 0 -1px 0 #000; }
}
		
@keyframes pulsate
{
	0%   { color: #ddd; text-shadow: 0 -1px 0 #000; }
	50%  { color: #fff; text-shadow: 0 -1px 0 #444, 0 0 5px #ffd, 0 0 8px #fff; }
	100% { color: #ddd; text-shadow: 0 -1px 0 #000; }
}

button:active
{
	color: #fff;
	text-shadow: 0 -1px 0 #444, 0 0 5px #ffd, 0 0 8px #fff;
	box-shadow: 0 1px 0 #666, 0 2px 0 #444, 0 2px 2px rgba(0,0,0,0.9);
	-webkit-transform: translateY(3px);
	transform: translateY(3px);
	-webkit-animation: none;
	animation: none;
}
</style>
</head>
<body>
<center>
<header>
<h1>WE ARE SORRY TO SEE YOU GO</h1>
<h2>Visit us back soon!</h2>
</header>
<br>
<img src="images/logout1.gif">
<br>
<button id="loginagainbuttonid" type="button" onclick="window.location.href='login.php'">Login Again<a></button>
<input id="btnCls" type="submit" class="btn" title="Click here to close the window." value="Close Window" onclick="window.close()"
							onmouseover="this.className='btnOnMseOvr'" onmouseout="this.className='btn'" onmousedown="this.className='btnOnMseDwn'">
<br>
<p><B>Close Window button only works in Internet Explorer</B></p>
<footer>
<p align=center>All rights reserved @ Naha Health Clinic</p>
<p align=center>Contact: <a href="mailto: contact@nahahealthclinic.org">contact@nahahealthclinic.org</a></p>
</footer>
</center>
</body>
</html>