<?php

$data = [1, "Kuldeep", 150.01, "Bangalore"];
echo "<pre>";
print_r($data);
echo "</pre>";

$copiedData = $data;

unset($copiedData[2]);
$copiedData[] = "PHP Course";

echo "<pre>";
print_r($data);
echo "</pre>";

echo "<pre>";
print_r($copiedData);
echo "</pre>";

unset($data[0]);

echo "<pre>";
print_r($data);
echo "</pre>";

echo "<pre>";
print_r($copiedData);
echo "</pre>";