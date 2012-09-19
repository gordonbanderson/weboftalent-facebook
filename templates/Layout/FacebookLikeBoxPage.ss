<h1>$Title</h1>
$Content
<% if FacebookURL %>
<div class="fb-like-box" data-href="$FacebookURL" data-width="$PageWidth" data-height="800"
data-show-faces="false" data-stream="true" data-header="true"></div>
<% else %>
<div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <p><% _t('Facebook.NO_FACEBOOK_PAGE_URL', 'Please provide a Facebook URL for your page in the CMS') %></p>
</div>
<% end_if %>