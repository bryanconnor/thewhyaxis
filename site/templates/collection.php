<?php snippet('header') ?>
<body class="collection-pg">
	<div class="wrapper head">
    <div class="nav">
      <h1><span class="gem"></span><a href="<?php echo( $site->url())?>" >The Why Axis</a></h1>
      <ul>
        <li class="archives"><a href="<?php echo( $site->url())?>/archives">Archives</a></li>
        <li class="collections"><a href="<?php echo( $site->url())?>/collections">Collections</a></li>
        <li class="twitter"><a href="http://twitter.com/thewhyaxis" target="_blanks"><span aria-hidden="true" class="twa-icotwitter"></span></a></li>
        <li class="rss"><a href="http://thewhyaxis.info/feed"><span aria-hidden="true" class="twa-icorss"></span></a></li>
      </ul>
    </div>
  </div>

  

  <div class="wrapper">

    <div class="collection-hero <?php echo ($site->uri()->path()->last())?>">
      <div class="collection-description">
          <h1><?php echo html($page->title()) ?></h1>
          <p><?php echo ($page->description()) ?></p>
      </div>
    </div>

    

    <div class="content">
      
      


   		<div class="article">


		    <?php $sections = str::split($page->text(), '--') ?>
		    <?php $n = 0; foreach($sections as $section): $n++; ?>
		    <div class="section" id="section-<?php echo $n; ?>">
		  	<?php echo kirbytext($section) ?>
		    </div>
		    <?php endforeach ?>

		    
		  </div>
    </div>
  </div>  

   	<script type="text/javascript" src="<?php echo( $site->url())?>/assets/js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="<?php echo( $site->url())?>/assets/js/fixto.min.js"></script>

	<script>
		$('.collection-hero').fixTo('body');
	</script>


<?php snippet('footer') ?>