@extends('layouts.app')
@section('content')
    
    <div class="flex justify-center">
        
        <div class="p-6 w-4/12 bg-white rounded-lg shadow-md">
            <div class="mb-4">
                <h1 class="text-xl font-medium text-gray-500 mb-2">Login</h1>
                <hr/>
            </div>
            @if (session('status'))
                <div class="py-3 px-2 my-2 bg-red-300 text-red-800 rounded border border-red-600">{{session('status')}}</div>
            @endif
            <form action="{{route("login")}}" method="post">
                @csrf

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

             

                <div>
                    <Button type="submit" class="bg-blue-500 text-white w-full p-3 rounded font-medium">Login</Button>
                </div>
            </form>
        </div>
    </div>
@endsection