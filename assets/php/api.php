<?php
header("Content-Type: application/json");

$json_content = file_get_contents('task.json');

echo $json_content;