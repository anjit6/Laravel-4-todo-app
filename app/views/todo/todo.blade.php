<li class="todo">
	<a href="{{ URL::to('todo/' . $todo->url_tsk . '/' . $todo->tsk_id) }}">
		{{ $todo->description_tsk }}
	</a>
</li>