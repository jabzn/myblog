@extends('admin.layouts.app')

@section('title')
    Edit Category
@endsection

@section('content')
<form method="POST" action="{{ route('admin.categories.update', $category) }}">
    @csrf
    @method('PUT')
    <label class="block mb-2 capitalize font-bold text-lg text-gray-700 @error('name') is-invalid @enderror" for="name">
        Category Name
    </label>
    <div class="w-2/4 flex items-center">
        @include('admin.categories._form')
    </div>
</form>
@endsection
