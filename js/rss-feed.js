(function( $ ) {
    "use strict";
 
    $(function() {
 
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
 
    })(jQuery);