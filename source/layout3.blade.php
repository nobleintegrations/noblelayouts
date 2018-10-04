@extends('_layouts.master')

@section('body')
    <div id="home" class="lg:w-4/5 w-full bg-white mx-auto container shadow-lg">
        <div class="layout3-hero">
            <div class="flex flex-row justify-between layout3-header-toolbar font-light py-4 items-center text-white md:flex-row">
                <div class="flex items-center text-sm px-4 md:text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current mr-2 h-4 w-4" viewBox="0 0 24 24"><path d="M18.48 22.926l-1.193.658c-6.979 3.621-19.082-17.494-12.279-21.484l1.145-.637 3.714 6.467-1.139.632c-2.067 1.245 2.76 9.707 4.879 8.545l1.162-.642 3.711 6.461zm-9.808-22.926l-1.68.975 3.714 6.466 1.681-.975-3.715-6.466zm8.613 14.997l-1.68.975 3.714 6.467 1.681-.975-3.715-6.467z"/></svg>
                    <div><a class="text-white no-underline hover:text-red-dark" href="tel:(555) 555-5555">(555) 555-5555</a></div>
                </div>
                <div class="flex items-center text-sm px-4 md:text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current mr-2 h-4 w-4" viewBox="0 0 24 24"><path d="M12 12.713l-11.985-9.713h23.971l-11.986 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z"/></svg>
                    <div><a class="text-white no-underline hover:text-red-dark" href="mailto:info@yourdomain.com">info@yourdomain.com</a></div>
                </div>
            </div>
            <header class="flex flex-col md:flex-row justify-between items-center text-black md:mt-2 lg:pb-8">
                <div class="logo md:ml-4"><a href="#home"><img style="width:19rem;" src="/assets/images/logo-white.png"></a></div>
                <nav class="text-xl mt-4 md:mr-4 lg:mr-8 xl:mr-12">
                    <a href="#home" v-smooth-scroll="{ duration: 1500, offset: 0 }" class="text-white no-underline xl:mx-4 px-4 py-4 rounded hover:bg-white hover:text-red-dark hover:border-red-dark">Home</a>
                    <a href="#services" v-smooth-scroll="{ duration: 1500, offset: 10 }" class="text-white no-underline xl:mx-4 px-4 py-4 rounded hover:bg-white hover:text-red-dark hover:border-red-dark">Services</a>
                    <a href="#about" v-smooth-scroll="{ duration: 1500, offset: 10 }" class="text-white no-underline xl:mx-4 px-4 py-4 rounded hover:bg-white hover:text-red-dark hover:border-red-dark">About</a>
                    <a href="#contact" v-smooth-scroll="{ duration: 1500, offset: 10 }" class="text-white no-underline xl:mx-4 px-4 py-4 rounded hover:bg-white hover:text-red-dark hover:border-red-dark">Contact</a>
                </nav>
            </header>
            <div class="flex flex-col text-center justify-center mt-20">
                <div class="text-xl text-white font-hairline uppercase mb-6 md:text-3xl">
                    Innovative | Precise | Efficient
                </div>
                <div>
                    <button class="bg-white text-black px-8 py-4 rounded hover:bg-red-dark hover:text-white">(555) 555-5555</button>
                </div>
            </div>
        </div>
        @include('_partials.maincontent')
        @include('_partials.footer')
    </div>
@endsection
