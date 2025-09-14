@extends('layouts.recipe')
@section('content')
    <div id="addRec" class="page-content">
        <h2>Edit Recipe</h2>
        <div id="addRecipe">
            <form action="{{ route('cookmates.update', $recipe->id) }}" method="post" class="create-form">
                @method('put')
                @csrf
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Min: 3 Characters" value="{{ $recipe->title }}">

                <label for="ingredients">Ingredients</label>
                <textarea id="ingredients" name="ingredients" placeholder="Required" >{{ $recipe->ingredients }}</textarea>

                <label for="steps">Steps</label>
                <textarea id="steps" name="steps" placeholder="Required" >{{ $recipe->steps }}</textarea>

                <button type="submit" id="saveChangesBtn" name="save-changes">Save</button>
            </form>
        </div>
    </div>
@endsection
