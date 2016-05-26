<form
  <?php if ($page_source == 'wordpress_plugin') echo 'style="display: inline-block"'; ?> id="wordpress_plugin" class="switchingForm" name="wordpress_plugin_download" method="GET" action="includes/wordpress_plugin_download.php">

  <?php print_input("wordpress_plugin_name", "text", "Plugin's name", '<br /><br />', true, "(TYPE A NAME)"); ?>
  <?php print_input("wordpress_plugin_description", "text", "Plugin's description", "<br /><br />", true, "(TYPE A DESCRIPTION)"); ?>
  <?php print_input("wordpress_plugin_license", "text", "Plugin's license", "<br /><br />", true, "(TYPE A LICENSE NAME (E.G. GPLV2))"); ?>
  <?php print_input("wordpress_plugin_author_name", "text", "Plugin's author's name", "<br /><br />", true, '(TYPE THE AUTHOR&#39;S NAME)'); ?>
  <?php print_input("wordpress_plugin_author_uri", "text", "Plugin's author's URI", "<br /><br />", true, "(HAVE A SITE?)"); ?>

  <label for="plugin-php">Basic code for yourplugin.php</label>
  <textarea id="plugin-php" name="plugin-php" form="wordpress_plugin" rows="13">
    <?php echo $wordpress_plugin_variable; ?>
  </textarea>
</form>
