@extends('layout.layout')

@section('content')
    <h1>Parse new person</h1>
    <hr>
        <form action="/products" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="description">Parse file</label>
            <input type="file" class="form-control" id="productAmount" name="amount"/>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

