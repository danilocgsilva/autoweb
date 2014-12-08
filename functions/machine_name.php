<?php

function machine_name($original, $codification = 'utf8') {

  $machine_name = mb_strtolower($original, $codification);

  $machine_name = preg_replace('#( - |-| )#', '_', $machine_name);

  $machine_name = preg_replace("#({|}|[|]|\(|\)|'|,)#", "", $machine_name);

  $accents  = array("à", "ã", "â", "á", "ê", "é", "__", "í", "õ", "ú", "ç");
  $replaces = array("a", "a", "a", "a", "e", "e",  "_", "i", "o", "u", "c");
  $machine_name = str_replace($accents, $replaces, $machine_name);

  return $machine_name;
}
