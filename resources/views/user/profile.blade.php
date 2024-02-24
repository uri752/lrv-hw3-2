@extends('layouts.app');

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Your profile') }}</div>

                <div class="card-body">
                   <p>ID: {{ $id }}</p>
                   <p>Name: {{ $name }}</p>
                   <p>Email: {{ $email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection