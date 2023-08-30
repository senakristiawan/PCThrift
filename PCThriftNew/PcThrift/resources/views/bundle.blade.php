<x-header>

<div class="flex flex-col justify-center items-center h-screen">
    <h1 class="bg-gray-700 px-6 rounded-lg mb-5 text-center text-white font-bold text-[3vw]">Our Bundles</h1>
    <div class="grid grid-cols-2 gap-4 gap-x-6 justify-items-center text-center mx-auto">
        <a href="{{route('bundle-gaming')}}" class="    block w-[40vw] h-[25vh] p-6 bg-gray-200 border border-gray-900 rounded-lg shadow dark:hover:bg-indigo-700 dark:hover:text-black dark:hover:font-bold font-semibold dark:hover:duration-300">
        <img src="{{URL('images/GamingLogo.svg')}}" class="items-center mx-auto mb-[3vh] h-[12vh]">
        <p class="font-semibold text-[1.5vw] dark:text-gray-900">Gaming</p>
        {{-- <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="number" name="quantity" value="1" min="1">
            <button type="submit">Add to Cart</button>
        </form> --}}
        
        <a href="{{route('bundle-office')}}" class="block w-[40vw] h-[25vh] p-6 bg-white border border-gray-900 rounded-lg shadow dark:hover:bg-indigo-700 dark:hover:text-black dark:hover:font-bold font-semibold dark:hover:duration-300">
        <img src="{{URL('images/WorkLogo.svg')}}" class="items-center mx-auto mb-[3vh] h-[12vh]">
        <p class="font-semibold text-[1.5vw] dark:text-gray-900">Office</p>
        {{-- <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="number" name="quantity" value="1" min="1">
            <button type="submit">Add to Cart</button>
        </form> --}}
    
        <a href="{{route('bundle-videoMaking')}}" class="block w-[40vw] h-[25vh] p-6 bg-white border border-gray-900 rounded-lg shadow dark:hover:bg-indigo-700 dark:hover:text-black dark:hover:font-bold font-semibold dark:hover:duration-300">
        <img src="{{URL('images/VideoEditingLogo.svg')}}" class="items-center mx-auto mb-[3vh] h-[12vh]">
        <p class="font-semibold text-[1.5vw] dark:text-gray-900">Video Making</p>
        {{-- <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="number" name="quantity" value="1" min="1">
            <button type="submit">Add to Cart</button>
        </form> --}}
    
        <a href="{{route('bundle-art')}}" class="block w-[40vw] h-[25vh] p-6 bg-white border border-gray-900 rounded-lg shadow dark:hover:bg-indigo-700 dark:hover:text-black dark:hover:font-bold font-semibold dark:hover:duration-300">
        <img src="{{URL('images/ArtLogo.svg')}}" class="items-center mx-auto mb-[3vh] h-[12vh]">
         <p class="font-semibold text-[1.5vw] dark:text-gray-900">Art</p>
         {{-- <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="number" name="quantity" value="1" min="1">
            <button type="submit">Add to Cart</button>
        </form> --}}
    </a>
    
    </div>
</div>


</x-header>