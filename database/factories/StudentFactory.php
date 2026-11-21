<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Student>
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ID_No' => $this->faker->word(),
            'Last_Name' => $this->faker->sentence(),
            'First_Name' => $this->faker->sentence(),
            'Middle_Name' => $this->faker->sentence(),
            'Suffix_Or_Prefix' => $this->faker->word(),
            'Course' => $this->faker->paragraph(),
            'Year_Level' => $this->faker->word(),
            'Curriculum' => $this->faker->word(),
            'Date_Graduated' => $this->faker->date(),
            'Age' => $this->faker->paragraph(),
            'Gender' => $this->faker->paragraph(),
            'Birth_Date' => $this->faker->date(),
            'Birth_Place' => $this->faker->word(),
            'Nationality' => $this->faker->paragraph(),
            'Civil_Status' => $this->faker->paragraph(),
            'Elementary_School' => $this->faker->word(),
            'Junior_High_School' => $this->faker->word(),
            'Senior_High_School' => $this->faker->word(),
            'ALS_School' => $this->faker->word(),
            'School_Last_Attended' => $this->faker->word(),
            'Present_Address' => $this->faker->address(),
            'Permanent_Address' => $this->faker->address(),
            'Mobile_No' => $this->faker->word(),
            'Email' => $this->faker->unique()->safeEmail(),
            'Father_Name' => $this->faker->sentence(),
            'Father_Contact' => $this->faker->word(),
            'Mother_Name' => $this->faker->sentence(),
            'Mother_Contact' => $this->faker->word(),
            'Guardian_Name' => $this->faker->sentence(),
            'Guardian_Contact' => $this->faker->word(),
        ];
    }
}