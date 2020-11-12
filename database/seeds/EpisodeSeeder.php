<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ItsOkaytoNotBeOkay = [
            'The Boy Who Fed On Nightmares',
            'The Lady In Red Shoes',
            'Sleeping Witch',
            'Zombie Kid',
            'Rapunzel And The Cursed Castle',
            'Bluebeards Secret',
            'Spring Dog',
            'Dog Tags',
            'Beauty And The Beast',
            'The King Has Donkey Ears'];

        for ($i = 0; $i < sizeof($ItsOkaytoNotBeOkay); $i++) {
            DB::table('episodes')->insert([
                'movie_id' => DB::table('movies')->where('title', '=', 'Its Okay to Not Be Okay')->get()[0]->id,
                'episode' => $i + 1,
                'title' => $ItsOkaytoNotBeOkay[$i]
            ]);
        }

        $Goblin = [
            'What Kind Of A Guardian Are You?',
            'Ill Become Your Bride In 200 Years',
            'I See The Sword',
            'I Wont Leave You',
            'I Have To End My Life',
            'Tomorrow',
            'I Think Its Your Face',
            'You Gave Her That Fate',
            'He will Vanish Forever From This World To Another',
            'Is She Really Your Sister?'];

        for ($i = 0; $i < sizeof($Goblin); $i++) {
            DB::table('episodes')->insert([
                'movie_id' => DB::table('movies')->where('title', '=', 'Goblin')->get()[0]->id,
                'episode' => $i + 1,
                'title' => $Goblin[$i]
            ]);
        }


        $CrashLandingOnYou = [
            '"But It\'s Destiny" (우연인 듯 운명)',
            '"Flower"',
            '"Sunset" (노을)	',
            '"Here I Am Again" (다시 난, 여기)',
            '"Someday" (어떤 날엔)',
            '"Sigriswil" (Crash Landing on You Title Full Version)',
            '"Spring in My Hometown" (고향의 봄)',
            '"The Wind of the Day" (그날의 바람)',
            '"My Companion" (나의 동무여)',
            '"Like a Wild Flower" (들꽃처럼)',
        ];

        for ($i = 0; $i < sizeof($CrashLandingOnYou); $i++) {
            DB::table('episodes')->insert([
                'movie_id' => DB::table('movies')->where('title', '=', 'Crash Landing On You')->get()[0]->id,
                'episode' => $i + 1,
                'title' => $CrashLandingOnYou[$i]
            ]);
        }

        $FieryPriest = [
            '"Our Neighbourhood HERO" (우리동네 HERO)',
            '"Breeze"',
            '"Fighter"',
            '"Paradise"',
            '"Joy"',
            '"Victory"',
        ];

        for ($i = 0; $i < sizeof($FieryPriest); $i++) {
            DB::table('episodes')->insert([
                'movie_id' => DB::table('movies')->where('title', '=', 'The Fiery Priest (2019)')->get()[0]->id,
                'episode' => $i + 1,
                'title' => $FieryPriest[$i]
            ]);
        }
        
        $AvatarTheLastAirbender = [
            'Chapter One: The Boy in the Iceberg',
            'Chapter Two: The Avatar Returns',
            'Chapter Three: The Southern Air Temple',
            'Chapter Four: The Warriors of Kyoshi',
            'Chapter Five: The King of Omashu',
            'Chapter Six: Imprisoned',
            'Chapter Seven: The Spirit World (Winter Solstice, Part 1)',
            'Chapter Eight: Avatar Roku (Winter Solstice, Part 2)',
            'Chapter Nine: The Waterbending Scroll',
            'Chapter Ten: Jet',
            'Chapter Eleven: The Great Divide'
        ];

        for ($i = 0; $i < sizeof($AvatarTheLastAirbender ); $i++) {
            DB::table('episodes')->insert([
                'movie_id' => DB::table('movies')->where('title', '=', 'Avatar: The Last Airbender')->get()[0]->id,
                'episode' => $i + 1,
                'title' => $AvatarTheLastAirbender [$i]
            ]);
        }
        
        $Naruto = [
            'Find the Crimson Four-Leaf Clover! (2002)',
            'Mission: Protect the Waterfall Village! (2003)',
            'Konoha Annual Sports Festival (2004)',
            'Finally a clash! Jonin VS Genin!! Indiscriminate grand melee tournament meeting!! (2005)',
            'Hurricane! "Konoha Academy" Chronicles (2008)',
            'Naruto: The Cross Roads (2009)',
            'Naruto, The Genie, and The Three Wishes!! (2010)',
            'Naruto x UT (2011)',
            'Chūnin Exam on Fire! ',
            'Hashirama Senju vs. Madara Uchiha (2012)',
            'Naruto Shippūden: Sunny Side Battle!!!'
        ];

        for ($i = 0; $i < sizeof($Naruto); $i++) {
            DB::table('episodes')->insert([
                'movie_id' => DB::table('movies')->where('title', '=', 'Naruto')->get()[0]->id,
                'episode' => $i + 1,
                'title' => $Naruto[$i]
            ]);
        }

        $SpongeBobSquarePants = [
            'Help Wanted',
            'Reef Blower',
            'Tea at the Treedome',
            'Bubblestand',
            'Ripped Pants',
            'Jellyfishing',
            'Plankton!',
            'Naughty Nautical Neighbors',
            'Boating School',
            'Pizza Delivery',
            'Home Sweet Pineapple'
        ];

        for ($i = 0; $i < sizeof($SpongeBobSquarePants); $i++) {
            DB::table('episodes')->insert([
                'movie_id' => DB::table('movies')->where('title', '=', 'SpongeBob SquarePants')->get()[0]->id,
                'episode' => $i + 1,
                'title' => $SpongeBobSquarePants [$i]
            ]);
        }

        $SpiderMan = [
            'Introduction!',
            'Observation!',
            'Hypothesis!',
            'Prediction!',
            'Experimentation!',
            'Conclusion!',
            'Osborn Academy',
            'Horizon High: Part 1',
            'A Day in the Life',
            'Party Animals',
            'Sandman'
        ];

        for ($i = 0; $i < sizeof($SpiderMan); $i++) {
            DB::table('episodes')->insert([
                'movie_id' => DB::table('movies')->where('title', '=', 'Spider-Man')->get()[0]->id,
                'episode' => $i + 1,
                'title' => $SpiderMan [$i]
            ]);
        }

        $Twogether = [
            'Episode 1',
            'Episode 2',
            'Episode 3',
            'Episode 4',
            'Episode 5',
            'Episode 6',
            'Episode 7',
            'Episode 8',
        ];

        for ($i = 0; $i < sizeof($Twogether); $i++) {
            DB::table('episodes')->insert([
                'movie_id' => DB::table('movies')->where('title', '=', 'Twogether')->get()[0]->id,
                'episode' => $i + 1,
                'title' => $Twogether [$i]
            ]);
        }

        $RunningMan = [
            'Episode 11',
            'Episode 12',
            'Episode 13',
            'Episode 14',
            'Episode 15',
            'Episode 16',
            'Episode 17',
            'Episode 18',
        ];

        for ($i = 0; $i < sizeof($RunningMan); $i++) {
            DB::table('episodes')->insert([
                'movie_id' => DB::table('movies')->where('title', '=', 'Running Man')->get()[0]->id,
                'episode' => $i + 1,
                'title' => $RunningMan [$i]
            ]);
        }

        $TheReturnofSuperman = [
            'Things You Only Realize Once You Raise Them',
            'They are Just Like Me',
            'I Cant Live Without You',
            'This is What Your Dad is Like',
            'Kids Raise Dads',
            'Sons & Daughters',
            'Merry Christmas',
            'No Flower Blossoms Without Hardship',
        ];

        for ($i = 0; $i < sizeof($TheReturnofSuperman); $i++) {
            DB::table('episodes')->insert([
                'movie_id' => DB::table('movies')->where('title', '=', 'The Return of Superman')->get()[0]->id,
                'episode' => $i + 1,
                'title' => $TheReturnofSuperman [$i]
            ]);
        }

        $TwoDaysOneNight = [
            'Episode 1',
            'Episode 2',
            'Episode 3',
            'Episode 4',
            'Episode 5',
            'Episode 6',
            'Episode 7',
            'Episode 8',
        ];

        for ($i = 0; $i < sizeof($TwoDaysOneNight); $i++) {
            DB::table('episodes')->insert([
                'movie_id' => DB::table('movies')->where('title', '=', '2 Days & 1 Night')->get()[0]->id,
                'episode' => $i + 1,
                'title' => $TwoDaysOneNight [$i]
            ]);
        }
    }
}
