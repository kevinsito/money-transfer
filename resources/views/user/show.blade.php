@extends('layouts.app')

@section('content')
<div class="container">

	<!-- Show the potential trader and his/her balance -->
	<h1>Showing Account of {{ $user->name }} {{ $user->lName }}</h1>

	<div>The user's current account balance is ${{ $user->balance }}. </div>

	<hr>
	<h1>Money Transfer</h1>

	<div> Please enter amount in dollars ($). </div>

	<!-- Display errors if they do exists -->
	@if (count($errors))
		<ul>
			@foreach ($errors->all() as $err)
				{{ $err }}
			@endforeach
		</ul>
	@endif

	<!-- Form used for the transfer flow of the application -->
	<form method="POST" action="/user/{{ $user->id }}">

		<!-- Necessary CSRF Token generation & PATCH command-->
		{{ csrf_field() }}
		{{ method_field('PATCH') }}
		
		<div class="form-group">

			<!-- Display 'old()' input if on error -->
			<input type="text" name="balance" value="{{ old('balance') }}">
		</div>

		<div class="form-group">
			<button type="submit"> Transfer </button>
		</div>
	</form>


</div>

@stop