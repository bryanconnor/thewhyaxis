<?php snippet('header') ?>
<body>
	<div class="wrapper">
    <div class="nav">
      <h1><span class="gem"></span><a href="http://thewhyaxis.info" id="thewhyaxis" >The Why Axis</a></h1>
      <ul>
        <li class="collections"><a href="<?php $site->url()?>archives">Archives</a></li>
        <li class="collections"><a href="#">Collections</a>
          <ul>
            <li><a href="<?php $site->url()?>process">Behind the Scenes</a></li>
            <li><a href="<?php $site->url()?>storytelling">Storytelling with Data</a></li>
            <li><a href="<?php $site->url()?>print-web">Print &amp; Web Companions</a></li>
            <li><a href="<?php $site->url()?>remakes">Chart Remakes</a></li>
            <li><a href="<?php $site->url()?>tools">Tools of the Trade</a></li>
            <li><a href="<?php $site->url()?>open-source">Open Source</a></li>
            <li><a href="<?php $site->url()?>journalism">Data Journalism</a></li>
            <li><a href="<?php $site->url()?>climate-change">Climate Change</a></li>
          </ul>
        </li>
        <li><a href="http://twitter.com/thewhyaxis" target="_blanks"><span aria-hidden="true" class="twa-icotwitter"></span></a></li>
        <li><a href="http://thewhyaxis.info/feed"><span aria-hidden="true" class="twa-icorss"></span></a></li>
      </ul>
    </div>
    <div class="content">
   		<div class="article">


		  
		    <h1><?php echo html($page->title()) ?></h1>
		    <?php echo ($page->text()) ?>

		    
		  </div>
   	</div>
   	</div>  


<?php snippet('footer') ?>