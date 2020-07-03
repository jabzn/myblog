<section>
    <footer class="bg-black">
        <div class="lg:flex lg:justify-between text-white px-16 pt-20">
            <div class="lg:w-2/6 tracking-widest sm:mb-4">
                <h2 class="font-bold text-xl">About Us</h2>
                <img 
                    src="https://via.placeholder.com/400x250.png?text=About+Us"
                    class="py-6 sm:mx-auto" 
                >
                <p class="text-gray-300 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
            </div>

            <div class="lg:w-2/6">
                <h2 class="font-bold text-xl tracking-widest">Latest Post</h2>
                @foreach ($postsOnFooter as $post)
                    <div class="flex justify-between items-center py-6">
                        <div class="w-1/3">
                            <a href="{{ route('post', $post) }}">
                                <img src="{{ $post->image }}">
                            </a>
                        </div>
                        <div class="w-2/3 px-4">
                            <a href="{{ route('post', $post) }}">
                                <h3 class="capitalize">{{ $post->title }}</h3>
                            </a>
                            <small class="text-gray-600 mr-2">{{ $post->created_at->toFormattedDateString() }} 
                                <i class="fab fa-comments"></i> 5</small>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="lg:w-1/6">
                <div>
                    <h2 class="font-bold text-xl tracking-widest">Quick Links</h2>
                    <ul class="py-6 text-lg">
                        <li class="mb-2">About us</li>
                        <li class="mb-2">Travel</li>
                        <li class="mb-2">Adventure</li>
                        <li class="mb-2">Courses</li>
                        <li class="mb-2">Categories</li>
                    </ul>
                </div>

                <div class="mt-6">
                    <h2 class="font-bold text-xl tracking-widest">Social</h2>
                    <ul class="py-6 text-lg">
                        <li class="mb-2 mr-">
                            <i class="fab fa-twitter mr-2"></i>
                            Twitter
                        </li>
                        <li class="mb-2 mr-">
                            <i class="fab fa-facebook mr-2"></i>
                            Facebook
                        </li>
                        <li class="mb-2 mr-">
                            <i class="fab fa-instagram mr-2"></i>
                            Instagram
                        </li>
                    </ul>
                </div>
            </div>
        
        </div>
            
        <small class="block text-white font-bold text-center pb-6">This template is made with love!</small>

    </footer>
</section>
