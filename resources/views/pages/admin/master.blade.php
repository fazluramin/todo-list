@extends('layouts.app.layouts')


@section('title')

    Dashboard Page

@endsection

@include('layouts.app.sidebar')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    This is Admin Dashboard
                </div>
            </div>
        </div>
    </div>

@endsection