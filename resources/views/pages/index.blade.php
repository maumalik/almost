@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="p-6 w-8/12 bg-white rounded-lg shadow-md">
            @auth     
                <form action="{{ route('posts') }}" method="post" class="mb-4">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="10" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Post Here"></textarea>

                    @error('body')
                        <div class='text-red-500 mt-1 text-xs'>
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div>
                    <Button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded font-medium">Post</Button>
                </div>
                </form>
            @endauth

            @if ($posts->count())
                @foreach ($posts as $post)
                    <div class=mb-4>
                        <a href="" class="font-bold">{{ $post->user->name }}</a> <span class="text-xs text-gray-400">{{ $post->created_at->diffForHumans() }}</span>
                        <p>{{ $post->body }}</p>

                        @auth    
                            <div class="flex item-center">
                                <form action="{{ route('posts.likes', $post->id)}}" method="post" class="mr-2">
                                    @csrf
                                    <button type="submit" class="text-blue-500">like</button>
                                </form>

                                <form action="" method="post" class="mr-2">
                                    @csrf
                                    <button type="submit" class="text-blue-500">unlike</button>
                                </form>

                                <span>{{ $post->likes->count() }}</span>
                            </div>
                        @endauth
                    </div>
                @endforeach

                {{ $posts->links() }}
            @else
                <p>There are no posts</p>
            @endif
        </div>
    </div>
@endsection