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
								<h4 style="font-family: 'Suez One', serif;">&lt;dd&gt; tag</h4>
								<ul>
									<li>This tag is used to describe a term/name in a description list.</li>
									<li>It is used in conjunction with &lt;dl&gt; (defines a description list) and &lt;dt&gt; (defines terms/names).</li>
									<li>Inside a <dd> tag you can put paragraphs, line breaks, images, links, lists, etc.</li>
								</ul>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;dl&gt; tag</h4>
								<ul>
									<li>This tag defines a description list.</li>
								</ul>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;dt&gt; tag</h4>
								<ul>
									<li>This tag defines a term/name in a description list.</li>
								</ul>
								<center><figure>
									<img src="img/dl.jpg">
									<figcaption>Fig.14 - &lt;dl&gt;&lt;dt&gt;&lt;dd&gt; tag</figcaption>
								</figure></center>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;del&gt; tag</h4>
								<ul>
									<li>This tag defines text that has been deleted from a document.</li>
									<li>Browsers will usually strike a line through deleted text.</li>
								</ul>
								<center><figure>
									<img src="img/del.jpg">
									<figcaption>Fig.15 - &lt;del&gt; tag</figcaption>
								</figure></center>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;div&gt; tag</h4>
								<ul>
									<li>This tag defines a division or a section in an HTML document.</li>
									<li>By default, browsers always place a line break before and after this element.</li>
								</ul>
							</article>
						</div>
						<div class="col-sm-6">
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;em&gt; tag</h4>
								<ul>
									<li>This tag is used to define emphasized text.</li>
									<li>The content inside is typically displayed in italic.</li>
								</ul>
								<center><figure>
									<img src="img/em.jpg">
									<figcaption>Fig.16 - &lt;em&gt; tag</figcaption>
								</figure></center>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;fieldset&gt; tag</h4>
								<ul>
									<li>This tag is used to group related elements in a form.</li>
									<li>It draws a box around the related elements.</li>
								</ul>
								<center><figure>
									<img src="img/fieldset.jpg">
									<figcaption>Fig.17 - &lt;fieldset&gt; tag</figcaption>
								</figure></center>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;figure&gt; & &lt;figurecaption&gt; tag</h4>
								<ul>
									<li>Use a &lt;figure&gt; element to mark up a photo in a document</li>
									<li>The &lt;figurecaption&gt; tag defines a caption for a &lt;figure&gt; element.</li>
								</ul>
								<center><figure>
									<img src="img/figure.jpg">
									<figcaption>Fig.18 - &lt;figure&gt; & &lt;figurecaption&gt; tag</figcaption>
								</figure></center>
							</article>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;footer&gt; tag</h4>
								<ul>
									<li>Its defines a footer for a document or section.</li>
									<li>Its typically contain :- authorship information; copyright information; contact information; sitemap; back to top links.</li>
								</ul>
								<center><figure>
									<img src="img/footer.jpg">
									<figcaption>Fig.19 - &lt;footer&gt; tag</figcaption>
								</figure></center>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;form&gt; tag</h4>
								<ul>
									<li>This tag is used to create an HTML form for user input.</li>
									<li>This element can contain one or more of the following form elements:- input,textarea,button,select,option,optgroup,fieldset,label,output</li>
								</ul>	
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;input&gt; tag</h4>
								<ul>
									<li>This tag specifies an input field where the user can enter data.</li>
									<li>It can be displayed in several ways, depending on the "type" attribute.</li>
								</ul>	
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;legend&gt; tag</h4>
								<ul>
									<li>This tag defines a caption for the &lt;fieldset&gt; element.</li>
								</ul>
								<center><figure>
									<img src="img/form1.jpg">
									<figcaption>Fig.20 - &lt;form&gt;,&lt;input&gt;,&lt;legend&gt; tag</figcaption>
								</figure></center>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;label&gt; tag</h4>
								<ul>
									<li>This tag defines a label for several elements.</li>
								</ul>
							</article>
						</div>
						<div class="col-sm-6">
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;select&gt; tag</h4>
								<ul>
									<li>This element is used to create a drop-down list.</li>
									<li>The name attribute is needed to reference the form data after the form is submitted (if you omit the name attribute, no data from the drop-down list will be submitted).</li>
								</ul>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;option&gt; tag</h4>
								<ul>
									<li>This tag defines an option in a select list.</li>
									<li>This elements go inside a &lt;select&gt;, &lt;optgroup&gt;, or &lt;datalist&gt; element.</li>
								</ul>
								<center><figure>
									<img src="img/form2.jpg">
									<figcaption>Fig.21 - &lt;label&gt;&lt;select&gt;&lt;option&gt; tag</figcaption>
								</figure></center>
							</article>

							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;i&gt; tag</h4>
								<ul>
									<li>Its use to the content inside is typically displayed in italic.</li>
								</ul>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;ins&gt; tag</h4>
								<ul>
									<li>This tag defines a text that has been inserted into a document. Browsers will usually underline inserted text.</li>
								</ul>
							</article>
							<article>
								<h4 style="font-family: 'Suez One', serif;">&lt;img&gt; tag</h4>
								<ul>
									<li>This tag is used to embed an image in an HTML page.</li>
									<li>This tag has two required attributes:-<br>src - Specifies the path to the image.<br>alt - Specifies an alternate text for the image, if the image for some reason cannot be displayed</li>
								</ul>
								<center><figure>
									<img src="img/i_ins_img.jpg">
									<figcaption>Fig.22 - &lt;i&gt;,&lt;ins&gt;,&lt;img&gt; tag</figcaption>
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