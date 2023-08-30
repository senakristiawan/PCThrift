<x-header class="flex flex-col">
    <div class=>
        <div class="h-[90vh] bg-no-repeat bg-center rounded" style="background-image: url(https://cdn.shopify.com/s/files/1/0509/3693/8675/products/PXL_20220321_144050723.PORTRAIT_1024x1024@2x.jpg?v=1649464430)">
            <div>
                <div class="flex items-center justify-center">
                    <div class="text-center text-[120px] text-black my-[140px] tracking-[10px] font-bold text-shadow drop-shadow bg-gray-300 bg-opacity-80 p-2 rounded-lg font-mono">
                        <h1>Start Your Journey</h1>
                    </div>
                </div>
        <div class="flex item-center justify-center">
            <button type="button" class="text-white bg-gray-900 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-xl px-[100px] py-[25px] mr-4 mb-2 dark:bg-gray-900 dark:hover:bg-indigo-700 dark:hover:text-black dark:hover:font-bold font-semibold ring-gray-700 border-black dark:hover:duration-300" onclick="window.location='{{ route('bundle') }}'">Bundle</button>
            <button type="button" class="text-white bg-gray-900 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-xl px-[100px] py-[25px] mr-4 mb-2 dark:bg-gray-900 dark:hover:bg-indigo-700 dark:hover:text-black dark:hover:font-bold font-semibold ring-gray-700 border-black dark:hover:duration-300" onclick="window.location='{{ route('build') }}'">Build</button>
            </div>
        </div>
    </div>

    <div class=" flex flex-col justify-center text-center my-20 text-white">
       <h1 class="text-[30px] font-bold mb-10">About Us</h1>
       <p class="text-[18px] mx-auto max-w-[150vh]">Welcome to PcThrift, the ultimate web-based app that aims to turn your PC dreams into tangible masterpieces. Our unwavering commitment lies in ensuring your utmost satisfaction, making your happiness our topmost priority. At PcThrift, we revolutionize the way you build your dream PC by offering an innovative feature that empowers you to choose secondhand parts, allowing you to bring your vision to life at a fraction of the cost of brand new components.

        We understand the importance of affordability without compromising on quality, which is why we offer a wide selection of meticulously tested and reliable secondhand parts. By incorporating these components into your dream PC, you not only save money but also contribute to a more sustainable and environmentally conscious approach to computing.
        
        To further enhance your experience, we provide comprehensive PC bundles that streamline the process of building your dream rig. Our thoughtfully curated bundles include all the necessary components, neatly packaged and ready for assembly. With PcThrift, you can easily pack up your dream PC and embark on your digital adventures without any hassle or confusion.
        
        But our dedication doesn't end there. We have a team of knowledgeable experts who are always ready to assist you throughout your journey. Whether you need guidance in selecting the right parts, troubleshooting any technical issues, or simply seeking advice, our team is just a click away. We believe in building long-lasting relationships with our customers, and your satisfaction is what drives us every day.
        
        Join the PcThrift community today and experience the thrill of bringing your PC aspirations to life. Let us help you unleash your creativity, power your gaming endeavors, or boost your productivity with a PC that perfectly aligns with your dreams and budget. Your satisfaction, happiness, and success are the fuel that propels us forward, and we are honored to be a part of your PC-building journey.</p> 
       
    </div>
    @yield('scripts')
</x-header>
