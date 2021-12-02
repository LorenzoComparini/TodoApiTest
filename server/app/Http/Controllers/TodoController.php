<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function list(){
        return Todo::all();
    }

    public function detail($id){
        return Todo::where('id', $id)->first();
    }

    public function create(Request $req){
        $todoData = json_decode($req->getContent());

        $todo = new Todo();

        $todo->task = $todoData->task;

        $todo->save();
        
        return $todo;
    }

    public function tick($id){
        $todo = Todo::where('id', $id)->where('ticked', false)->first();

        if($todo == NULL){   
            return "aoh non ho trovato il todo";
        };

        $todo->ticked = true;
        $todo->ticked_at = Carbon::now();

        $todo->save();

        return $todo;
    }

    public function edit(Request $req, $id){
        $todoData = json_decode($req->getContent());

        $todo = Todo::where('id', $id)->first();

        $todo->task = $todoData->task;
        $todo->save();

        return $todo;
    }

    public function delete($id){
        Todo::destroy($id);
        return "aoh ho distrutto lo sttronzo";
    }
}
