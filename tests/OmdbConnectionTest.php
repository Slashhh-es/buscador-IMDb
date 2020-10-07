<?php
/**
 * Pruebas de conexión con OMDb
 *
 * @package    Buscador-IMDb\Tests
 * @author     Javier Glez
 * @since      0.1.0
 */

namespace Tests;

require __DIR__ . '/../vendor/autoload.php';

use App\Config;
use Rooxie\OMDb;
use PHPUnit\Framework\TestCase;

class OmdbConnectionTest extends TestCase 
{

    /**
     * Prueba de conexión con el Api de OMDb
     *
     * @return void
     */
    public function testConnectToOmdb()
    {
        // Busqueda de películas para comprobar si funciona la conexión
        $omdb = new OMDb(Config::get('OMDB_KEY'));
        $movies = $omdb->search('matrix', 'movie', 2016, 1);
        $this->assertArrayHasKey('Search', $movies);
    }
}