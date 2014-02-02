<?php snippet('header') ?>

<body>
	<nav class="active">
		<a href="http://thewhyaxis.info" id="thewhyaxis" ><h1>The Why Axis</h1></a>
		<a href="http://thewhyaxis.info" id="homelabel" class="label">Home</a>	
		<ul id="connect">
			<li><a href="http://twitter.com/thewhyaxis" target="_blanks"><span aria-hidden="true" class="twa-icotwitter"></span></a></li>
			<li><a href="http://thewhyaxis.info/feed"><span aria-hidden="true" class="twa-icorss"></span></a></li>
		</ul>
	</nav>


	<div id="container" class="index">
			<h1 class="home"><a href="<?php $site->url()?>"><?php echo html($page->title()) ?></a></h1>
    		<div class="messaging"><?php echo kirbytext($page->text()) ?></div>
    		  <ul class="menu">
    		<?php $articles = $pages->visible()->flip() ?>
			<?php foreach($articles as $article): ?>
   				 <li class="post section">
   				 		
   				 <?php $image = $article->images()->find( html($article->hero()) ) ?>
   				 <?php if($image): ?>
  					<div class="cover"><a href="<?php echo $article->url() ?>" ><img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" /></a></div>
				<?php endif ?>
   					<a <?php echo ($article->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a>
   					<p class="excerpt"><?php echo excerpt($article->text(), 300) ?></p>
   					<p class="date"><?php echo $article->date('M j Y') ?></p>
   					<div class="space"></div>
	  			</li>
   			 <?php endforeach ?>
  				</ul>
	</div>
