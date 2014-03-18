<?php snippet('header') ?>
<body class="archives-pg">
	<div class="wrapper head">
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
  </div>

  

  <div class="wrapper">
    <div class="content">
 		 <ul class="archives">


		  <?php $articles = $pages->visible()->flip() ?>
      <?php foreach($articles as $article): ?>
        <li class="archive-item">
          <h2><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a>
          <p class="date"><?php echo $article->date('M j Y') ?></p>
          
          <a class="cover" href="<?php echo $article->url() ?>">
          <?php $image = $article->images() ?>
          <?php foreach($image as $image): ?>
          <img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" />
          <?php endforeach ?>
          </a>
          
        </li>
      <?php endforeach ?>

		    
		  </ul>
    </div>
  </div>  

  

<?php snippet('footer') ?>