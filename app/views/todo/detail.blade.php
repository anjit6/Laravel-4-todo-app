@extends('layout.default')

{{-- CONTENT --}}
@section('content')
<div class="well">
	<span class="text-info">{{ $todo->description_tsk }}</span>
</div>
@stop
