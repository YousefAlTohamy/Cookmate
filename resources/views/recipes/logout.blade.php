@extends('layouts.recipe')
@section('content')
    <div id="logout" class="page-content">
        <form id="logout-form" action="{{ route('cookmates.logout') }}" method="POST" style="width: 97%;">
            @csrf
            <a onclick="confirmLogout()" class="btn btn-outline-success"  id="signoutbt">Log out</a>
        </form>
    </div>
@endsection
