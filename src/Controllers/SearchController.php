<?php
/**
 * Controlador de las búsquedas
 *
 * @package    Buscador-IMDb\App
 * @author     Javier Glez
 * @since      0.1.0
 */

namespace App\Controllers;

use App\Config;
use App\Core\CoreController;
use App\Views\SearchView;

use Rooxie\OMDb;

class SearchController extends CoreController 
{

    /**
     * Devuelve el HTML principal de búsqueda
     *
     * @return string Html a renderizar
     */
    public function index()
    {
        $list = $this->findMovies();
        $searchView = new SearchView();
        return $searchView->renderList($list);
    }

    /**
     * Buscador de películas
     *
     * @return array Pelis encontradas
     */
    private function findMovies()
    {
        $return = [];

        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);
                $omdb = new OMDb(Config::get('OMDB_KEY'));
                $movies = $omdb->search($search, 'movie');
                $return = ($movies['totalResults'] > 0) ? $movies['Search'] : [];
            }
        } catch (\Throwable $e) {}
        
        return $return;
    }
}