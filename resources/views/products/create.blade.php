@extends('layouts.app')

@section('content')
    <h1 class="text-xl mb-4">Add Product</h1>
    <form action="{{ route('products.store') }}" method="POST" class="space-y-4">
        @csrf
        <input type="text" name="name" placeholder="Name" class="border p-2 w-full">
        <textarea name="description" placeholder="Description" class="border p-2 w-full"></textarea>
        <input type="number" name="price" placeholder="Price" step="0.01" class="border p-2 w-full">

        <label>Categories:</label>
        <div class="flex flex-wrap">
            @foreach($categories as $category)
                <label class="mr-4">
                    <input type="checkbox" name="categories[]" value="{{ $category->id }}"> {{ $category->name }}
                </label>
            @endforeach
        </div>

        <button class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
    </form>
@endsection
