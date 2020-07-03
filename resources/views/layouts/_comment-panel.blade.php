<div>
    <h2 class="font-bold text-2xl mb-4">Leave a Comment</h2>
    <div class="bg-gray-400 rounded-lg">
        <form action="#" method="POST">
            <div class="mx-10 py-10">
                <label class="block mb-2 capitalize font-bold text-xl text-gray-700"
                       for="message"
                >
                    Your Message
                </label>

                <textarea 
                    class="border border-gray-400 p-2 w-full rounded-lg @error('message') is-invalid @enderror"
                    name="message"
                    id="message"
                    rows="4" 
                ></textarea>
            
                @error('comment')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

                <button type="submit" class="bg-blue-400 py-2 px-4 mt-2 rounded hover:bg-blue-600 duration-150 text-white font-bold">Post Comment</button>
            </div>
        </form>
    </div>
</div>
