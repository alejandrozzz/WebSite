<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => 'Поздравляем!',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<p>You have successfully installed MODX Revolution&nbsp;[[++settings_version]]!</p>
<p>Now that MODX is installed you can login to the manager to create your templates, manage content and install third party extras to add functionality to your&nbsp;website. </p>

<h2>New to&nbsp;MODX?</h2>

<p>Pages on a MODX site are called <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/resources">Resources</a>, and are visible on the left-hand side of the manager in the Resources tab. Resources can be nested under other resources, making it easy to create a tree of resources. There are different types of resources for different use&nbsp;cases.</p>

<p>Building your website is done through a combination of <b>Templates</b>, <b>Template Variables</b>, <b>Chunks</b>, <b>Snippets</b> and <b>Plugins</b>. Collectively these are known as <b>Elements</b>, and can also be found in the left-hand side of the manager, in the Elements&nbsp;tab.</p>

<p><a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/templates">Templates</a> contain the outer markup of any page. Each resource can only be assigned to a single template at a time. By adding <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/customizing-content/template-variables">Template Variables</a> to a template, you can add custom fields for any resource using that particular&nbsp;template.</p>

<p>With <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/chunks">Chunks</a> you can share parts of the markup, such as a header, across different templates. <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/using-snippets">Snippets</a> are pieces of PHP that return dynamic content, such as summaries of other resources or the current date. With snippets, you will often use Chunks to mark up the pieces of content it returns, instead of mixing the PHP and&nbsp;HTML.</p>

<p>Finally, <a href="https://rtfm.modx.com/revolution/2.x/developing-in-modx/basic-development/plugins">Plugins</a> enable more advanced features by hooking into the extensive events system provided by&nbsp;MODX.</p>

<p>To learn more about MODX, be sure to check out the <a href="https://rtfm.modx.com/revolution/2.x/getting-started">Getting Started</a> section in the official&nbsp;documentation.</p>
',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1488550097,
    'editedby' => 1,
    'editedon' => 1488550829,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Главная - MODX Revolution</title>
<base href="[[!++site_url]]" />
<meta charset="UTF-8" />

<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="assets/templates/img/x-icon">

<link href=\'https://fonts.googleapis.com/css?family=Montserrat:400,700\' rel=\'stylesheet\' type=\'text/css\'>
<link href=\'https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600\' rel=\'stylesheet\' type=\'text/css\'>

<link href="assets/templates/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/templates/css/style.css" rel="stylesheet" type="text/css">
<link href="assets/templates/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="assets/templates/css/responsive.css" rel="stylesheet" type="text/css">
<link href="assets/templates/css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="assets/templates/js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="assets/templates/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/templates/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="assets/templates/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/templates/js/jquery.isotope.js"></script>
<script type="text/javascript" src="assets/templates/js/wow.js"></script>
<script type="text/javascript" src="assets/templates/js/classie.js"></script>
<script src="assets/templates/contactform/contactform.js"></script>

<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>
<body>
<header class="header" id="header"><!--header-start-->
	<div class="container">
    	<figure class="logo animated fadeInDown delay-07s">
        	<a href="#"><img src="assets/templates/img/logo.png" alt=""></a>	
        </figure>	
        <h1 class="animated fadeInDown delay-07s">Welcome To Knight Studios</h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li>We are a digital agency that loves crafting beautiful websites.</li>
        </ul>
            <a class="link animated fadeInUp delay-1s servicelink" href="#service">Get Started</a>
    </div>
</header><!--header-end-->

<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
        	<li><a href="#header">Home</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#Portfolio">Portfolio</a></li>
            <li class="small-logo"><a href="#header"><img src="assets/templates/img/small-logo.png" alt=""></a></li>
            <li><a href="#client">Clients</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->



<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>Services</h2>
    	<h6>We offer exceptional service with complimentary hugs.</h6>
        <div class="row">
        	<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
            	<div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-paw"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>branding &amp; identity</h3>
                        <p>Proin iaculis purus digni consequat sem digni ssim. Donec entum digni ssim.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-gear"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>web development</h3>
                        <p>Proin iaculis purus consequat sem digni ssim. Digni ssim porttitora .</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-apple"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>mobile design</h3>
                        <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-medkit"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>24/7 Support</h3>
                        <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
                    </div>
                </div>
            </div>
            <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
            	<img src="assets/templates/img/macbook-pro.png" alt="">
            </figure>
        
        </div>
	</div>
</section><!--main-section-end-->



<section class="main-section alabaster"><!--main-section alabaster-start-->
	<div class="container">
    	<div class="row">
			<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
            	<img  src="assets/templates/img/iphone.png" alt="">
            </figure>
        	<div class="col-lg-7 col-sm-8 featured-work">
            	<h2>featured work</h2>
            	<P class="padding-b">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit.</P>
            	<div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-02s">
                    	<i class="fa-magic"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-02s">
                        <h3>magic of theme development</h3>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
                    </div>    
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-04s">
                    	<i class="fa-gift"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-04s">
                        <h3>neatly packaged</h3>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
                    </div>    
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-06s">
                    	<i class="fa-dashboard"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-06s">
                        <h3>SEO optimized</h3>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
                    </div>    
                </div>
                <a class="Learn-More" href="#">Learn More</a>
            </div>
        </div>
	</div>
