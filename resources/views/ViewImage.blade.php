@extends('layouts.app')

@section('content')


        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <img class="card-img-top" src="{{ url('/uploads/'.$image[0]->image_name) }}" alt="{{ $image[0]->title }}">
                    <div class="card-body">
                        <h4 class="card-title">{{ $image[0]->title }}</h4>
                    </div>
                </div>
            </div>
        </div>



@endsection
