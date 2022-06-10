# Laravel First steps

- installa laravel
- avvia sever locale `php artisan serve` e `npm run watch`
- installa dipendenze npm `npm i`
- installa bootstrap `npm i bootstrap`
- creazione layout

## Creazine layout

Copiare contenuto del file welcome.blade.php nel file /views/layouts/app.blade.php (da creare).

Aggiungere dei segnaposto usando la direttiva blade `@yield('nome_del_segnaposto')`

Il file sará inizialmente cosi:

```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


</head>

<body>
    <header></header>

    <!-- Aggiungo segnaposto per il contenuto principale -->
    <main>
        @yield('content')
    </main>

    <footer></footer>

</body>

</html>


```

## Aggingere assets css usando la funzione `asset()` di laravel.
## Dentro l'head aggiungere link

```html
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Se necessario aggiungere un'altro segnaposto per css customizzato per pagine -->
    @yield('custom-css')
```

## Aggiungi script al file js pubblico al layout, prima della chiusura del tag body.

```html
    <script src="{{asset('js/app.js')}}"></script>
    <!-- Se necessario aggiungere un'altro segnaposto per js customizzato per pagine -->
    @yield('script-footer')
```

## Per aggiungere le immagini, creare cartella `img`` dentro `resources` e modificare file `webpack.mix.js` aggiungento questi metodi

```js
.copyDirectory('resources/img', 'public/img')
.sass('resources/sass/aboutme.scss', 'public/css')
    .options({
        processCssUrls: false
    });
```  

Il risultato sará:

```js
mix
.js('resources/js/app.js', 'public/js')
.copyDirectory('resources/img', 'public/img')
.sass('resources/sass/app.scss', 'public/css')
.options({
    processCssUrls: false
});
```

Il percorso dell immagini diventa il seguente: 

src="{{asset('img/')}}

public/img

## Estendere il layout

Per Estendere il layout creare prima delle views

### crea rotta

Ad esempio rotta news che punta alla view news

```php
Route::get('/news', function () {
    return view('news');
})->name('news');
```

### crea view abbinata alla rotta

Dentro `resources/views/` crea file per la view chiamato ad esempio 
`news.blade.php`

ed estendi il layout `app`

```php
@extends('layouts.app')

@section('content')
<h1>My Blog</h1>
@endsection

```


## Stampare dei dati salvandoli in un file di config.

Creato nuovo file chiamato db.php dentro `/config`
che restituisce un array associativa di dati.


```php

return [
    'posts' => [
        [],
        [],
    ],
    'products' => [
        [],
        []
    ]
]

```

Per richiamare i dati contenuti in questo file si usa la funzione laravel `config('db.posts')` oppure `config('db.products')`
I dati li salviamo in una variabile e li passiamo alla view dentro alla closure della rotta.

Nel file web.php

```php

Route::get('/news', function () {
    $posts = config('db.posts');
    //dd($posts);
    return view('news', compact('posts'));
})->name('news');
```
## active link

```php

$route = Route::current();
 
$name = Route::currentRouteName(); => ci restituisce il nome della view
 
$action = Route::currentRouteAction();

nel link class=" {{ Route::currentRouteName() === 'home' ? 'active': ''}}
```

## passare parametri Route, funzionie abort()

```php

Route::get('/products', function ($id) {
    
    $products = config('db.products');

   
})->name('products.index'); // convenzione products.index tutti prodotti

Route::get('/products/{id}', function ($id) {
    
    $products = config('db.products');

    $dd(id);

    if ($id >= 0 && is_numeric($id) && $id < count($products)){

        $pasta = $products[$id];
        return view ('products.show', compact('pasta'))

        // dd($id)

    }else{
        abort(404)
    }
})->name('products.show'); // convenzione products.show singolo prodotto

```

## funzionie abort()

possiamo passare il codice d'errore con abort(404)

## creare link:

uso index nel ciclio foreach($index => $pasta) per renderizzare il prodotto e uso index come id 

```php 

<a> href=" {{ route ('products.show', $index) }}"</a>


```

## refactorin:

dentro la cartella product troviamo sia show che products che diventa index (convenzione per pagina render tutti elementi)

```php 

<p> {{ $pasta['text'] }} </p>

<p> {!! $pasta['text'] !!} </p> => renderizza anche html nel renderizzare testo, non sicuro!

```


 
```php

## Filtrare dati e dividerli in categorie

Route::get('/products', function ($id) {
    
    $products_data = config('db.products');

        /* Filtra per tipo usando array_filter */

    $ paste_lunghe =  array_filter($products, function($el){
        return $el['tipo'] = 'lunga' // ci da solo la pasta con tipo = lunga
    });

    $paste_corte = array_filter($products, function($el){
        return $el['tipo'] = 'corta' // ci da solo la pasta con tipo = lunga
    });

        $paste_cortissima = array_filter($products, function($el){
        return $el['tipo'] = 'cortissima' // ci da solo la pasta con tipo = lunga
    });

    /* Filtra per tipo usando collection, sul quale possiamo usare una serie di metodi della classe collection*/

    $products_collection= collect($products_data);

    $lunghe = $products_collection->where('tipo','lunga');
    $corte = $products_collection->where('tipo','corta');
    $cortissime = $products_collection->where('tipo','cortissima');

    $data = [
        'lunghe' => $lunghe,
        'corte' => $corte,
        'cortissime' => $cortissime
    ]

return view('products.index', compact('products'))
   
})->name('products.index'); // convenzione products.index tutti prodotti


@foreach($products as $type => $data)

<h2>{{ $type }}<h2>

@foreach($data as $index => $pasta)

$pasta['titolo'], etc

@endforeach

@endforeach