<?php
require_once('vars.php');
?>
<!DOCTYPE xml:lang="pt-br" lang="pt-br" html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php print $name ?></title>
	</head>

  <body>
    <div id="wrapper">
      <h1><?php echo $name ?></h1>
      <div id="body">
        <form name="download" method="GET" action="download.php">
          <input type="radio" name="format" value="html" checked>html
          <input type="radio" name="format" value="php">php<br />
          <input type="text" name="name" />
          <input type="submit" value="Cria" />
        </form>
        <div id="code">
        </div>
      </div> <!-- body's end -->
    </div>

	</body>
</html>
