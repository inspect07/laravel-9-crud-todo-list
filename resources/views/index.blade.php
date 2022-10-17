@extends('layouts.app')

@section('content')
<div class="text-center mt-10">
  <h1 class="text-3xl">To Do List</h1>
  <p>by @Inspect</p>
  <form action="{{ route('save') }}" method="POST" class="pt-10">
    @csrf
    <div class="flex flex-col w-80 m-auto">
      <input type="text" name="taskname" placeholder="Task" class="p-3 border-solid border-2 border-gray-200 rounded" autocomplete="off">
      <button type="submit" class="p-2  mt-3 bg-cyan-600 text-white rounded hover:bg-cyan-800 font-bold">Save</button>
    </div>
  </form>

  <table class="table-auto m-auto border-solid border-2 border-gray-200 mt-10">
  <thead class="border-solid border-2 border-gray-200">
    <tr>
      <th class="border-solid border-2 border-gray-200 w-96 text-left p-2">Task</th>
      <th class="border-solid border-2 border-gray-200 w-40">Action</th>
    </tr>
  </thead>
  <tbody>
    @if($taskList)
    @foreach($taskList as $task)
      <tr>
        <td class="border-solid border-2 border-gray-200 pt-5 pb-5 text-left p-2">{{ $task->task }}</td>
        <td class="border-solid border-2 border-gray-200 p-2">
        <a href="{{ route('updateTask', $task->id) }}" class="bg-blue-400 p-1 text-white rounded hover:bg-blue-600 text-sm font-bolder">Update</a>  
        <a href="{{ route('removeTask', $task->id) }}" class="bg-red-400 p-1 text-white rounded hover:bg-red-600 text-sm font-bolder">Delete</a>
        </td>
      </tr>
    @endforeach
    @endif
  </tbody>
</table>
</div>
@endsection
