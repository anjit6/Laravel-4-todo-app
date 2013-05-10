<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('TasksTableSeeder');
		$this->command->info('Tasks table seeded with sample tasks!');
	}

}