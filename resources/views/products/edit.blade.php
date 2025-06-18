@extends('layouts.app')
@section('content')
<form action="{{ route('products.update', $product) }}" method="POST" class="bg-white p-4 rounded shadow">
    @csrf @method('PUT')
    <input name="name" value="{{ $product->name }}" class="border p-2 w-full mb-2" />
    <textarea name="description" class="border p-2 w-full mb-2">{{ $product->description }}</textarea>
    <input name="price" type="number" value="{{ $product->price }}" class="border p-2 w-full mb-2" />
    <label>Categories:</label>
    <select name="categories[]" multiple class="border w-full p-2 mb-2">
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $product->categories->contains($category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
        @endforeach
    </select>
    <button class="bg-yellow-500 text-white px-4 py-2">Update</button>
</form>
@endsection