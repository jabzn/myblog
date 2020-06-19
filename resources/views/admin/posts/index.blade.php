@extends('admin.layouts.app')

@section('title')
    Posts
@endsection

@section('content')
    <a href="">
        <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mb-4">
            Create New Post <i class="fab fa-instagram ml-2"></i>
        </button>
    </a>

    <table class="table-auto">
        <thead>
            <tr class="bg-blue-600 text-white text-lg">
                <th class="py-2 px-2">No</th>
                <th class="w-full py-2 px-2">Title</th>
                <th class="py-2 px-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td class="border py-4 px-2 text-center">{{ $post->id }}</td>
                    <td class="border py-4 px-2">{{ $post->title }}</td>
                    <td class="border py-4 px-2 text-center">
                        <div class="inline-flex">
                            <button>
                                <i class="fab fa-instagram bg-gray-200 py-1 px-1"></i>
                            </button>
                            <button>
                                <i class="fab fa-instagram bg-gray-200 py-1 px-1"></i>
                            </button>
                            <button>
                                <i class="fab fa-instagram bg-gray-200 py-1 px-1"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="bg-gray-200 px-20">
        {{ $posts->links() }}
    </div>
@endsection
