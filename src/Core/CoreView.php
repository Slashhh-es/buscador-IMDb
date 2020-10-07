<?php
namespace App\Core;

class CoreView 
{

    private $content = '';

    protected function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    protected function getHtml()
    {
        return '
        <!doctype html>
        <html lang="es">
            <head>
                <title>Busca tu peli</title>
            </head>

            <body>
                
                '.$this->content.'
                    
            </body>
        </html>';
    }
}