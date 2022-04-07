@extends('layouts.layout')

@section('content')
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titel</th>
                <th scope="col">Prijs</th>
                <th scope="col">Categorie</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->latest_price->price }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td style="display:flex"></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection