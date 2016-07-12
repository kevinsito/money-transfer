@extends('layouts.list')

@section('content')
<div class="tile">
	<h2>All Users</h2>

	<!-- If there are other users, display them in a list -->
	@if(count($users))
		<ul>
			@foreach ($users as $user)
				<li>
					<a href="/user/{{ $user->id }}"> 
						<span>{{ $user->name }} {{ $user->lName }}</span> 
						<span style="float:right"> Balance: ${{ $user->balance }}</span>
					</a>
				</li>
			@endforeach
		</ul>
	@else
		There are no other users.
	@endif
</div>

@stop