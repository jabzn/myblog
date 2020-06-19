<x-master>
    <section>
        <x-banner></x-banner>

        <main class="mt-16">
            <h2 class="px-16 mb-4 font-bold text-3xl lg:text-left sm:text-center">Lastest Post</h2>

            <div class="lg:flex lg:justify-between mx-16">
                <div class="lg:w-8/12 lg:grid lg:grid-cols-2 lg:gap-6">
                    @include('layouts._post-grid')
                </div>

                <div class="lg:w-3/12">
                    @include('layouts._sidebar')
                </div>
            </div>
        </main>
    </section>
</x-master>
