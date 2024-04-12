<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use League\CommonMark\Node\Block\Paragraph;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dealer>
 */
class DealerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(mt_rand(3,8)),
            'slug' => fake()->slug(),
            'location' => fake()->city(),
            'body' => fake()->paragraph(mt_rand(5,10)),
            'author' => fake()->name(), // Menambahkan nama penulis palsu
            'published_at' => fake()->dateTimeThisYear() // Menambahkan tanggal publikasi palsu dalam tahun ini
        ];
    }
}
