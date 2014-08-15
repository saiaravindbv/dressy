<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Dres.sy - Your Fashion Advisor</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/main.css" media="screen">

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</head>

<body>
<div id="wrap" class="container">
	<div id="header" class="row-fluid">    
		<img alt="Dressy" class="span3 logo-main" src="img/logo.svg">
   		<img alt="Dressy" class="span2 pull-right logo-right visible-desktop visible-tablet" src="img/hanger.svg">
    </div>
    <div id="menu" class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <button class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                                        
                </button>
                <div class="nav-collapse collapse">
                	<ul class="nav">
                        <li><a href="http://dres.sy/#"><img class="menu-btn" src="img/button_pink.svg"></a></li>
                        <li><a href="http://dres.sy/#">Occasion</a></li>
                        <li><a href="http://dres.sy/#">Color</a></li>
                        <li><a href="http://dres.sy/#">Style</a></li>
                    </ul>
	            </div>
            </div>
        </div>
    </div>
	<div id="content">
    	<div class="row-fluid settings">
	<ul class="inline">
        <li class="shade">Sort By</li>
        <li class="setter"><a href="">Size</a></li>
        <li class="setter"><a href="">Make</a></li>
        <li class="setter"><a href="">Price</a></li>
    </ul>
</div>

<div class="row">
    <ul class="thumbnails">
        <li class="span3">
            <a class="thumbnail item">
                <div class="image"><img src="img/1.JPG" alt=""></div>
                <div class="info">
                    <div class="title">Sabrina Chiffon Dress</div>
                    <div class="sub-title">Max and Coco</div>
                    <hr class="divider">
                    <div class="cost">148</div>
                </div>
            </a>
        </li>
                <li class="span3">
            <a class="thumbnail item">
                <div class="image"><img src="img/2.JPG" alt=""></div>
                <div class="info">
                    <div class="title">Convertable Dress</div>
                    <div class="sub-title">KAMALIKULTURE</div>
                    <hr class="divider">
                    <div class="cost">96</div>
                </div>
            </a>
        </li>
        <li class="span3">
            <a class="thumbnail item">
                <div class="image"><img src="img/3.JPG" alt=""></div>
                <div class="info">
                    <div class="title">Faux Wrap Sweater</div>
                    <div class="sub-title">Calvin Klein</div>
                    <hr class="divider">
                    <div class="cost">118</div>
                </div>
            </a>
        </li>
        <li class="span3">
            <a class="thumbnail item">
                <div class="image"><img src="img/4.JPG" alt=""></div>
                <div class="info">
                    <div class="title">Fit &amp; Flare Dress</div>
                    <div class="sub-title">Jessica Simpson</div>
                    <hr class="divider">
                    <div class="cost">148</div>
                </div>
            </a>
        </li>
    </ul>
</div>     </div>
</div>
<footer id="footer" class="container" style="height:40px;">
	<div class="row-fluid" style="padding-top:10px;">
		© 2013 Imaginate Software Labs Pvt Ltd.
	</div>
</footer>
<div id="register" class="modal">
	<div class="container-fluid line-w">
        <button type="button" class="close hide cross" data-dismiss="register">X</button>
      	<div class="logo"><img src="img/logo.svg"></div>
        <div class="body">
        	<div class="content" style="padding:0px;">
            	<p style="margin-bottom:25px;">Dressy couples fashion and cutting-edge artificial intelligence <br>with expert styling, bringing you the freshest custom product recommendations that fit your form and style, everytime.
                <br><br>Sign up for more updates!
                </p>
                <div class="row-fluid">
	            <form id="register-form" action="" method="post" class="form-inline">
    	            <input name="user_email" type="email" placeholder="Your Email Address" class="input">
        	        <button type="submit" class="btn">Register</button>
				</form>
                <span id="login-error" class="text-center error hide">Please enter valid Email Address</span>
            </div>
            </div>            
        </div>
    </div>
</div>
<div class="backdrop fade in"></div>


</body></html>