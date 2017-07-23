!DOCTYPE html
<html>
  <head>
    <title>
    <?php
    /*
      Plugin Name: Personalized_form
      Description: Personalized "Request a Recipe!" form -- using Shibu Lijack's "How to create custom forms in WordPress without using plugins?" and WP's "How you can easily create customized form in WordPress"
      Author: Victoria Kinnealey
      Version: 1.0
      */
      ?>
  </head>
<body>
<!-- form  text-->
<form action="form_plugin.php" method="post" name="personalizedForm">
Your Name <input value="name" type="text" name="name"/><br/>
Recipe Request <input value="Recipe" type="text" name="recipeRequest" /><br/>
Allergies <input value="Allergies" type="text" name="allergies" /><br/>
Email <input value="email" type="text" name="email"/><br/>
<input type="submit" value="submit" />
</form>
<form action="reciperequest.php" method="get>"

<?php
/*
//form components
$name= $_POST["name"];
$recipe_request=$_POST["recipe_request"];
$allergies=$_POST["allergies"];
$email=$_POST["email"];
?>

<?php
//link to recipe page
function my_deregister_javascript() {
if ( !is_page("Request a Recipe!") ) {
wp_deregister_script( 'form_plugin.php' );
  }
}
*/
?>

</body>
</html> 