@extends('admin.layouts.app')

@section('title')
    Posts
@endsection

@section('content')
    <a href="{{ route('admin.posts.create') }}">
        <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mb-4">
            Create New Post <i class="fas fa-plus ml-2"></i>
        </button>
    </a>

    <table class="table-auto text-lg">
        <thead>
            <tr class="bg-blue-600 text-white text-lg">
                <th class="py-2 px-2">No</th>
                <th class="w-full py-2 px-2">Title</th>
                <th class="py-2 px-2" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <td class="border py-2 px-2 text-center">{{ $post->id }}</td>
                    <td class="border py-2 px-2">{{ $post->title }}</td>
                    <td class="border text-center px-1">
                        <a href="{{ route('admin.posts.show', $post) }}">
                            <button>
                                <i class="fas fa-eye fa-md"></i>
                            </button>
                        </a>
                    </td>
                    <td class="border text-center px-1">
                        <a href="{{ route('admin.posts.edit', $post) }}">
                            <button>
                                <i class="fas fa-edit fa-md"></i>
                            </button>
                        </a>
                    </td>
                    <td class="border text-center px-1 bg-red-500 text-white">
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button 
                                type="submit" 
                                onclick="return confirm('Are you sure you want to delete this post?')"
                            >
                                <i class="fas fa-trash-alt fa-md"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td></td>
                    <td class="text-center py-4">There's no post! Let's create one!</td>
                    <td></td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="bg-gray-200 px-20">
        {{ $posts->links() }}
    </div>
@endsection
