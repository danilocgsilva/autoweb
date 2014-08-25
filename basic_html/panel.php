<?php
$basic_html_panel = <<<CODE
<input type="radio" name="format" value="html" checked>html
<input type="radio" name="format" value="php">php<br />
<input type="text" name="name" />
<input type="submit" value="Cria" />
CODE;
print $basic_html_panel;
