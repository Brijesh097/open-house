@extends('layouts.app')

@section('content')

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
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($listings as $listing)
                                <tr>
                                    <td>{{ $listing->name }}</td>
                                    <td>{{ $listing->email }}</td>
                                    <td><a class="btn btn-outline-secondary" href="/listing/{{ $listing->id }}/edit"><strong>EDIT</strong></a></td>
                                    <td>
                                        {!! Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method' => 'POST', 'class' => '', 'onsubmit' => 'return confirm("Are you sure?")']) !!}
                                            <div>
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('DELETE', ['class'=> 'btn btn-outline-danger font-weight-bold'])}}
                                            </div>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

        </div>
    </div>

@endsection
