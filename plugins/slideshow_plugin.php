<!DOCTYPE html>
<html>
  <head>
    <title>
    <?php
    /*
      Plugin Name: Slideshow
      Description: Simple slideshow plugin for WordPress site -- using Nivo Slider and Ciprian Turcu lesson for reference.
      Author: Victoria Kinnealey
      Version: 1.0
      */
      ?>
    </title>
  </head>
<body>
<?php
//adds the admin slideshow management function in WP
  function np_init() {
    add_shortcode("np-shortcode", "np_function");
    $slide = array(
      "public" => true,
      "label" => "slide images",
      "supports" => array(
        "title",
        "thumbnail",
        "author"
        )
       );
  //not sure if these are placed correctly, but sizes images
    add_image_size("np_widget", 180, 100, true);
    add_image_size("np_function", 600, 280, true);
    register_post_type("slide_images", $slide);
  }
  add_theme_support("post-thumbnails");
  add_action("init", "np_init");

//unclear what this code does... 
  function np_function ($type="np_function"){
    $slide = array(
      "post_type" => "slide images",
      "posts_per_page" => 3
    );
    $result = "<div class='slider-wrapper theme-default'>";
    $result .= "<div id='slider' class='slider'>";

  //creates actual slideshow loop functionality
    $loop = new WP_Query($slide);
    while ($loop->have_posts()){
      $loop->the_post();

      $the_url= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $type);
      $result='<img title="'.get_the_title().'"src="'. $the_url[0].'"data-thumb="'. $the_url[0] .'"alt=""/>';
    }
  }
  //creating the Widget
  /*
  function np_widgets_init(){
    register_widget("np_Widget");
  }

  add_action("widgets_init", "np_widgets_init");

  class np_Widget extends WP_Widget {

    public function __construct(){
      parent::__construct("np_Widget", "slideshow", array("description"=> __("A Slideshow Widget", "text_domain")));
      }
      
    //Widget backend

    public function form($instance){
      if (isset($instance["title"])){
        $title = $instance["title"];
      }
      else{
        $title = __("Slideshow", "text_domain");
      }
      ?>
      <p> 
        <label for="<?php echo $this-> get_field_id("title"); ?>"><?php_e("Title:"); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id("title");?>" name="<?php echo $this-> get_field_name("title"); ?>" type="text" value="<?php echo esc_attr($title); ?>"/>
      </p>
    }
    */
  ?>
</body>
</html> 