@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>
                        <strong>
                            Your Listings 
                            <span class="float-right">
                                <a href="/listing/create">
                                    <button class="btn btn-outline-dark">
                                        <strong>CREATE</strong>
                                    </button>
                                </a>
                            </span>
                        </strong>
                    </h4>

                    <br>

                    @if(count($listings))
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead-dark">
                                    <th>Name</th>
                                    <th>Email ID</th>
                                    <th>Phone</th>
                                </thead>
                                <tbody>
                                    @foreach($listings as $listing)
                                        <tr>
                                            <td>{{ $listing->name }}</td>
                                            <td>{{ $listing->email }}</td>
                                            <td>{{ $listing->phone }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

@endsection
