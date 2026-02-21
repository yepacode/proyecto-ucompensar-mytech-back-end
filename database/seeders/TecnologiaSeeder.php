<?php

namespace Database\Seeders;

use App\Models\Tecnologia;
use Illuminate\Database\Seeder;

class TecnologiaSeeder extends Seeder
{
    public function run(): void
    {
        $tecnologias = [
            ['nombre' => 'HTML5', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg', 'orden' => 1],
            ['nombre' => 'CSS3', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg', 'orden' => 2],
            ['nombre' => 'JavaScript', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg', 'orden' => 3],
            ['nombre' => 'TypeScript', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg', 'orden' => 4],
            ['nombre' => 'Angular', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/angularjs/angularjs-original.svg', 'orden' => 5],
            ['nombre' => 'React', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg', 'orden' => 6],
            ['nombre' => 'Vue.js', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg', 'orden' => 7],
            ['nombre' => 'Node.js', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg', 'orden' => 8],
            ['nombre' => 'Python', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg', 'orden' => 9],
            ['nombre' => 'PHP', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg', 'orden' => 10],
            ['nombre' => 'Laravel', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg', 'orden' => 11],
            ['nombre' => 'MySQL', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg', 'orden' => 12],
            ['nombre' => 'MongoDB', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg', 'orden' => 13],
            ['nombre' => 'PostgreSQL', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg', 'orden' => 14],
            ['nombre' => 'Docker', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg', 'orden' => 15],
            ['nombre' => 'Git', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg', 'orden' => 16],
            ['nombre' => 'Sass', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sass/sass-original.svg', 'orden' => 17],
            ['nombre' => 'Figma', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg', 'orden' => 18],
        ];

        foreach ($tecnologias as $tecnologia) {
            Tecnologia::create($tecnologia);
        }
    }
}
