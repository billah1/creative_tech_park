@extends('layouts.app')

@section('content')
    <h1 class="text-2xl mb-4">Products</h1>
    <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Product</a>

    <table class="table-auto w-full mt-4 border">
        <thead>
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $product->name }}</td>
                    <td class="px-4 py-2">${{ $product->price }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ route('products.edit', $product) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline-block">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-500 ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
