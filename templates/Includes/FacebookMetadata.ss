<% if SiteConfig.FacebookLogo %>
<% control SiteConfig.FacebookLogo %>
<meta property="og:image" content="$URL"/>
<meta property="og:image:width" content="$Width">
<meta property="og:image:height" content="$height">
<% end_control %>
<% end_if %>
<meta property="og:title" content="$Title"/>
<meta property="og:url" content="$AbsoluteLink"/>
<meta property="og:site_name" content="$SiteConfig.Title"/>
<meta property="og:description" content="$MetaDescription"/>
<meta property="og:locale" content="$Locale"/>