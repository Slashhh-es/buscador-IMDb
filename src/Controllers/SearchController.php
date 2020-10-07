<?php
namespace App\Controllers;

use App\Config;
use App\Core\CoreController;
use App\Views\SearchView;

use Rooxie\OMDb;

class SearchController extends CoreController 
{

    public function index()
    {
        $list = $this->findMovies();
        $searchView = new SearchView();
        return $searchView->renderList($list);
    }

    
    private function findMovies()
    {
        $return = [];

        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);
                $omdb = new OMDb(Config::get('OMDB_KEY'));
                $movies = $omdb->search($search, 'movie');
                $return = $movies['Search'];
            }
        } catch (\Throwable $e) {}
        
        return $return;
    }
}