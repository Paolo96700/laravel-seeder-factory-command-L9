<?php

use App\Models\Product;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('products', function () {
    $products = Product::all('id', 'name', 'price', 'evidence');
    $this->table(['ID', 'Nome', 'Prezzo', 'Visibillità'], $products->toArray());
})->purpose('questo comando ti permette di vedere i prodotti');

Artisan::command('products:update-featured', function () {
    $evidenceProducts = Product::where('evidence', 1)->get(['id', 'name', 'price', 'evidence']);
    if(Product::where('evidence', 1)){
        $this->table(['ID', 'Nome', 'Prezzo', 'Visibillità'], $evidenceProducts->toArray());
    } else{
        echo "non ci sono prodotti in evidenza";
    }
})->purpose('questo comando ti permette di vedere i prodotti in evidenza');
