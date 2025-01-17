<header class="w-full flex items-center flex-wrap relative">
    <div class="order-2 w-[33%] flex justify-center my-5 lg:w-full">
        <a href="{{ route('index') }}">
            <img src="/images/logo.png" alt="Logo" class="w-[250px] sm:w-[300px] md:w-[450px]  w-max-full">
        </a>
    </div>
    <div class="order-1 w-[33%] lg:hidden">
        <div class="m-auto w-5 h-4 flex flex-col justify-between cursor-pointer" onclick="toggleMenu()">
            <span class="block h-1 bg-black rounded"></span>
            <span class="block h-1 bg-black rounded"></span>
            <span class="block h-1 bg-black rounded"></span>
        </div>
    </div>
    <nav class="hidden lg:block flex-1 md:order-2">
        <ul class="md:flex gap-3">
            <li class="group"><a href="#mode" class="">mode <div
                        class="bg-black h-[1px] w-0 group-hover:w-full transition-all duration-500"></div></a></li>
            <li class="group"><a href="#marketing" class="">marketing <div
                        class="bg-black h-[1px] w-0 group-hover:w-full transition-all duration-500"></div></a></li>
            <li class="group"><a href="#evenement" class="">évènement <div
                        class="bg-black h-[1px] w-0 group-hover:w-full transition-all duration-500"></div></a></li>
            <li class="group"><a href="#production" class="">production <div
                        class="bg-black h-[1px] w-0 group-hover:w-full transition-all duration-500"></div></a></li>
            <li class="group"><a href="#contact" class="">contact <div
                        class="bg-black h-[1px] w-0 group-hover:w-full transition-all duration-500"></div></a></li>
        </ul>
    </nav>
    <div class="order-3 flex w-[33%]">
        <ul class="m-auto flex items-center gap-3">
            <li><span class="block cursor-pointer">fr</span></li>
            <li><a href=""><img src="/images/instagram.svg" alt="Instagram" class="max-w-[24px] h-auto"></a></li>
        </ul>
    </div>
    <div id="menu-mobile"
        class="absolute top-0 left-0 w-full h-[75vh] bg-white z-10 hidden flex-col justify-between p-6 lg:hidden">
        <div class="flex flex-col items-center justify-between w-full h-full">
            <div class="flex items-center justify-center w-10 h-10 cursor-pointer" onclick="toggleMenu()">
                <span class="block w-1 h-5 bg-black transform rotate-45"></span>
                <span class="block w-1 h-5 bg-black transform -rotate-45 absolute"></span>
            </div>
            <ul class="w-full h-full flex flex-col justify-center gap-3">
                <li class="group"><a href="#mode" class="">mode <div
                            class="bg-black h-[1px] w-0 group-hover:w-full transition-all duration-500"></div></a></li>
                <li class="group"><a href="marketing" class="">marketing <div
                            class="bg-black h-[1px] w-0 group-hover:w-full transition-all duration-500"></div></a></li>
                <li class="group"><a href="evenement" class="">évènement <div
                            class="bg-black h-[1px] w-0 group-hover:w-full transition-all duration-500"></div></a></li>
                <li class="group"><a href="production" class="">production <div
                            class="bg-black h-[1px] w-0 group-hover:w-full transition-all duration-500"></div></a></li>
                <li class="group"><a href="contact" class="">contact <div
                            class="bg-black h-[1px] w-0 group-hover:w-full transition-all duration-500"></div></a></li>
            </ul>
        </div>
</header>