</section><!--main-section alabaster-end-->



<section class="main-section paddind" id="Portfolio"><!--main-section-start-->
	<div class="container">
    	<h2>Portfolio</h2>
    	<h6>Fresh portfolio of designs that will keep you wanting more.</h6>
      <div class="portfolioFilter">  
        <ul class="Portfolio-nav wow fadeIn delay-02s">
        	<li><a href="#" data-filter="*" class="current" >All</a></li>
            <li><a href="#" data-filter=".branding" >Branding</a></li>
            <li><a href="#" data-filter=".webdesign" >Web design</a></li>
            <li><a href="#" data-filter=".printdesign" >Print design</a></li>
            <li><a href="#" data-filter=".photography" >Photography</a></li>
        </ul>
       </div> 
        
	</div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
            	<div class=" Portfolio-box printdesign">
                	<a href="#"><img src="assets/templates/img/Portfolio-pic1.jpg" alt=""></a>	
                	<h3>Foto Album</h3>
                    <p>Print Design</p>
                </div>
                <div class="Portfolio-box webdesign">
                	<a href="#"><img src="assets/templates/img/Portfolio-pic2.jpg" alt=""></a>	
                	<h3>Luca Theme</h3>
                    <p>Web Design</p>
                </div>
                <div class=" Portfolio-box branding">
                	<a href="#"><img src="assets/templates/img/Portfolio-pic3.jpg" alt=""></a>	
                	<h3>Uni Sans</h3>
                    <p>Branding</p>
                </div>
                <div class=" Portfolio-box photography" >
                	<a href="#"><img src="assets/templates/img/Portfolio-pic4.jpg" alt=""></a>	
                	<h3>Vinyl Record</h3>
                    <p>Photography</p>
                </div>
                <div class=" Portfolio-box branding">
                	<a href="#"><img src="assets/templates/img/Portfolio-pic5.jpg" alt=""></a>	
                	<h3>Hipster</h3>
                    <p>Branding</p>
                </div>
                <div class=" Portfolio-box photography">
                	<a href="#"><img src="assets/templates/img/Portfolio-pic6.jpg" alt=""></a>	
                	<h3>Windmills</h3>
                    <p>Photography</p>
                </div>
    </div>
</section><!--main-section-end-->


<section class="main-section client-part" id="client"><!--main-section client-part-start-->
	<div class="container">
		<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
    	<div class="row">
        	<div class="col-lg-12">
            	<p class="client-part-haead wow fadeInDown delay-05">It was a pleasure to work with the guys at Knight Studio. They made sure 
we were well fed and drunk all the time!</p>
            </div>
        </div>
    	<ul class="client wow fadeIn delay-05s">
        	<li><a href="#">
            	<img src="assets/templates/img/client-pic1.jpg" alt="">
                <h3>James Bond</h3>
                <span>License To Drink Inc.</span>
            </a></li>
        </ul>
    </div>
</section><!--main-section client-part-end-->
<div class="c-logo-part"><!--c-logo-part-start-->
	<div class="container">
    	<ul>
        	<li><a href="#"><img src="assets/templates/img/c-liogo1.png" alt=""></a></li>
            <li><a href="#"><img src="assets/templates/img/c-liogo2.png" alt=""></a></li>
            <li><a href="#"><img src="assets/templates/img/c-liogo3.png" alt=""></a></li>
            <li><a href="#"><img src="assets/templates/img/c-liogo4.png" alt=""></a></li>
            <li><a href="#"><img src="assets/templates/img/c-liogo5.png" alt=""></a></li>
    	</ul>
	</div>
</div><!--c-logo-part-end-->
<section class="main-section team" id="team"><!--main-section team-start-->
	<div class="container">
        <h2>team</h2>
        <h6>Take a closer look into our amazing team. We won’t bite.</h6>
        <div class="team-leader-block clearfix">
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="assets/templates/img/team-leader-pic1.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Walter White</h3>
                <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
                <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="assets/templates/img/team-leader-pic2.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Jesse Pinkman</h3>
                <span class="wow fadeInDown delay-06s">Product Manager</span>
                <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-09s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="assets/templates/img/team-leader-pic3.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-09s">Skyler white</h3>
                <span class="wow fadeInDown delay-09s">Accountant</span>
                <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
        </div>
    </div>
</section><!--main-section team-end-->



