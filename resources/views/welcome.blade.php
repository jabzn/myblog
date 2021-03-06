<x-master>
    <section>
        <x-banner></x-banner>

        <main class="mt-16">
            <h2 class="px-16 mb-4 font-bold text-3xl lg:text-left sm:text-center">Latest Post</h2>

            <div class="lg:flex lg:justify-between mx-16">
                <div class="lg:w-8/12">
                    <div class="sm:mb-4 lg:grid lg:grid-cols-2 lg:gap-6">
                        @foreach ($latestPosts as $post)
                            @include('layouts._post-grid')
                        @endforeach
                    </div>

                    <div>{{ $latestPosts->links() }}</div>
                </div>

                <div class="lg:w-3/12">
                    @include('layouts._sidebar')
                </div>
            </div>
        </main>
    </section>
</x-master>
