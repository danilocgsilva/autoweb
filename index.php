<?php
require_once('vars.php');
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
      <h1><?php echo $name ?></h1>
      <div id="body">

        <select class="inlineblock" name="selecttask" form="form_download" size="12">
          <option value="emptyhtml" selected="selected">Basic HTML</option>
          <option value="wp_plugin">WordPress plugin</option>
        </select>

        <form id="form_download" class="inlineblock" name="download" method="GET" action="download.php">
          <input type="radio" name="format" value="html" checked>html
          <input type="radio" name="format" value="php">php<br />
          <input type="text" name="name" />
          <input type="submit" value="Cria" />
        </form>

      </div> <!-- body's end -->
    </div>

	</body>
</html>
