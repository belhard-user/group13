@extends('layouts.main')

@section('title', 'Регистрация')

@section('content')
    <form method="post" action="/register-user-post">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="emial">Email</label>
            <input name="email" type="text" class="form-control" id="emial" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection