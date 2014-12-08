<?php

$file_content = file_get_contents('index.txt');

$basic_html_panel = <<<CODE
<input type="radio" name="format" value="html" checked>html
<input type="radio" name="format" value="php">php<br />
<input type="text" name="name" />
<input type="submit" value="Cria" />
CODE;

$basic_html_panel .= <<<CODE
<br />
<textarea cols="100" rows="12">
$file_content
</textarea>
CODE;

print $basic_html_panel;
