<x-header>
    <h1 class="m-4 font-bold text-center text-[2vw]">Motherboard</h1>
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
                @if ($loop->iteration < 17)
                        @continue
                    @endif 
                
                    @if ($loop->iteration > 21)
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
                @if ($loop->iteration < 17)
                    @continue
                @endif 
                
                @if ($loop->iteration > 21)
                    @break
                @endif
                <div class="card border bg-gray-300 text-black flex flex-col w-[15vw] h-[20vw] m-4 rounded-lg text-left items-center justify-center text-[1vw] drop-shadow">
                    <div class="img_thumbnail productlist justify-center items-center">
                        <img src="{{asset('images') }}/{{$product->photo}}" class="ml-7 w-[9vw] h-[12vw] mb-[1.5vh] object-contain img-fluid drop-shadow items-center justify-center">
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
        {{-- <div class="grid grid-cols-5">
            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/700/VqbcmM/2022/1/7/2e5661ab-b34a-493d-a836-4d5ec096d4e6.png')}}" name="Motherboard Gigabyte H610M H DDR4-LGA1700" price="Rp{{ number_format(1359000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://www.asrock.com/mb/photo/H410M-HVS(M1).png')}}" name="Motherboard Asrock H410M-HVS - LGA 1200" price="Rp{{ number_format(965000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://asset.msi.com/resize/image/global/product/product_16353266754b2399db2303ae09fa31e21af8120d5c.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png')}}" name="MSI MPG Z690 CARBON WIFI | Motherboard Intel Z690 LGA 1700 DDR5 ATX" price="Rp{{ number_format(4879000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/1/5/c5b55515-886c-44c0-a4d8-38268489ce72.png')}}" name="MOTHERBOARD ASUS CHIPSET INTEL ROG STRIX B460-G GAMING 90MB1460-M0UAY0" price="Rp{{ number_format(2415000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/27/3d2d22a3-874f-4272-bba9-2e07b0881879.jpg')}}" name="Nzxt N7 Matte White Z590 Intel Lga1200 Motherboard" price="Rp{{ number_format(3487000, 0, ',', '.') }}"></x-product-card> --}}
        </div>
</x-header>