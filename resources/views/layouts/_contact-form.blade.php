<div class="mb-6">
    <label class="block mb-2 capitalize text-lg text-gray-600"
           for="name"
    >
        name
    </label>

    <input class="border border-gray-400 p-2 w-full rounded-lg"
           type="text"
           name="name"
           id="name"
    >

    @error('name')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label class="block mb-2 capitalize text-lg text-gray-600"
           for="phone"
    >
        phone
    </label>

    <input class="border border-gray-400 p-2 w-full rounded-lg"
           type="text"
           name="phone"
           id="phone"
    >

    @error('phone')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label class="block mb-2 capitalize text-lg text-gray-600"
           for="email"
    >
        email
    </label>

    <input class="border border-gray-400 p-2 w-full rounded-lg"
           type="text"
           name="email"
           id="email"
    >

    @error('email')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label class="block mb-2 capitalize text-lg text-gray-600"
           for="message"
    >
        Write Message
    </label>

    <textarea 
        class="border border-gray-400 p-2 w-full rounded-lg" 
        rows="6" 
        id="message">
    </textarea>

    @error('message')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror

    <button type="submit" class="bg-blue-400 py-2 px-4 mt-2 rounded hover:bg-blue-600 duration-150 text-white font-bold">Send Messeage</button>
</div>
