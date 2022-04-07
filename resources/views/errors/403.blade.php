@extends('layouts.layout')

@section('content')
  <h2 class="my-4 text-4xl font-semibold dark:text-gray-400">
    Error
  </h2>

  <div class="bg-red-200">
    {{ $exception->getMessage() }}
  </div>  


@endsection