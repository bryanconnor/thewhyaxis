<?php snippet('header') ?>

<body class="home-pg">

  <div class="wrapper head">
    <div class="nav">
      <h1><span class="gem"></span><a href="http://thewhyaxis.info" id="thewhyaxis" >The Why Axis</a></h1>
      <ul>
        <li class="collections"><a href="#">Archives</a></li>
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
      <div class="article">
      <?php $articles = $pages->visible()->flip()->paginate(1) ?>
      <?php foreach($articles as $article): ?>

        <h1><?php echo html($article->title() ) ?></h1>
        <span class="timestamp"><?php echo $article->date('M j, Y') ?></span>
      
        <?php $sections = str::split($article->text(), '--') ?>
        <?php $n = 0; foreach($sections as $section): $n++; ?>
        <div class="section" id="section-<?php echo $n; ?>">
          <?php echo kirbytext($section) ?>
        </div>
        <?php endforeach ?>
  
      <?php endforeach ?>

      <div class="footnotes">
      <a name="comments"></a>

      <div id="disqus_thread"></div>
      <script type="text/javascript">
          /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
          var disqus_shortname = 'thewhyaxis'; // required: replace example with your forum shortname
  
          /* * * DON'T EDIT BELOW THIS LINE * * */
          (function() {
              var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
              dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
          })();
      </script>
      <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

      <div class="article-meta">
        <?php if($article->people() != '' or $page->organizations() != '' or $page->collections() != ''):?>
        <ul>
          <?php if($article->people() != ''): ?>
          <li><span class="meta-label">People: </span><span class="meta-items"><?php echo ($page->people()) ?></span></li>
          <?php endif ?>
          <?php if($article->organizations() != ''): ?>
          <li><span class="meta-label">Organizations: </span><span class="meta-items"><?php echo ($page->organizations()) ?></span></li>
          <?php endif ?>
          <?php if($article->collections() != ''): ?>
          <li><span class="meta-label">Collections: </span><span class="meta-items"><?php echo ($page->collections()) ?></span></li>
          <?php endif ?>
        </ul>
        <?php endif ?>
      </div>

      <ul class="relatedcontent">
    <p class="readnext">Read This Next:</p>
    <?php foreach(related($article->related()) as $related): ?>
      <li>
        <h2><a href="<?php echo $related->url() ?>"><?php echo html($related->title()) ?></a></h2>
          <?php if($related->hero() !='' && $related->hero() !='0'): ?>
    <?php $image = $related->images()->find( html($related->hero()) ) ?>
        <a href="<?php echo $related->url() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" /></a>
    <?php endif ?> 
          
        </li>
    <?php endforeach ?>
    </ul>

  </div>
      </div>
    </div>
  </div>

<?php snippet('footer') ?>