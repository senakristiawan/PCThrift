<x-header>

        <h1 class="text-[2vw] m-4 font-bold text-center">RAM</h1>
        <div class="flex flex-col">
            <div class="flex flex-row justify-center mb-[2vh]">
                @foreach ($products as $product)
                    {{-- @if ($loop->iteration < 7)
                        @continue
                    @endif 
                
                    @if ($loop->iteration > 9)
                        @break
                    @endif --}}
                
                    {{-- <div class="card border bg-white text-black flex flex-col w-[15vw] h-[20vw] m-4 rounded-lg text-center items-center text-[1vw] font-semibold">
                        <div class="img_thumbnail productlist">
                            <img src="{{asset('images') }}/{{$product->photo}}" class="w-[15vw] h-[12vw] mb-[1.5vh] object-contain img-fluid">
                            <div class="caption">
                                <h4>{{ $product->product_name}}</h4>
                                <p>{{ $product->product_description }}</p>
                                <p><strong>Price: </strong> ${{ $product->price}}</p>
                                <p class="btn=holder"><a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-promart btn-block text-center" role="button">Add to cart</a></p>
                            </div>
                        </div>
                    </div> --}}
                    @if ($loop->iteration < 28)
                        @continue
                    @endif 
                
                    @if ($loop->iteration > 32)
                        @break
                    @endif
                    <div class="card border bg-gray-300 text-black flex flex-col w-[15vw] h-[20vw] m-4 rounded-lg text-left items-center text-[1vw] drop-shadow">
                        <div class="img_thumbnail productlist">
                            <img src="{{asset('images') }}/{{$product->photo}}" class="w-[9vw] h-[12vw] mb-[1.5vh] object-contain img-fluid drop-shadow">
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
                    @if ($loop->iteration < 28)
                        @continue
                    @endif 
        
                    @if ($loop->iteration > 32)
                        @break
                    @endif
                    <div class="card border bg-gray-300 text-black flex flex-col w-[15vw] h-[20vw] m-4 rounded-lg text-left items-center text-[1vw] drop-shadow">
                        <div class="img_thumbnail productlist">
                            <img src="{{asset('images') }}/{{$product->photo}}" class="w-[9vw] h-[12vw] mb-[1.5vh] object-contain img-fluid drop-shadow">
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
            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/250-square/VqbcmM/2020/9/30/b3aa1051-7864-4178-bd77-5dfe9d246a03.jpg')}}" name="RAM IMPERION RGB DDR4 16GB (2X8GB) 2666MHz" price="Rp{{ number_format(760000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/4/23/f5d2fa42-cc84-435a-b504-c10ef9702d36.jpg')}}" name="RAM Kingston HyperX FURY DDR4 RGB" price="Rp{{ number_format(875000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/1/19/ac19eb88-37ed-46c1-b6c5-7d9926f007ea.jpg')}}" name="Apacer NOX DDR4 PC25600 3200Mhz 16GB 2x8GB Ram" price="Rp{{ number_format(638000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://www.rakitan.com/jsg-content/uploads/modules/produk/20220824053005.jpg')}}" name="Team Delta RGB DDR5 PC51200 6400MHz Dual Channel 32GB (2x16GB)" price="Rp{{ number_format(4285000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://www.rakitan.com/jsg-content/uploads/modules/produk/20221101050242.png')}}" name="Gskill DDR5 Trident Z5 Neo RGB PC48000 64GB F5-6000J3040G32GX2-TZ5NR" price="Rp{{ number_format(6326000, 0, ',', '.') }}"></x-product-card>
        </div> --}}
</x-header>