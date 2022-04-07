<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.4.6/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class="h-screen w-full flex overflow-hidden">
	<nav class="flex flex-col bg-gray-200 dark:bg-gray-900 w-64 px-12 pt-4 pb-6">
		<!-- SideNavBar -->

		<!-- header sidebar on top -->
		<div class="flex flex-row border-b items-center justify-between pb-2">
			<!-- Hearder -->
			<span class="text-lg font-semibold capitalize dark:text-gray-300">
				My admin
			</span>

			<span class="relative ">
				<a
					class="hover:text-green-500 dark-hover:text-green-300
					text-gray-600 dark:text-gray-300"
					href="inbox/">
					<svg
						width="24"
						height="24"
						viewBox="0 0 24 24"
						fill="none"
						stroke="currentColor"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round">
						<path
							d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
						<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
					</svg>
				</a>
				<div
					class="absolute w-2 h-2 rounded-full bg-green-500
					dark-hover:bg-green-300 right-0 mb-5 bottom-0"></div>
			</span>

		</div>

		<!-- user info sidebar -->
		<div class="mt-8">
			<!-- User info -->
			<img
				class="h-12 w-12 rounded-full object-cover"
				src="https://images.unsplash.com/photo-1541562232579-512a21360020?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
				alt="enoshima profile" />
			<h2
				class="mt-4 text-xl dark:text-gray-300 font-extrabold capitalize">
				Furkan Baykal
			</h2>
			<span class="text-sm dark:text-gray-300">
			</span>
		</div>

		<!-- sidebar -->
		<ul class="mt-2 text-gray-600">
			<!-- Links -->
			<li class="mt-8">
				<a href="#home" class="flex ">
					<span
						class="ml-2 capitalize font-medium text-black
						dark:text-gray-300">
						<a href="{{ route('categories.index')}} ">Admin Categorie</a>
					</span>
					<span
						class="ml-2 capitalize font-medium text-black
						dark:text-gray-300">
						<a href="{{ route('categories.create')}} ">Voeg Categorie</a>
					</span>
					<span
						class="ml-2 capitalize font-medium text-black
						dark:text-gray-300">
						<a href="{{ route('products.create')}} ">Voeg product</a>
					</span>
				</a>
			</li>
		</ul>

		<div class="mt-auto flex items-center text-red-700 dark:text-red-400">
			<!-- important action -->
			<a href="#home" class="flex items-center">
				<svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
					<path
						d="M16 17v-3H9v-4h7V7l5 5-5 5M14 2a2 2 0 012
						2v2h-2V4H5v16h9v-2h2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V4a2 2
						0 012-2h9z"></path>
				</svg>
				<a href="homepage"><button type="button" class="ml-2 capitalize font-medium">Uitloggen</button></a>
			</a>

		</div>
	</nav>
	<main
		class="flex-1 flex flex-col bg-gray-100 dark:bg-gray-700 transition
		duration-500 ease-in-out overflow-y-auto">
		<div class="mx-10 my-2">
			@yield('topmenu')
			

            @yield('content')

		</div>
	</main>

</div>
</body>
</html>

