@extends('home')

@section('content')

@if (session('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
@endif
<style>
    .even-row {
    background-color: #f8f9fa; /* or your preferred even row color */
}

.odd-row {
    background-color: #d57397; /* or your preferred odd row color */
}
</style>
<div class="d-grip gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="{{ url('/copy/create') }}" class="btn btn-danger mo-md-2" type="button">
        Add New Copy
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Book</th>
                <th>Copy No.</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($copies as $index => $copy)
                <tr class="{{ $index % 2 == 0 ? 'even-row' : 'odd-row' }}">
                    <td>{{ $copy->id }}</td>
                    <td>{{ $copy->book->title }}</td>
                    <td>{{ $copy->copy_number }}</td>
                    <td>{{ $copy->status }}</td>
                    <td class="text-center">
                        <a href='{{ url('/copy/'.$copy->id) }}' class='btn btn-danger'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
