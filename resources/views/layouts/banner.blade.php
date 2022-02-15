<div class="relative h-screen bg-white dark:bg-gray-800">
    @include('layouts.navigation')
    <section
        class=" flex relative z-20 items-center overflow-hidden">
        <div class="container mx-auto px-6 flex relative py-16">
            <div class="sm:w-2/3 lg:w-2/5 flex flex-col relative z-20">
                <span class="w-20 h-2 bg-gray-800 dark:bg-white mb-12">
                </span>
                <h1
                    class="font-bebas-neue uppercase text-6xl sm:text-8xl font-black flex flex-col leading-none dark:text-white text-gray-800">
                    Halftime
                    <span class="text-5xl sm:text-7xl">
                        Car Rental
                    </span>
                </h1>
                <p class="text-sm sm:text-base text-gray-700 dark:text-white">
                    The number 1 car rental company in Montego Bay Jamaica,
                    affordable and reliable car rental service with a large
                    selection of vehicle to choose from.
                </p>
                <div class="flex mt-8">
                    <x-custom.link-button-solid>Our Locations</x-custom.link-button-solid>
                    <x-custom.link-button-line>Our Cars</x-custom.link-button-line>
                </div>
            </div>
            <div class="hidden sm:block sm:w-1/3 lg:w-3/5 relative">
                <img src="{{ asset('images/car-home.png') }}"
                    class="max-w-xs md:max-w-sm m-auto" />
            </div>
        </div>
    </section>
</div>