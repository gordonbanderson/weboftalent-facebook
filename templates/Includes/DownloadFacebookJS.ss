<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  <% if FacebookApplicationID %>
  js.src = "http://connect.facebook.net/en_US/all.js#xfbml=1&appId=$FacebookApplicationID;";
  <% else %>
  js.src = "http://connect.facebook.net/en_US/all.js#xfbml=1;";

  <% end_if %>
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>