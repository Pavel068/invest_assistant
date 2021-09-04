<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDeal extends Model
{
    use HasFactory;

    protected $table = 'users_deals';

    protected $fillable = [
        'user_id',
        'active_id',
        'price',
        'count',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function active(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Active::class, 'id', 'active_id');
    }
}
