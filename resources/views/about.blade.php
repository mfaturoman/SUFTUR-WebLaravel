@extends('layouts.main')

@section('container')
    <h1 class="mb-3">About Me</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
    <div class="col-md-6 display-6">
        <hr />
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias labore repudiandae quaerat in, doloribus non veniam sequi sint? Iure debitis consequatur eum assumenda quibusdam delectus repellendus error, possimus quod unde? Beatae impedit eaque non enim quo inventore, ea facilis corrupti?</p>
    </div>

@endsection