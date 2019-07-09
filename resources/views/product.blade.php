@extends('layout.layout')

@section('content')

<div style="margin-top: 60px;">
    <h1>Result parse</h1>
</div>


<?php foreach ($people as $persons): ?>
    <h6>Input</h6>
    <span><i><?php echo $persons['input'] ?></i></span>


    <?php foreach ($persons['output'] as $person): ?>
        <ul>
            <?php foreach ($person as $key => $value): ?>
                <li><b><?php echo $key ?>:</b> <i><?php echo $value ?></i></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
<?php endforeach; ?>

@endsection

