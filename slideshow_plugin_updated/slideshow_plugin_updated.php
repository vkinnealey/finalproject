<!DOCTYPE html>
<html>
  <head>
    <title>
    <?php
    /*
      Plugin Name: Slideshow Updated
      Description: Simple slideshow plugin for WordPress site -- created using https://code.tutsplus.com/tutorials/build-a-slideshow-plugin-for-wordpress--wp-25789
      Author: Victoria Kinnealey
      Version: 1.0
      */
      ?>
    </title>
  </head>
<body>
<?php
/*
function np_init() {
    add_shortcode("np-shortcode", "np_function");
    $slide = array(
      "public" => true,
      "label" => "slides",
      "supports" => array(
        "title",
        "thumbnail",
        "author"
        )
       );
    register_post_type("slides", $args);
  }
  add_action("init", "np_init");
  
//custom fields
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
  function np_widgets_init(){
    register_widget("np_Widget");
  }

  add_action("widgets_init", "np_widgets_init");

      
//Widget backend

public function form($instance) {
  if (isset($instance['title'])) {
      $title = $instance['title'];
    }
  else {
      $title = __('Widget Slideshow', 'text_domain');
    }
    ?>
<p>
  <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
  <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
</p>
    <?php
public function update($new_instance, $old_instance) {
    $instance = array();
    $instance['title'] = strip_tags($new_instance['title']);
 
    return $instance;
}
public function widget($args, $instance) {
    extract($args);
    // the title
    $title = apply_filters('widget_title', $instance['title']);
    echo $before_widget;
    if (!empty($title))
        echo $before_title . $title . $after_title;
    echo np_function('np_widget');
    echo $after_widget;
}
*/
  ?>
</body>
</html> 