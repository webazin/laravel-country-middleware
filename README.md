#Laravel country access control package

#install
<hr/>

1-`composer require webazin/country-middleware`

2-insert in laravel < 5
<br>
`config/app.php`
<br>
`\Webazin\CountryMiddleware\CountryMiddlewareServiceProvider::class`
<br>
3-`php artisan vendor:publish`
<br>
4-`Webazin\CountryMiddleware\CountryMiddlewareServiceProvider`

#use
<hr>

in your route add 

`->middleware('countryCheck')`

<hr>
<br>

[webazin.net]('https://webazin.net')

