<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'currencies';
    protected $fillable = ['code', 'name', 'symbol', 'exchange_rate', 'is_active'];

    public static function active()
    {
        return self::where('is_active', 1)->get();
    }

    public static function getByCode($code)
    {
        return self::where('code', $code)->first();
    }
}