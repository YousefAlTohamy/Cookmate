@extends('layouts.recipe')
@section('content')
    <div id="show-rec" class="page-content">
        <div class="show-rec">
            <h2 id="rec-title">{{ $recipe->title }}</h2>
            <div class="show-rec">
                <h3>Ingredients</h3><br>
                <ul id="rec-ingredients">
                    @foreach (explode("\n", $recipe->ingredients) as $ingredient)
                        @if (trim($ingredient) !== '')
                            <li>{{ $ingredient }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="show-rec">
                <h3>Steps</h3><br>
                <ul id="rec-steps">
                    @foreach (explode("\n", $recipe->steps) as $step)
                        @if (trim($step) !== '')
                            <li>{{ $step }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="actions">
                <a href="{{ route('cookmates.edit', $recipe->id) }}" class="edit-row-btn btn btn-primary">Edit</a>
                <a href="#" onclick="confirmDelete({{ $recipe->id }})"
                    class="delete-row-btn btn btn-primary">Delete</a>

                <form id="delete-form-{{ $recipe->id }}" action="{{ route('cookmates.destroy', $recipe->id) }}"
                    method="POST" style="display:none;">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
@endsection
