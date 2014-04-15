<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<title>
<?php wp_title(' '); ?>
<?php if(wp_title(' ', false)) { ?>
 &ndash; 
<?php } ?>
<?php bloginfo('name'); ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<!--<meta name="description" content="<?php bloginfo('description'); ?>" />-->
<!-- leave this for stats please -->
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
<script src="http://www.biopackplus.com/js/cufon-yui.js" type="text/javascript"></script>
<script src="http://www.biopackplus.com/js/Raleway.font.js" type="text/javascript"></script>
<script type="text/javascript">
	Cufon.replace('h2', { fontFamily: 'Raleway' });
	Cufon.replace('#sidebar h3', { fontFamily: 'Raleway' });
</script>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" type="image/x-png" href="<?php bloginfo('template_url'); ?>/favicon.png" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-207675-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="header"><a href="http://www.biopackplus.com"><img src="http://www.biopackplus.com/img/logo.png" alt="BioPack+" title="BioPack+" /></a>
  <div id="topmenu"><a href="http://www.biopackplus.com">Home</a><a href="" onclick="javascript:window.open('http://a4.websitealive.com/1297/rRouter.asp?groupid=1297&websiteid=133&departmentid=7473&dl='+escape(document.location.href),'','width=400,height=400');" onmouseover="this.style.cursor='pointer'">Live Help</a><a href="http://addthis.com/bookmark.php" class="addthis_button_compact"><span>Share</span></a>
  </div>
</div>
<div id="container" class="group">
<!--<div id="bubble"><p><?php bloginfo('description'); ?></p></div>-->
