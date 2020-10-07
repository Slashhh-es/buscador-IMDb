<?php

namespace App\Controllers;

use App\Core\CoreController;
use App\Views\SearchView;

class SearchController extends CoreController 
{

    public function index()
    {
        $list = [];
        $searchView = new SearchView();
        return $searchView->renderList($list);
    }
}