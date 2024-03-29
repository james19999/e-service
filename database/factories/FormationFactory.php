<?php

namespace Database\Factories;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'nom'=>$this->faker->sentence(),
            'description'=>$this->faker->paragraph(2,true),
            'prix'=>$this->faker->numberBetween(0,1000),
            'image'=>'image.png' . rand(0,255),
        ];
    }
}
