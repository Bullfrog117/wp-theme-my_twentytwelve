	Theme Name:     My Twenty Twelve Child
	Theme URI:      http://www.bullfrog117.com/my_twentytwelve/
	Description:    Child theme for the Twenty Twelve theme which includes spoiler tags and my short codes
	Author:         Jeremy Heckman
	Author URI:     http://www.bullfrog117.com/
	Version:        1.0
	Template:       twentytwelve

##comments.php

Originally I eschewed Jetpack and was trying to have comments be JUST provided by Twitter or Facebook. But I finally realized that wasn't doing anybody any favors and turned Jetpack on. Oh wow, so this file is completely irrelevant to my theme as it currently is! Although as I look at the visual layout and think about what I want the comments section to be, I might be re-activating this. We'll have to see.  


##content.php

This file helps me do specific things with posts. In particular with the feature image (if it is set) and also with one of my custom fields (if it is set) so that my media-based posts (like movie reviews) can show a thumbnail of the featured image while searching and then a full-size image with an external link while viewing a single post. 


##functions.php

This file was the first one I really mucked with as I figured out how to make some of the styles and external links function better within the WordPress shell. 

List of shortcodes: 

* song/songTitle - for external linking to my lyrics database

* spoilerstart/spoilerend - CSS for hiding bits of text (for example spoilers in movie reviews)

* dailyblurb - pulling bits from my daily devotional database


##header.php

Pretty sure all I was trying to hack into here was the search bar in the upper left hand corner. 


##style.css

Special CSS customizations for blockquotes and the spoiler shortcode.  
