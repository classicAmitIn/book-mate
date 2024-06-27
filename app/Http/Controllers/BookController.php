<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // Load the view and return only logged in user books in descending order
        return view('books.index', [
            'books' => Book::where('user_id', auth()->id())->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|min:5',
        ]);

        $request->user()->books()->create($validated);

        return redirect(route('books.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book): View
    {
        // Gate::authorize('update', $book);

        return view('books.edit', [
            'book' => $book,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book): RedirectResponse
    {
        // Gate::authorize('update', $book);

        $validated = $request->validate([
            'title' => 'required|string|max:255|min:5',
        ]);

        $book->update($validated);

        return redirect(route('books.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book): RedirectResponse
    {
        // Gate::authorize('delete', $book);

        $book->delete();

        return redirect(route('books.index'));
    }
}
