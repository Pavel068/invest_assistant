<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveCost extends Model
{
    use HasFactory;

    protected $table = 'actives_costs';

    protected $fillable = [
        'active_id',
        'price',
        'date',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function active(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Active::class, 'id', 'active_id');
    }
}
