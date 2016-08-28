<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Patrick Peters">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>  
  </head>



<div class="headerwrap"> 
	<div class="clearfix">
    <!--carousel stuff--> 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="assets/img/slider-img/Latest_Industry_Trends.jpg"alt="Slider-1">
      <div class="carousel-caption">
            <h3>Latest Industry Trends</h3>
            <p>Your free membership with Pharmacy Current provides timely updates on what matters to you.</p> 						
            <a href="contact.html"><button type="submit" class="btn btn-primary slider-button">Enroll today</button></a>    
      </div>
    </div>

    <div class="item">
      <img src="assets/img/slider-img/Essential_Resources.jpg" alt="Slider-2">
      <div class="carousel-caption">
            <h3 class="slide-caption">Essential Resources</h3>
            <p>Pharmacy Current is your online destination for pharmaceutical tools, calculators, and clinical references.</p> 						
            <a href="contact.html"><button type="submit" class="btn btn-primary slider-button">Sign up now</button></a>   
      </div>
    </div>

    <div class="item">
      <img src="assets/img/slider-img/Career_Development.jpg" alt="Slider-3">
      <div class="carousel-caption">
            <h3>Career Development</h3>
            <p>Our members get exclusive access to the latest job openings for pharmacists and pharmacy professionals.</p> 						
            <a href="contact.html"><button type="submit" class="btn btn-primary slider-button">Register</button></a>    
      </div>
    </div>


  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
    </div>
</div><!--end headerwrap-->
<div class="greywrap ">
	<div class="container">
		<div class="row main-content list-group">
        	<div class="col-lg-3 col-sm-offset-1 thumbnail">
            		<a class="list-group-item" href="news.html">
                	<img src="assets/img/news2.jpg"/>
                	<div class="captions"><h1>Rx News</h1>
                    </div> 
                    </a>
             </div>
            <div class="col-lg-3 col-sm-offset-1 thumbnail ">
            		<a class ="list-group-item" href="http://www.globalrph.com/medcalcs.htm" target="_blank">
                	<img src="assets/img/Calculator2.jpg"/>
                    <div class="captions"><h1>Calculators</h1>
                    </div>
                	</a>
            </div>
            <div class="col-lg-3 col-sm-offset-1 thumbnail">
            	<a class="list-group-item" href="resources.html">
            	<img src="assets/img/resources2.jpg"/>
                <div class="captions"><h1>Pharmacy Resources</h1>
                </div>
                </a>
            </div>
            
        </div>
	</div>
    
    <div class="row"> 
    	<div class="col-md-12 action">
        <br/>
        <h2>STAY CURRENT</h2>
        <h3>Your FREE subscription to Pharmacy Current gets you exclusive access to the latest</h3>
        <h3>industry news, career opportunities, drug information</h3>
        <h3>and much more!</h3>
        <a href="contact.html"><button type="button" class="btn btn-theme subscribe">Subscribe</button></a>	
        </div>
    </div>
    </div>
    <br/> <br/>
    <div class="row">
    	<!--RSS Feed news section -->
        
    	<div class="col-sm-offset-1 col-md-5 current_events">
        <h2>Industry News</h2>
        <div class="rss_feed" id="rss-feed"></div>
        </div><!--end rss section -->
        
        <!--twitter feed -->
        <div class="col-md-4 col-sm-offset-1 twitter_events">
        <h2><i class="fa fa-twitter"></i> Pharmacy Tweets</h2>
        <a class="twitter-timeline" href="https://twitter.com/PharmacyCurrent/lists/pharmacy-news" data-widget-id="698588921437904897">Tweets from https://twitter.com/PharmacyCurrent/lists/pharmacy-news</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
        <!--End Twitter Feed -->
    </div>


<div class="footerwrap">
	<div class="container">
    <h2>Pharmacy<img src="assets/img/Logo.png"/>Current</h2>
    <div class="col-md-offset-2 col-md-3">
    	<h4><a href="privacy-policy.html">Privacy Policy</a></h4>
        <h4><a href="contact.html">Register</a></h4>
        </div>
        

    <div class="col-md-offset-2 col-md-3">
    	<h4><a href="contactus.html">Contact us</a></h4>
        <h4><a href="news.html">News</a></h4>
    </div>
    
    </div>
</div>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/retina.js"></script>
<script src="assets/jquery-rss-gh-pages/lib/jquery-1.6.4.min.js"></script>
<script src="assets/jquery-rss-gh-pages/src/jquery.rss.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
<script>
	jQuery(function($) {
        $("#rss-feed").rss("http://feeds.feedburner.com/pharmacist/DGoC",
		{
		// how many entries do you want?
    	// default: 4
    	// valid values: any integer
			limit:10,
		// outer template for the html transformation
    	// default: "<ul>{entries}</ul>"
    	// valid values: any string
    		layoutTemplate: "<div class='list-group'>{entries}</div>",
		// inner template for each entry
    	// default: '<li><a href="{url}">[{author}@{date}] {title}</a><br/>{shortBodyPlain}</li>'
    	// valid values: any string
    		entryTemplate: '<a href="{url}" target="_blank" class="list-group-item"><h4 class="list-group-item-heading">{title}</h4><p class="list-group-item-text">{shortBody}</p></a>',
		},
		// callback function
  		// called after feeds are successfully loaded and after animations are done
  			function callback() {}
		)
      })
</script>
</body>
</html>
