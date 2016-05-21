<?php
/**
* $identifier: String that goes in the 'id' and 'name'
* $type: Type of the input (e.g. text, hidden, etc)
* $label: Label that goes with the input
* $breaking: Final strings that will put spaces to the next element (e.g. "<br /><br />")
* $break_label: A boolean value that put (or not) a "<br />" after label
*/
function print_input($identifier, $type, $label, $breaking, $break_label, $initial_value) {
  print "<label for='{$identifier}'>{$label}</label>";
  if ($break_label)
    print '<br />';
  print "\n";
  print "<input type='{$type}' id='{$identifier}' name='{$identifier}'";
  if ($initial_value != "")
    print " value='{$initial_value}'";
  print ' />' . "\n";
  print $breaking;
}
 ?>
