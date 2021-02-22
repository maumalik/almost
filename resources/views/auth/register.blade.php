@extends('layouts.app')
@section('content')
    
    <div class="flex justify-center">
        
        <div class="p-6 w-4/12 bg-white rounded-lg shadow-md">
            <div class="mb-4">
                <h1 class="text-xl font-medium text-gray-500 mb-2">Register Here</h1>
                <hr/>
            </div>
            <form action="{{route("register")}}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name" class="bg-gray-100 border-2 p-3 w-full rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                    
                    @error('name')
                        <div class='text-red-500 mt-1 text-xs'>
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-100 border-2 p-3 w-full rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                    @error('username')
                        <div class='text-red-500 mt-1 text-xs'>
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your Email" class="bg-gray-100 border-2 p-3 w-full rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    @error('email')
                        <div class='text-red-500 mt-1 text-xs'>
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-100 border-2 p-3 w-full rounded-lg @error('password') border-red-500 @enderror" value="">
                    @error('password')
                        <div class='text-red-500 mt-1 text-xs'>
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password Confirmation</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat Your Password" class="bg-gray-100 border-2 p-4 w-full rounded-lg @error('password_confirmation') border-red-500 @enderror" value="">
                    @error('password_confirmation')
                    <div class='text-red-500 mt-1 text-xs'>
                        {{$message}}
                    </div>
                @enderror
                </div>

                <div>
                    <Button type="submit" class="bg-blue-500 text-white w-full p-3 rounded font-medium">Register</Button>
                </div>
            </form>
        </div>
    </div>
@endsection