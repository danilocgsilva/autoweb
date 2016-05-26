<form
  <?php if ($page_source == 'drupal_module') echo 'style="display: inline-block"'; ?> id="drupal_module" class="switchingForm" name="drupal_module_download" method="GET" action="includes/drupal_module_download.php">

  <label for="name">Module name: </label>
  <input id="name" name="name" type="text" /><br /><br />

  <label for="module_machine_name">(Optional) Machine name:</label>
  <input id="module_machine_name" name="module_machine_name" type="text" /><br /><br />
  <div>Module description:</div>
  <textarea id="module_description" name="module_description" form="drupal_module" rows="3" cols="61"></textarea><br />
  <input type="submit" value="Downloads" />
</form>
