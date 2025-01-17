<section class="flex flex-col mt-8">
    <div class="mx-auto">
        <h2 class="text-fs-500 md:text-2xl font-bold mb-2">{{ $category }}</h2>
        <p class="text-[10px] sm:text-xs lg:text-base text-gray-600 mb-4">{{ $description }}</p>
    </div>
    <div class="relative w-full max-w-6xl mx-auto overflow-hidden" id="carousel-{{ $attributes->get('id') }}">
        <div class="flex transition-transform duration-500" id="carousel-images-{{ $attributes->get('id') }}">
            @foreach ($images as $image)
                <div class="w-full sm:w-1/3 shrink-0 px-1">
                    <img src="{{ $image }}" alt="Image"
                        class="w-full h-auto sm:h-[28rem] object-cover cursor-pointer transition-transform duration-300 transform hover:scale-105 hover:origin-center"
                        onclick="openModal('{{ $image }}')">
                </div>
            @endforeach
        </div>
        <button class="absolute top-1/2 left-0 -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full shadow"
            onclick="prevSlide('{{ $attributes->get('id') }}')">
            &#10094;
        </button>
        <button class="absolute top-1/2 right-0 -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full shadow"
            onclick="nextSlide('{{ $attributes->get('id') }}')">
            &#10095;
        </button>
    </div>
</section>

@push('scripts')
    <script>
        let currentIndex_{{ $attributes->get('id') }} = 0;
        const itemsPerSlideDesktop = 3;
        const itemsPerSlideMobile = 1;

        function showSlide(id, index) {
            const images = document.getElementById("carousel-images-" + id);
            const totalImages = images.children.length;
            const itemsPerSlide = window.innerWidth >= 768 ? itemsPerSlideDesktop : itemsPerSlideMobile;
            const maxIndex = Math.ceil(totalImages / itemsPerSlide) - 1;

            if (index < 0) currentIndex_{{ $attributes->get('id') }} = maxIndex;
            else if (index > maxIndex) currentIndex_{{ $attributes->get('id') }} = 0;
            else currentIndex_{{ $attributes->get('id') }} = index;

            images.style.transform = `translateX(-${currentIndex_{{ $attributes->get('id') }} * 100 / itemsPerSlide}%)`;
        }

        function nextSlide(id) {
            showSlide(id, currentIndex_{{ $attributes->get('id') }} + 1);
        }

        function prevSlide(id) {
            showSlide(id, currentIndex_{{ $attributes->get('id') }} - 1);
        }

        setInterval(() => {
            nextSlide('{{ $attributes->get('id') }}');
        }, 5000);

        window.addEventListener('resize', function() {
            showSlide('{{ $attributes->get('id') }}', currentIndex_{{ $attributes->get('id') }});
        });
    </script>
@endpush
