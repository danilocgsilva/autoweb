window.onload = function () {

    function switchScreen(tela) {

        for (var i = 0; i < telas.length; i++) {
            if (telas[i] == tela) {
                //document.getElementById(telas[i]).style.display = 'inline-block';
                document.getElementById(telas[i]).className = "inlineblock";
            } else {
                //document.getElementById(telas[i]).style.display = 'none';
                document.getElementById(telas[i]).className = "switchingForm";
            }
        }
    }

    var selectPanel = document.getElementById("selectPanel");
    var wordpress_plugin_description_element = document.getElementById("plugin-php");
    var wordpress_plugin_description_initial_value = wordpress_plugin_description_element.value;
    var pluginNameEl = document.getElementById("wordpress_plugin_name");
    var pluginDescriptionEl = document.getElementById("wordpress_plugin_description");
    var pluginLicenseEl = document.getElementById("wordpress_plugin_license");
    var pluginAuthorNameEl = document.getElementById("wordpress_plugin_author_name");
    var pluginAuthorUriEl = document.getElementById("wordpress_plugin_author_uri");
    var forms_holder = document.querySelector(".inner-content.form_holder");
    var form_children = forms_holder.children;
    var telas = [];
    for (var i = 0; i < form_children.length; i++) {
      telas.push(form_children[i].id);
    }

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
