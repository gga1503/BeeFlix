<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Its Okay to Not Be Okay',
            'photo' => '',
            'description' => "The story of a community health worker at a psychiatric ward who lives on 1.8 million won (approximately $1,520) a month and a storybook writer suffering from an antisocial personality disorder. A man who denies love and a woman who doesn’t know love defy fate and fall in love, finding their souls and identities in the process.
            Moon Gang Tae is a community health worker at a psychiatric ward who was blessed with everything including a great body, smarts, ability to sympathize with others, patience, ability to react quickly, stamina, and more. Meanwhile, Ko Moon Young is a popular writer of children’s literature, but she is extremely selfish, arrogant, and rude.",
            'rating' => 5
        ]);
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Goblin',
            'photo' => './image/Goblin.jpg',
            'description' => "Kim Shin was once an unbeatable general in Goryeo's military who died a tragic death. He now possesses immortality but is tired of living while everyone else around him dies. For 900 years, Kim Shin has searched for his bride, a mortal who can pull out the sword and end his life. One day, he encounters Ji Eun Tak, a positive, upbeat high school student who can see the dead and has gone through tragic events, yet still stays strong. She claims to be the Goblin's bride who can end his immortal life, but what appears to be an easy task, only gets complicated, as the two fall in love.",
            'rating' => 5
        ]);
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Crash Landing On You',
            'photo' => '',
            'description' => "Crash Landing on You tells the story of two star-crossed lovers, Yoon Se-ri (Son Ye-jin), a South Korean fashion entrepreneur with her company Se-ri's Choice, and Ri Jeong-hyeok (Hyun Bin), a member of the North Korean elite and a Captain in the North Korean Special Police Force.",
            'rating' => 4
        ]);
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'The Fiery Priest (2019)',
            'photo' => '',
            'description' => "This drama follows Priest Kim Hae Il (Kim Nam Gil), a hot tempered Catholic Priest (which a troubled past) who strives for justice by generally using his fists. After getting into trouble at his local police station (yet again) he is sent to live in Gudam, Seoul with his former teacher Father Lee (Jung Dong Hwan).",
            'rating' => 3
        ]);

       
       
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Avatar: The Last Airbender',
            'photo' => '',
            'description' => "A young boy with the ability to manipulate natural elements wakes up from a 100-year-long hibernation. He then sets off to use his mystical powers and save the world from destruction.",
            'rating' => 4
        ]);
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Naruto',
            'photo' => '',
            'description' => "Naruto (Japanese: ナルト) is a Japanese manga series written and illustrated by Masashi Kishimoto. It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village. The story is told in two parts – the first set in Naruto's pre-teen years, and the second in his teens. The series is based on two one-shot manga by Kishimoto: Karakuri (1995), which earned Kishimoto an honorable mention in Shueisha's monthly Hop Step Award the following year, and Naruto (1997).",
            'rating' => 5
        ]);
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'SpongeBob SquarePants',
            'photo' => '',
            'description' => "A yellow sea sponge named SpongeBob SquarePants, who enjoys being a cook at Krusty Krab, lives in the Pacific Ocean. He embarks on various adventures with his friends at Bikini Bottom.",
            'rating' => 4
        ]);
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Spider-Man',
            'photo' => '',
            'description' => "One minute he's Peter Parker the college student, and the next he's Spiderman, crime-fighter extraordinaire.",
            'rating' => 3
        ]);


        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Twogether',
            'photo' => '',
            'description' => "Lee Seung-gi and Jasper Liu travel to destinations suggested by their fans and become friends despite their language differences.",
            'rating' => 4
        ]);
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Running Man',
            'photo' => '',
            'description' => "Running Man is a South Korean variety show, forming part of SBS Good Sunday lineup. It was first aired on July 11, 2010. Running Man was originally classified as an urban action variety a genre of variety shows in an urban environment. The MCs and guests were to complete missions at a landmark to win the race.",
            'rating' => 5
        ]);
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'The Return of Superman',
            'photo' => '',
            'description' => "The Return of Superman is a South Korean reality-variety show that airs on KBS2. The Return of Superman used to be one of the two segments on Happy Sunday.",
            'rating' => 5
        ]);
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => '2 Days & 1 Night',
            'photo' => '',
            'description' => "Celebrities explore places of interest in South Korea.",
            'rating' => 3
        ]);
    }
}
