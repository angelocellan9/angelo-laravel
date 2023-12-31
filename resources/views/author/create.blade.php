@extends('home')

@section('content')

    <h1>Add New Author</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('author/create')}}" method="POST">
            @csrf 
            <div class="form-group mt-2">
                <label for="name"> Name </label>
                <input type="text" name='name' class='form-control'>
                @error('name')
                    <p class='text-danger'>{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="biography"> Biography </label>
                <input type="text" name='biography' class='form-control'>
                @error('biography')
                <p class='text-danger'>{{$message}}</p>
            @enderror
            </div>

            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary">
                    Add Author
                </button>
            </div>
            </form>
        </div>
    </div>
    @endsection