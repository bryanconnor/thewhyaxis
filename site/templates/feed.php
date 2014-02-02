<?php 

$articles = $pages->visible()->flip()->limit(10);

snippet('feed', array(
  'link'  => url(''),
  'items' => $articles,
  'descriptionField'  => 'text', 
  'descriptionLength' => 300
));

?>