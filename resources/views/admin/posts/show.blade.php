@extends('admin.layouts.app')

@section('title')
    Post Detail
@endsection

@section('content')

    <dl class="text-lg mb-4">
        <div class="flex justify-between mb-4">
            <dt class="w-1/4 font-bold">Title</dt>
            <dd class="w-3/4 text-justify capitalize">{{ $post->title }}</dd>
        </div>
        <div class="flex justify-between mb-4">
            <dt class="w-1/4 font-bold">Category</dt>
            <dd class="w-3/4 text-justify capitalize">{{ $post->category->name }}</dd>
        </div>
        <div class="flex justify-between">
            <dt class="w-1/4 font-bold">Content</dt>
            <dt class="w-3/4 text-justify">{{ $post->body }}</dt>
        </div>
    </dl>

    <div class="flex">    
        <a href="{{ route('admin.posts') }}">
            <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mb-4 mr-2">
                <i class="fas fa-reply"></i>
            </button>
        </a>
        <a href="{{ route('admin.posts.edit', $post) }}">
            <button class="bg-blue-600 hover:bg-blue-800 text-white font-semibold py-2 px-3 border border-gray-400 rounded shadow mb-4 mr-2">
                <i class="fas fa-edit"></i>
            </button>
        </a>
        <form method="POST" action="{{ route('admin.posts.destroy', $post) }}">
            @csrf
            @method('DELETE')
            <button class="bg-red-600 hover:bg-red-800 text-white font-semibold py-2 px-4 border border-gray-500 rounded shadow mb-6 mr-2">
                <i class="fas fa-trash"></i>
            </button>
        </form>
    </div>
@endsection
