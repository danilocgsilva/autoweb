
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

window.onload = function () {
    var selectPanel = document.getElementById("selectPanel");
    var wordpress_plugin_description_element = document.getElementById("plugin-php");
    var wordpress_plugin_description_initial_value = wordpress_plugin_description_element.value;
    var pluginNameEl = document.getElementById("wordpress_plugin_name");
    var pluginDescriptionEl = document.getElementById("wordpress_plugin_description");
    var pluginLicenseEl = document.getElementById("wordpress_plugin_license");
    var pluginAuthorNameEl = document.getElementById("wordpress_plugin_author_name");
    var pluginAuthorUriEl = document.getElementById("wordpress_plugin_author_uri");

    updatePHPfile1(wordpress_plugin_description_initial_value);

    selectPanel.onchange = function () {
        switchScreen(this.value);
    }

    pluginNameEl.onkeyup = function () {
        updatePHPfile1(wordpress_plugin_description_initial_value);
    };
    pluginDescriptionEl.onkeyup = function () {
        updatePHPfile1(wordpress_plugin_description_initial_value);
    };
    pluginLicenseEl.onkeyup = function () {
        updatePHPfile1(wordpress_plugin_description_initial_value);
    };
    pluginAuthorNameEl.onkeyup = function () {
        updatePHPfile1(wordpress_plugin_description_initial_value);
    };
    pluginAuthorUriEl.onkeyup = function () {
        updatePHPfile1(wordpress_plugin_description_initial_value);
    };

}

function updatePHPfile1(wordpress_plugin_description_initial_value) {

    var pluginname = document.getElementById("wordpress_plugin_name").value;
    var plugindescription = document.getElementById("wordpress_plugin_description").value;
    var pluginlicense = document.getElementById("wordpress_plugin_license").value;
    var pluginauthor = document.getElementById("wordpress_plugin_author_name").value;
    var pluginauthoruri = document.getElementById("wordpress_plugin_author_uri").value;

    var pluginTextAreaElement = document.getElementById("plugin-php");
    var newText = wordpress_plugin_description_initial_value
        .replace('%PLUGINNAME%', pluginname)
        .replace('%PLUGINDESCRIPTION%', plugindescription)
        .replace('%PLUGINLICENSE%', pluginlicense)
        .replace('%PLUGINAUTHOR%', pluginauthor)
        .replace('%PLUGINAUTHORURI%', pluginauthoruri);

    pluginTextAreaElement.value = newText;
}

