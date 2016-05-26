<?php
require_once('vars_bootstrap.php');
require_once('functions/print_input.php');
require_once('functions/selectview.php');
session_start();

if (isset($_SESSION['page_source'])) {
  $page_source = $_SESSION['page_source'];
}

?>
<!DOCTYPE xml:lang="pt-br" lang="pt-br" html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
      <?php print $name ?>
    </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="script.js"></script>
  </head>

  <body>
    <div id="wrapper">
      <h1>Autoweb</h1>

      <?php
show_error_if_any();
?>

      <div id="body">
        <div id="left_sidebar">
          <div class="inner-content">
            <select id="selectPanel" class="inlineblock" name="selecttask" form="form_download" size="12">
              <?php
              $options = array(
                array(
                  'machine_name' => "basic_html",
                  'readable_content' => "Basic HTML"),
                array(
                  'machine_name' => "basic_html_2",
                  'readable_content' => "Basic HTML 2"),
                array(
                  'machine_name' => "wordpress_plugin",
                  'readable_content' => "WordPress plugin"),
                array(
                  'machine_name' => "drupal_module",
                  'readable_content' => "Drupal Module"),
                array(
                  'machine_name' => "cordova_dev",
                  'readable_content' => "Cordova"),
              );

              print_selectView_options($options, $page_source);
            ?>
            </select>
          </div>
          <!-- inner's content end -->
        </div>
        <!-- left-sidebar's end -->

        <div id="main-content">
          <div class="inner-content form_holder">

            <?php require_once('forms/basic_html.php'); ?>
            <?php require_once('forms/basic_html_2.php'); ?>
            <?php require_once('forms/wordpress_plugin.php'); ?>
            <?php require_once('forms/drupal_module.php'); ?>
            <?php require_once('forms/cordova_dev.php'); ?>

          </div>
          <!-- inner's conent end -->
        </div>
        <!-- main content end -->
      </div>
      <!-- body's end -->
    </div>
    <!-- wrapper's end -->

  </body>
</html>
<?php
unset($_SESSION['errors']);
unset($_SESSION['page_source']);
?>
