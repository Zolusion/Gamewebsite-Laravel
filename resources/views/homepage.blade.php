@extends('layouts.layout2')

@section('content')
    <div class="container mx-1">
        <div class="ml-2 flex flex-col">
            {{-- <h3 class="text-xl md:text-3xl leading-tight text-center max-w-md mx-auto text-gray-900 mb-12">
                Producten overzicht
            </h3> --}}
        </div>
    </div>

    @if (session('status'))
        <div class="bg-green-200 text-green-900 rounded-lg shadow-md p-6 pr-10 mb-8"
                style="...">
            {{ session('status') }}
        </div>
    @endif

    <!-- hero -->
		<div class="w-full py-24 px-6 bg-cover bg-no-repeat bg-center relative z-10" style="background-image: url('https://images.unsplash.com/photo-1593118247619-e2d6f056869e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');">
		
			<div class="container max-w-4xl mx-auto text-center">
				<h1 class="text-xl leading-tight md:text-3xl text-center text-gray-100 mb-3">Volgende generatie spelavonturen</h1>
				<p class="text-md md:text-lg text-center text-white ">Kijk rond in onze NEXT GEN games website</p>
			</div>

		</div>
		<!-- /hero -->

		<!-- home content -->
		<div class="w-full px-6 py-12 bg-white">
			<div class="container max-w-4xl mx-auto text-center pb-10">
				
				<h3 class="text-xl md:text-3xl leading-tight text-center max-w-md mx-auto text-gray-900 mb-12">
					Dit is het moment voor de NEXT GEN games waar wacht jij nog op?
				</h3>


			</div>

			<div class="container max-w-4xl mx-auto text-center flex flex-wrap items-start md:flex-no-wrap">
				
				<div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
					<img src="https://images.unsplash.com/photo-1607853202273-797f1c22a38e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=627&q=80" class="w-full h-64 object-cover mb-6" />

					<h2 class="text-xl leading-tight mb-2">Playstation 5</h2>
					<p class="mt-3 mx-auto text-sm leading-normal">Maak deel uit van de nieuwste games
						en word een legende.</p>
				</div>
				
				<div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
					<img src="https://images.unsplash.com/photo-1507457379470-08b800bebc67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1209&q=80" class="w-full h-64 object-cover mb-6" />

					<h2 class="text-xl leading-tight mb-2">Playstation 4</h2>
					<p class="mt-3 mx-auto text-sm leading-normal">Niks is leuker dan oude herinneringen terugbrengen.</p>
				</div>
				
				<div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
					<img src="https://images.unsplash.com/photo-1593305841991-05c297ba4575?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1057&q=80" class="w-full h-64 object-cover mb-6" />

					<h2 class="text-xl leading-tight mb-2">Speel met vrienden</h2>
					<p class="mt-3 mx-auto text-sm leading-normal">Speel met een groep om het spel die je speelt leuker te maken.</p>
				</div>

			</div>
		</div>

    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-wrap -m-4">
               
            </div>
        </div>
    </section>
@endsection