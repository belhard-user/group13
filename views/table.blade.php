@extends('layouts.main')

@section('content')
<form action="" method="post">
    <input type="text" name="rows">
    <input type="text" name="cols">
    <input type="color" name="color">
    <input type="submit">
</form>
<hr>

<table border="1">
    @for($i = 1; $i <= $rows; $i++)
        <tr>
            @for($j = 1; $j <= $cols; $j++)
                @if($i == 1 || $j == 1)
                    <td style="background: <?= $color ?>">{{ $i * $j }}</td>
                @else
                    <td>{{ $i * $j }}</td>
                @endif
            @endfor
        </tr>
    @endfor
@endsection

@section('title', 'Таблица умножение')

@section('menu')
    <li class="nav-item">
        <a class="nav-link disabled" href="#">hjassdahjsadasdasd</a>
    </li>
@endsection
