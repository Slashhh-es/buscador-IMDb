<?php
namespace App\Views;

use App\Config;
use App\Core\CoreView;

class SearchView extends CoreView 
{

    public function renderList(array $list)
    {
        $content = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($list)) {
                $content .= $this->getListHtml($list);
            } else {
                $content .= '<div class="alert alert-warning text-center my-5" role="alert">No hay resultados. Búsca otra vez!!</div>';
            }
        } else {
            $content .= '<div class="alert alert-info text-center my-5" role="alert">Haz una búsqueda para empezar!!</div>';
        }
        
        return $this->setContent($content)
                    ->getHtml();
    }

    private function getPoster($poster)
    {
        return (!empty($poster) && $poster != 'N/A') ? $poster : Config::get('IMG_DEFAULT');
    }

    private function getListHtml($list)
    {
        $content = '';

        if (!empty($list)) {
            $content .= '
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Año</th>
                            <th scope="col">Imagen</th>
                        </tr>
                    </thead>
                    <tbody>';
            foreach($list as $item) {
                $content .= $this->getListItemHtml((object)$item);
            }
            $content .= '
                </tbody>
            </table>';
        }

        return $content;
    }

    private function getListItemHtml($item)
    {
        $content = '';

        $content .= '
            <tr>
                <th scope="row">'.$item->imdbID.'</th>
                <td>'.$item->Title.'</td>
                <td>'.$item->Year.'</td>
                <td><img src="'.$this->getPoster($item->Poster).'" width="100" alt="'.$item->Title.'"></td>
            </tr>';
            
        return $content;
    }
}