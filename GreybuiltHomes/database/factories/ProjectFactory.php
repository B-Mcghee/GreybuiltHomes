<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'title' => $this->faker->sentence(2, true),
            'description' => $this->faker-> realText(100, 2),
            'cover_image_id' => 1,
            'show_project'=> $this->faker->boolean($chanceOfGettingTrue = 90),

        ];
    }


}

// $factory->define(App\Project::class, function(Faker $faker){
//     return [
//         'title' => $faker->sentence(2, true),
//         'text' => $faker-> realText($faker->numberBetween(10, 80)),
//         'cover_image_id' => 1,
//         'show_project'=> $faker->boolean($chanceOfGettingTrue = 90)
//     ];
// });