<section class="business-talking"><!--business-talking-start-->
	<div class="container">
        <h2>Let’s Talk Business.</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="contact">
	
        <div class="row">
        	<div class="col-lg-6 col-sm-7 wow fadeInLeft">
            	<div class="contact-info-box address clearfix">
                	<h3><i class=" icon-map-marker"></i>Address:</h3>
                	<span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
                </div>
                <div class="contact-info-box phone clearfix">
                	<h3><i class="fa-phone"></i>Phone:</h3>
                	<span>1-800-BOO-YAHH</span>
                </div>
                <div class="contact-info-box email clearfix">
                	<h3><i class="fa-pencil"></i>email:</h3>
                	<span>hello@knightstudios.com</span>
                </div>
            	<div class="contact-info-box hours clearfix">
                	<h3><i class="fa-clock-o"></i>Hours:</h3>
                	<span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
                </div>
                <ul class="social-link">
                	<li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
                    <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
                </ul>
            </div>
        	<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
            	<div class="form">
                	
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        
                        <div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
                    </form>
                </div>	
            </div>
        </div>
</section>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="assets/templates/img/footer-logo.png" alt=""></a></div>
        <span class="copyright">&copy; Knight Theme. All Rights Reserved</span>
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Knight
            -->
            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>


<script type="text/javascript">
    $(document).ready(function(e) {
        $(\'#test\').scrollToFixed();
        $(\'.res-nav_click\').click(function(){
            $(\'.main-nav\').slideToggle();
            return false    
            
        });
        
    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: \'animated\',
        offset:       100
      }
    );
    wow.init();
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$(\'.main-nav li a, .servicelink\').bind(\'click\',function(event){
			var $anchor = $(this);
			
			$(\'html, body\').stop().animate({
				scrollTop: $($anchor.attr(\'href\')).offset().top - 102
			}, 1500,\'easeInOutExpo\');
			/*
			if you don\'t want to use the easing effects:
			$(\'html, body\').stop().animate({
				scrollTop: $($anchor.attr(\'href\')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $(\'.portfolioContainer\'),
      $body = $(\'body\'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope(\'reLayout\');
    }
    
  }).smartresize(); // trigger resize to set container width
  $(\'.portfolioFilter a\').click(function(){
        $(\'.portfolioFilter .current\').removeClass(\'current\');
        $(this).addClass(\'current\');
 
        var selector = $(this).attr(\'data-filter\');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>

</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[*pagetitle]]' => 'Главная',
    '[[$head]]' => '<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Главная - MODX Revolution</title>
<base href="[[!++site_url]]" />
<meta charset="UTF-8" />

<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="assets/templates/img/x-icon">

<link href=\'https://fonts.googleapis.com/css?family=Montserrat:400,700\' rel=\'stylesheet\' type=\'text/css\'>
<link href=\'https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600\' rel=\'stylesheet\' type=\'text/css\'>

<link href="assets/templates/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/templates/css/style.css" rel="stylesheet" type="text/css">
<link href="assets/templates/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="assets/templates/css/responsive.css" rel="stylesheet" type="text/css">
<link href="assets/templates/css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="assets/templates/js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="assets/templates/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/templates/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="assets/templates/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/templates/js/jquery.isotope.js"></script>
<script type="text/javascript" src="assets/templates/js/wow.js"></script>
<script type="text/javascript" src="assets/templates/js/classie.js"></script>
<script src="assets/templates/contactform/contactform.js"></script>

<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>[[*pagetitle]] - [[++site_name]]</title>
<base href="[[!++site_url]]" />
<meta charset="[[++modx_charset]]" />

<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="assets/templates/img/x-icon">

<link href=\'https://fonts.googleapis.com/css?family=Montserrat:400,700\' rel=\'stylesheet\' type=\'text/css\'>
<link href=\'https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600\' rel=\'stylesheet\' type=\'text/css\'>

<link href="assets/templates/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/templates/css/style.css" rel="stylesheet" type="text/css">
<link href="assets/templates/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="assets/templates/css/responsive.css" rel="stylesheet" type="text/css">
<link href="assets/templates/css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="assets/templates/js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="assets/templates/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/templates/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="assets/templates/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/templates/js/jquery.isotope.js"></script>
<script type="text/javascript" src="assets/templates/js/wow.js"></script>
<script type="text/javascript" src="assets/templates/js/classie.js"></script>
<script src="assets/templates/contactform/contactform.js"></script>

<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>[[*pagetitle]] - [[++site_name]]</title>
<base href="[[!++site_url]]" />
<meta charset="[[++modx_charset]]" />

<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="assets/templates/img/x-icon">

<link href=\'https://fonts.googleapis.com/css?family=Montserrat:400,700\' rel=\'stylesheet\' type=\'text/css\'>
<link href=\'https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600\' rel=\'stylesheet\' type=\'text/css\'>

<link href="assets/templates/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/templates/css/style.css" rel="stylesheet" type="text/css">
<link href="assets/templates/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="assets/templates/css/responsive.css" rel="stylesheet" type="text/css">
<link href="assets/templates/css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="assets/templates/js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="assets/templates/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/templates/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="assets/templates/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/templates/js/jquery.isotope.js"></script>
<script type="text/javascript" src="assets/templates/js/wow.js"></script>
<script type="text/javascript" src="assets/templates/js/classie.js"></script>
<script src="assets/templates/contactform/contactform.js"></script>

<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modSnippet' => 
    array (
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);