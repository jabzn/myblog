@extends('admin.layouts.app')

@section('title')
    Post Detail
@endsection

@section('content')

    <dl class="text-lg mb-4">
        <div class="flex justify-between mb-4">
            <dt class="w-1/4 font-bold">Title </dt>
            <dd class="w-3/4 text-justify">{{ $post->title }}</dd>
        </div>
        <div class="flex justify-between">
            <dt class="w-1/4 font-bold">Content</dt>
            <dt class="w-3/4 text-justify">{{ $post->body }}</dt>
        </div>
    </dl>

    <a href="{{ route('admin.posts') }}">
        <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mb-4">
            <i class="fas fa-reply"></i>
        </button>
    </a>
    <a href="{{ route('admin.posts.edit', $post) }}">
        <button class="bg-blue-600 hover:bg-blue-800 text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow mb-4">
            <i class="fas fa-edit"></i>
        </button>
    </a>
    <a href="#">
        <button class="bg-red-600 hover:bg-red-800 text-white font-semibold py-2 px-4 border border-gray-500 rounded shadow mb-6">
            <i class="fas fa-trash"></i>
        </button>
    </a>
@endsection
