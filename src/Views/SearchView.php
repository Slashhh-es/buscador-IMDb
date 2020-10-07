<?php
namespace App\Views;

use App\Core\CoreView;

class SearchView extends CoreView 
{

    public function renderList(array $list)
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
                $content .= '
                            <tr>
                                <th scope="row">'.$item->imdbID.'</th>
                                <td>'.$item->Title.'</td>
                                <td>'.$item->Year.'</td>
                                <td><img src="'.$item->Poster.'" width="100" alt="'.$item->Title.'"></td>
                            </tr>';
            }
            $content .= '
                </tbody>
            </table>';
        }
        
        return $this->setContent($content)
                    ->getHtml();
    }
}