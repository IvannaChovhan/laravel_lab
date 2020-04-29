@extends('templates.app')

@section('title')Contact @endsection

@section('page')
    <h1 style="text-align: center; margin: 50px 0">Contact page</h1>


    <div class="container">
        <div class="pb-5 text-center">
            <h2>Form</h2>
            <p class="lead">This is just a form)</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 order-md-1">
                <form class="needs-validation" method="post" action="{{ route('form') }}" >
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" >
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" id="username" name='username' placeholder="Username" >
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message">Message</label>
                        <input type="text" class="form-control" id="message" name="message" placeholder="" value="" >
                    </div>
                    @include('templates.alerts')
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection


