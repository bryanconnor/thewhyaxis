<?php snippet('header') ?>

<body onload="setupZoom()">
	<div id="reload">This article may behave strangely until you <span id="PageRefresh"></a>refresh the page</span></div>
	<nav>
		<a href="http://thewhyaxis.info" id="thewhyaxis"><h1>The Why Axis</h1></a>
		<a href="http://thewhyaxis.info" id="homelabel" class="label">Home</a>	
		<ul id="connect">
			<li><span aria-hidden="true" class="twa-icocomment"><a href="#disqus_thread" id="commentcount"></a></span></li>
			<li><a href="http://twitter.com/thewhyaxis" target="_blanks"><span aria-hidden="true" class="twa-icotwitter"></span></a></li>
			<li><a href="http://thewhyaxis.info/feed"><span aria-hidden="true" class="twa-icorss"></span></a></li>
		</ul>
		<div style="clear:both;">&nbsp;</div>
	</nav>
	<div id="container" class="article">
		<div id="graphicnav">
			<div class="next"  alt="next"><span aria-hiddel="true" class="twa-iconext"></span></div> 
			<div class="prev"  alt="prev"><span aria-hiddel="true" class="twa-icoprev"></span></div> 
		</div>
		<h1 class="home"><a href="http://thewhyaxis.info">The Why Axis</a> <span class="timestamp">/ <?php echo $page->date('M j, Y') ?></span></h1>
		<article>



	    <h1><?php echo html($page->title() ) ?></h1>

	    <?php $sections = str::split($page->text(), '--') ?>
		<?php $n = 0; foreach($sections as $section): $n++; ?>
		<div class="post section" id="post-<?php echo $n; ?>">
			<?php echo kirbytext($section) ?>
			<div class="space"></div>
		</div>
		<?php endforeach ?>

		<div class="post section" id="comments">
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
		    

		
			<div class="graphic">

				<div class="share">		    		
		    		<a href="https://twitter.com/share?related=thewhyaxis&via=thewhyaxis&text=<?php echo html($page->title() ) ?>" class="twitter popup" data-related="thewhyaxis" data-count="none" data-text=""><span aria-hidden="true" class="twa-icotwitter"> Tweet this article</a>
		    		<a href="http://thewhyaxis.info/feed" id="subscribebtn"><span aria-hidden="true" class="twa-icorss"></span> Subscribe to RSS</a>
		    		
		    		
		    	</div>

		    	<div class="clear"></div>


				<ul class="relatedcontent">
					<p>Read This Next <span class="twa-icotriangle"></span></p>
				<?php foreach(related($page->related()) as $related): ?>
			 		<li>
<!-- 			  	<?php if($related->hero() !='' && $related->hero() !='0'): ?>
				<?php $image = $related->images()->find( html($related->hero()) ) ?>
						<img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" />
				<?php endif ?> -->
			  			<h2><a href="<?php echo $related->url() ?>"><?php echo html($related->title()) ?></a></h2>
			  		</li>
			 	<?php endforeach ?>
				</ul>

				
			</div>


	    
		</div>


	    </article>

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
	    
	
<?php snippet('footer') ?>	