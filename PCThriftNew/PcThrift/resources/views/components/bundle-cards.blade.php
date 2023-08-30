<div>
<div class="card border bg-white text-black flex flex-col w-[15vw] h-[18vw] m-4 rounded-lg text-center items-center text-[1vw] font-semibold">
    <img src="{{ $image }}" alt="{{ $name }}" class="w-[8vw] h-[10vw] mb-[1.5vh] object-contain" />
    <h2 class="mb-[0.5vh]">{{ $name }}</h2>
    <p>{{ $price }}</p>
    <a href="{{route('product.show',['image'=>$image, 'name'=>$name, 'price'=>$price])}}"><p class="text-blue-500 cursor-pointer mt-3 hover:text-blue-800 transition duration-100 ease-in">View Detail</p></a>
</div>

</div>