<x-header>
    <h1 class="m-4 font-bold text-center text-[2vw]">Graphic Card</h1>
    <div class="flex flex-col">
        <div class="flex flex-row justify-center mb-[2vh]">
            @foreach ($products as $product)
                @if ($loop->iteration < 52)
                    @continue
                @endif 
            
                @if ($loop->iteration > 56)
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
                @if ($loop->iteration < 52)
                    @continue
                @endif 
            
                @if ($loop->iteration > 56)
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
        <h1 class="text-[2vw]">Graphic Card</h1>
        <div class="grid grid-cols-5">
            <x-product-card image="{{URL('https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71HjICKs3xL.jpg')}}" name="Gigabyte GeForce RTX 4090 24GB GDDR6X Gaming OC GV-N4090GAMING OC-24GD" price="Rp{{ number_format(30385000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://images.versus.io/objects/msi-geforce-rtx-3090-ti-suprim-x.front.variety.1648586141649.jpg')}}" name="MSI GeForce RTX 3090 Ti 24GB GDDR6X - SUPRIM X" price="Rp{{ number_format(24489000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/700/VqbcmM/2021/10/26/e522d220-f506-4179-89e2-cdbd9d97059e.jpg')}}" name="XFX Radeon RX 6900 XT RGB EKWB Waterblock 16GB DDR6 - RX-69XTAWBD9" price="Rp{{ number_format(35499900, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('http://www.labtech.dk/upload/globalicecat/POWERCOLOR/RX7900XTX%2024G-E_OC/107429152_4704280741.jpg')}}" name="PowerColor Radeon RX 7900 XTX 24GB GDDR6 Red Devil" price="Rp{{ number_format(21957000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://dlcdnwebimgs.asus.com/files/media/8344F566-DB84-4821-A0BC-3C0A9F853B91/img/img_compatibility-6900XT.png')}}" name="ROG Strix LC Radeon RX 6900 XT 16GB GDDR6 Graphics Card" price="Rp{{ number_format(12305000, 0, ',', '.') }}"></x-product-card>
        </div>
        
    </div> --}}
</x-header>