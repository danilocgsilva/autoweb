'use strict';

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
}
