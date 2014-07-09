function clearselect() {
  document.getElementById('form_download').innerHTML = '';
}

function fillPanelWPPlugin() {
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // Função que escreve no html
      document.getElementById('form_download').innerHTML = xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET", "wordpress_plugin/panel.php", true);
  xmlhttp.send();
}
