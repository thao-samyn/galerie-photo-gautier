<div id="imageModal"
    class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-75 flex items-center justify-center hidden z-50">
    <div class="relative max-w-xl w-full p-4">
        <img id="modalImage" src="" alt="Image agrandie" class="w-full h-auto ">
        <button onclick="closeModal()" class="absolute top-4 right-6 text-white text-4xl font-bold">&times;</button>
    </div>
</div>

@push('scripts')
    <script>
        function openModal(imageSrc) {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            modalImage.src = imageSrc;
            modal.classList.remove('hidden');
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.add('hidden');
        }
    </script>
@endpush
