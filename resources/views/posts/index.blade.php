<x-layout>

    <div class="container max-w-full mx-auto pt-4">
        
        <h1>Home</h1>
        <a href="/posts/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Post</a>

        @foreach ($posts as $post)
        <article class="mb-2 flex border-b border-gray-700 px-2 py-1 text-white max-w-[598px]">
            <div>
                <img src="{{asset('images/profile-test.jpg')}}" class="rounded-full w-12" alt="">
            </div>
            <div class="pl-2 max-w-lg">
                <a href="/posts/{{ $post->id }}/edit" class="text-xl font-bold">{{ $post->title }}</a>
                <p class="text-md">{{ $post->content }}</p>
            </div>
        </article>

            
        @endforeach
    </div>
    
</x-layout>