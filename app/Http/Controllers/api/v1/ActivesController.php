<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Active;
use App\Models\ActiveCost;
use App\Models\UserDeal;

class ActivesController extends Controller
{
    public function getActives()
    {
        return ActiveCost::with('active')
            ->get();
    }

    public function getUserActives($user_id)
    {
        return UserDeal::with('active')
            ->where([
                'user_id' => $user_id
            ])
            ->groupBy('active_id')
            ->get();
    }
}
