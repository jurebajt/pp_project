<?php

class TerritoriesTableSeeder extends Seeder {

    public function run()
    {
    	DB::table('territories')->delete();
		Territory::create(array('name' => 'Village TAM', 'description' => 'Tja ali Tam', 'pos_x' => '1', 'pos_y' => '1', 'id_owner' => '1'));
		Territory::create(array('name' => 'Village TJA', 'description' => 'Tja xor Tam', 'pos_x' => '-1', 'pos_y' => '1', 'id_owner' => '2'));
		Territory::create(array('name' => 'Ziga Nation', 'description' => 'Ziga Zaga poje zaga rom pom pom kladivo', 'pos_x' => '-1', 'pos_y' => '-1', 'id_owner' => '3'));
		Territory::create(array('name' => 'Marlboro', 'description' => 'Ej jst grem sam na cik', 'pos_x' => '1', 'pos_y' => '-1', 'id_owner' => '4' ));
    	Territory::create(array('name' => 't1', 'description' => 'Tja ali Tam', 'pos_x' => '2', 'pos_y' => '2', 'id_owner' => '1'));
		Territory::create(array('name' => 't2', 'description' => 'Tja xor Tam', 'pos_x' => '-2', 'pos_y' => '-2', 'id_owner' => '1'));
		Territory::create(array('name' => 't3', 'description' => 'Ziga Zaga  ', 'pos_x' => '-2', 'pos_y' => '2', 'id_owner' => '1'));
		Territory::create(array('name' => 't4', 'description' => 'Ej jst grem', 'pos_x' => '2', 'pos_y' => '-2', 'id_owner' => '2' ));
		Territory::create(array('name' => 't5', 'description' => 'Ej jst grem', 'pos_x' => '2', 'pos_y' => '-2', 'id_owner' => '2' ));
		Territory::create(array('name' => 't6', 'description' => 'Ej jst grem', 'pos_x' => '2', 'pos_y' => '-2', 'id_owner' => '3' ));
	}
}