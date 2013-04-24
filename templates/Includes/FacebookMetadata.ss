<% if SiteConfig.FacebookLogo %>
<% control SiteConfig.FacebookLogo %>
<meta property="og:image" content="$AbsoluteURL"/>
<meta property="og:image:width" content="$Width"/>
<meta property="og:image:height" content="$height"/>
<% end_control %>
<% end_if %>
<meta property="og:title" content="$Title"/>
<meta property="og:url" content="$AbsoluteLink"/>
<meta property="og:site_name" content="$SiteConfig.Title"/>
<% if $MetaDescription %>
<meta property="og:description" content="$MetaDescription"/>
<% else %>
<meta property="og:description" content="$RemoveEntities($Content.Summary(50).XML)"/>
<% end_if %>
<% if $Locale %>
<meta property="og:locale" content="$Locale"/>
<% end_if %>