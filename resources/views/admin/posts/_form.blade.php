<div class="mb-6">
    <label class="block mb-2 capitalize font-bold text-lg text-gray-700"
           for="title"
    >
        title
    </label>

    <input class="border border-gray-400 p-2 w-full rounded-lg @error('title') is-invalid @enderror"
           type="text"
           name="title"
           id="title"
           value="{{ old('title', $post->title) }}" 
           required
    >

    @error('title')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label class="block mb-2 capitalize font-bold text-lg text-gray-700"
           for="image"
    >
        image
    </label>

    <img src="{{ $post->image }}"
         class="mb-4" 
         width="300px" 
    >

    <input class="border border-gray-400 p-2 w-full rounded-lg @error('image') is-invalid @enderror"
           type="file"
           name="image"
           id="image"
    >

    @error('image')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label class="block mb-2 capitalize font-bold text-lg text-gray-700"
           for="category_id"
    >
        Category
    </label>

    <select class="border border-gray-400 p-2 w-full rounded-lg" name="category_id" id="category_id" required>
        <option>-- Select Category --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select> 

    @error('category_id')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label class="block mb-2 capitalize font-bold text-lg text-gray-700"
           for="tags"
    >
        tags
    </label>

    <small>Add "," as a Separator</small>

    <input class="border border-gray-400 p-2 w-full rounded-lg"
           type="text"
           name="tags"
           id="tags"
           value="{{ old('tags', implode(',', $post->tags->pluck('name'))) }}" 
     >

    @error('tags')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label class="block mb-2 capitalize font-bold text-lg text-gray-700"
           for="body"
    >
        body
    </label>

    <textarea 
        class="border border-gray-400 p-2 w-full rounded-lg @error('body') is-invalid @enderror"
        name="body"
        id="body"
        rows="10" 
        required
    >{{ old('body', $post->body) }}</textarea>
    <script>
        CKEDITOR.replace('body');
    </script>

    @error('body')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>

