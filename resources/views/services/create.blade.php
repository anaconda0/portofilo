@extends('master')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    <form action="{{ route('service.store') }}" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating">
            <input type="text" name="icon" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Icon</label>
        </div>

        <div class="form-floating my-3">
            <textarea name="content" class="form-control"></textarea>
            <label for="floatingPassword">Content</label>
        </div>
        <button class="btn btn-primary">Create</button>
    </form>
@endsection
