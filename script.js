function clearselect() {
  document.getElementById('form_download').innerHTML = '';
}

function fillPanelWPPlugin() {
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // Wrinting function into HTML
      document.getElementById('form_download').innerHTML = xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET", "wordpress_plugin/panel.php", true);
  xmlhttp.send();
}

function fillPanelBasivHTML() {
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // Wrinting function into HTML
      document.getElementById('form_download').innerHTML = xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET", "basic_html/panel.php", true);
  xmlhttp.send();
}

/*
function changeMedia() {
  alert(document.getElementByName('selecttask').value);
  alert('hoho');
}
*/
