@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.error')

        <div class="col-md-8 col-md-offset-2">
            

        <form action="/sizes/{{ $size->id }}" method="POST" role="form">
            {{ csrf_field() }}

            <legend>Editing a size</legend>
        
            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Enter Name" required="required" value="{{ $size->name }}">
            </div>

           
            <button type="submit" class="btn btn-primary">Edit a size</button>
        </form>

        </div>
    </div>
</div>
@endsection
