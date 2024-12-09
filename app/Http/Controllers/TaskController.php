<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = [
            [
                'id' => 1,
                'title' => 'Primul task',
                'description' => 'Aceasta este descrierea primului task.',
                'priority' => 'Mare'
            ],
            [
                'id' => 2,
                'title' => 'Al doilea task',
                'description' => 'Aceasta este descrierea celui de-al doilea task.',
                'priority' => 'Medie'
            ],
            [
                'id' => 3,
                'title' => 'Al treilea task',
                'description' => 'Aceasta este descrierea celui de-al treilea task.',
                'priority' => 'Scăzută'
            ],
        ];

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
    }
    public function store()
    {
    }
    public function show($id)
    {
        $task = [
            'id' => $id,
            'title' => 'Titlul sarcinii',
            'description' => 'Aceasta este descrierea sarcinii',
            'priority' => 'Mare', // Exemplu de valoare pentru prioritate
        ];

        return view('tasks.show', ['task' => $task]);

    }
    public function edit($id)
    {
    }
    public function update($id)
    {
    }
    public function destroy($id)
    {
    }
}
