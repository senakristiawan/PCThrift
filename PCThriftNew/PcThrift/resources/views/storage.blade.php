<x-header>
        <h1 class="m-4 font-bold text-center text-[2vw]">Storage</h1>
        <div class="flex flex-col">
            <div class="flex flex-row justify-center mb-[2vh]">
                @foreach ($products as $product)
                    @if ($loop->iteration < 38)
                        @continue
                    @endif 

                    @if ($loop->iteration > 42)
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
                    @if ($loop->iteration < 38)
                        @continue
                    @endif 
                
                    @if ($loop->iteration > 42)
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
            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/700/VqbcmM/2022/10/13/66b28bdc-80fd-4ba3-a84c-ca932088d583.jpg')}}" name="WDC Black SN850X SSD 2TB M.2 NVMe PCIe Gen4x4 / SSD 2TB" price="Rp{{ number_format(4650000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/700/hDjmkQ/2022/4/5/90620370-f723-4014-8590-0657b3ff00ce.jpg')}}" name="Corsair 2TB CSSD-F2000GBMP600PRO MP600 Pro M.2 NVMe PCIe Gen4 x4" price="Rp{{ number_format(875000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/4/7/d0faae1c-4327-4635-a2f7-b38c455fe4e5.jpg')}}" name="Samsung SSD 980 M.2 PCIe Gen3 x4 1TB MZ-V8V1T0BW / 1TB" price="Rp{{ number_format(638000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://s3.bukalapak.com/img/89211146782/large/data.jpeg.webp')}}" name="Samsung SSD 980 PRO M.2 PCIe Gen4 x4 500GB MZ-V8P500BW / SSD 500GB" price="Rp{{ number_format(4285000, 0, ',', '.') }}"></x-product-card>

            <x-product-card image="{{URL('https://images.tokopedia.net/img/cache/500-square/VqbcmM/2023/2/2/c228b798-8a6e-4be7-af0d-a972939d3a19.jpg')}}" name="MSI Spatium M371 M.2 NVMe PCIe Gen3 x4 500GB / SSD M.2 500GB" price="Rp{{ number_format(6326000, 0, ',', '.') }}"></x-product-card>
        </div> --}}
</x-header>