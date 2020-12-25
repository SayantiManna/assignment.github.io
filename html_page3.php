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
                <h4 style="font-family: 'Suez One', serif;">&lt;head&gt; tag</h4>
                <ul>
                  <li>It is placed between the &lt;html&gt; tag and the &lt;body&gt; tag.</li>
                  <li>This element is a container for metadata (data about data)</li>
                  <li>Metadata is not displayed.Metadata typically define the document title, character set, styles, scripts, and other meta information.</li>
                </ul>  
              </article>
              <article>
                <h4 style="font-family: 'Suez One', serif;">&lt;header&gt; tag</h4>
                <ul>
                  <li>This element represents a container for introductory content or a set of navigational links.</li>
                  <li>A &lt;header&gt; element typically contains:-<br> one or more heading elements (&lt;h1&gt; - &lt;h6&gt;);<br> logo or icon;<br> authorship information</li>
                </ul>  
              </article>
              <article>
                <h4 style="font-family: 'Suez One', serif;">&lt;html&gt; tag</h4>
                <ul>
                  <li>This tag represents the root of an HTML document.</li>
                  <li>This tag is the container for all other HTML elements (except for the &lt;!DOCTYPE&gt; tag).</li>
                </ul>  
              </article>
              <article>
                <h4 style="font-family: 'Suez One', serif;">&lt;hr&gt; tag</h4>
                <ul>
                  <li>This element is most often displayed as a horizontal rule that is used to separate content (or define a change) in an HTML page.</li>
                </ul>  
              </article>
              <article>
                <h4 style="font-family: 'Suez One', serif;">heading tag</h4>
                <ul>
                  <li>In html there ar e6 types of heading tags.</li>
                  <li>The &lt;h1&gt; to &lt;h6&gt; tags are used to define HTML headings.</li>
                  <li>&lt;h1&gt; defines the most important heading. &lt;h6&gt; defines the least important heading.</li>
                </ul>
                <center><figure>
                  <img src="img/h_tags.jpg">
                  <figcaption>Fig.23 - &lt;html&gt;,&lt;head&gt;,&lt;header&gt;,&lt;hr&gt; & heading tag</figcaption>
                </figure></center>
              </article>
            </div>
            <div class="col-sm-6">
              <article>
                <h4 style="font-family: 'Suez One', serif;">&lt;head&gt; tag</h4>
                <ul>
                  <li>It is placed between the &lt;html&gt; tag and the &lt;body&gt; tag.</li>
                  <li>This element is a container for metadata (data about data)</li>
                  <li>Metadata is not displayed.Metadata typically define the document title, character set, styles, scripts, and other meta information.</li>
                </ul>  
              </article>
              <article>
                <h4 style="font-family: 'Suez One', serif;">&lt;ul&gt; tag</h4>
                <ul>
                  <li>This tag defines an unordered (bulleted) list.</li>
                </ul>
              </article>
              <article>
                <h4 style="font-family: 'Suez One', serif;">&lt;ol&gt; tag</h4>
                <ul>
                  <li>This tag defines an ordered list. An ordered list can be numerical or alphabetical.</li>
                </ul>
                <center><figure>
                  <img src="img/list.jpg">
                  <figcaption>Fig.24 - &lt;li&gt;,&lt;ol&gt;,&lt;ul&gt; tag</figcaption>
                </figure></center>
              </article>
              <article>
                <h4 style="font-family: 'Suez One', serif;">&lt;meta&gt; tag</h4>
                <ul>
                  <li>This tag defines metadata about an HTML document. Metadata is data (information) about data.</li>
                  <li>Tis tags always go inside the &lt;head&gt; element, and are typically used to specify character set, page description, keywords, author of the document, and viewport settings.</li>
                  <li>Metadata is used by browsers (how to display content or reload page), search engines (keywords), and other web services.</li>
                </ul>
                <center><figure>
                  <img src="img/meta.jpg">
                  <figcaption>Fig.25 - &lt;meta&gt; tag</figcaption>
                </figure></center>
              </article>
          
            </div>
          </div>

        </div>
        <div class="col-sm-2">
          
        </div>
			</div>

		</div>
				
</body>
</html>
