<x-header>
        <h1 class="m-4 font-bold text-center text-[2vw]">Power Supply</h1>
        <div class="flex flex-col">
            <div class="flex flex-row justify-center mb-[2vh]">
                @foreach ($products as $product)
                    @if ($loop->iteration < 57)
                        @continue
                    @endif 
                
                    @if ($loop->iteration > 66)
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
                    @if ($loop->iteration < 57)
                        @continue
                    @endif 
                
                    @if ($loop->iteration > 66)
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
            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/500-square/product-1/2020/4/20/100145828/100145828_899b0696-bbe1-4428-9101-7cc99e8f4209_700_700')}}" name="PSU Seasonic Core Gold GM-650 - 650W Modular - 80+ Gold / PSU 650W" price="Rp{{ number_format(1900500, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//98/MTA-63120949/be-quiet-_be-quiet-pure-power-11-550w-fm-fully-modular-80-gold-certified-psu_full02.jpg')}}" name="be quiet! PURE POWER 11 550W FM - Fully Modular - 80+ Gold / PSU 550W" price="Rp{{ number_format(1361000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/500-square/product-1/2019/2/27/416323581/416323581_3a99d9bf-2837-4267-b8ed-553c67efcba9_554_554.jpg')}}" name="Asus ROG Thor 850W Fully Modular - 80+ Platinum" price="Rp{{ number_format(4254000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://www.corsair.com/corsairmedia/sys_master/productcontent/CP-9020087-NA-AX1600i_01.png')}}" name="Corsair AX Series Digital 1600W Fully Modular AX1600i - Titanium" price="Rp{{ number_format(8608000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/51Asgq4W6BL._AC_.jpg')}}" name="ROG Strix LC Radeon RX 6900 XT 16GB GDDR6 Graphics Card" price="Rp{{ number_format(3849000, 0, ',', '.') }}"></x-product-card>
        </div> --}}
</x-header>