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

		<section class="content">
			<h1><?php echo html($page->title()) ?></h1>
			<div class="collections">
				<?php echo kirbytext($page->text()) ?>
			</div>

		</section>
	</div>

<?php snippet('footer') ?>