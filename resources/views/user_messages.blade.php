@extends('templates.app')

@section('title')Messages @endsection

@section('page')
    <div class = "container messages">
        <div class = "row">
            <div class = "col-md-12">
                <h1 style="text-align: center; margin: 50px 0;">All submits</h1>
            </div>
            @foreach($data as $el)
                @if($el->username === $user->username)
                    <div class = "col-md-4">
                        <div class="alert" style="background-color: #f6993f">
                            <h3>{{ $el -> firstName }} {{ $el -> lastName }}</h3>
                            <p>Username: {{ $el -> username }}</p>
                            <p>Message: {{ $el -> message }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
