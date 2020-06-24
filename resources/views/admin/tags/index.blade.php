@extends('admin.layouts.app')

@section('title')
    Tags
@endsection

@section('content')
    <table class="table-auto text-lg">
        <thead>
            <tr class="bg-blue-600 text-white text-lg">
                <th class="py-2 px-2">No</th>
                <th class="w-full py-2 px-2">Name</th>
                <th class="py-2 px-2" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <td class="border py-2 px-2 text-center">{{ $tag->id }}</td>
                    <td class="border py-2 px-2 capitalize">{{ $tag->name }}</td>
                    <td class="border text-center px-1">
                        <a href="{{ route('admin.tags.edit', $tag) }}">
                            <button>
                                <i class="fas fa-edit fa-md"></i>
                            </button>
                        </a>
                    </td>
                    <td class="border text-center px-1 bg-red-500 text-white">
                        <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this tag?')">
                                <i class="fas fa-trash-alt fa-md"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
