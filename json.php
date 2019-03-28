<?php
$fail = file_get_contents('https://picsum.photos/list');
$decode = json_decode($fail, TRUE);
foreach ($decode as $array) {
echo '<table cellspacing = "0" border = "1" width = "700">';
if(array_key_exists('post_url',$array)) {
  echo '<tr aling = "center">';
  //echo '<td width = "25%">';
$data_output = '<img src="' . $array['post_url'] . '/download"/ width="400" height="300">';
echo $data_output;
//echo '</td>';
echo '</tr>';
}
else {
  echo 'error';
}
  foreach ($array as $key => $value) {
    echo '<tr aling = "center">';
    echo '<td width = "25%">';
    echo $key;
    echo '</td>';
    echo '<td width = "25%">';
    echo $value;
    echo '</td>';
    //var_dump($);
      }
}
echo '</table>';
//

?>
