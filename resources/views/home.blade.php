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
                    <p class="card-text display-6 text-center">60</p>
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
    <div class="row container mx-auto mt-4 pt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Email List
                </div>
                <div class="card-body">
                    <p class="card-text display-6 text-center">7</p>
                    <a href="#" class="btn btn-primary btn-sm btn-block">view</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Testimonials
                </div>
                <div class="card-body">
                    <p class="card-text display-6 text-center">0</p>
                    <a href="#" class="btn btn-primary btn-sm btn-block">view</a>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    User Accounts
                </div>
                <div class="card-body">
                    <p class="card-text display-6 text-center">2</p>
                    <a href="#" class="btn btn-primary btn-sm btn-block">view</a>
                </div>
            </div>
        </div>
    </div>
@endsection
