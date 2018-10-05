@extends('_layouts.master')

@section('body')
    <div id="home" class="lg:w-4/5 w-full bg-white mx-auto container shadow-lg">
        <header class="bg-white text-black text-center border-b border-noble-yellow py-12">
            <div class="logo text-center"><a href="#home"><img style="width:19rem;" src="/assets/images/noble-logo.png"></a></div>
        </header>
        <div class="bg-noble-indigo border-b border-noble-yellow text-center">
            <h2 class="title py-8">Noble Layouts</h2>
        </div>
        <div class="flex flex-col bg-white container px-8 pt-8 justify-between items-center md:flex-row">
            <div class="p-8 mb-4 md:w-1/3 md:mr-4 hover:bg-grey-lightest text-center">
                <a class="no-underline text-grey-darker hover:text-noble-indigo" href="/layout1"><p class="text-center pb-4 uppercase tracking-wide">Layout 1</p></a>
                <a href="/layout1"><img class="w-64 shadow-lg border-0 hover:border-2 border-red-dark" src="/assets/images/layout1-thumb.png"></a>
            </div>
            <div class="p-8 mb-4 md:w-1/3 md:mr-4 hover:bg-grey-lightest text-center">
                <a class="no-underline text-grey-darker hover:text-noble-indigo" href="/layout2"><p class="text-center pb-2 uppercase tracking-wide">Layout 2</p>
                <a href="/layout2"><img class="w-64 shadow-lg" src="/assets/images/layout2-thumb.png"></a>
            </div>
            <div class="p-8 mb-4 md:w-1/3 md:mr-4 hover:bg-grey-lightest text-center">
                <a class="no-underline text-grey-darker hover:text-noble-indigo" href="/layout3"><p class="text-center pb-2 uppercase tracking-wide">Layout 3</p>
                <a href="/layout3"><img class="w-64 shadow-lg" src="/assets/images/layout3-thumb.png"></a>
            </div>
        </div>
        <div class="flex flex-col bg-white container px-8 pt-8 justify-between items-center md:flex-row">
            <div class="p-8 mb-4 md:w-1/3 md:mr-4 hover:bg-grey-lightest text-center">
                <a class="no-underline text-grey-darker hover:text-noble-indigo" href="/layout1-fullscreen"><p class="text-center pb-2 uppercase tracking-wide">Layout 1 Fullscreen</p>
                <a href="/layout1-fullscreen"><img class="w-64 shadow-lg" src="/assets/images/layout1-full-thumb.png"></a>
            </div>
            <div class="p-8 mb-4 md:w-1/3 md:mr-4 hover:bg-grey-lightest text-center">
                <a class="no-underline text-grey-darker hover:text-noble-indigo" href="/layout2-fullscreen"><p class="text-center pb-2 uppercase tracking-wide">Layout 2 Fullscreen</p>
                <a href="/layout2-fullscreen"><img class="w-64 shadow-lg" src="/assets/images/layout2-full-thumb.png"></a>
            </div>
            <div class="p-8 mb-4 md:w-1/3 md:mr-4 hover:bg-grey-lightest text-center">
                <a class="no-underline text-grey-darker hover:text-noble-indigo" href="/layout3-fullscreen"><p class="text-center pb-2 uppercase tracking-wide">Layout 3 Fullscreen</p>
                <a href="/layout3-fullscreen"><img class="w-64 shadow-lg" src="/assets/images/layout3-full-thumb.png"></a>
            </div>
        </div>
        <footer class="bg-noble-indigo h-16 border-t border-noble-yellow">
            <div class="flex flex-col bg-noble-indigo text-white container p-4 md:flex-row">
                <div class="flex flex-col w-full font-light md:flex-1 md:max-w-sm">
                    <div class="uppercase text-l text-noble-yellow font-semibold py-4 tracking-wide md:px-4">Contact Me</div>
                    <div class="text-grey leading-normal md:px-4">
                        <div class="pb-6">
                            Have suggestions or layout ideas?
                        </div>
                        <div class="pb-4">
                            Shoot me a message and let me know what you think.
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full pb-4 md:flex-1 md:pr-4 md:w-4/5">
                    <div class="uppercase text-l text-noble-yellow font-semibold py-4 tracking-wide">Connect</div>
                    <div class="">
                        <form name="contact" class="flex flex-col md:flex-row" method="POST" netlify>
                            <div class="md:w-1/3 md:flex-1 md:mr-2">
                                <input class="bg-grey-lighter appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight mb-2 focus:outline-none focus:bg-white focus:border-noble-yellow"
                                    id="inline-full-name" name="name" type="text" placeholder="Full Name">
                                <input class="bg-grey-lighter appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none mb-2 focus:bg-white focus:border-noble-yellow"
                                    id="inline-full-name" name="email" type="text" placeholder="Email">
                            </div>
                            <div class="md:w-2/3 md:flex-1">
                                <textarea class="bg-grey-lighter appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none
                                            focus:bg-white focus:border-noble-yellow sm:mb-2 md:mb-1" name="message" rows="3" placeholder="Message"></textarea>
                                <button class="shadow bg-noble-yellow text-noble-indigo font-bold py-2 px-4 rounded w-full hover:bg-white focus:shadow-outline focus:outline-none"
                                    type="submit">
                                                Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-grey-dark py-4 container text-grey-lighter px-4 text-center justify-between font-light md:flex-row">
                <div class="text-sm mb-4 md:mb-0 md:text-base">Copyright All Rights Reserved &copy; 2018</div>
                <div class="text-xs text-grey-light md:text-base md:text-grey-lighter">Powered by <a class="no-underline text-grey-light hover:text-black md:text-base md:text-grey-lighter" href="https://nobleintegrationsllc.com">Noble Integrations LLC</a></div>
            </div>
        </footer>
    </div>
@endsection
