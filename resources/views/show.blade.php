@extends('layouts.app')

@section('content')

    <div class="card">
        <h4 class="card-header"><strong>Open House Listings <span class="float-right"><a href="/listing"><button class="btn btn-outline-dark font-weight-bold">BACK</button></a></span></strong></h4>

        <div class="card-body">

            <div class="">
	            <h4 class="font-weight-bold">
		            <div class="card">
						<div class="card-body">
							<h3 class="card-title font-weight-bold">{{ $listing->name }}</h3>
							<hr>
							<address>
								<h6>Phone : {{ $listing->phone }}</h6>
						    	<h6>Address : {{ $listing->address }}</h6>
						    	<h6 class="">Email : {{ $listing->email }}</h6>
						    	<h6 class="font-weight-bold"><a href="{{ $listing->website }}" target="_blank">{{ $listing->website }}</a></h6>
						    	
						    </address>
						    <hr>
						    <h5 class="text-muted font-weight-bold">Bio :</h5>
					    	<h6>{{ $listing->bio }}</h6>
						</div>
					</div>
		        </h4>
		    </div>

        </div>
    </div>

@endsection
