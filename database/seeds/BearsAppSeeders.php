<?php

use Illuminate\Database\Seeder;
use App\Bear;
use App\Fish;
use App\Tree;
use App\Picnic;
use Illuminate\Support\Facades\DB;
class BearsAppSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bears')->delete();
        DB::table('trees')->delete();
        DB::table('fish')->delete();
        DB::table('picnic')->delete();
        DB::table('bears_picnics')->delete();


        $bearLawly = Bear::create(array(
            'name' => 'Lawly',
            'type' => 'Grizzly',
            'danger_level' => 5
        ));
        $bearWhite = Bear::create(array(
            'name' => 'White',
            'type' => 'Polar',
            'danger_level' => 8
        ));
        $bearMax = Bear::create(array(
            'name' => 'Max',
            'type' => 'Brown',
            'danger_level' => 3
        ));
$this->command->info('bears finished');
        Fish::create(array(
            'weight' => 15,
            'bear_id' => $bearLawly->id,
        ));

        Fish::create(array(
            'weight' => 53,
            'bear_id' => $bearWhite->id
        ));
        Fish::create(array(
            'weight' => 25,
            'bear_id' => $bearMax->id
        ));
        $this->command->info('bears finished');
        Tree::create(array(
            'type' => 'bereza',
            'age' => 25,
            'bear_id' => $bearLawly->id
        ));
        Tree::create(array(
            'type' => 'dub',
            'age' => 120,
            'bear_id' => $bearWhite->id
        ));
        Tree::create(array(
            'type' => 'topol',
            'age' => 10,
            'bear_id' => $bearMax->id
        ));
        $this->command->info('bears finished');
        $forest = Picnic::create(array(
            'name' => 'Forest'
        ));
        $poliana = Picnic::create(array(
            'name' => 'Poliana'
        ));

        $this->command->info('bears finished');
        $bearLawly->picnics()->attach($forest->id);
        $bearLawly->picnics()->attach($poliana->id);

        $bearWhite->picnics()->attach($forest->id);
        $bearWhite->picnics()->attach($poliana->id);

        $bearMax->picnics()->attach($forest->id);
        $bearMax->picnics()->attach($poliana->id);

        $this->command->info('bears finished');
    }
}
