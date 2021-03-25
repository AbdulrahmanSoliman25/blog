@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header text-center">
                         posted
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">{{ $posts_count }}</h1>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header text-center">
                        trashed
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">{{ $trashed_count }}</h1>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header text-center">
                        users
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">{{ $users_count }}</h1>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card ">
                    <div class="card-header text-center">
                        categories
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">{{ $categories_count }}</h1>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
