@extends('layouts.app')
@section('content')
<form action="{{ route('products.update', $product) }}" method="POST" class="bg-white p-4 rounded shadow">
    @csrf @method('PUT')
    <input name="name" value="{{ $product->name }}" class="border p-2 w-full mb-2" />
    <textarea name="description" class="border p-2 w-full mb-2">{{ $product->description }}</textarea>
    <input name="price" type="number" value="{{ $product->price }}" class="border p-2 w-full mb-2" />
  <label>Categories:</label>
    <div class="flex flex-wrap">
        @foreach($categories as $category)
            <label class="mr-4">
                <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                    {{ in_array($category->id, $product->categories->pluck('id')->toArray()) ? 'checked' : '' }}>
                {{ $category->name }}
            </label>
        @endforeach
    </div>
    <button class="bg-yellow-500 text-white px-4 py-2">Update</button>
</form>
@endsection