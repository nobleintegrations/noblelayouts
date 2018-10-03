    <footer>
        <div class="flex flex-col bg-black text-white container p-4 md:flex-row">
            <div class="flex flex-col w-full font-light md:flex-1 md:max-w-sm">
                <div class="uppercase text-l font-semibold py-4 tracking-wide md:px-4">Contact Us</div>
                <div class="text-grey leading-normal md:px-4">
                    <div class="pb-6">
                        Your Business<br> Business address<br> City, State, Zip
                    </div>
                    <div class="pb-4">
                        <b>Phone:</b> (555) 555-5555<br>
                        <b>Email:</b> info@yourbusiness.com
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full pb-4 md:flex-1 md:pr-4 md:w-4/5">
                <div class="uppercase text-l font-semibold py-4 tracking-wide">Connect</div>
                <div class="">
                    <form name="contact" class="flex flex-col md:flex-row" method="POST" netlify>
                        <div class="md:w-1/3 md:flex-1 md:mr-2">
                            <input class="bg-grey-lighter appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight mb-2 focus:outline-none focus:bg-white focus:border-red-dark"
                                id="inline-full-name" name="name" type="text" placeholder="Full Name">
                            <input class="bg-grey-lighter appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none mb-2 focus:bg-white focus:border-red-dark"
                                id="inline-full-name" name="email" type="text" placeholder="Email">
                            <input class="bg-grey-lighter appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight mb-2 focus:outline-none focus:bg-white focus:border-red-dark"
                                id="inline-full-name" name="phone" type="text" placeholder="Phone">
                        </div>
                        <div class="md:w-2/3 md:flex-1">
                            <textarea class="bg-grey-lighter appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none
                                        focus:bg-white focus:border-red-dark sm:mb-2 md:mb-1" name="message" rows="4" placeholder="Message"></textarea>
                            <button class="shadow bg-red-dark text-white font-bold py-2 px-4 rounded w-full hover:bg-red-light focus:shadow-outline focus:outline-none"
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
