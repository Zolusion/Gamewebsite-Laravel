
<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

		<title>Contactpagina</title>
    <style>
        .content-container{
          display: flex;
          width: 100%;
          justify-content: center;
          margin-top: 4em;
        }
    </style>

	</head>
	<body>
  <!-- /header -->
  
  <!-- navigation -->
  <nav class="w-full bg-white md:pt-0 px-6 shadow-lg relative z-20 border-t border-b border-gray-400">
    <div class="container mx-auto max-w-4xl md:flex justify-between items-center text-sm md:text-md md:justify-start">
      <div class="w-full md:w-1/2 text-center md:text-left py-4 flex flex-wrap justify-center items-stretch md:justify-start md:items-start">
        <a href="{{ url('/')}}" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-400">Home</a>
        <a href="{{ url('/products')}}" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-400">Producten</a>
        <a href="{{ url('/overons')}}" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-400">Over ons</a>
        <a href="contact" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline">Contact</a>
      </div>
      <div class="w-full md:w-1/2 text-center md:text-right pb-4 md:p-0">
        <input type="search" placeholder="Search..." class="bg-gray-300 border text-sm p-1" />
      </div>
    </div>
  </nav>
  <!-- /navigation -->
  <div class="content-container">
  
  <form class="w-full max-w-lg">
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Voornaam
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Achternaam
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            E-mail
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            Bericht
          </label>
          <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message"></textarea>
        </div>
      </div>
      <div class="md:flex md:items-center">
        <div class="md:w-1/3">
          <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded" type="button">
            Verzend
          </button>
        </div>
        <div class="md:w-2/3"></div>
      </div>
    </form>
  </div>

	</body>
</html>