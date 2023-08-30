<x-header>
    @if (session('success'))
                    <div class="bg-green-500 text-white p-4 mb-4 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif
      
                @if (session('error'))
                    <div class="bg-red-500 text-white p-4 mb-4 rounded-lg">
                        {{ session('error') }}
                    </div>
                @endif
    <div class="flex border bg-white text-black m-4 rounded-lg  mx-auto w-[90vw] h-[80vh]">
        <div class="flex flex-row">
            <a href="{{ url()->previous() }}" class="w-[2vw] ml-2 my-1"><img src="{{URL('images/back.png')}}"></a>
            <div class="flex flex-row">
                <img src="{{asset('images') }}/{{$product->photo}}" class="w-[40vh] object-contain mr-[5vw] pl-5">
            <div class="flex flex-col">
                <h1 class="text-[2vw] font-bold m-4">{{ $product->product_name}}</h1>
                {{-- <p class="text-[2vw] font-semibold  m-4">Rp.{{ number_format($product['price'])}}</p> --}}
                <p class="text-[1.5vw] m-4">Details:</p>
                <p class="break-all h-[100vh] m-4">{{ $product->product_description }}</p>
                {{-- <p class="text-[1.5vw] break-all h-[100vh]">Details goes here</p> --}}
            </div>
            {{-- <div class="container mx-auto max-w-sm m-4 rounded-lg"> --}}
                
            {{-- </div> --}}

                <div class="flex flex-col font-semibold items w-[40vw] my-auto ml-[4vw] mr-[4vw] border p-12 rounded-md">
                    <h1 class="mb-[2vh] text-[1.5vw] font-semibold">{{ $product->product_name}}</h1>
                    <div class="flex flex-col mb-[4vh]">
                        <p class="mb-[2vh] text-[1vw]">Product State</p>

                        <div class="flex-row">
                            <label for="brandNew" class="border bg-gray-300 rounded-md p-4 mr-[2vw] cursor-pointer">
                                <input type="radio" id="brandNew" name="state" class="hidden" value="0">
                                <span class="text-[0.9vw]">Brand New</span>   
                            </label>
                            <label for="second" class="border bg-gray-300 rounded-md p-4 mr-[2vw] cursor-pointer">
                                <input type="radio" id="second" name="state" class="hidden" value="1">
                                <span class="text-[0.9vw]">Second</span>
                            </label>
                        </div>

                    </div>

                    <div class="mb-[2vh] flex flex-col">
                        {{-- <h1 class="mb-[2vh] text-[1vw]">Amount</h1>
                        <div class="flex-row flex mb-[2vh]">
                            <button class="bg-gray-300 px-2 py-1 rounded-l-lg" id="decrease-button">-</button>
                            <input type="number" id="amount" class="border border-gray-300 px-2 py-1 w-16 text-center " value="1">
                            <button class="bg-gray-300 px-2 py-1 rounded-r-lg" id="increase-button">+</button>
                        </div>   --}}
                    </div>

                    <div class="flex flex-row justify-between mb-[2vh]">
                        {{-- <p>Subtotal</p> --}}
                        <p class="font-semi-bold">Price: <strong>Rp.{{ number_format($product['price'])}}</strong></p>
                    </div>

                    <div class="flex-row">
                        @auth
                            <p class="btn=holder"><a href="{{route('add_to_cart', $product->id) }}" class="text-[1vw] btn btn-promart btn-block bg-green-500 text-white rounded-lg px-2 py-2 flex cursor-pointer hover:text-green-200 hover:bg-indigo-900 transition duration-300 font-bold m-2" role="button">Add to cart</a></p>
                        @endauth
                        {{-- <button class="border bg-gray-600 hover:bg-gray-700 text-white rounded-md h-[5vh] w-[7vw] text-[1vw] shadow-lg hover:shadow-none m-2">Buy Now</button> --}}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-header>