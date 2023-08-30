<x-header>
    <h1 class="m-4 font-bold text-center text-[2vw]">Cases</h1>
    <div class="flex flex-col">
        <div class="flex flex-row justify-center mb-[2vh]">
            @foreach ($products as $product)
                @if ($loop->iteration < 47)
                    @continue
                @endif 
            
                @if ($loop->iteration > 51)
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
                @if ($loop->iteration < 47)
                    @continue
                @endif 
            
                @if ($loop->iteration > 51)
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
    {{-- <div class="m-4 font-bold text-center">
        <h1 class="text-[2vw]">Cases</h1>
        <div class="grid grid-cols-5">
            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/10/26/66a5252a-5c4b-4c1d-90ce-00c3e444c170.jpg?ect=4g')}}" name="Casing NZXT H5 Elite White - Premium Compact Mid-Tower Case" price="Rp{{ number_format(2546000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://img.overclockers.co.uk/media/image/GEJP_005_03.jpg')}}" name="Casing JONSPLUS BO100 Black - ITX Case - Glass - Support SFX/SFX-L" price="Rp{{ number_format(2619000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/9/16/98058811-1d7c-4be7-8480-7933a979d43b.jpg')}}" name="Paradox Gaming Case Fenrir" price="Rp{{ number_format(855000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://cdn.coolermaster.com/media/assets/1022/component-clearances-imageleftorright.png')}}" name="Casing Cooler Master MasterCase H100" price="Rp{{ number_format(831000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://els.id/media/catalog/product/cache/240ad6df83188ceb3dfe8b5de3b51f05/m/s/msi_mag_shield_m301-2.png')}}" name="Casing MSI MAG Shield M301 Gaming Case" price="Rp{{ number_format(479000, 0, ',', '.') }}"></x-product-card>
        </div>
        
    </div> --}}
</x-header>