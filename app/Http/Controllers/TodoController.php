<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Dotenv\Exception\ValidationException;

class TodoController extends Controller
{
    public function index()
    {
        $todo = Todo::all();
        return view('index', ['todos' => $todo]);
    }

    public function create()
    {
        return view('create');
    }

    public function edit(Request $request)
    {

        $todo = Todo::find($request->route('id'));
        return view('edit', ['todo' => $todo]);
    }

    public function updateTodo(Request $request)
    {

        try {
            $data = $request->validate([
                'name' => 'required',
                'description' => 'required',
            ]);
            $todo = Todo::find($request->route('id'));
            $todo->name = $data['name'];
            $todo->description = $data['description'];
            $todo->save();

            session()->flash('success', 'Todo Updated!');
            return redirect('/');
        } catch (ValidationException) {
            return redirect()->back();
            info("Invalid input");
        }
    }

    public function details(Request $request)
    {
        $todo = Todo::find($request->route('id'));
        return view('details', ['todo' => $todo]);
    }

    public function delete(Request $request)
    {
        Todo::destroy($request->route('id'));
        session()->flash('success', 'Todo deleted!');
        return redirect('/');
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required',
                'description' => 'required',
            ]);


            $todo = new Todo();
            $todo->name = $data['name'];
            $todo->description = $data['description'];
            $todo->save();

            session()->flash('success', 'Todo created!');
            return redirect('/');
        } catch (ValidationException) {
            return redirect()->back();
        }
    }
}
