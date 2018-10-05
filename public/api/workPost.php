<?php

$work = new Work($_POST);

$work->create();

echo json_decode($work);
