<?php snippet('header') ?>

<body class="home-pg">

  <div class="wrapper head">
    <div class="nav">
      <h1><span class="gem"></span><a href="<?php $site->url()?>" id="thewhyaxis" >The Why Axis</a></h1>
      <ul>
        <li class="archives"><a href="<?php $site->url()?>archives">Archives</a></li>
        <li class="collections"><a href="<?php $site->url()?>collections">Collections</a></li>
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

        <h1><?php echo html($article->title() ) ?></h1>
        <span class="timestamp"><?php echo $article->date('M j, Y') ?></span>
      
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

      <div class="footleft">
      <?php if($article->reactions() != ''):?>
      <div class="reactions">
        <h3>Reactions</h3>
          <?php echo ($article->reactions()) ?>
      </div>
      <?php endif ?>
      <a name="comments"></a>

      <div id="disqus_thread"></div>
      <script type="text/javascript">
          /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
          var disqus_shortname = 'thewhyaxis'; // required: replace example with your forum shortname
          var disqus_identifier = '<?php echo ($article->uri() ) ?>';
          /* * * DON'T EDIT BELOW THIS LINE * * */
          (function() {
              var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
              dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
          })();
      </script>
      <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

     </div>
     <div class="footright">

      <ul class="relatedcontent">
        <h3>Read This Next:</h3>
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


  <script type="text/javascript">
  var disqus_shortname = 'thewhyaxis'; // required: replace example with your forum shortname
  (function () {
      var s = document.createElement('script'); s.async = true;
      s.type = 'text/javascript';
      s.src = '//' + disqus_shortname + '.disqus.com/count.js';
      (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
  }());
  </script>

  <script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="assets/js/fixto.min.js"></script>

  <script>
    if (document.documentElement.clientWidth >= 930) {
      $(window).load(function() {
        $('.article .graphic').fixTo('.article>.section', {mind:'.bumpy'});
        // $('.relatedcontent').fixTo('body');
      });
    }
    else{}
  </script>

<?php snippet('footer') ?>