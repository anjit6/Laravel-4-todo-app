<?php

class TodoHomeController extends BaseController {

	public function getIndex()
	{
		$todos = Task::paginate(6);

		return View::make('todo.todos')->with('todos', $todos);
	}

	public function getTodo($name, $tid)
	{
		$todo = Task::findOrFail($tid);
		
		return View::make('todo.detail')->with('todo', $todo);
		// return $todo->description_tsk;
	}

	public function postIndex()
	{
		$todoTxt = trim(Input::get('todo-text'));

		if (!$todoTxt)
		{
			App::abort(404);
		}
		else
		{
			$todo = new Task;
			$todo->description_tsk = $todoTxt;
			$todo->status_tsk = 0;
			$todo->url_tsk = str_replace(' ', '-', $todoTxt);

			$todo->save();

			Mail::send('emails.auth.reminder', array("token" => "abc"), function($m)
			{
				$m->to('anji.t6@gmail.com', 'Anji')->subject('Welcome!');
			});

			return Redirect::to('/');
		}
	}
}