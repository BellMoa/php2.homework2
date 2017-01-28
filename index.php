<?php

require __DIR__ . '/model/model.php';

$news=getAllNews();

include __DIR__ . '/view/index.php';