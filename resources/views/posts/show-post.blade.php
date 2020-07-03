<x-master>
    <section>
        <main class="mt-16">
            <div class="lg:flex lg:justify-between mx-16">
                <div class="lg:w-8/12">
                    @include('layouts._single-post')

                    @include('layouts._comments')

                    @include('layouts._related-posts')
                </div>

                <div class="lg:w-3/12">
                    @include('layouts._sidebar')
                </div>
            </div>
        </main>
    </section>
</x-master>
