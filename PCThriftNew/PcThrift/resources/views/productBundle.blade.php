<x-header>
    <div class="flex border bg-white text-black m-4 rounded-lg  mx-auto w-[90vw] h-[80vh]">
        <div class="flex flex-row">
            <a href="{{ url()->previous() }}" class="w-[2vw] ml-2 my-1"><img src="{{URL('images/back.png')}}"></a>
            <img src="{{$image}}" class="w-[40vh] object-contain mr-[5vw]">
            <div class="flex flex-col">
                <h1 class="text-[4vw] font-bold">{{$name}}</h1>
                <p class="text-[2vw] font-semibold">{{$price}}</p>
                <p class="text-[1.5vw]">Details:</p>
                <p class="text-[1.5vw]">Details goes here</p>
                <div class="flex justify-end items-end font-semibold">
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="image" value="{{ $image }}">
                        <input type="hidden" name="price" value="{{ $price }}">
                        <button type="submit" class="border bg-indigo-600 hover:bg-indigo-700 text-white rounded-md h-[4vh] w-[6vw] text-[1vw] shadow-lg hover:shadow-none mr-[2vw]">Add to cart</button>
                    </form>
                    <button class="border bg-indigo-600 hover:bg-indigo-700 text-white rounded-md h-[4vh] w-[6vw] text-[1vw] shadow-lg hover:shadow-none">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
    
</x-header>