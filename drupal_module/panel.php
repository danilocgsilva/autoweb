<?php
$drupal_module = <<<CODE
<label for="name">Module name: </label>
<input id="name" name="name" type="text" /><br /><br />
<label for="module_machine_name">(Optional) Machine name:</label>
<input id="module_machine_name" name="module_machine_name" type="text" /><br /><br />
<div>Module description:</div>
<textarea form="form_download" rows="3" cols="61"></textarea><br />
<input type="submit" value="Downloads" />
CODE;
print $drupal_module;
