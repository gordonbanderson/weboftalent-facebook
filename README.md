##Functionality
* Add a like button to any page
* Add a facebook like box to any page
* Add facebook metadata to any page

## Installation
    git clone git://github.com/gordonbanderson/weboftalent-facebook.git
    cd weboftalent-facebook
    git checkout stable24

The name of the output directory does not matter

## Usage
### Site Configuration
A 'Facebook Metadata' tab will now appear in the Site Config.  There you can upload an image that will be shown in Facebook when a link from the site is provided.  Otherwise facebook tries to guess from the content.

### Templates

#### Facebook API
Add the following to your Page templates, after the body tag.

    <% include DownloadFacebookJS %>

This will provide the Javascript required to load the Facebook API.  It is a necessary step for what follows.

#### Like Button
Insert the following where you would like the Like Button to appear

	<% include FacebookLikeButton %>

#### Facebook Metadata
In the head section of your Page template, insert the following:

	<% include FacebookMetadata %>

This will provide basic metadata extracted from existing page information, and also add the logo if you have provided one in the SiteConfig 'Facebook Metadata' tab.

### Content Types
#### FacebookLikeBoxPage
Create a page of type 'Facebook Like Box Page'.  In the Facebook tab, enter the URL of your page (e.g. http://www.facebook.com/WebOfTalentLtd).  If you do not do this an error message will appear on the page in the public version of the site.


## Silverstripe Version Compatibility
2.4 only (tested with 2.4.5+) - stable24 branch