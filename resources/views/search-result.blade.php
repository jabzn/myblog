<x-master>
    <section>
        <main class="mt-16">
            <h2 class="px-16 mb-4 font-bold text-3xl lg:text-left sm:text-center">Search Result</h2>

            <div class="lg:flex lg:justify-between mx-16">
                <div class="lg:w-8/12">
                    @foreach ($posts as $post)
                        <div class="flex border mb-8">
                            <img src="{{ $post->image }}" 
                                 class="w-1/4">
                            <div class="font-bold text-2xl px-4 my-auto">
                                <a href="{{ route('post', $post) }}">
                                    <h2>{{ $post->title }}</h2>
                                </a>
                            </div>
                        </div>
                    @endforeach

                    <div>{{ $posts->links() }}</div>
                </div>

                <div class="lg:w-3/12">
                    @include('layouts._sidebar')
                </div>
            </div>
        </main>
    </section>
</x-master>
