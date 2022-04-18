#Laravel country access control package

#install
<hr/>

`composer require webazin/country-middleware`

insert in laravel < 5
<br>
`config/app.php`
`\Webazin\CountryMiddleware\CountryMiddlewareServiceProvider::class`
<br>
and 
<br>
`php artisan vendor:publish`
<br>
select `Webazin\CountryMiddleware\CountryMiddlewareServiceProvider`

#use
<hr/>
in your route add 

`->middleware('countryCheck')`

<hr>
<br>
<br>
<br>
[webazin.net]('https://webazin.net')
