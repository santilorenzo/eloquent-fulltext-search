<?php

namespace test;

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Illuminate\Database\Eloquent\Model;
use Santilorenzo\FullTextSearch\Traits\FullTextSearch;

class News extends Model
{
    use FullTextSearch;

    /**
     * The columns of the full text index
     */
    protected $searchable = [
        'title',
    ];
}