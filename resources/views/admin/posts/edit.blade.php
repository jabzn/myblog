@extends('admin.layouts.app')

@section('title')
    Edit Post
@endsection

@section('content')
<form action="{{ route('admin.posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')

    @include('admin.posts._form')

    <a href="{{ route('admin.posts.show', $post) }}">
        <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
            Cancel <i class="fas fa-reply ml-2"></i>
        </button>
    </a>
    <button
        type="submit" 
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow"
    >
        Submit <i class="fas fa-check-square ml-2"></i>
    </button>
</form>
@endsection
