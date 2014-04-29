<?php snippet('header') ?>

<body class="home-pg">

  <div class="wrapper head">
    <div class="nav">
      <h1><span class="gem"></span><a href="<?php echo( $site->url())?>" id="thewhyaxis" >The Why Axis</a></h1>
      <ul>
        <li class="archives"><a href="<?php echo( $site->url())?>/archives">Archives</a></li>
        <li class="collections"><a href="<?php echo( $site->url())?>/collections">Collections</a></li>
        <li class="twitter"><a href="http://twitter.com/thewhyaxis" target="_blanks"><span aria-hidden="true" class="twa-icotwitter"></span></a></li>
        <li class="rss"><a href="http://thewhyaxis.info/feed"><span aria-hidden="true" class="twa-icorss"></span></a></li>
      </ul>
    </div>
  </div>
  <div class="wrapper">
    <div class="bumpy"></div>
    <div class="content">
      <div class="article">
      <?php $articles = $pages->visible()->flip()->paginate(1) ?>
      <?php foreach($articles as $article): ?>

        <h1><a href="<?php echo $article->url() ?>" title="Permalink"><?php echo html($article->title() ) ?></a></h1>
        <a href="<?php echo $article->url() ?>" title="Permalink" class="permatimestamp"><span class="timestamp"><?php echo $article->date('M j, Y') ?></span></a>
      
        <?php $sections = str::split($article->text(), '--') ?>
        <?php $n = 0; foreach($sections as $section): $n++; ?>
        <div class="section" id="section-<?php echo $n; ?>">
          <?php echo kirbytext($section) ?>
        </div>
        <?php endforeach ?>
  
      <?php endforeach ?>
      </div>

       <div class="article-meta">
        <?php if($article->people() != '' or $article->organizations() != '' or $article->collections() != ''):?>
        <ul>
          <?php if($article->people() != ''): ?>
          <li><span class="meta-label">People: </span><span class="meta-items"><?php echo ($article->people()) ?></span></li>
          <?php endif ?>
          <?php if($article->organizations() != ''): ?>
          <li><span class="meta-label">Organizations: </span><span class="meta-items"><?php echo ($article->organizations()) ?></span></li>
          <?php endif ?>
          <?php if($article->collections() != ''): ?>
          <li><span class="meta-label">Collections: </span><span class="meta-items"><?php echo ($article->collections()) ?></span></li>
          <?php endif ?>
        </ul>
        <?php endif ?>
      </div>

      </div>
  </div>



  <div class="wrapper footnotes">
    <div class="content">
      <div class="article-extension">
          <a href="<?php echo $article->url() ?>#comments" class="comment-prompt">
            <span class="twa-icocomment"></span> Add a comment
          </a>
      <div class="permalink">
        <span class="permalabel">Copy Permalink:</span> 
        <input class="permalinkfield" value="http://thewhyaxis.info/visualizing-health"></input>
      </div>
    </div>

    <ul class="footgrid">
      <h3>Previously:</h3>
      <div class="row">
      <li>
        <h2><a href="<?php echo $article->prev()->url() ?>"><?php echo html($article->prev()->title()) ?></a></h2>
        <?php $image = $article->prev()->images()->find( html($article->prev()->hero()) ) ?>
        <a href="<?php echo $article->prev()->url() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" /></a>
      </li>
      <li>
        <h2><a href="<?php echo $article->prev()->prev()->url() ?>"><?php echo html($article->prev()->prev()->title()) ?></a></h2>
        <?php $image = $article->prev()->prev()->images()->find( html($article->prev()->prev()->hero()) ) ?>
        <a href="<?php echo $article->prev()->prev()->url() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" /></a>
      </li>
      </div>
      <div class="row">
      <li>
        <h2><a href="<?php echo $article->prev()->prev()->prev()->url() ?>"><?php echo html($article->prev()->prev()->prev()->title()) ?></a></h2>
        <?php $image = $article->prev()->prev()->prev()->images()->find( html($article->prev()->prev()->prev()->hero()) ) ?>
        <a href="<?php echo $article->prev()->prev()->prev()->url() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" /></a>
      </li>
      <li>
        <h2><a href="<?php echo $article->prev()->prev()->prev()->prev()->url() ?>"><?php echo html($article->prev()->prev()->prev()->prev()->title()) ?></a></h2>
        <?php $image = $article->prev()->prev()->prev()->prev()->images()->find( html($article->prev()->prev()->prev()->prev()->hero()) ) ?>
        <a href="<?php echo $article->prev()->prev()->prev()->prev()->url() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" /></a>
      </li>
    </div>

    </ul>

    <a class="view-archives" href="<?php echo( $site->url())?>/archives">
      View all previous articles
    </a>

      </div>
    </div>


  <script type="text/javascript" src="<?php echo( $site->url())?>/assets/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="<?php echo( $site->url())?>/assets/js/fixto.min.js"></script>

  <script>
      if (document.documentElement.clientWidth >= 930) {
            $(window).load(function() {
              $('.article .graphic').fixTo('.article>.section', {mind:'.bumpy'});
              // $('.relatedcontent').fixTo('body');
            });
          }
          else{}
    
      $('input').on('focus', function (e) {
      $(this)
          .one('mouseup', function () {
              $(this).select();
              return false;
          })
          .select();
    });
  </script>

<?php snippet('footer') ?>