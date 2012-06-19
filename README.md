Basic Facebook Integration
==========================

Include Facebook JS
===================
Add the following to your template somewhere near the start of your HTML

    <% include <% include DownloadFacebookJS %>

This adds the javascript necessary to download facebook connect


Facebook Like Button
====================
Simply add the following to your template

    	<% include FacebookLikeButton %>


Facebook Like Box
=================
This incorporates a stream of statuses from a facebook page.  Add a page of type 'FacebookStreamPage' using the CMS.  In the Facebook tab there are 2 parameters

* FacebookURL - the url of your page, e.g. http://facebook.com/mygreatfacebookpage
* Width of stream in pixels - the width of the rendered facebook stream in pixels, min advised is 292px wide

