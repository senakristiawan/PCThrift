<x-header>
    <div class="flex flex-col justify-center items-center h-screen">
        <h1 class="text-center text-white font-bold text-[3vw] pb-[3vh]">Pick your parts</h1>
        <div class="grid grid-cols-4 gap-4 gap-x-6 justify-items-center text-center mx-auto">
            <a href="{{route("cpu")}}" class="block w-[20vw] h-[25vh] p-6 bg-white rounded-lg shadow  dark:bg-gray-100  dark:hover:bg-indigo-700">
            <img src="{{URL('images/chip.png')}}" class="items-center mx-auto mb-[3vh] h-[12vh]">
            <p class="font-semibold text-[1.5vw] dark:text-gray-900">CPU</p>
            
            <a href="{{route("motherboard")}}" class="block w-[20vw] h-[25vh] p-6 bg-white rounded-lg shadow  dark:bg-gray-100  dark:hover:bg-indigo-700">
            <img src="{{URL('images/motherboard.png')}}" class="items-center mx-auto mb-[3vh] h-[12vh]">
            <p class="font-semibold text-[1.5vw] dark:text-gray-900">Mother Board</p>
        
        
            <a href="{{route("ram")}}" class="block w-[20vw] h-[25vh] p-6 bg-white rounded-lg shadow  dark:bg-gray-100  dark:hover:bg-indigo-700">
            <img src="{{URL('images/ram.png')}}" class="items-center mx-auto mb-[3vh] h-[12vh]">
            <p class="font-semibold text-[1.5vw] dark:text-gray-900">RAM</p>
        
        
            <a href="{{route("storage")}}" class="block w-[20vw] h-[25vh] p-6 bg-white rounded-lg shadow  dark:bg-gray-100  dark:hover:bg-indigo-700">
            <img src="{{URL('images/storage.png')}}" class="items-center mx-auto mb-[3vh] h-[12vh]">
             <p class="font-semibold text-[1.5vw] dark:text-gray-900">Storage</p>

             <a href="{{route("graphic-card")}}" class="block w-[20vw] h-[25vh] p-6 bg-white rounded-lg shadow  dark:bg-gray-100  dark:hover:bg-indigo-700">
                <img src="{{URL('images/graphicCard.png')}}" class="items-center mx-auto mb-[3vh] h-[12vh]">
                 <p class="font-semibold text-[1.5vw] dark:text-gray-900">Graphic Card</p>

                 <a href="{{route("power-supply")}}" class="block w-[20vw] h-[25vh] p-6 bg-white rounded-lg shadow  dark:bg-gray-100  dark:hover:bg-indigo-700">
                    <img src="{{URL('images/powerSupply.png')}}" class="items-center mx-auto mb-[3vh] h-[12vh]">
                     <p class="font-semibold text-[1.5vw] dark:text-gray-900">Power Supply</p>

                     <a href="{{route("cases")}}" class="block w-[20vw] h-[25vh] p-6 bg-white rounded-lg shadow  dark:bg-gray-100  dark:hover:bg-indigo-700">
                        <img src="{{URL('images/computer-case.png')}}" class="items-center mx-auto mb-[3vh] h-[12vh]">
                         <p class="font-semibold text-[1.5vw] dark:text-gray-900">Cases</p>
        
        </a>
        
        </div>
    </div> 
</x-header>