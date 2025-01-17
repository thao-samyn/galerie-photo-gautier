@extends('layouts.main')

@section('title', 'Goat production')

@section('content')
    <main class="flex-col items-center w-full gap-pd-700 flex-1 ">
        <div>
            <h1 class="min-w-auto inline-block relative text-fs-500 md:text-4xl lg:text-7xl ">
                Photographie &<br>
                <span class="font-bold">Production audiovisuelle</span>
                <span class="block absolute right-10 text-xs md:text-[1rem] lg:text-[1.5rem]">Par Gautier
                    Tessier</span>
            </h1>
            <span class="block text-fs-400 mt-12 ">Basé à paris (75)</span>
        </div>
        <x-carousel category="mode"
            description="Découvrez les dernières tendances et looks inspirants.
            Explorez notre
            sélection d'images qui capturent l'essence de la mode moderne."
            :images="[
                '/images/mode/IMG_5417.jpeg',
                '/images/mode/IMG_5416.jpeg',
                '/images/mode/IMG_5443.jpeg',
                '/images/mode/IMG_5148.jpeg',
            ]" />

        <x-carousel category="marketing"
            description="Je propose des photos de marketing percutantes, adaptées à votre image de marque pour renforcer l'impact de vos campagnes et événements."
            :images="[
                '/images/marketing/IMG_4606.jpeg',
                '/images/marketing/IMG_4607.jpeg',
                '/images/marketing/IMG_4611.jpeg',
                '/images/marketing/IMG_4610.jpeg',
            ]" />

        <x-carousel category="évènement"
            description="Venez découvrir un événement où mode et photographie se rencontrent. Un moment de créativité, d'inspiration et de beauté, à ne pas manquer !"
            :images="[
                '/images/evenement/IMG_5095.jpeg',
                '/images/evenement/IMG_5086.jpeg',
                '/images/evenement/IMG_5070.jpeg',
                '/images/evenement/IMG_5054.jpeg',
            ]" />

        <x-modalbox />
        <section class="p-6 w-full mx-auto">
            <h2 class="text-fs-500 md:text-2xl font-semibold mb-4">À propos</h2>
            <p class="text-[10px] md:text-lg w-full">Photographe passionné, je raconte des histoires à travers mes photos,
                capturant
                émotions et personnalités. La mode, ses lignes, textures, couleurs et son énergie, est ma principale source
                d'inspiration. Mon approche artistique repose sur une collaboration entre mon regard et votre créativité.
                Mon objectif : créer des images marquantes, en mettant en valeur la beauté, l’authenticité et le lien
                humain. Que vous soyez créateur, marque ou passionné de mode, ensemble, nous réaliserons des images qui
                inspirent.</p>
        </section>
        <section class="p-6  w-full mx-auto flex flex-col justify-center items-center" id="contact">
            <h2 class="text-fs-500 md:text-2xl font-semibold mb-4">Contact</h2>
            <p class="text-[10px] md:text-2xl">07 82 84 24 28</p>
            <p class="text-[10px] md:text-2xl">gautier.tessier@outlook.com</p>
        </section>
        <x-gallery :images="[
            '/images/mode/IMG_5141.jpeg',
            '/images/mode/IMG_5142.jpeg',
            '/images/mode/IMG_5143.jpeg',
            '/images/mode/IMG_5146.jpeg',
            '/images/mode/IMG_5148.jpeg',
            '/images/mode/IMG_5160.jpeg',
            '/images/mode/IMG_5161.jpeg',
            '/images/mode/IMG_5162.jpeg',
            '/images/mode/IMG_5163.jpeg',
            '/images/mode/IMG_5164.jpeg',
            '/images/mode/IMG_5179.jpeg',
            '/images/mode/IMG_5397.jpeg',
            '/images/mode/IMG_5414.jpeg',
            '/images/mode/IMG_5416.jpeg',
            '/images/mode/IMG_5417.jpeg',
            '/images/mode/IMG_5443.jpeg',
            '/images/mode/IMG_5452.jpeg',
        ]" />

    </main>
@endsection
