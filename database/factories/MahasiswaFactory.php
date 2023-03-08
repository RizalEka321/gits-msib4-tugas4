<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'jenis_kelamin' => $this->faker->randomElement($array = array('L', 'P')),
            'prodi'    => $this->faker->randomElement($array = array('Teknologi Rekayasa Perangkat Lunak', 'Teknik Rekayasa Komuputer', 'Bisnis Digital')),
            'status'     => $this->faker->randomElement($array = array('Aktif', 'Tidak Aktif')),
        ];
    }
}
