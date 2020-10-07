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
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="">
                <meta name="author" content="">

                <title>Busca tu peli</title>

                <link rel="stylesheet" href="./assets/css/main.css">
            </head>

            <body>
                <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
                    <h5 class="my-0 mr-md-auto font-weight-normal">Busca tu peli</h5>
                </div>

                <div class="container px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h1 class="display-4">Peliculas</h1>
                    <form method="post">
                        <div class="form-row">
                            <div class="col-10">
                                <label class="sr-only" for="inlineFormInput">Name</label>
                                <input type="text" name="search" class="form-control mb-2" placeholder="Buscar peli">
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary btn-block mb-2">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="container">
                    <div>
                        '.$this->content.'
                    </div>

                    <footer class="pt-4 my-md-5 pt-md-5 border-top">
                        <div class="row">
                            <div class="col-12">
                                <small class="d-block mb-3 text-muted">&copy; 2020 Javier Glez</small>
                            </div>
                        </div>
                    </footer>
                </div>

                <script src="./assets/js/main.js"></script>
            </body>
        </html>';
    }
}