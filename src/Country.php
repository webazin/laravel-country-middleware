<?php

namespace Webazin\CountryMiddleware;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getTable()
    {
        return config('CountryMiddleware.database_prefix') . 'countries';
    }
}
