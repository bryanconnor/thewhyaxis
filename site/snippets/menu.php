  <ul class="menu">
    <?php foreach($pages->visible() as $article): ?>
    <li>
    	<?php if($article->hero() !='' && $article->hero() !='0'): ?>
      <div class="graphic">
  		<?php $image = $article->images()->find( html($article->hero()) ) ?>
  		<img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" />
  		</div>
		<?php endif ?>
   		<a <?php echo ($article->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a>
   		<p><?php echo $article->date('M n Y') ?></p>
	  </li>
    <?php endforeach ?>
  </ul>
