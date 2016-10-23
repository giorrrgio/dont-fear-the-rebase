<?php

include 'vendor/autoload.php';

use giorrrgio\PugRoma\Meeting;
use giorrrgio\PugRoma\Pugger;

$puggers = [
    new Pugger('Giorgio', 'AdEspresso', 'giorrrgio'),
    new Pugger('Pres. Max', 'self-employed', 'garak')
];

$meeting = new Meeting(
    new \DateTime('2015-10-25 19:00'),
    'Don\'t fear the rebase',
    'LUISS EnLabs',
    $puggers
);

$templates = new League\Plates\Engine('./templates');

echo $templates->render('meeting', ['meeting' => $meeting->render()]);