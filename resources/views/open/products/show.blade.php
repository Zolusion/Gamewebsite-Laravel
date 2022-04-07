<div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
    <h1 class="text-3xl text-gray-900 pb-4 wb-4 border-b border-gray-200 leading-none">
        {{ $product->name }}</h1>
    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">Categorie: {{ $product->category->name }}</h2>
    <p class="flex items-center text-gray-600 mb-6">
        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
            stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24">
            <path d="M20 6L9 17L-5-5"></path>
        </svg>
        </span>    
        Prijs: {{ $product->latest_price->price }}
    </p>    
    <p class="flex items-center text-gray-600 mb-6">
        {{ $product->description }}
    </p>
    <div class="flex justify-center">
        <button onclick="addProduct()" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 
        rounded text-lg">In winkelwagen</button>
        <a href="{{ route('open.products.index', ['product' => $product->id]) }}"><button class="ml-4 inline-flex text-gray-700 
            bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Naar overzicht</button></a>
    </div>
</div>