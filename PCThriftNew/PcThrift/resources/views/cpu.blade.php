<x-header>
    <h1 class="m-4 font-bold text-center text-[2vw]">CPU</h1>
    <div class="container mx-auto max-w-sm m-4 rounded-lg">
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
    </div>
    <div class="flex flex-col">
        <div class="flex flex-row justify-center mb-[2vh]">
            @foreach ($products as $product)
            @if ($loop->iteration < 7)
                    @continue
                @endif 
            
                @if ($loop->iteration > 11)
                    @break
                @endif
            <div class="card border bg-gray-300 text-black flex flex-col w-[15vw] h-[20vw] m-4 rounded-lg text-left items-center text-[1vw] drop-shadow">
                <div class="mg_thumbnail productlist justify-center items-center">
                    <img src="{{asset('images') }}/{{$product->photo}}" class="ml-7 items-center justify-center w-[9vw] h-[12vw] mb-[1.5vh] object-contain img-fluid drop-shadow">
                    <div class="caption">
                        <h4>{{ $product->product_name}}</h4>
                        <p class="font-bold"><strong>Price: </strong> ${{ $product->price}}</p>
                        <a href="{{route('product-details', $product->id) }}"><p class="btn btn-promart btn-block text-center bg-teal-800 text-base text-white rounded-lg px-4 py-2 flex cursor-pointer hover:text-green-200 hover:bg-indigo-900 transition duration-300 font-bold">View Detail</p></a>
                        {{-- @auth
                        <p class="btn=holder"><a href="{{route('add_to_cart', $product->id) }}" class="btn btn-promart btn-block text-center bg-green-500 text-base text-white rounded-lg px-4 py-2 flex cursor-pointer hover:text-green-200 hover:bg-indigo-900 transition duration-300 font-bold" role="button">Add to cart</a></p>
                        @endauth --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div> 
    </div>
    <div class="flex flex-col">
        <div class="flex flex-row justify-center mb-[2vh]">
            @foreach ($products as $product)
                @if ($loop->iteration < 7)
                    @continue
                @endif 
            
                @if ($loop->iteration > 11)
                    @break
                @endif
            <div class="card border bg-gray-300 text-black flex flex-col w-[15vw] h-[20vw] m-4 rounded-lg text-left items-center justify-center text-[1vw] drop-shadow">
                <div class="img_thumbnail productlist justify-center items-center">
                    <img src="{{asset('images') }}/{{$product->photo}}" class="ml-7 w-[9vw] h-[12vw] mb-[1.5vh] object-contain img-fluid drop-shadow items-center justify-center">
                    <div class="caption">
                        <h4>{{ $product->product_name}}</h4>
                        
                        <p class="font-bold text-red-700"> Rp.{{ number_format($product['price'])}}</p>
                        <a href="{{route('product-details', $product->id) }}"><p class="btn btn-promart btn-block text-center bg-teal-800 text-base text-white rounded-lg px-4 py-2 flex cursor-pointer hover:text-green-200 hover:bg-indigo-900 transition duration-300 font-bold">View Detail</p></a>
                        {{-- @auth
                        <p class="btn=holder"><a href="{{route('add_to_cart', $product->id) }}" class="btn btn-promart btn-block text-center bg-green-500 text-base text-white rounded-lg px-4 py-2 flex cursor-pointer hover:text-green-200 hover:bg-indigo-900 transition duration-300 font-bold" role="button">Add to cart</a></p>
                        @endauth --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div> 
    </div>
        {{-- <div class="grid grid-cols-5">
            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/700/VqbcmM/2020/11/7/03313182-86b7-4a06-a2d5-5078ca1cdd49.jpg')}}" name="Amd Ryzen 5 5600x" price="Rp{{ number_format(3190000, 0, ',', '.') }}"></x-product-card>
            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/700/VqbcmM/2020/11/6/ae3db380-3dd6-4fc5-8748-e4a2a10e4ea1.jpg')}}" name="Amd Ryzen 9 5900x" price="Rp{{ number_format(6117000, 0, ',', '.') }}"></x-product-card>
            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/500-square/hDjmkQ/2022/7/5/84aee184-2b71-4278-a089-09e2fdcc3f2c.jpg')}}" name="Amd Ryzen Threadripper 3990X" price="Rp{{ number_format(82500000, 0, ',', '.') }}"></x-product-card>
            <x-product-card image="{{URL('http://sc04.alicdn.com/kf/He494feef784c4acf94dae208fc3e63f0X.jpg')}}" name="Amd Ryzen Threadripper 3970x" price="Rp{{ number_format(3190000, 0, ',', '.') }}"></x-product-card>
            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/3/28/661b68f3-0826-4341-a6e0-bd6e2b9761ec.jpg')}}" name="Amd Ryzen 5 3600" price="Rp{{ number_format(1999000, 0, ',', '.') }}"></x-product-card>
        </div> --}}
</x-header>