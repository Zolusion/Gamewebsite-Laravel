<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

		<title>Home</title>

	</head>
	<body>

		<!-- header -->
		<header class="w-full px-6 bg-white">
			<div class="container mx-auto max-w-4xl md:flex justify-between items-center">
				<a href="#" class="block py-6 w-full text-center md:text-left md:w-auto text-gray-600 no-underline flex justify-center items-center">
					Furkan Baykal
				</a>
				<div class="w-full md:w-auto mb-6 md:mb-0 text-center md:text-right">
                    @guest
                        @if(Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block no-underline bg-black text-white text-sm py-2 px-3">Registreer</a>
                        @endif
					    <a href="{{ route('login') }}" class="inline-block no-underline bg-black text-white text-sm py-2 px-3">Login</a>
                    @else
                        <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">{{ Auth::user()->name }}</h1>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
				</div>
			</div>
		</header>
		<!-- /header -->

		<!-- navigation -->
		<nav class="w-full bg-white md:pt-0 px-6 shadow-lg relative z-20 border-t">
			<div class="container mx-auto max-w-4xl md:flex justify-between items-center text-sm md:text-md md:justify-start">
				<div class="w-full md:w-1/2 text-center md:text-left py-4 flex flex-wrap justify-center items-stretch md:justify-start md:items-start">
					<a href="{{ url('/')}}" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-400">Home</a>
					<a href="{{ url('/products')}}" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-400">Productoverzicht</a>
					<a href="{{ url('/overons')}}" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-400">Over ons</a>
					<a href="contact" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline">Contact</a>
				</div>
				<form class="form-inline my-2 my-lg-0" type="get" action="{{ url('/search') }}">
					<input type="search" class="form-control mr-sm-2" name="query" placeholder="Call of Duty" aria-label="zoeken">
					<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Zoeken</button>
					{{-- <div class="w-full md:w-1/2 text-center md:text-right pb-4 md:p-0">
						<input type="search" placeholder="Search..." class="bg-gray-300 border text-sm p-1" />
					</div> --}}
				</form>
			</div>
		</nav>
		<!-- /navigation -->

		<!-- /home content -->
		@yield('content') <!-- bij de yield content zorgt er voor dat de producten tevoorschijn komen -->

		<!-- footer -->
		<footer class="w-full bg-white px-6 border-t">
			<div class="container mx-auto max-w-4xl py-6 flex flex-wrap md:flex-no-wrap justify-between items-center text-sm">
				&copy;2022 Gemaakt door Furkan Baykal
				<div class="pt-4 md:p-0 text-center md:text-right text-xs">
					<a href="contact" class="text-black no-underline hover:underline ml-4">Neem contact op</a>
				</div>
			</div>
		</footer>
		<!-- /footer -->


	</body>
</html>
