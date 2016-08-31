<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Patrick Peters">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  <?php get_header();?>  
  </head>



<div class="headerwrap"> 
	<div class="clearfix">
    <!--carousel stuff--> 
  <!-- Wrapper for slides -->
 <?php echo do_shortcode('[image-carousel]'); ?>
</div>
    
    </div>
</div><!--end headerwrap-->
<div class="greywrap ">
	<div class="container">
		<div class="row main-content list-group">
        	<div class="col-lg-3 col-sm-offset-1 thumbnail">
            		<a class="list-group-item" href="news.html">
                	<img src="<?php bloginfo ('url'); ?>/wp-content/uploads/news2.jpg"/>
                	<div class="captions"><h1>Rx News</h1>
                    </div> 
                    </a>
             </div>
            <div class="col-lg-3 col-sm-offset-1 thumbnail ">
            		<a class ="list-group-item" href="http://www.globalrph.com/medcalcs.htm" target="_blank">
                	<img src="<?php bloginfo ('url'); ?>/wp-content/uploads/Calculator2.jpg"/>
                    <div class="captions"><h1>Calculators</h1>
                    </div>
                	</a>
            </div>
            <div class="col-lg-3 col-sm-offset-1 thumbnail">
            	<a class="list-group-item" href="resources.html">
            	<img src="<?php bloginfo ('url'); ?>/wp-content/uploads/resources2.jpg"/>
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
   <?php get_footer(); ?>
