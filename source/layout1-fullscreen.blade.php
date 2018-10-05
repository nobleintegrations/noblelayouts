@extends('_layouts.layout-master')

@section('body')
    <div id="home" class="w-full bg-white">
        <header class="bg-white text-black text-center sticky pin-t border-b-2 border-grey-light lg:pb-10 lg:pt-32">
            <div class="logo text-center lg:-m-20 block"><a href="#home"><img style="width:19rem;" src="/assets/images/logo-black.png"></a></div>
            <nav class="flex nav-scroll-items text-center justify-center mb-2 lg:px-4">
                <div class="nav-left flex flex-row no-underline font-medium tracking-wide md:text-xl lg:flex-1 lg:justify-start lg:px-4 xl:ml-24">
                    <a href="#home" v-smooth-scroll="{ duration: 1500, offset: -180 }" class="text-black no-underline px-4 py-2 rounded hover:bg-red-dark hover:text-white hover:border-red-dark lg:p-4">Home</a>
                    <a href="#services" v-smooth-scroll="{ duration: 1500, offset: -180 }" class="text-black no-underline px-4 py-2 rounded hover:bg-red-dark hover:text-white hover:border-red-dark lg:ml-16 lg:p-4 xl:ml-24">Services</a>
                </div>
                <div class="nav-right flex flex-row no-underline font-medium tracking-wide md:text-xl lg:justify-end lg:flex-1 xl:mr-24">
                    <a href="#about" v-smooth-scroll="{ duration: 1500, offset: -180 }" class="text-black no-underline px-4 py-2 rounded hover:bg-red-dark hover:text-white hover:border-red-dark lg:p-4 lg:mr-16 xl:mr-24">About</a>
                    <a href="#contact" v-smooth-scroll="{ duration: 1500, offset: -180 }" class="text-black no-underline px-4 py-2 rounded hover:bg-red-dark hover:text-white hover:border-red-dark lg:p-4">Contact</a>
                </div>
            </nav>
        </header>
        <div class="flex flex-col layout1-hero-full text-center justify-center">
            <div class="text-xl text-white font-hairline uppercase mb-6 md:text-3xl">
                Innovative | Precise | Efficient
            </div>
            <div>
                <button class="bg-white text-black px-8 py-4 rounded hover:bg-red-dark hover:text-white">(555) 555-5555</button>
            </div>
        </div>
        @include('_partials.maincontent-full')
        @include('_partials.footer-full')
    </div>
    @include('_partials.sticky-footer')
@endsection
