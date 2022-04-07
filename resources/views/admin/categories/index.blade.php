@extends('layouts.layout')

@section('topmenu')
<nav
  class="flex flex-row justify-between border-b
  dark:border-gray-600 dark:text-gray-400 transition duration-500
  ease-in-out">
  <div class="flex">
    <!-- Top NavBar -->

    <a href="" 
    class="py-2 block text-green-500 border-green-500
      dark:text-green-200 dark:border-green-200
      focus:outline-none border-b-2 font-medium capitalize
      transition duration-500 ease-in-out">
      Overzicht
    </a>
    <button
      class="ml-6 py-2 block border-b-2 border-transparent
      focus:outline-none font-medium capitalize text-center
      focus:text-green-500 focus:border-green-500
      dark-focus:text-green-200 dark-focus:border-green-200
      transition duration-500 ease-in-out">
      <a href="{{ route('categories.create') }}">Toevoegen</a>
    </button>
  </div>
</nav>
@endsection

@section('content')
  <h2 class="my-4 text-4xl font-semibold dark:text-gray-400">
    Overzicht categorie
  </h2>

  @if(session('message'))
    {{ session('message') }}
  @endif  

  <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-gray-50">
        <tr>
            <th scope="col" 
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Id     
            </th>
            <th scope="col" 
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Categorie    
            </th>
            <th scope="col" 
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Details     
            </th>
            <th scope="col" 
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Bewerken     
            </th>
            <th scope="col" 
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Verwijderen     
            </th>
        </tr>
      </thead>
  

  <tbody class="bg-white divide-y divide-gray-200">
    @foreach($categories as $category)
        <tr>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{ $category->id }}
          </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $category->name }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              <a href="{{ route('categories.show', ['category' => $category->id]) }}">Details</a>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              <a href="{{ route('categories.edit', ['category' => $category->id]) }}">Wijzigen</a>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              <a href="{{ route('categories.delete', ['category' => $category->id]) }}">Verwijderen</a>
            </td>
        </tr>
      @endforeach
  </tbody>
  @if (session('status'))
      <div class="bg-green-200 text-green-900 rounded-lg shadow-md p-6 pr-10 mb-8"
      style="...">
    {{ session('status') }}</div>
  @endif
  @if (session('status-wrong'))
      <div class="bg-red-200 text-red-900 rounded-lg shadow-md p-6 pr-10 mb-8"
      style="...">
    {{ session('status') }}</div>></div>
  @endif
</table>

@endsection