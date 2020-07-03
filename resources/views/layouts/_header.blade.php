<section>
    <header>
        <div class="flex justify-between py-3 px-16 bg-blue-600 items-center">
            <div class="text-white">
                <a href="#">
                    <i class="fab fa-facebook-f mr-4"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram mr-4"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>

            <div>
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Type keyword to search ..."
                    class="px-2 py-1 w-64 rounded mr-2">

                <i class="fas fa-search text-white"></i>
            </div>
        </div>

        <div class="w-full text-center font-bold text-6xl py-6">
            <h1>Wordify</h1>
        </div>

        <nav class="flex lg:justify-center">
            <ul class="lg:flex uppercase font-bold sm:mx-4">
                <a href="{{ route('home') }}">
                    <li class="mr-6 hover:text-blue-400 duration-150">Home</li>
                </a>
                <li class="mr-6">Categories</li>
                <a href="{{ route('about') }}">
                    <li class="mr-6 hover:text-blue-400 duration-150">About</li>
                </a>
                <a href="{{ route('contact') }}">
                    <li class="mr-6 hover:text-blue-400 duration-150">Contact</li>
                </a>
            </ul>
        </nav>

        <hr class="my-10 mx-16">
    </header>
</section>
