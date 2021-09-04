<?php

namespace Database\Seeders;

use App\Models\Active;
use App\Models\ActiveCost;
use App\Models\Forecast;
use App\Models\User;
use App\Models\UserDeal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed users
        User::insert([
            [
                'name' => 'Pavel Trefilov',
                'email' => 'pavel@test.example',
                'password' => Hash::make('12345678'),
                'invest_type' => 'ultra_aggressive'
            ],
            [
                'name' => 'Denis Lakomov',
                'email' => 'denis@test.example',
                'password' => Hash::make('12345678'),
                'invest_type' => 'balanced'
            ],
        ]);

        // Seed actives
        Active::insert([
            [
                'ISIN' => 'AFKS',
                'type' => 'stock',
                'currency' => 'RUR',
            ],
            [
                'ISIN' => 'BEB',
                'type' => 'stock',
                'currency' => 'RUR',
            ],
            [
                'ISIN' => 'DSKY',
                'type' => 'stock',
                'currency' => 'RUR',
            ],
            [
                'ISIN' => 'GAZP',
                'type' => 'stock',
                'currency' => 'RUR',
            ],
            [
                'ISIN' => 'DIRP01',
                'type' => 'bond',
                'currency' => 'RUR',
            ],
            [
                'ISIN' => 'DIRP02',
                'type' => 'bond',
                'currency' => 'RUR',
            ],
            [
                'ISIN' => 'MESS01',
                'type' => 'bond',
                'currency' => 'RUR',
            ],
            [
                'ISIN' => 'RUSB',
                'type' => 'fund',
                'currency' => 'RUR',
            ],
            [
                'ISIN' => 'SBCB',
                'type' => 'fund',
                'currency' => 'RUR',
            ],
            [
                'ISIN' => 'VTBB',
                'type' => 'fund',
                'currency' => 'RUR',
            ],
            [
                'ISIN' => 'SBGB',
                'type' => 'fund',
                'currency' => 'RUR',
            ],
        ]);

        // Seed actives costs
        $this->seedActivesCosts();

        // Seed users deals
        $this->seedUsersDeals();

        // Seed forecasts
        $this->seedForecasts();
    }

    protected function seedUsersDeals()
    {
        $users = User::all();
        $actives = Active::all();

        foreach ($users as $user) {
            foreach ($actives as $active) {
                UserDeal::insert([
                    [
                        'user_id' => $user->id,
                        'active_id' => $active->id,
                        'price' => rand(100, 1000),
                        'count' => rand(1, 15)
                    ]
                ]);
            }
        }
    }

    protected function seedForecasts()
    {
        $actives = Active::all();

        $agencies = [
            [
                'name' => 'Bloomberg',
                'rating' => 0.9
            ],
            [
                'name' => 'New York Times',
                'rating' => 0.87
            ],
            [
                'name' => 'ОАО НИИЭ ЭИКВ ОПГ РРР',
                'rating' => 0.5
            ],
            [
                'name' => 'ИП Василий Иванов',
                'rating' => 0.07
            ],
        ];

        foreach ($actives as $active) {
            foreach ($agencies as $agency) {
                Forecast::insert([
                    [
                        'agency' => $agency['name'],
                        'agency_rating' => $agency['rating'],
                        'active_id' => $active->id,
                        'forecast_price' => rand(50, 2000)
                    ]
                ]);
            }
        }
    }

    protected function seedActivesCosts()
    {
        $actives = Active::all();

        $dates = [
            '2021-08-01',
            '2021-08-02',
            '2021-08-03',
            '2021-08-04',
            '2021-08-05',
            '2021-08-06',
            '2021-08-07',
            '2021-08-08',
            '2021-08-09',
            '2021-08-10',
            '2021-08-11',
            '2021-08-12',
            '2021-08-13',
            '2021-08-14',
            '2021-08-15',
            '2021-08-16',
            '2021-08-17',
            '2021-08-18',
            '2021-08-19',
            '2021-08-20',
            '2021-08-21',
            '2021-08-22',
            '2021-08-23',
            '2021-08-24',
            '2021-08-25',
            '2021-08-26',
            '2021-08-27',
            '2021-08-28',
            '2021-08-29',
            '2021-08-30',
            '2021-08-31',
            '2021-09-01',
            '2021-09-02',
            '2021-09-03',
            '2021-09-04',
        ];

        foreach ($actives as $active) {
            $initial_price = rand(100, 1000);
            $last_price = $initial_price;

            foreach ($dates as $date) {
                if ($active->type == 'stock') {
                    $last_price += $last_price * (rand(-15, 15) / 100);
                } else if ($active->type == 'fund') {
                    $last_price += $last_price * (rand(-7, 7) / 100);
                } else if ($active->type == 'bond') {
                    $last_price += $last_price * (rand(-4, 4) / 100);
                }

                ActiveCost::insert([
                    'active_id' => $active->id,
                    'price' => $last_price,
                    'date' => $date
                ]);
            }
        }
    }
}
