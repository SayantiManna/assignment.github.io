<!DOCTYPE html>
<html>
<head>
	<title>Module-3 | assignment</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!-- ...............GOOGLE FONT...................... -->
  	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
	<!--......................GOOGLE FONT FOR HEAD SECTION....................-->
  	<link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">

  	<!--.....................BOOTSTRAP GRID...................-->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  	<style type="text/css">
  		body{
  			padding:0px;
			margin:0px;
  		}
  		.main_head{
			width:90%;
			padding-right: 0px;
			padding-left: 0px;
		}
		
  		.main_content{
			width:90%;
			padding-right: 0px;
			padding-left: 0px;
  		}
  		nav{
  			background-image: linear-gradient(to right, red, #ffcccc, red);
  			padding-top: 10px;
  			padding-bottom: 10px;
  		}
  		nav a{
  			padding-left:20px;
  			padding-right: 20px;
  			text-decoration: none;
  			background-color: #000066;
  			margin-right: 40px;
  			padding-top: 5px;
  			padding-bottom: 5px;
  			color: #fff;
  			border-top-right-radius: 5px;
  			border-bottom-left-radius: 5px;
  		}
  		nav a:hover{
  			background-color: #99ff33;
  			font-weight: bold;
  		}
  		table tr td{
  			border:1px solid red;
  		}
  		tr{
  			border-bottom: 1px solid #fff;
  			margin-top: 20px;
  		}
  		td a{
  			color: #000;
  			padding: 5px;
  		}
  		td a:hover{
  			background-color: #fff;
  			text-decoration: none;
  			padding: 0px 5px; 
  		}
  		article img{
  			border: 2px solid #000;
  		}

  	</style>
</head>
<body>
	
		<div class="container main_head">
			<header>
				<center><img src="img/logo1.jpg"></center>
			</header>
		</div>
		<div class="container main_content">
			<header>
				
			</header>
			<nav>
				<center>
					<a href="index.php">HTML</a>
					<a href="#">CSS</a>
					<a href="#">PHP</a>
					<a href="#">JAVA</a>
				</center>
			</nav>
			<div class="row" style="padding:10px 15px;">
				
				<div class="col-sm-9" style="padding: 10px 30px;">
					<article style="background-color: #ebebe0;">
						<h3 style="font-family: 'Suez One', serif;">What is HTML?</h3>
						<p>HTML stands for Hyper Text Markup Language. HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript. <blockquote>The first version of HTML was written by <b>Tim Berners-Lee</b> in 1993. HTML5 is the latest evolution of the standard that defines HTML.</blockquote></p>
						<center>
						<figure>
							<img src="img/basic_syntax.jpg" height="180px" width="300px">
							<figcaption>Fig.1 - Baisc Syntax of HTML</figcaption>
						</figure></center>
					</article>
					<hr/>
					<article style="background-color: #ccffff;">
						<h3 style="font-family: 'Suez One', serif;">HTML Editor</h3>
						<p>A simple text editor is all you need to learn HTML.However, for learning HTML, a simple text editor like Notepad (PC) or TextEdit (Mac) is best option.</p>
					</article>
					<hr/>
					<article style="background-color: #ffe6e6;">
						<h3 style="font-family: 'Suez One', serif;">How to save HTML source code?</h3>
						<p>Save the file on your computer. Select <b>File > Save as</b> in the Notepad menu. File extention should be <strong>.html</strong></p>
						<center>
						<figure>
							<img src="img/how_to_save.png" height="180px" width="300px">
							<figcaption>Fig.2 - How to save a HTML code</figcaption>
						</figure></center>
					</article>
					<hr/>
					<article style="background-color: #ccffcc;">
						<h3 style="font-family: 'Suez One', serif;">How to execute HTML page in browser?</h3>
						<p>Open the saved HTML file in your favorite browser <b>(double click on the file, or right-click - and choose "Open with").</b></p>
						<center><figure>
							<img src="img/how_to_execute.jpg" height="180px" width="300px">
							<figcaption>Fig.2 - How to execute HTML page</figcaption>
						</figure></center>
					</article>
				</div>

				<div class="col-sm-3" style=" background-color: #ffffb3; padding: 10px 0px; margin-top: 30px;">
					
					<center>
					<table>
						<thead>HTML Tags</thead>
						<tr><td><a href="html_page1.php">&lt; a &gt;</a></td><td><a href="html_page3.php">&lt;hr&gt;</a></td></tr>
						<tr><td><a href="html_page1.php">&lt;article&gt;</a></td><td><a href="html_page3.php">&lt;html&gt;</a></td></tr>
						<tr><td><a href="html_page1.php">&lt;aside&gt;</a></td><td><a href="html_page2.php">&lt;img&gt;</a></td></tr>
						<tr><td><a href="html_page1.php">&lt;audio&gt;</a></td><td><a href="html_page2.php">&lt;input&gt;</a></td></tr>
						<tr><td><a href="html_page1.php">&lt;b&gt;</a></td><td><a href="html_page2.php">&lt;ins&gt;</a></td></tr>
						<tr><td><a href="html_page1.php">&lt;blockquote&gt;</a></td><td><a href="">&lt;kbd&gt;</a></td></tr>
						<tr><td><a href="html_page1.php">&lt;body&gt;</a></td><td><a href="html_page2.php">&lt;label&gt;</a></td></tr>
						<tr><td><a href="html_page1.php">&lt;br&gt;</a></td><td><a href="html_page3.php">&lt;li&gt;</a></td></tr>
						<tr><td><a href="html_page1.php">&lt;button&gt;</a></td><td><a href="">&lt;link&gt;</a></td></tr>
						<tr><td><a href="html_page1.php">&lt;center&gt;</a></td><td><a href="html_page3.php">&lt;meta&gt;</a></td></tr>
						<tr><td><a href="html_page1.php">&lt;code&gt;</a></td><td><a href="">&lt;nav&gt;</a></td></tr>
						<tr><td><a href="html_page2.php">&lt;dd&gt;</a></td><td><a href="html_page3.php">&lt;ol&gt;</a></td></tr>
						<tr><td><a href="html_page2.php">&lt;del&gt;</a></td><td><a href="html_page2.php">&lt;option&gt;</a></td></tr>
						<tr><td><a href="html_page2.php">&lt;div&gt;</a></td><td><a href="">&lt;p&gt;</a></td></tr>
						<tr><td><a href="html_page2.php">&lt;dl&gt;</a></td><td><a href="">&lt;pre&gt;</a></td></tr>
						<tr><td><a href="html_page2.php">&lt;em&gt;</a></td><td><a href="">&lt;script&gt;</a></td></tr>
						<tr><td><a href="html_page2.php">&lt;fieldset&gt;</a></td><td><a href="">&lt;section&gt;</a></td></tr>
						<tr><td><a href="html_page2.php">&lt;footer&gt;</a></td><td><a href="html_page2.php">&lt;select&gt;</a></td></tr>
						<tr><td><a href="html_page2.php">&lt;form&gt;</a></td><td><a href="">&lt;span&gt;</a></td></tr>
						<tr><td><a href="html_page3.php">&lt;head&gt;</a></td><td><a href="html_page1.php">&lt;strong&gt;</a></td></tr>
						<tr><td><a href="html_page3.php">&lt;header&gt;</a></td><td><a href="">&lt;style&gt;</a></td></tr>
						<tr><td><a href="html_page3.php">heading tags</a></td><td><a href="">&lt;sub&gt;</a></td></tr>
						<tr><td><a href="html_page2.php">&lt;i&gt;</a></td><td><a href="">&lt;table&gt;</a></td></td></tr>
						<tr><td><a href="html_page3.php">&lt;ul&gt;</a></td><td><a href="">&lt;u&gt;</a></td></td></tr>
						
					</table></center>
				</div>
			</div>
		</div>
</body>
</html>