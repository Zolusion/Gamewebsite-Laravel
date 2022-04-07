@extends('layouts.layout')

@section('topmenu')

<a href="{{ route('categories.index') }}" 
class="py-2 block text-green-500 border-green-500
  dark:text-green-200 dark:border-green-200
  focus:outline-none border-b-2 font-medium capitalize
  transition duration-500 ease-in-out">
  Index
</a>
<a href="{{ route('categories.create') }}" 
    class="py-2 block text-green-500 border-green-500
      dark:text-green-200 dark:border-green-200
      focus:outline-none border-b-2 font-medium capitalize
      transition duration-500 ease-in-out">
      Create
    </a>

@endsection

@section('content')
    <div class="container mx-1">
        <div class="ml-2 flex flex-col">
            <h2 class="my-4 text-4x1 font-semibold text-gray-600 dark:text-gray-400">
                Category Admin
            </h2>
        </div>
    </div>

    <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden my-4">
        <img class="w-full h-56 object-cover object-center" src="https://images.unsplash.com/photo-1646920412180-22c4df7862ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80jjj">
        <div class="flex items-center px-6 py-3 bg-gray-900">
            <h1 class="mx-3 text-white font-semibold text-lg">Category</h1>
        </div>
        <div class="py-4 py-6">
            <h1 class="text-2xl font-semibold text-gray-600">{{ $category->name }}</h1>
            <p class="py-2 text-lg text-gray-700"></p>
        </div>
    </div>
@endsection