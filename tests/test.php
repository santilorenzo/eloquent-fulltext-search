<?php

require_once  __DIR__ . '/News.php';

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

$news = News::search('test')->get();