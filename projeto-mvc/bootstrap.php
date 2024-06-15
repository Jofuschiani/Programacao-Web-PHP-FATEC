<?php

require __DIR__ . "/vendor/autoload.php";

$metodo = $_SERVER['REQUEST_METHOD'];
$caminho = $_SERVER['PATH_INFO'] ?? '/';

$r = new Php\Projetomvc\Router($metodo, $caminho);

// ---------- Author ----------

$r->get('/authors', 'Php\Projetomvc\Controllers\AuthorsController@index');

$r->get('/authors/{action}/{status}', 'Php\Projetomvc\Controllers\AuthorsController@index');

$r->get('/authors/insert', 'Php\Projetomvc\Controllers\AuthorsController@insert');

$r->post('/authors/new', 'Php\Projetomvc\Controllers\AuthorsController@new');

$r->get('/authors/update/id/{id}', 'Php\Projetomvc\Controllers\AuthorsController@update');

$r->post('/authors/edit', 'Php\Projetomvc\Controllers\AuthorsController@edit');

$r->get('/authors/delete/id/{id}', 'Php\Projetomvc\Controllers\AuthorsController@delete');

$r->post('/authors/delete', 'Php\Projetomvc\Controllers\AuthorsController@destroy');

// ---------- Books ----------

$r->get('/books', 'Php\Projetomvc\Controllers\BooksController@index');

$r->get('/books/{action}/{status}', 'Php\Projetomvc\Controllers\BooksController@index');

$r->get('/books/insert', 'Php\Projetomvc\Controllers\BooksController@insert');

$r->post('/books/new', 'Php\Projetomvc\Controllers\BooksController@new');

$r->get('/books/update/id/{id}', 'Php\Projetomvc\Controllers\BooksController@update');

$r->post('/books/edit', 'Php\Projetomvc\Controllers\BooksController@edit');

$r->get('/books/delete/id/{id}', 'Php\Projetomvc\Controllers\BooksController@delete');

$r->post('/books/delete', 'Php\Projetomvc\Controllers\BooksController@destroy');

// ---------- Loans ----------

$r->get('/loans', 'Php\Projetomvc\Controllers\LoansController@index');

$r->get('/loans/{action}/{status}', 'Php\Projetomvc\Controllers\LoansController@index');

$r->get('/loans/insert', 'Php\Projetomvc\Controllers\LoansController@insert');

$r->post('/loans/new', 'Php\Projetomvc\Controllers\LoansController@new');

$r->get('/loans/update/id/{id}', 'Php\Projetomvc\Controllers\LoansController@update');

$r->post('/loans/edit', 'Php\Projetomvc\Controllers\LoansController@edit');

$r->get('/loans/delete/id/{id}', 'Php\Projetomvc\Controllers\LoansController@delete');

$r->post('/loans/delete', 'Php\Projetomvc\Controllers\LoansController@destroy');

// ---------- Member ----------

$r->get('/members', 'Php\Projetomvc\Controllers\MembersController@index');

$r->get('/members/{action}/{status}', 'Php\Projetomvc\Controllers\MembersController@index');

$r->get('/members/insert', 'Php\Projetomvc\Controllers\MembersController@insert');

$r->post('/members/new', 'Php\Projetomvc\Controllers\MembersController@new');

$r->get('/members/update/id/{id}', 'Php\Projetomvc\Controllers\MembersController@update');

$r->post('/members/edit', 'Php\Projetomvc\Controllers\MembersController@edit');

$r->get('/members/delete/id/{id}', 'Php\Projetomvc\Controllers\MembersController@delete');

$r->post('/members/delete', 'Php\Projetomvc\Controllers\MembersController@destroy');



$resultado = $r->handler();

if (!$resultado) {
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

if ($resultado instanceof Closure) {
    echo $resultado($r->getParams());
} elseif (is_string($resultado)) {
    $resultado = explode("@", $resultado);
    $controller = new $resultado[0];
    $resultado = $resultado[1];
    echo $controller->$resultado($r->getParams());
}