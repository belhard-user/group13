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
    <?php for($i = 1; $i <= $rows; $i++): ?>
        <tr>
            <?php for($j = 1; $j <= $cols; $j++): ?>
                <?php if($i == 1 || $j == 1): ?>
                    <td style="background: <?= $color ?>"><?= $i * $j ?></td>
                <?php else: ?>
                    <td><?= $i * $j ?></td>
                <?php endif; ?>
            <?php endfor; ?>
        </tr>
    <?php endfor ?>
@endsection

@section('title', 'Таблица умножение')
