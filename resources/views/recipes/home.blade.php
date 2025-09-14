@extends('layouts.recipe')
@section('content')
    <div id="dashboard" class="page-content">
        <h2>Control Panel</h2>
        <p>Welcome to your dashboard, <span style="color: #DC143C;"> {{ Auth::user()->name }} </span>! Here you can keep
            track of everything related to the website.</p>
        <a href="{{ route('cookmates.index') }}" style="text-decoration: none; color:black;" >
            <div class="stats">
                <div class="stat-card">
                    <i class="fa-solid fa-book-bookmark"></i>
                    <h3>Recipes</h3>
                    <p id="countRecipes">{{ $count }}</p>
                </div>
            </div>
        </a>
    </div>
@endsection
