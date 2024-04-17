<?php
$json_content = file_get_contents('task.json');
header("Content-Type: application/json");

echo $json_content;