<!DOCTYPE html>
<html>
<head>
	<title></title>
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
  		article img{
  			height:200px;
  			width:300px;
  			border:2px solid black;
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
				<div class="col-sm-10">
					
					<div class="row">
						<div class="col-sm-6">
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;a&gt; tag</h4>
								<ul>
									<li>This tag defines a hyperlink, which is used to link from one page to another.</li>
									<li>The most important attribute of this element is the href attribute, which indicates the link's destination.</li>
									<li>If this tag has no href attribute, it is only a placeholder for a hyperlink.</li>
								</ul>
								<center><figure>
									<img src="img/a.jpg">
									<figcaption>Fig.4 - &lt;a&gt; tag</figcaption>
								</figure></center>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;article&gt; tag</h4>
								<ul>
									<li>This tag specifies independent, self-contained content.</li>
									<li>This element does not render as anything special in a browser.</li>
								</ul>
								<center><figure>
									<img src="img/article.jpg">
									<figcaption>Fig.5 - &lt;article&gt; tag</figcaption>
								</figure></center>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;aside&gt; tag</h4>
								<ul>
									<li>This tag defines some content aside from the content it is placed in.</li>
									<li>The aside content should be indirectly related to the surrounding content.</li>
									<li>This element does not render as anything special in a browser.</li>
								</ul>
								<center><figure>
									<img src="img/aside.jpg">
									<figcaption>Fig.6 - &lt;aside&gt; tag</figcaption>
								</figure></center>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;audio&gt; tag</h4>
								<ul>
									<li>It is used to embed sound content in a document, such as music or other audio streams.</li>
									<li>This tag contains one or more &lt;source&gt; tags with different audio sources. The browser will choose the first source it supports.</li>
									<li>There are three supported audio formats in HTML: MP3, WAV, and OGG.</li>
								</ul>
								<center><figure>
									<img src="img/audio.jpg">
									<figcaption>Fig.7 - &lt;audio&gt; tag</figcaption>
								</figure></center>
							</article>
						</div>
						<div class="col-sm-6">
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;b&gt; & &lt;strong&gt; tag</h4>
								<ul>
									<li>This tag specifies bold text without any extra importance.</li>
									<li>This tag is used to define text with strong importance. The content inside is typically displayed in bold.</li>
								</ul>
								<center><figure>
									<img src="img/b.jpg">
									<figcaption>Fig.8 - &lt;b&gt; & &lt;strong&gt; tag</figcaption>
								</figure></center>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;blockquote&gt; tag</h4>
								<ul>
									<li>This tag specifies a section that is quoted from another source.</li>
								</ul>
								<center><figure>
									<img src="img/blockquote.jpg">
									<figcaption>Fig.9 - &lt;blockquote&gt; tag</figcaption>
								</figure></center>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;body&gt; tag</h4>
								<ul>
									<li>This tag defines the document's body.</li>
									<li> There can only be one &lt;body&gt; element in an HTML document.</li>
									<li>The browser show only those content which are is present inside body.</li>
								</ul>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;br&gt; tag</h4>
								<ul>
									<li>This tag inserts a single line break.</li>
									<li>It is an empty tag which means that it has no end tag.</li>
								</ul>
								<center><figure>
									<img src="img/br.jpg">
									<figcaption>Fig.10 - &lt;br&gt; tag</figcaption>
								</figure></center>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;button&gt; tag</h4>
								<ul>
									<li>This tag defines a clickable button.</li>
								</ul>
								<center><figure>
									<img src="img/button.jpg">
									<figcaption>Fig.11 - &lt;button&gt; tag</figcaption>
								</figure></center>
							</article>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;center&gt; tag</h4>
								<ul>
									<li>This tag was used to center-align text.</li>
								</ul>
								<center><figure>
									<img src="img/center.jpg">
									<figcaption>Fig.12 - &lt;center&gt; tag</figcaption>
								</figure></center>
							</article>
						</div>
						<div class="col-sm-6">
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;code&gt; tag</h4>
								<ul>
									<li>This tag is used to define a piece of computer code.</li>
									<li>The content inside is displayed in the browser's default monospace font.</li>
								</ul>
								<center><figure>
									<img src="img/code.jpg">
									<figcaption>Fig.13 - &lt;code&gt; tag</figcaption>
								</figure></center>
							</article>
						</div>
					</div>

				</div>
				<div class="col-sm-2"></div>
			</div>
		</div>


</body>
</html>

