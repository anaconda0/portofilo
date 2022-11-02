@extends('master')
@section('title')
    Home Page
@endsection
@section('content')
    <h2>{{ $about->aboutus_title }}</h2>
    <div class="row">
        <div class="col-6">
            {{ $about->aboutus_content }}
        </div>
        <div class="col-6">
            <div class="row my-3">
                <div class="col-6">
                    <span class="bg-primary rounded text-white p-1">Age . . . .</span>
                </div>
                <div class="col-6 text-end">
                    {{ $about->age }}
                </div>
            </div>

            <div class="row my-3">
                <div class="col-6">
                    <span class="bg-primary rounded text-white p-1">Residence  . . . .</span>
                </div>
                <div class="col-6 text-end">
                    {{ $about->residence  }}
                </div>
            </div>


            <div class="row my-3">
                <div class="col-6">
                    <span class="bg-primary rounded text-white p-1">Freelance   . . . .</span>
                </div>
                <div class="col-6 text-end">
                    {{ $about->freelance   }}
                </div>
            </div>

            <div class="row my-3">
                <div class="col-6">
                    <span class="bg-primary rounded text-white p-1">Address   . . . .</span>
                </div>
                <div class="col-6 text-end">
                    {{ $about->address   }}
                </div>
            </div>



        </div>
    </div>
    <h2 class="my-5">{{ $about->myservices_title }}</h2>
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
        </div>
        @endforeach
    </div>
@endsection
