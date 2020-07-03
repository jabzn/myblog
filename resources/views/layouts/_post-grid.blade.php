<div class="border border-gray-200 rounded hover:shadow-2xl duration-500">
    <a href="{{ route('post', $post) }}"></a>
    <img src="{{ $post->image }}">
    <div class="px-4 py-4">
        <small class="text-gray-600 mr-2">Author, {{ $post->created_at->toFormattedDateString() }}</small>
        <span class="fa fa-comments"> 5</span>
        <a href="{{ route('post', $post) }}">
            <h2 class="font-bold py-4 text-xl capitalize">{{ $post->title }}</h2>
        </a>
    </div>
</div>
