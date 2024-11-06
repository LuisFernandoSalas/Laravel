<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ("Bienvenido a la pagina principal");
});

Route::get('curso', function () {
    return ("Bienvenido a la pagina de cursos");
});

Route::get('curso/{curso}', function ($curso) {
    return ("Bienvenido a la pagina de el curso:$curso");
});

Route::get('curso/create', function () {
    return ("Bienvenido a la pagina de creacion de cursos");
});