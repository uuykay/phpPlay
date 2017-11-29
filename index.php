<h1>Test</h1>
<?php
$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];

echo "<p>You are running the
➝ file:<br /><b>$file</b>.</p>\n";

echo "<p>You are running the
➝ user:<br /><b>$user</b>.</p>\n";

echo "<p>You are running the
➝ server:<br /><b>$server</b>.</p>\n";

?>