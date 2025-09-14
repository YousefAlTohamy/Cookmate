<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeRequest;
use App\Models\Recipe;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class DashboardController extends Controller
{

    /**
     * view home page.
     */
    public function home()
    {
        $count = Recipe::count();
        return view('recipes.home', compact('count'));
    }

    /**
     * view about page
     */
    public function about()
    {
        return view('recipes.about');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $recipes = Recipe::where('title', 'LIKE', '%' . $request->search . '%')->paginate(6);
            if ($recipes->isEmpty()) {
                return redirect()
                    ->route('cookmates.index')
                    ->with(['show-error' => 'Recipe Not Found']);
            }
        } else {
            $recipes = Recipe::latest()->paginate(6);
        }
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecipeRequest $request)
    {
        Recipe::create($request->all());
        return redirect()->route('cookmates.index')->with('create-rec-success', 'Recipe Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recipe = Recipe::find($id);
        if (!$recipe) {
            return redirect()
                ->route('cookmates.index')
                ->with(['show-error' => 'Recipe Not Found']);
        }
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $recipe = Recipe::find($id);

        if (!$recipe) {
            return redirect()
                ->route('cookmates.show', $id)
                ->with(['show-error' => 'Recipe Not Found']);
        }
        return view('recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RecipeRequest $request, string $id)
    {
        $recipe = Recipe::find($id);
        if (!$recipe) {
            return redirect()
                ->route('cookmates.index')
                ->with(['show-error' => 'Recipe Not Found']);
        }

        $recipe->update($request->all());
        return redirect()->route('cookmates.show', $id)->with('update-rec-success', 'Recipe Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $recipe = Recipe::find($id);

        if (!$recipe) {
            return redirect()
                ->route('cookmates.edit', $id)
                ->with(['delete-error' => 'Recipe not found']);
        }
        $recipe->delete();
        return redirect()->route('cookmates.index')->with('del-rec-success', 'Recipe Deleted Successfully');
    }
}
