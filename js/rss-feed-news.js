jQuery(function($) {
	"use strict";
		$(document).ready(function() {

		$("#1").hide();

		$("#2").hide();

		$("#3").hide();

		$("#4").hide();

		$("#5").hide();

		$("#6").hide();

		$("#rss-1").click(function() {

			$("#1").slideToggle("slow");

			})

		$("#rss-2").click(function() {

			$("#2").slideToggle("slow");

			})

		$("#rss-3").click(function() {

			$("#3").slideToggle("slow");

			})

		$("#rss-4").click(function() {

			$("#4").slideToggle("slow");

			})

		$("#rss-5").click(function() {

			$("#5").slideToggle("slow");

			})

		$("#rss-6").click(function() {

			$("#6").slideToggle("slow");

			})

		});
		$(function() {

			$("#1").rss("http://feeds.feedburner.com/pharmacist/DGoC",

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

			// default: '<li><a href="{url}" target="_blank">[{author}@{date}] {title}</a><br/>{shortBodyPlain}</li>'

			// valid values: any string

				entryTemplate: '<a href="{url}" target="_blank" class="list-group-item"><h4 class="list-group-item-heading">{title}</h4><p class="list-group-item-text">{shortBody}</p></a>',

			},

			

			// callback function

			// called after feeds are successfully loaded and after animations are done

				function callback() {}

			)



	

		  

		 

			$("#2").rss("http://feeds.feedburner.com/PharmacyCurrent",

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

			

			$("#3").rss("http://feeds.feedburner.com/fda/CtlR",

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

			

			$("#4").rss("http://feeds.feedburner.com/NcbiAnnouncements",

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

			// default: '<li><a href="{url}" target="_blank">[{author}@{date}] {title}</a><br/>{shortBodyPlain}</li>'

			// valid values: any string

				entryTemplate: '<a href="{url}" target="_blank" class="list-group-item"><h4 class="list-group-item-heading">{title}</h4><p class="list-group-item-text">{shortBody}</p></a>',

			},

			

			// callback function

			// called after feeds are successfully loaded and after animations are done

				function callback() {}

			)

			

			$("#5").rss("http://feeds.feedburner.com/nih/PMCNews",

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

			

			$("#6").rss("http://feeds.feedburner.com/fda/gKzv",

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
});