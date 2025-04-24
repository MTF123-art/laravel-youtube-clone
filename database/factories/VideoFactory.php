<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Video::class;

    public function definition(): array
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'video_path' => 'videos/' . Str::random(10) . '.mp4',
            'thumbnail_path' => 'public/thumbnails/' . Str::random(10) . '.jpg',
            'views' => rand(0, 100),
        ];
    }
}
