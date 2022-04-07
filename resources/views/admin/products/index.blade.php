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
      <a href="{{ route('products.create') }}">Toevoegen</a>
    </button>
  </div>
</nav>
@endsection

@section('content')
  <h2 class="my-4 text-4xl font-semibold dark:text-gray-400">
    Overzicht producten
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
                Productnaam     
            </th>
            <th scope="col" 
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Categorie     
            </th>
            <th scope="col" 
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Prijs     
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
    @foreach($products as $product)
        <tr>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{ $product->id }}
          </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $product->name }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $product->category->name }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $product->latest_price->price }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              <a href="{{ route('products.show', ['product' => $product->id]) }}">Details</a>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              <a href="{{ route('products.edit', ['product' => $product->id]) }}">Wijzigen</a>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              <a href="{{ route('products.delete', ['product' => $product->id]) }}">Verwijderen</a>
            </td>
        </tr>
      @endforeach
  </tbody>
</table>

@endsection