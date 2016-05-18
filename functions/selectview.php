<?php
/**
* $array_options: array with another arrays, in the following strincture:
*   $array['machine_name']: Options machine name
*   $array['readale_content']: Options human readable content
* $page_source: the value entered in the variable that indicates page exibition
*/
function print_selectView_options($array_options, $page_source) {
  $html_string = "";

  foreach($array_options as $option) {

    // Option tag open
    $html_string .= "<option value=\"{$option['machine_name']}\"";
    if ($page_source == 'basic_html')
      $html_string .= " selected=\"selected\"";
    $html_string .= ">";

    // Option readable content
    $html_string .= $option['readable_content'];

    // Option closing
    $html_string .= "</option>";
  }

  print $html_string;
}
 ?>
