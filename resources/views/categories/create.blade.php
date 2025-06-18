@extends('layouts.app')
@section('content')
<form action="{{ route('categories.store') }}" method="POST" class="bg-white p-4 rounded shadow">
    @csrf
    <input name="name" placeholder="Category Name" class="border p-2 w-full mb-2" />
    <button class="bg-green-500 text-white px-4 py-2">Save</button>
</form>
@endsection



