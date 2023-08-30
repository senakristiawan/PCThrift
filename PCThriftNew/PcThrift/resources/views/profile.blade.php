<x-header>
    <div class="flex flex-col m-[2vw]">
        <h1 class="font-bold text-[4vw]">User Profile</h1>

        <div class="flex flex-col m-[1vw]">
            <div class="flex flex-row mb-[vh]">
                <img class="rounded-full overflow-hidden w-[12vw] mr-[2vw]" src="{{URL('images/mumei_ghost.PNG')}}">
                <a class="text-center my-auto text-[0.75vw] cursor-pointer font-semibold change_profile_picture_link font-bold btn btn-primary m-1 bg-gray-700 p-2 rounded-lg">Change Profile Picture</a>
                <input type="file" id="profile_picture_input" hidden>
            </div>
            <div class="flex flex-row mb-[4vh]"></div>
                @if (auth()->check())
                    <ul class="text-[2vw]">{{ auth()->user()->email}}</ul>
                @endif
                </div>
                    <form method="POST" action="{{ route('change_username') }}">
                        @csrf
                        <div class="form-group m-3">
                            <label for="new_username" class="font-bold">New Username</label>
                            <input placeholder="Your New Username" type ="text" name="new_username" id="new_username" class="form-control text-black ml-6" required>
                        </div>
                        <button type="submit" class=" font-bold btn btn-primary m-1 bg-gray-700 p-2 rounded-lg">Change Username</button>
                    </form>

                         {{-- <h2 class="mr-[2vw] text-[1.5vw]" >Name goes here</h2> --}}
                          {{-- <button  class="bg-white hover:bg-gray-100 text-black font-semibold py-2 px-4 border border-gray-400 rounded-full shadow">Change Username</button> --}}
                
                <div class="flex flex-row mb-[4vh]">
                    <form method="POST" action="{{route('change_password')}}">
                        @csrf
                        <div class="m-3 form-group">
                            <label for="current_password" class="font-bold">Current Password</label>
                            <input placeholder="Your Current Password" type="text" name="current_password" id="current_password" class="form-control text-black ml-1.5" required autocomplete="off">
                        </div>
                        <div class="form-group m-3">
                            <label for="new_password" class="font-bold">New Password</label>
                            <input placeholder="Your New Password" type="text" name="new_password" id="new_password" class="form-control text-black ml-7" required autocomplete="off">
                        </div>
                        <button type="submit" class="font-bold btn btn-primary m-1 bg-gray-700 p-2 rounded-lg">Change Password</button>
                    </form>
                    {{-- <h2 class="mr-[2vw] text-[1.5vw]" >Old password here</h2> --}}
                    {{-- <button  class= "bg-white hover:bg-gray-100 text-black font-semibold py-2 px-4 border border-gray-400 rounded-full shadow">Change Password</button> --}}
                </div>

                {{-- <div class="m-3 flex flex-row mb-[4vh] text-center">
                     {{-- <h2 class="mr-[2vw] text-[1.5vw]" >Confirm new password</h2> --}}
                    {{-- @if(auth()->check())
                        <h1>{{ auth()->user()->email }}</h1>
                    @endif
                </div> --}}
                    {{-- <form method="POST" action="{{route('change_email')}}">
                        @csrf
                        <div class="form-group">
                            <label for="new_email">New Email:</label>
                            <input type="text" name="new_email" id="new_email" class="form-control text-black" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Change Email</button>
                    </form> --}}

                 {{-- <div class="m-3 flex flex-row mb-[4vh]"> --}}
                     {{-- <h2 class="mr-[2vw] text-[1.5vw] username" >Email Here</h2> --}}
                     {{-- <button  class="bg-white hover:bg-gray-100 text-black font-semibold py-2 px-4 border border-gray-400 rounded-full shadow">Change Email</button> --}}
                    {{-- @if(auth()->check())
                        <h1>{{ auth()->user()->number }}</h1>
                    @endif
                </div> --}}
                    {{-- <form method="POST" action="{{route('change_number')}}">
                        @csrf
                        <div class="form-group">
                            <label for="new_number">New Number:</label>
                            <input type="text" name="new_number" id="new_number" class="form-control text-black" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Change Number</button>
                    </form> --}}
                     {{-- <h2 class="mr-[2vw] text-[1.5vw] username" >Phone number here</h2>
                     {{-- <button  class="bg-white hover:bg-gray-100 text-black font-semibold py-2 px-4 border border-gray-400 rounded-full shadow">Change Number</button> --}}
                     
                 <button class="m-3 bg-white border max-w-xs text-black rounded-lg font-semibold text-center  py-2 px-4" onclick="window.location='{{ route('manageOrder') }}'"s>Manage Order</button>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="m-3 bg-red border max-w-xs text-white rounded-lg font-semibold mb-[4vh] py-2 px-4" >Log Out</button>
            </form>
            

 
        </div>
        
    </div>
    
</x-header>