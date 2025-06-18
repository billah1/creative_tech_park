@extends('layouts.app')
@section('content')
<form action="{{ route('categories.update', $category) }}" method="POST" class="bg-white p-4 rounded shadow">
    @csrf @method('PUT')
    <input name="name" value="{{ $category->name }}" class="border p-2 w-full mb-2" />
    <button class="bg-yellow-500 text-white px-4 py-2">Update</button>
</form>
@endsection