<<?php
require '../../app/common.php';

$team = Team::findAll();

header('Content-type: application/json');
echo json_encode($team);
