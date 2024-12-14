<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use Illuminate\Http\RedirectResponse;
use App\Models\Chirp;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate; 
use Illuminate\View\View;
=======

use App\Models\Chirp;
use Illuminate\Http\Request;
>>>>>>> 6bde659 (Initial commit)

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
<<<<<<< HEAD
    public function index(): View
    {
        return view('chirps.index', [
            'chirps' => Chirp::with('user')->latest()->get(),
        ]);
    }
=======
    public function index()
    {
        //
    }

>>>>>>> 6bde659 (Initial commit)
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(Request $request): RedirectResponse
    {
        //
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        $request->user()->chirps()->create($validated);
 
        return redirect(route('chirps.index'));
=======
    public function store(Request $request)
    {
        //
>>>>>>> 6bde659 (Initial commit)
    }

    /**
     * Display the specified resource.
     */
    public function show(Chirp $chirp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
<<<<<<< HEAD
     */ public function edit(Chirp $chirp): View
    {
        Gate::authorize('update', $chirp);
 
        return view('chirps.edit', [
            'chirp' => $chirp,
        ]);
=======
     */
    public function edit(Chirp $chirp)
    {
        //
>>>>>>> 6bde659 (Initial commit)
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(Request $request, Chirp $chirp): RedirectResponse
    {
        Gate::authorize('update', $chirp);
 
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        $chirp->update($validated);
 
        return redirect(route('chirps.index'));
=======
    public function update(Request $request, Chirp $chirp)
    {
        //
>>>>>>> 6bde659 (Initial commit)
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(Chirp $chirp): RedirectResponse
    {
        
        Gate::authorize('delete', $chirp);
 
        $chirp->delete();
 
        return redirect(route('chirps.index'));
=======
    public function destroy(Chirp $chirp)
    {
        //
>>>>>>> 6bde659 (Initial commit)
    }
}
