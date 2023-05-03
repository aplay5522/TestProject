<?php

namespace App\Http\Controllers;

use App\Models\Quizz;
use Illuminate\Http\Request;
use Inertia\Inertia;

class QuizzController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Quizzs/Index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quizz  $quizz
     * @return \Illuminate\Http\Response
     */
    public function show($quizz)
    {
        return Inertia::render('Quizzs/Show', compact('quizz'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quizz  $quizz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quizz $quizz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quizz  $quizz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quizz $quizz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quizz  $quizz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quizz $quizz)
    {
        //
    }
}
