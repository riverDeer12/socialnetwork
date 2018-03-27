@extends('layouts.master')

@section('title')NewsFeed @endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Create new post form -->
            <create-post></create-post>

            <div class="col-md-4 offset-1">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in ! Welcome to SocialNetwork !
                    </div>
                </div>
            </div>
            <!-- Posts -->
            <news-feed></news-feed>
        </div>
    </div>
@endsection
