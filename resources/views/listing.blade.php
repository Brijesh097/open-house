@extends('layouts.app')

@section('content')

    <div class="card">
        <h4 class="card-header"><strong>Open House Listings</strong></h4>

        <div class="card-body">

            <br>

            @if(count($listings))
                <div class="row">
                    @foreach($listings as $listing)
                    	<div class="col-md-4" id="ListWidth1">
		            		<a href="/listing/{{ $listing->id }}" style="color: black; text-decoration: none;">
			            		<div class="card">
									<div class="card-body" id="ListWidth2">
										<h5 class="card-title font-weight-bold">{{ $listing->name }}</h5>
								    	<h6 class="card-subtitle mb-2 text-muted">{{ $listing->email }}</h6>
									</div>
								</div>
							</a>
						</div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>

@endsection
