<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'coupon' => ucwords(Str::random(6)),
            'user_id'=>User::all()->random()->id,
            'expiry_date'=>Carbon::tomorrow(),
            'usable_times'=>3,
            'used_times'=>1,
        ];
    }
}
