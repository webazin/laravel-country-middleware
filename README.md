#Laravel country access control package

#install
<hr/>

`composer require webazin/country-middleware`

insert in laravel < 5
<br>
`config/app.php`
<br>
`\Webazin\CountryMiddleware\CountryMiddlewareServiceProvider::class`
<br>
and 
<br>
`php artisan vendor:publish`
<br>
and select <br> `Webazin\CountryMiddleware\CountryMiddlewareServiceProvider`

#use
<hr>

in your route add 

`->middleware('countryCheck')`

<hr>
<br>

[webazin.net]('https://webazin.net')

