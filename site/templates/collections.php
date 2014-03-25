<?php snippet('header') ?>
<body class="collections-pg">
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
    <div class="flexslider">
      <ul class="slides">
      <li class="collection-hero process">
        <a href="<?php $site->url()?>process">
          <div class="scroll-description">
            <h1>Behind the Scenes</h1>
            <p>Interviews and articles that reveal the design process behind great visualizations.</p>
          </div>
        </a>
      </li>
      <li class="collection-hero storytelling">
        <a href="<?php $site->url()?>storytelling">
          <div class="scroll-description">
            <h1>Storytelling With Data</h1>
            <p>Leading the reader through a visualization to impart knowledge and insight.</p>
          </div>
        </a>
      </li>
      <li class=" collection-hero print-web">
        <a href="<?php $site->url()?>print-web">
          <div class="scroll-description">
            <h1>Print &amp; Web Companions</h1>
            <p>Visualizations covered on The Why Axis with both print and web components that work together.</p>
          </div>
        </a>
      </li>
      <li class="collection-hero remakes">
        <a href="<?php $site->url()?>remakes">
          <div class="scroll-description">
            <h1>Chart Remakes</h1>
            <p>Articles on The Why Axis and elsewhere that seek to redesign or improve existing visualizations.</p>
          </div>
        </a>
      </li>
      <li class="collection-hero tools">
        <a href="<?php $site->url()?>tools">
          <div class="scroll-description">
            <h1>Tools of the Trade</h1>
            <p>A collection of the data visualization tools reviewed on The Why Axis.</p>
          </div>
        </a>
      </li>
      <li class="collection-hero open-source">
        <a href="<?php $site->url()?>open-source">
          <div class="scroll-description">
            <h1>Open Source</h1>
            <p>Resources with open source components including visualization libraries, code bases and data sets.</p>
          </div>
        </a>
      </li>
      <li class="collection-hero journalism">
        <a href="<?php $site->url()?>journalism">
          <div class="scroll-description">
            <h1>Data Journalism</h1>
            <p>Visualizations that tackle major news stories and make them accessible and understandable for the general public.</p>
          </div>
        </a>
      </li>
      <li class="collection-hero climate-change">
        <a href="<?php $site->url()?>climate-change">
          <div class="scroll-description">
            <h1>Making Climate Change Visual</h1>
            <p>Visualizations that examine one aspect of the important yet ephemeral issue of climate change.</p>
          </div>
        </a>
      </li>
      </ul>
    </div>
  </div>  
  <script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="assets/js/fixto.min.js"></script>

  <script>

    // $('.collection-hero.storytelling').fixTo('body');
    // $('.collection-hero.process').fixTo('body');
    // $('.collection-hero.tools').fixTo('body');
    // $('.collection-hero.climate-change').fixTo('body');
    // $('.collection-hero.journalism').fixTo('body');
    // $('.collection-hero.open-source').fixTo('body');
    // $('.collection-hero.remakes').fixTo('body');
    // $('.collection-hero.print-web').fixTo('body');
  </script>
  

<?php snippet('footer') ?>