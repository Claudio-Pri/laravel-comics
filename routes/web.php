<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $menuLinks = [
        [
            'url' => '#',
            'label' => 'Characters',

        ],
        [
            'url' => '#',
            'label' => 'Comics',
            
        ],
        [
            'url' => '#',
            'label' => 'Movies',
            
        ],
        [
            'url' => '#',
            'label' => 'TV',
            
        ],
        [
            'url' => '#',
            'label' => 'Games',
            
        ],
        [
            'url' => '#',
            'label' => 'Collectibles',
            
        ],
        [
            'url' => '#',
            'label' => 'Videos',
            
        ],
        [
            'url' => '#',
            'label' => 'Fans',
            
        ],
        [
            'url' => '#',
            'label' => 'News',
            
        ],
        [
            'url' => '#',
            'label' => 'Shop',
            
        ],
    ];
    $comics = config('comics');
    // dd($comics);
    return view('welcome', compact('comics', 'menuLinks'));
    
})->name('home');

Route::get('/chi-siamo', function () {
    return view('subpages.about');
})->name('about');

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
