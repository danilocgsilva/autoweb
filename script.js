var telas = ["basic_html", "basic_html_2", "drupal_module"];

function switchScreen(tela) {
  for (key in telas) {

    if (telas[key] === tela) {
      document.getElementById(tela).style.display = 'none';
    } else {
      document.getElementById(tela).style.display = 'block';
    }

  }
}
