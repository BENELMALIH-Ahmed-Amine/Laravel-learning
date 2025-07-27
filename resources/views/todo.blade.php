@extends('layouts.index')

@section('content')
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden mt-16">
        <div class="px-4 py-2">
            <h1 class="text-gray-800 font-bold text-2xl uppercase">To-Do List</h1>
        </div>

        <form action="/todo/store" method="POST" class="w-full max-w-sm mx-auto px-4 py-2">
            @csrf

            <div class="flex items-center border-b-2 border-blue-400 py-2">
                <input class="bg-transparent w-full text-gray-700 mr-3 py-1 px-2 focus:outline-none" type="text"
                    name="task" placeholder="Add a task">
                <button
                    class="flex-shrink-0 bg-blue-600 hover:bg-blue-400 border-blue-600 hover:border-blue-400 text-base font-semibold text-white hover:text-black border-4 px-2 rounded"
                    type="submit">
                    Add
                </button>
            </div>
        </form>

        <ul class="divide-y divide-gray-200 px-4">
            @foreach ($tasks as $task)
                <li class="py-4 flex items-center bg-blue-100 task">
                    <div class="w-full px-3 flex items-center justify-between">

                        <form action="" method="" class="flex items-center">
                            <input type="checkbox" class="h-4 w-4 focus:ring-blue-400 border-gray-300 rounded">
                            <textarea readonl class="text-lg font-medium ml-3 text-gray-900" name="newtask" cols="15">{{ $task->task }}</textarea>
                        </form>
                        
                        <div class="flex items-center gap-8 text-lg">
                            <form action="/todo/update/{{ $task->id }}" method="post">
                                @method('PUT')
                                @csrf
                                
                                <button type="button" class="py-1 px-3.5 bg-blue-400 rounded-lg hover:bg-blue-600 hover:text-white">Edit</button>
                            </form>
                            <form action="/todo/destroy/{{ $task->id }}" method="post">
                                @method('DELETE')
                                @csrf

                                <button
                                    class="py-0.5 px-3.5 bg-red-400 rounded-l hover:bg-red-500 hover:text-white">X</button>
                            </form>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
