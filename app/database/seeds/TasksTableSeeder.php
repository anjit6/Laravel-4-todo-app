<?php

class TasksTableSeeder extends Seeder {

	public function run()
	{
		DB::table('tasks')->delete();

		$tasks = array(
			array(
				"description_tsk" => "Sample Task 1",
				"status_tsk" => 0,
				"url_tsk" => "sample-task-1"
			),
			array(
				"description_tsk" => "Sample Task 2",
				"status_tsk" => 0,
				"url_tsk" => "sample-task-2"
			)
        );

		DB::table('tasks')->insert($tasks);

        Task::create(array(
			"description_tsk" => "Sample Task 3",
			"status_tsk" => 0,
			"url_tsk" => "sample-task-3"
        ));

    }

}