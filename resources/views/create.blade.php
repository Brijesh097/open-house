@extends('layouts.app')

@section('content')

	<div class="row">

		<div class="col-md-1">
			{{-- Just some spacing --}}
		</div>

		<div class="col-md-10">
			<div class="card">
				<h3 class="card-header"><strong>Create Listings</strong></h3>
				{{-- <hr id="hr-style-one"> --}}

				<div class="card-body">
					{!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
						<div class="form-group">
						  {{Form::label('name', 'Name')}}
						  {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'eg: Margo Roth Spiegelman'])}}
						</div>
						<div class="form-group">
						  {{Form::label('email', 'Email')}}
						  {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'eg: margo@openhouse.com'])}}
						</div>
						<div class="form-group">
						  {{Form::label('website', 'Website')}}
						  {{Form::text('website', '', ['class' => 'form-control', 'placeholder' => 'eg: www.openhouse.tk'])}}
						</div>
						<div class="form-group">
						  {{Form::label('phone', 'Phone Number')}}
						  {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'eg: 123-456-789'])}}
						</div>
						<div class="form-group">
						  {{Form::label('address', 'Address')}}
						  {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address here...'])}}
						</div>
						<div class="form-group">
						  {{Form::label('bio', 'Bio')}}
						  {{Form::textarea('bio', '', ['class' => 'form-control', 'placeholder' => 'Type here...', 'rows' => '3'])}}
						</div>
						<div>
						  {{Form::submit('DONE', ['class'=> 'btn btn-dark'])}}
						  <a href="/dashboard"><button type="button" class="btn btn-outline-dark float-right">BACK</button></a>
						</div>
					{!! Form::close() !!}
				</div>

			</div>
		</div>

		<div class="col-md-1">
			{{-- Just some spacing --}}
		</div>

	</div>

@endsection