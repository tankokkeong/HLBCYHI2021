<?php 

include __DIR__ . '/vendor/autoload.php';

use Rubix\ML\Datasets\Labeled;
use Rubix\ML\Classifiers\KNearestNeighbors;
use Rubix\ML\Datasets\Unlabeled;
use Rubix\ML\CrossValidation\Metrics\Accuracy;
use Rubix\ML\CrossValidation\HoldOut;

$samples = [
    [3, 4, 50.5], //[communication skill, attractiveness, timespent(week)]
    [1, 5, 24.7],
    [4, 4, 62.0],
    [3, 2, 31.1],
    [4, 2, 51.1],
    [4, 2, 31.1],
    [2, 1, 41.1],
];

$labels = ['married', 'divorced', 'married', 'divorced', 'divorced', 'divorced','divorced'];

$dataset = new Labeled($samples, $labels);

$estimator = new KNearestNeighbors(3);

$estimator->train($dataset);

var_dump($estimator->trained());

$real_data = [
    [4, 4, 50.5]
];

$real_label = ['married'];

$dataset2 = new Labeled($real_data, $real_label);

$validator = new HoldOut(0.2);

$score = $validator->test($estimator, $dataset2, new Accuracy());

echo $score;



?>