<?php

include_once ('Tasks/Traits/TaskHelper.php');
include_once ('Tasks/SolutionHelper/ISolution.php');

$dir = "Tasks";
$catalog = opendir($dir);

while ($filename = readdir($catalog)) {
    if (strrpos($filename, ".php")) {
        $filename = $dir . "/" . $filename;
        include_once($filename);
    }
}
closedir($catalog);

$exampleArray = [
    ['id' => 1, 'date' => "12.01.2020", 'name' => "test1"],
    ['id' => 2, 'date' => "02.05.2020", 'name' => "test2"],
    ['id' => 4, 'date' => "08.03.2020", 'name' => "test4"],
    ['id' => 1, 'date' => "22.01.2020", 'name' => "test1"],
    ['id' => 2, 'date' => "11.11.2020", 'name' => "test4"],
    ['id' => 3, 'date' => "06.06.2020", 'name' => "test3"]
];

$filteredArray = [];

$task1 = new \Tasks\Task1($exampleArray);
$task1->getResult();

$task2 = new \Tasks\Task2($exampleArray);
$task2->getResult();

$task3 = new \Tasks\Task3($exampleArray);
$task3->getResult();

$task4 = new \Tasks\Task4($exampleArray);
$task4->getResult();

