@extends('layout.default')

{{-- Content --}}
@section('content')
	<div class="add-todo">
		<form method="POST" action="" class="">
			<input type="text" name="todo-text" value="" />
			<input type="submit" name="submit" value="Add Todo" class="btn btn-success add-todo-btn" />
		</form>
	</div>
	<div class="todos-list-cnt ">
		<ul class="todos-list">
			@each('todo.todo', $todos, 'todo')
		</ul>
	</div>

	{{ $todos->links() }}
@stop

