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
  function np_init() {
    $slide = array(
      "public" => true,
      "label" => "Slide Images",
      "supports" => array(
        "title",
        "thumbnail"
        )
      );
    register_post_type("slide_images", $slide);
  }
  add_action("init", "np_init");
  ?>
</body>
</html>
 