<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forecast extends Model
{
    use HasFactory;

    protected $table = 'forecasts';

    protected $fillable = [
        'agency',
        'agency_rating',
        'active_id',
        'forecast_price',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function active(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Active::class, 'id', 'active_id');
    }
}
