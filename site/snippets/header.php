<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@thewhyaxis">
  <meta name="twitter:url" content="http://thewhyaxis.info/<?php echo html($page->uri()) ?>">
  <meta name="twitter:title" content="<?php echo html($page->title() ) ?>">
  <meta name="twitter:description" content="<?php echo excerpt($page->text(), 140) ?>">
  <meta name="twitter:image" content="<?php if($page->hasImages()): ?><?php echo html($page->images()->first()->url()) ?><?php endif ?>">
  
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://thewhyaxis.info/feed/" />

  <?php echo css('assets/css/style.css') ?>
  
  <!-- <?php echo css('assets/css/screen.css') ?> -->

  <!-- <script src="http://thewhyaxis.info/assets/js/jquery.scrollTo-min.js"></script> -->
  
  <script type="text/javascript" src="http://use.typekit.com/kih2fvc.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  

  <script type="text/javascript">
  //$(window).load(function() {
  	//$('#post-1').addClass('currentpost');
  	//$('#post-2').addClass('nextpost');
  //});
  </script>
  

  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-4938058-8']);
    _gaq.push(['_trackPageview']);
    
  
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  
  </script>
  
  

</head>

