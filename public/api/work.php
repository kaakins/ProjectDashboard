<?php
require '../../app/common.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  require 'workPost.php';
  exit;
}

// Get the taskId from URL params
$taskId = intval($_GET['taskId'] ?? 0);

if($taskId <1) {
  throw new Exception('Invalid Task ID');
}

// go to DB & get all work associated with taskId
$workArr = Work::getWorkByTaskId($taskId);

// 2. Convert to JSON
$json = json_encode($workArr, JSON_PRETTY_PRINT);

// 3. Print
header('Content-Type: application/json');
echo $json;
