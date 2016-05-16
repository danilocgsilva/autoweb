<?php
require_once('vars_bootstrap.php');
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
            <select class="inlineblock" name="selecttask" form="form_download" size="12">
              <option onclick="javascript:switchScreen('basic_html');" value="basic_html"
                <?php if ($page_source == 'basic_html') echo 'selected="selected"'; ?>>Basic HTML
              </option>
              <option onclick="javascript:switchScreen('basic_html_2');" value="basic_html_2"
                <?php if ($page_source == 'basic_html_2') echo 'selected="selected"'; ?>>Basic HTML 2
              </option>
              <option onclick="javascript:switchScreen('wordpress_plugin');" value="wordpress_plugin"
                <?php if ($page_source == 'wordpress_plugin') echo 'selected="selected"'; ?>>WordPress plugin
              </option>
              <option onclick="javascript:switchScreen('drupal_module');" value="drupal_module"
                <?php if ($page_source == 'drupal_module') echo 'selected="selected"'; ?>>Drupal Module
              </option>
            </select>
          </div>
          <!-- inner's content end -->
        </div>
        <!-- left-sidebar's end -->

        <div id="main-content">
          <div class="inner-content">
            <form
              <?php if ($page_source == 'basic_html') echo 'style="display: inline-block"'; ?> id="basic_html" class="inlineblock" name="basic_html_download" method="GET" action="includes/basic_html_download.php">

              <input type="radio" name="format" value="html" checked="">
                html
                <input type="radio" name="format" value="php">
                  php<br />

                  <input type="text" name="name" />
                  <input type="submit" value="Cria" /><br />
                  <textarea rows="12">
<?php echo $basic_html ?>
                  </textarea>
                </form>

            <form
              <?php if ($page_source == 'basic_html_2') echo 'style="display: inline-block"'; ?> id="basic_html_2" class="inlineblock" name="basic_html_2_download" method="GET" action="includes/basic_html_2_download.php">
              <input type="radio" name="format" value="html" checked="">
                html
                <input type="radio" name="format" value="php">
                  php<br />
                  <input type="text" name="name" />
                  <input type="submit" value="Cria" /><br />
                  <textarea rows="12">
<?php echo $basic_html_2 ?>
                  </textarea>
                </form>

            <form
              <?php if ($page_source == 'wordpress_plugin') echo 'style="display: inline-block"'; ?> id="wordpress_plugin" class="inlineblock" name="wordpress_plugin_download" method="GET" action="includes/wordpress_plugin_download.php">
              <label for="plugin-php">Basic code for yourplugin.php</label>
              <textarea id="plugin-php" name="plugin-php" form="wordpress_plugin" rows="13">
<?php echo $wordpress_plugin_variable; ?>
              </textarea>
            </form>

            <form
              <?php if ($page_source == 'drupal_module') echo 'style="display: inline-block"'; ?> id="drupal_module" class="inlineblock" name="drupal_module_download" method="GET" action="includes/drupal_module_download.php">
              <label for="name">Module name: </label>
              <input id="name" name="name" type="text" /><br /><br />
              <label for="module_machine_name">(Optional) Machine name:</label>
              <input id="module_machine_name" name="module_machine_name" type="text" /><br /><br />
              <div>Module description:</div>
              <textarea id="module_description" name="module_description" form="drupal_module" rows="3" cols="61"></textarea><br />
              <input type="submit" value="Downloads" />
            </form>

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
