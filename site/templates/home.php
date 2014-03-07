<?php snippet('header') ?>

<body>

  <div class="wrapper">
    <div class="nav">
      <h1><span class="gem"></span><a href="http://thewhyaxis.info" id="thewhyaxis" >The Why Axis</a></h1>
      <ul>
        <li><a href="#">Collections</a>
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
      <ul class="articles">
        <?php $articles = $pages->visible()->flip() ?>
        <?php foreach($articles as $article): ?>
        <li>
          <?php $image = $article->images()->find( html($article->hero()) ) ?>
          <?php if($image): ?>
          <div class="hero"><a href="<?php echo $article->url() ?>" ><img src="<?php echo $image->url() ?>" alt="<?php echo html($article->title()) ?>" /></a></div>
          <?php endif ?>
          <div class="listing">
            <h2><a <?php echo ($article->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
            <p class="excerpt"><?php echo excerpt($article->text(), 300) ?></p>
            <p class="date"><?php echo $article->date('M j Y') ?></p>

            
          </div>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>

<?php snippet('footer') ?>