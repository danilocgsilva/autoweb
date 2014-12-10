<?php
require_once('vars_bootstrap.php');
?>
<!DOCTYPE xml:lang="pt-br" lang="pt-br" html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php print $name ?></title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>

  <body>
    <div id="wrapper">
      <h1>Autoweb</h1>
	  
      <div id="body">

        <select class="inlineblock" name="selecttask" form="form_download" size="12">
          <option onclick="javascript:fillPanel('basic_html');" value="emptyhtml" selected="selected">Basic HTML</option>
          <option onclick="javascript:fillPanel('basic_html2');" value="emptyhtml2">Basic HTML 2</option>
          <option onclick="javascript:fillPanel('wordpress_plugin');" value="wp_plugin">WordPress plugin</option>
          <option onclick="javascript:fillPanel('drupal_module');" value="drupal_module">Drupal Module</option>
        </select>

        <form id="basic_html_download" class="inlineblock" name="basic_html_download" method="GET" action="includes/basic_html_download.php">
			<input type="radio" name="format" value="html" checked>html
			<input type="radio" name="format" value="php">php<br />
			<input type="text" name="name" />
			<input type="submit" value="Cria" /><br />
			<textarea cols="100" rows="12">
<?php echo $basic_html ?>
			</textarea>
        </form>
        
        <form id="basic_html_2_download" class="inlineblock" name="basic_html_2_download" method="GET" action="includes/basic_html_2_download.php">
			<input type="radio" name="format" value="html" checked>html
			<input type="radio" name="format" value="php">php<br />
			<input type="text" name="name" />
			<input type="submit" value="Cria" /><br />
			<textarea cols="100" rows="12">
<?php echo $basic_html_2 ?>
			</textarea>
        </form>

      </div> <!-- body's end -->
    </div>

    <script>
      fillPanel('basic_html');
    </script>
    
  </body>
</html>
