<?php
require_once('vars_bootstrap.php');
?>
<!DOCTYPE xml:lang="pt-br" lang="pt-br" html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php print $name ?></title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="script.js"></script>
  </head>

  <body>
    <div id="wrapper">
      <h1>Autoweb</h1>
	  
      <div id="body">

        <select class="inlineblock" name="selecttask" form="form_download" size="12">
          <option onclick="javascript:switchScreen('basic_html');" value="basic_html" selected="selected">Basic HTML</option>
          <option onclick="javascript:switchScreen('basic_html_2');" value="basic_html_2">Basic HTML 2</option>
          <option onclick="javascript:switchScreen();" value="wp_plugin">WordPress plugin</option>
          <option onclick="javascript:switchScreen('drupal_module');" value="drupal_module">Drupal Module</option>
        </select>

        <form id="basic_html" class="inlineblock" name="basic_html_download" method="GET" action="includes/basic_html_download.php">
		<input type="radio" name="format" value="html" checked>html
		<input type="radio" name="format" value="php">php<br />
		<input type="text" name="name" />
		<input type="submit" value="Cria" /><br />
		<textarea cols="100" rows="12">
<?php echo $basic_html ?>
		</textarea>
        </form>
        
        <form id="basic_html_2" class="inlineblock" name="basic_html_2_download" method="GET" action="includes/basic_html_2_download.php">
		<input type="radio" name="format" value="html" checked>html
		<input type="radio" name="format" value="php">php<br />
		<input type="text" name="name" />
		<input type="submit" value="Cria" /><br />
		<textarea cols="100" rows="12">
<?php echo $basic_html_2 ?>
		</textarea>
        </form>
        
        <form id="drupal_module" class="inlineblock" name="drupal_module_download" method="GET" action="includes/drupal_module_download.php">
			<label for="name">Module name: </label>
			<input id="name" name="name" type="text" /><br /><br />
			<label for="module_machine_name">(Optional) Machine name:</label>
			<input id="module_machine_name" name="module_machine_name" type="text" /><br /><br />
			<div>Module description:</div>
			<textarea form="form_download" rows="3" cols="61"></textarea><br />
			<input type="submit" value="Downloads" />
        </form>

      </div> <!-- body's end -->
    </div>
    
  </body>
</html>
