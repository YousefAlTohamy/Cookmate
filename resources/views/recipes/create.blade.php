@extends('layouts.recipe')
@section('content')
    <div id="addRec" class="page-content">
        <h2>Add New Recipe</h2>
        <p>Make the world more cheerful by adding new flavors to it.</p>
        <div id="addRecipe">
            <form action="{{ route('cookmates.store') }}" method="post" class="create-form">
                @csrf
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Min: 3 Chars | Max: 150 Chars">

                <label for="ingredients">Ingredients</label>
                <textarea id="ingredients" name="ingredients" placeholder="Required
1- .........
2- .........
-
-
                "></textarea>

                <label for="steps">Steps</label>
                <textarea id="steps" name="steps" placeholder="Required
1- .........
2- .........
-
-
                "></textarea>

                <button type="submit" name="submit">Add Recipe</button>
            </form>
        </div>
    </div>
@endsection
