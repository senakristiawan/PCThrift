<x-header>
    <h1 class="text-[2vw] font-bold mb-[4vh] m-4 text-center">Game like never before</h1>
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
        {{-- <h2 class="text-center font-bold text-[1.5vw]">Alienware Series</h2> --}}
        <div class="flex flex-row justify-center mb-[2vh]">
            @foreach ($products as $product)
                @if ($loop->iteration>3)
                @break
                @endif
                <div class="card border bg-gray-300 text-black flex flex-col w-[15vw] h-[20vw] m-4 rounded-lg text-left items-center text-[1vw]">
                    <div class="img_thumbnail productlist">
                        <img src="{{asset('images') }}/{{$product->photo}}" class="w-[9vw] h-[12vw] mb-[1.5vh] object-contain img-fluid">
                        <div class="caption">
                            <h4>{{ $product->product_name}}</h4>
                            {{-- <p>{{ $product->product_description }}</p> --}}
                            <p class="font-bold"><strong>Price: </strong> ${{ $product->price}}</p>
                            <a href="{{route('product-details', $product->id) }}"><p class="btn btn-promart btn-block text-center bg-teal-800 text-base text-white rounded-lg px-4 py-2 flex cursor-pointer hover:text-green-200 hover:bg-indigo-900 transition duration-300 font-bold">View Detail</p></a>
                            {{-- @auth
                            <p class="btn=holder"><a href="{{route('add_to_cart', $product->id) }}" class="btn btn-promart btn-block text-center bg-green-500 text-base text-white rounded-lg px-4 py-2 flex cursor-pointer hover:text-green-200 hover:bg-indigo-900 transition duration-300 font-bold" role="button">Add to cart</a></p>
                            @endauth --}}
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($products as $product)
                @if ($loop->iteration < 3)
                    @continue
                @endif 
            
                @if ($loop->iteration > 4)
                    @break
                @endif
            
                <div class="card border bg-gray-300 text-black flex flex-col w-[15vw] h-[20vw] m-4 rounded-lg text-left items-center text-[1vw]">
                    <div class="img_thumbnail productlist">
                        <img src="{{asset('images') }}/{{$product->photo}}" class="w-[9vw] h-[12vw] mb-[1.5vh] object-contain img-fluid">
                        <div class="caption">
                            <h4>{{ $product->product_name}}</h4>
                            {{-- <p>{{ $product->product_description }}</p> --}}
                            <p class="font-bold"><strong>Price: </strong> ${{ $product->price}}</p>
                            <a href="{{route('product-details', $product->id) }}"><p class="btn btn-promart btn-block text-center bg-teal-800 text-base text-white rounded-lg px-4 py-2 flex cursor-pointer hover:text-green-200 hover:bg-indigo-900 transition duration-300 font-bold">View Detail</p></a>
                            {{-- @auth
                            <p class="btn=holder"><a href="{{route('add_to_cart', $product->id) }}" class="btn btn-promart btn-block text-center bg-green-500 text-base text-white rounded-lg px-4 py-2 flex cursor-pointer hover:text-green-200 hover:bg-indigo-900 transition duration-300 font-bold" role="button">Add to cart</a></p>
                            @endauth --}}
                        </div>
                    </div>
                </div>
            @endforeach
        
            {{-- <x-bundle-cards image="{{URL('images/Alienware-Aurora-R14.png')}}" name="AlienWare Aurora R14" price="Rp45.999.999"></x-bundle-cards>
            <x-bundle-cards image="{{URL('images/Alienware-Aurora-R13.png')}}" name="AlienWare Aurora R13" price="Rp30.199.199"></x-bundle-cards>
            <x-bundle-cards image="{{URL('images/Alienware-Aurora-R15.png')}}" name="AlienWare Aurora R15" price="Rp18.848.659"></x-bundle-cards> --}}
        </div> 
    </div>

     <div class="flex flex-col">
        {{-- <h2 class="text-center font-bold text-[1.5vw]">ROG Series</h2> --}}
        <div class="flex flex-row justify-center mb-[2vh]"> 
            @foreach ($products as $product)
            @if ($loop->iteration < 3)
                @continue
            @endif 
    
            @if ($loop->iteration > 7)
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
</x-header>