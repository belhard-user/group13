@extends('layouts.main')

@section('content')
    <form action="{{ $_SERVER['REQUEST_URI'] }}" method="post">
        <div class="form-group">
            <label for="name">Email address</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Введите имя">
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input name="password" type="password" class="form-control" id="pass" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection