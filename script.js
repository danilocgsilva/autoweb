function clearselect() {
  document.getElementById('form_download').innerHTML = '';
}

function fillPanel(chunk) {
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // Wrinting function into HTML
      document.getElementById('dynamic_content').innerHTML = xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET", chunk + '/panel.php', true);
  xmlhttp.send();
  document.getElementById('chunk').value = chunk;
}
