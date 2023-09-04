<?php

namespace Database\Factories;

use App\Models\Opinion;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpinionFactory extends Factory
{
    protected $model = Opinion::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sei=['神宮寺','京極','西園寺','如月','天王寺','皇','神楽','鳳凰','八神','東雲'];
        $mei=['颯','碧','斗碧','暖葵','琉翔','心桜','依茉','凛','紬','結凪'];
        $fullname = $sei[rand(0, count($sei)-1)].' '.$mei[rand(0, count($mei)-1)];

        return [
            'fullname' => $fullname,
            'gender' => random_int(1,2),
            'email' => $this->faker->unique()->safeEmail(),
            'postcode' => $this->faker->postcode1().'-'.$this->faker->postcode2(),
            'address'=> $this->faker->prefecture().$this->faker->city().$this->faker->streetAddress(),
            'building_name'=> $this->faker->secondaryAddress(),
            'opinion' => $this->faker->realText(100, 5)
        ];
    }
}
