<?php
require '../../app/common.php';

$team = Team::findAll();

$json = json_encode($teams, JSON_PRETTY_PRINT);

header('Content-type: application/json');
echo json_encode($json);
