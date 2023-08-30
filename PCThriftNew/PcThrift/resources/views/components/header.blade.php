<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="/node_modules/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/amountBar.js')
    @vite('resources/js/radioBtn.js')
    @vite('resources/js/priceCalc.js')
    <title>pcThrift</title>
</head>
<body class="bg-black font-roboto scroll-smooth text-white h-[100%] m-0">
    <nav class=" flex flex-row main-font justify-between mx-8 items-center">
        <a class="flex flex-row text-white" href="{{route('home')}}">
            <img src= "{{URL('images/navLogo.png')}}" alt="title" class="w-24 h-auto object-contain cursor-pointer">
        </a>

<div class="relative text-gray-600">
    <input type="search" name="search" placeholder="Search" class="bg-white h-8 w-[720px] px-2 pr-10 rounded-md text-sm focus:outline-none">
    <button type="submit" class="absolute right-0 top-0 mt-2 mr-3">
      <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
        <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
      </svg>
    </button>
  </div>

        <div class="text-white text-base font-semibold ">
            <ul class="flex space-x-[5vw]">
                <a class="flex items-center justify-center cursor-pointer hover:text-gray-400 transition duration-300 bg-indigo-500 rounded-lg px-10 py-2" href="{{route('home')}}">Home</a>
                @auth
                <a class="flex items-center justify-center hover:text-gray-400 transition duration-300 cursor-pointer bg-teal-800 rounded-lg px-10 py-2" href="{{route('consult')}}">Consult</a>
                <div class="relative">
                  <a href="{{ route('cart') }}" class="flex items-center">
                    <button type="button" class="bg-indigo-500 text-white rounded-lg px-4 py-2 cursor-pointer">
                      <img src="{{ URL('images/cart.svg') }}" class="w-8 h-8 object-contain">
                    </button>
                    <span class="cursor-pointer absolute top-0 right-0 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center -mt-2 -mr-2">
                      {{ count((array) session('cart')) }}
                    </span>
                  </a>
                @else
                @endauth
                  </div>
              @auth
              <a href="{{route('profile')}}">
                <img src="{{URL('images/mumei_ghost.png')}}" class="w-10 h-10 rounded-full" >
               </a>  
              @else
                <a class="bg-green-500 text-base text-white rounded-lg px-4 py-2 flex cursor-pointer hover:text-gray-400 transition duration-300 font-bold" href="{{route('signIn')}}">Login</a>
               @endauth
            </ul>

        </div>   

    </nav>
    

    <div class="min-h-[100%] m-0">
      {{$slot}}
    </div>
    
    
    <div class="bg-gray-900 mt-auto ">
        <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
          <div class="grid row-gap-10 mb-8 lg:grid-cols-6">
            <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
            </div>
          </div>
          <div class="flex flex-col justify-between pt-5 pb-10 border-t border-gray-800 sm:flex-row">
            <p class="text-sm text-gray-500">
              © Copyright {{date('Y')}} PcThrift inc. All rights reserved.
            </p>
            <div class="flex items-center mt-4 space-x-4 sm:mt-0">
              <a href="https://twitter.com/PcThrift10524" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                  <path
                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                  ></path>
                </svg>
              </a>
              <a href="https://www.instagram.com/sena_kristiawan/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
                <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                  <circle cx="15" cy="15" r="4"></circle>
                  <path
                    d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
                  ></path>
                </svg>
              </a>
              <a href="https://web.facebook.com/profile.php?id=100018212107238" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                  <path
                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                  ></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      @yield('scripts');
</body>
</html>
@yield('scripts')
