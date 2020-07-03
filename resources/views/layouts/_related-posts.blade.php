<div class="my-16">
    <h2 class="font-bold text-2xl mb-4">Related Post</h2>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($related as $post)
            <div class="border border-gray-400 rounded">
                <a href="{{ route('post', $post) }}">
                    <img src="{{ $post->image }}">
                </a>
                <div class="mx-4 my-2">
                    <small>{{ $post->created_at->toFormattedDateString() }}</small>
                    <a href="{{ route('post', $post) }}">
                        <h1 class="font-bold text-base">{{ $post->title }}</h1>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
