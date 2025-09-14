@extends('layouts.recipe')
@section('content')

    <div class="search-box">
        <form action="{{ route('cookmates.index') }}" method="GET" class="search-form" name="search-form">
            <h2>Search</h2>
            <input type="search" name="search" id="search" placeholder="Title">
            <input type="submit" value="search">
        </form>
    </div>
    <div id="recipes" class="page-content">
        <h2>Recipes</h2>
        <p>Here are all the delicious recipes you wish for.</p>
        <div class="records">
            @foreach ($recipes as $recipe)
                <div id="recipe-rec" class="recipe-card">
                    <div class="card-body">
                        <h2 class="card-title">{{ $recipe->title }}</h2>

                        <h4>Ingredients</h4>
                        <p>{{ \Illuminate\Support\Str::limit($recipe->ingredients, 40) }}</p>
                        <br>

                        <h4>Steps</h4>
                        <p>{{ \Illuminate\Support\Str::limit($recipe->steps, 40) }}</p>


                        <div class="actions">
                            <a href="{{ route('cookmates.show', $recipe->id) }}" class="add-row-btn btn btn-primary">Show
                                Recipe</a>

                            <a href="#" onclick="confirmDelete({{ $recipe->id }})"
                                class="delete-btn btn btn-primary">Delete</a>

                            <form id="delete-form-{{ $recipe->id }}"
                                action="{{ route('cookmates.destroy', $recipe->id) }}" method="POST" style="display:none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $recipes->links('vendor.pagination.tailwind') }}
        </div>
    </div>
@endsection
