
<body>
<div id="navbar-main">
 <!-- Fixed navbar -->
    <div class="navbar navbar-default ">
    	<div class="container"> 
        	<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php bloginfo ('url'); ?>"><img alt="logo" src="<?php bloginfo ('url'); ?>/wp-content/uploads/Logo.png"/></a>
              <h1 class="Header_Title">Pharmacy Current</h1>
              <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right navbar-collapse"> 
                  	<li><a href="<?php bloginfo('url');?>/register">Register</a></li>
                    <li><a href="<?php bloginfo('url');?>/contactus-2/">Contact Us</a></li>
                    <li><a href="<?php bloginfo('url');?>/news-2/">News</a></li>
                    <li><a href="<?php bloginfo('url');?>/resources-2">Resources</a></li>
                  </ul>
              </div><!--navbar-collapse-->
              
            </div>
        </div>
    </div><!--end navbar navbar-inverse-->
</div><!--end navbar-main-->
 <?php wp_head();?>
<!--//header-->