
var telas = ["basic_html", "basic_html_2", "wordpress_plugin", "drupal_module"];

function switchScreen(tela) {

  for (var i = 0; i < telas.length; i++) {
    if (telas[i] == tela) {
      document.getElementById(telas[i]).style.display = 'inline-block';
    } else {
      document.getElementById(telas[i]).style.display = 'none';
    }
  }
}

window.onload = function() {

  var selectPanel = document.getElementById("selectPanel");
  selectPanel.onchange = function() {
    switchScreen(this.value);
  }

  var wordpress_plugin_description_element = document.getElementById("plugin-php");
  var wordpress_plugin_description_initial_value = wordpress_plugin_description_element.value;
  // Set initial value to plugin name
  wordpress_plugin_description_element.value = wordpress_plugin_description_initial_value
    .replace('%PLUGINNAME%', '(TYPE A NAME)')
    .replace('%PLUGINDESCRIPTION%', '(TYPE A DESCRIPTION)');
}
