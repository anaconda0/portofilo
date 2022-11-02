@extends('master')
@section('title','Services')
@section('content')
    @can('add',$services[0])
    <a href="{{ route('service.create') }}" class="btn btn-primary float-end">Create</a>
@endcan
    <h2 class="my-5">Services</h2>
<div class="row g-3 my-5 border-top py-5" >
    @foreach($services as $service)
        <div class="col-lg-6">
            {!!  $service->icon !!}
            {{--            <a href="{{ url('service/'.$service->id) }}">--}}
            <a href="{{ route('service.show',$service) }}">

                <h3>{{ $service->name }}
                </h3>
            </a>
            <p>
                {{ $service->content }}</p>
            @auth
                @can('delete',$service)
            <form action="{{ route('service.destroy',$service) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
                    @endcan
                @endauth
        </div>
    @endforeach
</div>
@endsection
