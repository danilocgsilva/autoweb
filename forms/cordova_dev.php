<form
    <?php if ($page_source == 'cordova_dev') echo 'style="display: inline-block"'; ?> id="cordova_dev" class="switchingForm" name="cordova_dev">

    <?php print_input("buttonName", "text", "Button Name", '<br /><br />', true, ""); ?>
    <input id="add_cordova_button" type="button" value="Add Button" />

  <textarea id="cordova_textarea"></textarea>
  </form>
