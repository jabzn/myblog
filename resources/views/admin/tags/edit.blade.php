@extends('admin.layouts.app')

@section('title')
    Edit Tag
@endsection

@section('content')
<form method="POST" action="#">
    @csrf
    @method('PUT')
    <label class="block mb-2 capitalize font-bold text-lg text-gray-700 @error('name') is-invalid @enderror" for="name">
        Tag Name
    </label>
    <div class="w-2/4 flex items-center">
        @include('admin.tags._form')
    </div>
</form>
@endsection
