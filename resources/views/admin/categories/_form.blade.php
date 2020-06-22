<div class="flex mb-6 items-center">
    <input class="border border-gray-400 p-2 w-full rounded-lg mr-2"
           type="text"
           name="name"
           id="name"
           value="{{ old('name', $category->name) }}" 
           required
    >

    @error('name')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror

    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
        <i class="fas fa-plus"></i>
    </button>
</div>
