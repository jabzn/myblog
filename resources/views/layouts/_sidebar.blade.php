<input 
    type="search" 
    name="search"
    placeholder="Type a keyword and hit enter ..."
    class="w-full border border-gray-200 px-2 py-2 rounded mb-20" 
>

<div class="border-2 border-gray-200 rounded">
    <img src="https://via.placeholder.com/100x100.png?text=Avatar"
        class="rounded-full mx-auto border-4 border-gray-600 -mt-12 shadow-lg mb-2">
    <div class="text-center py-4 px-4">
        <h2 class="font-bold text-xl mb-2">Author Name</h2>
        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
    </div>
    <button class="block mx-auto bg-blue-500 hover:bg-blue-700 duration-500 text-white font-bold py-2 px-4 border border-blue-700 rounded my-4">
        Read my bio
    </button>
    <div class="flex justify-center mb-4">
        <a href="#">
            <i class="fab fa-facebook-f mr-6"></i>
        </a>
        <a href="#">
            <i class="fab fa-instagram mr-6"></i>
        </a>
        <a href="#">
            <i class="fab fa-twitter"></i>
        </a>
    </div>
</div>

<div class="mt-12">
    <h2 class="font-bold text-xl">Popular Posts</h2>
    <hr class="my-4">
    @foreach (range (1, 3) as $index)
        <div class="flex justify-between items-center mb-12">
            <div>
                <img src="https://via.placeholder.com/140x110.png?text=thumbnail">
            </div>
            <div class="pl-4 text-justify">
                <h3 class="font-bold py-2">How to Find the Video Games for Your Youth</h3>
                <small class="text-gray-600">March 5, 2020</small>
            </div>
        </div>
    @endforeach
</div>

<div class="mt-12">
    <h2 class="font-bold text-xl">Categories</h2>
    <hr class="my-4">
    <ul>
        @foreach (range (1,5) as $index)
            <li 
                class="{{ $loop->last ? '' : 'border-dotted border-b border-gray-200'}} py-2 text-xl">
                <a href="#">Travel</a>
            </li>
        @endforeach
    </ul>
</div>

<div class="mt-12 sm:mb-24">
    <h2 class="font-bold text-xl">Tags</h2>
    <hr class="my-4">
    <ul>
        @foreach (range (1, 9) as $index)
            <a href="#">
                <li 
                    class="float-left bg-gray-200 px-4 px-2 mr-1 mb-1 rounded-lg hover:bg-gray-400 duration-500"
                >
                    Tags
                </li>
            </a>
        @endforeach
    </ul>
</div>
