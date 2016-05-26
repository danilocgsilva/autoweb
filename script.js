function toId(name) {
  var nameParts = name.split(" ");
  var idNamed = "";

  // To follow javascript convesion, the first character mus be lowercase
  nameParts[0] = nameParts[0].charAt(0).toLowerCase() + nameParts[0].slice(1);


  for (var i = 1; i < nameParts.length; i++) {
    nameParts[i] = nameParts[i].charAt(0).toUpperCase() + nameParts[i].slice(1);
  }
  for (var j in nameParts) {
    idNamed += nameParts[j];
  }
  return idNamed;
}

function toVar(name) {

}

window.onload = function () {

  // Functions where elements must be already created
    function switchScreen(tela) {
        for (var i = 0; i < telas.length; i++) {
            if (telas[i] == tela) {
                document.getElementById(telas[i]).className = "inlineblock";
            } else {
                document.getElementById(telas[i]).className = "switchingForm";
            }
        }
    }




    // Main index elements
    var selectPanel = document.getElementById("selectPanel");
    var forms_holder = document.querySelector(".inner-content.form_holder");


    // Form wordpress_plugin elements
    var wordpress_plugin_description_element = document.getElementById("plugin-php");
    var pluginNameEl = document.getElementById("wordpress_plugin_name");
    var pluginDescriptionEl = document.getElementById("wordpress_plugin_description");
    var pluginLicenseEl = document.getElementById("wordpress_plugin_license");
    var pluginAuthorNameEl = document.getElementById("wordpress_plugin_author_name");
    var pluginAuthorUriEl = document.getElementById("wordpress_plugin_author_uri");


    // Form cordova_dev elements
    var inpButtonName = document.getElementById("buttonName");
    var btnAddCordovaButton = document.getElementById("add_cordova_button");
    var atxtCordovaTextarea = document.getElementById("cordova_textarea");


    // Values initialization
    var wordpress_plugin_description_initial_value = wordpress_plugin_description_element.value;
    var form_children = forms_holder.children;
    var telas = [];

    for (var i = 0; i < form_children.length; i++) {
      telas.push(form_children[i].id);
    }


    // Constructs
    updatePHPfile1(wordpress_plugin_description_initial_value);
    selectPanel.onchange = function() {
      switchScreen(this.value);
    }

    // Methods insite wordpress plugin form
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


    // Methods insite cordova_dev form
    btnAddCordovaButton.onclick = function() {
      toCordovaCode();
    }

    function toCordovaCode() {
      areaText = "<input type=\"button\" id=\"" + toId(inpButtonName.value) + "\" name=\"" + toId(inpButtonName.value) + "\" value=\"" + inpButtonName.value + "\" />";
      atxtCordovaTextarea.value = areaText;
    }
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
