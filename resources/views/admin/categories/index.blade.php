@extends('admin.layouts.app')

@section('title')
    List of Categories
@endsection

@section('content')
<form method="POST" action="{{ route('admin.categories.store') }}">
    @csrf
    <label class="block mb-2 capitalize font-bold text-lg text-gray-700 @error('name') is-invalid @enderror" for="name">
        New Category
    </label>
    <div class="w-2/4 flex items-center">
        @include('admin.categories._form')
    </div>
</form>

    <table class="table-auto">
        <thead>
            <tr class="bg-blue-600 text-white text-lg">
                <th class="py-2 px-2">No</th>
                <th class="w-full py-2 px-2">Name</th>
                <th class="py-2 px-2" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td class="border py-2 px-2 text-center">{{ $category->id }}</td>
                    <td class="border py-2 px-2 capitalize">{{ $category->name }}</td>
                    <td class="border text-center px-1">
                        <a href="{{ route('admin.categories.edit', $category) }}">
                            <button>
                                <i class="fas fa-edit fa-md"></i>
                            </button>
                        </a>
                    </td>
                    <td class="border text-center px-1 bg-red-500 text-white">
                        <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this category?')">
                                <i class="fas fa-trash-alt fa-md"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
