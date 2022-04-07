@extends('layouts.layout')

@section('topmenu')
<nav
  class="flex flex-row justify-between border-b
  dark:border-gray-600 dark:text-gray-400 transition duration-500
  ease-in-out">
  <div class="flex">
    <!-- Top NavBar -->
    <button
        class="ml-6 py-2 mr-6 block border-b-2 border-transparent
        focus:outline-none font-medium capitalize text-center
        focus:text-green-500 focus:border-green-500
        dark-focus:text-green-200 dark-focus:border-green-200
        transition duration-500 ease-in-out">
        <a href="{{ route('categories.index') }}">Overzicht</a>
    </button>
    <a
      href=""
      class="py-2 block text-green-500 border-green-500
      dark:text-green-200 dark:border-green-200
      focus:outline-none border-b-2 font-medium capitalize
      transition duration-500 ease-in-out">
      Toevoegen
    </a>
  </div>
</nav>
@endsection

@section('content')
<h2 class="my-4 text-4xl font-semibold dark:text-gray-400">
    Toevoegen categorie
  </h2>

 @if($errors->any())
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
 @endif

<div class="w-full max-w-xs">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('categories.store') }}" method="POST">
        @csrf <!-- beveiliging van de code -->
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
          Naam
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight 
        focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror" 
        id="name" type="text" placeholder="Yuri" name="name" value="{{ old('name') }}">
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
        type="submit">
          Toevoegen categorie
        </button>
      </div>
    </form>
  </div>
  @endsection