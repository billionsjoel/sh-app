@extends('layouts.dashboard')

@section('content')
    <p class="mt-4 lead container">Welcome to Scribehouse.</p>

    <div class="row container mx-auto mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Messages
                </div>
                <div class="card-body">
                    <p class="card-text display-6 text-center">9</p>
                    <a href="#" class="btn btn-primary btn-sm btn-block">view</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Book Covers
                </div>
                <div class="card-body">
                    <p class="card-text display-6 text-center">13</p>
                    <a href="#" class="btn btn-primary btn-sm btn-block">view</a>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Articles
                </div>
                <div class="card-body">
                    <p class="card-text display-6 text-center">8</p>
                    <a href="#" class="btn btn-primary btn-sm btn-block">view</a>
                </div>
            </div>
        </div>
    </div>
@endsection
