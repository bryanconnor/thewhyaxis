<?php 

class kirbytextExtended extends kirbytext {
  
  function __construct($text, $markdown=true) {
    
    parent::__construct($text, $markdown);


    $this->addTags('imgslide');
    $this->addTags('iframeslide');

    $this->addAttributes('caption');  
    $this->addAttributes('blockquote');  

    /*   

    // define custom tags
    $this->addTags('mynewtag');
    
    // define custom attributes
    $this->addAttributes('mynewattribute');    
    
    */
                
  }  

  /*
  
  // define a function for each new tag you specify  
  
  function mynewtag($params) {
    // do something with the passed params here.
  }
  
  */


   function iframeslide($params) {
     $url   = @$params['iframeslide'];
     $class  = @$params['class'];

     if(!empty($class)) $class = ' class="' . $class . '"';

     return '<iframe' . $class . ' src="' . $url . '" frameborder="0" allowfullscreen></iframe>';
  }

  function imgslide($params) {

    global $site;
    
    $url    = @$params['imgslide'];
    $text   = @$params['text'];
    $class  = @$params['class'];
    $alt    = @$params['alt'];
    $title  = @$params['title'];
    $target = self::target($params);

    $caption  = @$params['caption'];
    $blockquote  = @$params['blockquote'];

    // alt is just an alternative for text
    if(!empty($text)) $alt = $text;

    // width/height
    $w = a::get($params, 'width');
    $h = a::get($params, 'height');

    if(!empty($w)) $w = ' width="' . $w . '"';
    if(!empty($h)) $h = ' height="' . $h . '"';
    
    // add a css class if available
    if(!empty($class)) $class = ' class="' . $class . '"';
    if(!empty($title)) $title = ' title="' . html($title) . '"';
    if(empty($alt))    $alt   = $site->title();

    if(!empty($caption)) $caption = '<p class="caption">' . $caption . '</p>';
    if(!empty($blockquote)) $blockquote = '<p class="blockquote">' . html($blockquote) . '</p>';

            
    $image = '<img src="' . $this->url($url) . '"' . $w . $h . $class . $title . ' alt="' . html($alt) . '" />';

    if(!empty($params['link'])) {
      if($params['link'] == 'self') $params['link'] = $url;
      return '<div class="description link graphic"><a' . $class . $target . $title . ' href="' . $this->url($params['link']) . '">' . $image . '</a>' .$caption . $blockquote . '</div>';
    }
    
    return '<div class="graphic">' . $image . $caption . $blockquote . '</div>';



    // do something with the passed params here.
  }








  
}

?>