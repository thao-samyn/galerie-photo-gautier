<div class="grid grid-cols-3 gap-1 lg-1 md:gap-3 md:lg-3 lg:gap-6 lg:my-6">
    @foreach ($images as $image)
        <div class="overflow-hidden shadow-lg relative group">
            <div class="w-full h-0 pb-[150%] relative"> <!-- Conteneur à proportion fixe -->
                <img src="{{ asset($image) }}" alt="{{ $image }}"
                    class="absolute top-0 left-0 w-full h-full object-cover cursor-pointer transition-transform duration-300 transform hover:scale-105 hover:origin-center"
                    onclick="openModal('{{ asset($image) }}')">
            </div>
        </div>
    @endforeach
</div>
