<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Countable;
use Livewire\Component;
use App\Models\TodoItem;

// use Illuminate\Database\Eloquent\Collection;

class TodoList extends Component
{
    public Countable | iterable $todos;
    public string $todoText = "";

    public function selectTodos()
    {
        $this->todos = TodoItem::orderBy('created_at', 'DESC')->get();
    }

    public function mount()
    {
        $this->selectTodos();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }

    public function addTodo()
    {
        $todoItem = new TodoItem();
        $todoItem->todo = $this->todoText;
        $todoItem->completed = false;
        $todoItem->save();

        $this->todoText = "";
        $this->selectTodos();

    }

    public function toggleTodo($id) 
    {
        $todoItem = TodoItem::where('id', $id)->first();

        if(!$todoItem)
        {
            return;
        }

        $todoItem->completed = !$todoItem->completed;
        $todoItem->save();

        $this->selectTodos();
    }

    public function deleteTodo($id)
    {
        $todoItem = TodoItem::where('id', $id)->first();

        if(!$todoItem)
        {
            return;
        }

        $todoItem->delete();

        $this->selectTodos();
    }
}
