<!DOCTYPE html>

<html>

<head>
	<!-- Title -->
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	<!-- Meta tags -->
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/light-blue.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/prettyPhoto.css" />
	
	<!-- JavaScript -->
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/forms.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.6.1.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/royal.js" type="text/javascript"></script>
	
	<script type="text/javascript">
			document.documentElement.className += 'js-ready';
			
			H5F.listen(window,"load",function () {
				H5F.setup(document.getElementById("register-form"), {
    				validClass: "valid",
    				invalidClass: "invalid",
    				requiredClass: "required",
    				placeholderClass: "placeholder"
				});
			},false);
		</script>		
	
	<!-- IE scripts and stylesheets -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/iefixes.js" type="text/javascript"></script>
	<![endif]-->

</head>


<body>

<div id="wrap">
		
	<header id="header">
		<div class="inner-wrap clearfix">
		
			<h1 id="logo">
				<a href="index.html"><?php echo CHtml::encode(Yii::app()->name); ?></a>
			</h1>
			
			<nav class="dropdown">
				<?php $this->widget('application.components.DMenu',array(
				'id'=>'nav',
				'class'=>'clearfix',
				'items'=>array(
					array('label'=>'Home', 'url'=>array('/site/index')),
					array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
					array('label'=>'Contact', 'url'=>array('/site/contact')),
				),
				)); ?>
			</nav>
			
			<nav class="dropdown" style="display: none;">
				<ul id="nav" class="clearfix">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="#">Features</a>
						<ul>
							<li><a href="4-column-pricing.html">Pricing&nbsp;tables</a>
								<ul>
									<li><a href="3-column-pricing.html">Three&nbsp;columns</a></li>
									<li><a href="4-column-pricing.html">Four&nbsp;columns</a></li>
									<li><a href="5-column-pricing.html">Five&nbsp;columns</a></li>
								</ul>
							</li>
							<li><a href="wiki.html">Knowledgebase</a>
								<ul>
									<li><a href="wiki-single.html">Single&nbsp;article</a></li>
									<li><a href="wiki.html">Archive</a></li>
								</ul>
							</li>
							<li><a href="register.html">Registration&nbsp;Form</a></li>
							<li><a href="elements.html">Styling&nbsp;demos</a></li>
						</ul>
					</li>
					<li><a href="wiki.html">Knowledgebase</a>
						<ul>
							<li><a href="wiki-single.html">Single&nbsp;article</a></li>
							<li><a href="documentation/index.html">Documentation</a></li>
							<li><a href="contact.html">Contact&nbsp;support</a></li>
						</ul>
					</li>
					<li><a href="4-column-pricing.html">Pricing</a>
						<ul>
							<li><a href="3-column-pricing.html">Three&nbsp;columns</a></li>
							<li><a href="4-column-pricing.html">Four&nbsp;columns</a></li>
							<li><a href="5-column-pricing.html">Five&nbsp;columns</a></li>
						</ul>
					</li>
					<li><a href="blog.html">Blog</a>
						<ul>
							<li><a href="blog-single.html">Single&nbsp;post</a></li>
							<li><a href="blog.html">Monthly&nbsp;archives</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
				</ul><!-- end #nav -->
			</nav>
			
			<div class="login">
				
				<!-- Use "user-info" div once the user has logged in and hide the login/register links and login form -->
				<!--						
				<div class="user-info">
					<p>Logged in as <span class="username">Username</span> <a class="logout" href="#">(logout)</a></p>
				</div>
				-->
				
				<?php $this->widget('application.components.DMenu',array(
					'class' => 'login-links',
					'items'=>array(
						array('label'=>'Inloggen', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Registreer', 'url'=>array('/site/register'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Mijn account','url'=>array('/site/account'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Log uit: ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
				
			</div><!-- end #login -->
			
		</div><!-- end .inner-wrap -->
	</header><!-- end header -->
	
	
	<div id="featured">
		<div class="inner-wrap">
		
			<div class="breadcrumb">
				<h2>
					<?php if(isset($this->breadcrumbs)):?>
						<?php $this->widget('zii.widgets.CBreadcrumbs', array(
							'links'=>$this->breadcrumbs,
						)); ?><!-- breadcrumbs -->
					<?php endif?>
				</h2>
			</div>
			
			<form id="searchform" method="get" action="search.html" class="clearfix">
				<p>
					<input type="text" value="" name="s" id="s" placeholder="Start searching..." autocomplete="off" />
				</p>
				<p>
					<input type="submit" id="searchsubmit" value="" />
				</p>
			</form>
		
		</div><!-- end .inner-wrap -->
	</div><!-- end #featured -->
	
	
	<div id="main">
		<div class="inner-wrap clearfix">
			
			<div class="content content-left">
				<?php echo $content; ?>
			</div><!-- end .content -->
					
			<div class="sidebar">
				
				<div class="widget">
					<h6>About membership</h6>
					<div class="widget-content">
						<p>
							CheerApp membership provides exclusive access to forums, support center and lore ipsum dolor.
						</p>
						<p>
							Premium membership grats additional lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec odio erat. Donec egestas enim ut nisl blandit.
						</p>
					</div><!-- end .widget-content -->
				</div><!-- end .widget -->
				
				<div class="widget">
					<h6>Lorem ipsum dolor</h6>
					<div class="widget-content">
						<p>
							Duis nec odio erat. Donec egestas enim ut nisl blandit, support center and lorem ipsum dolor.
						</p>
					</div><!-- end .widget-content -->
				</div><!-- end .widget -->
			
			</div><!-- end .sidebar -->
			
		</div><!-- end .inner-wrap -->
		
	</div><!-- end #main -->

</div><!-- end #wrap -->

<footer id="footer">
	<div class="inner-wrap">
	
		<nav>
			<ul id="footer-nav" class="clearfix">
				<li><a href="index.html">Home</a></li>
				<li><a href="4-column-pricing.html">Sign up</a></li>
				<li><a href="#">Legal</a></li>
				<li><a href="wiki.html">Support</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		
		<!-- Set margin-top on logo to negative half of image height (to center it vertically) in CSS (.footer-logo) -->
		<a href="index.html"><img class="footer-logo" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/light-blue/logo-small.png" width="107" height="39" alt="logo" /></a>
		
		<small class="copyright">&copy;<?php echo date('Y'); ?>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<?php echo CHtml::encode(Yii::app()->name); ?></small>
	
	</div>
</footer><!-- end footer -->

</body>
</html>