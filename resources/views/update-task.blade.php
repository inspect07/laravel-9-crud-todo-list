@extends('layouts.app')

@section('content')
<div class="text-center mt-10">
  <h1 class="text-3xl">To Do List</h1>
  <p>by @Inspect</p>
  <form action="{{ route('saveUpdatedTask') }}" method="POST" class="pt-10">
    @csrf
    <div class="flex flex-col w-80 m-auto">
      <input type="text" name="updatetaskname" value="{{ $task->task }}" placeholder="Task" class="p-3 border-solid border-2 border-gray-200 rounded" autocomplete="off">
      <input type="hidden" name="id" value="{{ $task->id }}">
      <button type="submit" class="p-2  mt-3 bg-cyan-600 text-white rounded hover:bg-cyan-800 font-bold">Update</button>
    </div>
  </form>
</div>
@endsection
