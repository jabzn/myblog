<img src="{{ $post->image }}" class="mb-4">
<small class="text-gray-600 text-lg">
    {{ $post->created_at->toFormattedDateString() }}
</small>
<h2 class="mb-8 font-bold text-4xl lg:text-left sm:text-center capitalize">
    {{ $post->title }}
</h2>
<span class="bg-blue-400 py-1 px-2 rounded capitalize font-bold text-white">
    {{ $post->category->name }}
</span>
<p class="my-8 text-xl text-justify">
    {{ $post->body }}
</p>
<p class="text-xl capitalize">
    <strong>Category : </strong>
    <a href="#">
        {{ $post->category->name }},
    </a>
    <strong>Tags :</strong>
    @foreach ($post->tags as $tag)
        <a href="#">
               {{ !empty($tag->name) ? $tag->name . ',' : '' }}
        </a> 
    @endforeach
</p>
