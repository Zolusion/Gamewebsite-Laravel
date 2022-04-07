@extends('layouts.search')

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
            @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->title }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->category->name }}</td>
                <td style="display: flex">
                    <div>
                        <a href="{{url('products.edit'.$product->id)}}" class="btn btn-primary mr-2"></a>
                    </div>
                    <form action="{{url('products.delete'.$product->id)}}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button class="btn btn-danger" type="submit">Verwijderen</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection