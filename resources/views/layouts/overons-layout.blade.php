<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

		<title>Over ons</title>

	</head>
	<body>
		
		<!-- navigation -->
		<nav class="w-full bg-white md:pt-0 px-6 shadow-lg relative z-20 border-t border-b border-gray-400">
			<div class="container mx-auto max-w-4xl md:flex justify-between items-center text-sm md:text-md md:justify-start">
				<div class="w-full md:w-1/2 text-center md:text-left py-4 flex flex-wrap justify-center items-stretch md:justify-start md:items-start">
					<a href="{{ url('/')}}" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-400">Home</a>
					<a href="{{ url('/products')}}" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-400">Productoverzicht</a>
					<a href="{{ url('/overons')}}" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-400">Over ons</a>
					<a href="contact" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline">Contact</a>
				</div>
				<div class="w-full md:w-1/2 text-center md:text-right pb-4 md:p-0">
					<input type="search" placeholder="Search..." class="bg-gray-300 border text-sm p-1" />
				</div>
			</div>
		</nav>
		<!-- /navigation -->

        
		
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