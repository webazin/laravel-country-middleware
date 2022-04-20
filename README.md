# Laravel package for countries access control

# Install

<hr/>

1-`composer require webazin/country-middleware`

2-Insert in laravel < 5
<br>
`config/app.php`

<br>

`\Webazin\CountryMiddleware\CountryMiddlewareServiceProvider::class`

<br>

3-`php artisan vendor:publish`

<br>

4-`Webazin\CountryMiddleware\CountryMiddlewareServiceProvider`

# Use

<hr>

In your route add

`->middleware('countryCheck')`

<hr>

# Ban country

<hr>

`config/CountryMiddleware.php`

<br>

Add country iso_code

<br>

For example

<br>

`countries_ban' => ['US']`

<br>
All iso code to below link
<br>
[https://en.wikipedia.org/wiki/List_of_ISO_3166_country_codes
](https://en.wikipedia.org/wiki/List_of_ISO_3166_country_codes)
<hr>

[webazin.net]('https://webazin.net')

