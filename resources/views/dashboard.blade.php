<x-app-layout>
    {{-- <header class="py-5 bg-gray-100 border-b mb-4">
        <div class="container mx-auto">
          <div class="text-center my-5">
            <h1 class="font-extrabold text-3xl">Welcome to Blog Home!</h1>
          </div>
        </div>
      </header>


    <div class="py-12"> --}}


        {{-- <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="overflow-hidden rounded-lg">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                        <!-- Blog entries-->
                        <div class="lg:col-span-8">
                            <!-- Nested row for non-featured blog posts-->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                @foreach ($posts as $post)
                                    <div class="mb-4">
                                        <!-- Blog post-->
                                        <div class="card px-5 py-3">
                                            <a href="{{ route('posts.show', $post->id) }}">
                                                <img class="card-img-top"
                                                    src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg"
                                                    alt="..." />
                                            </a>
                                            <div class="card-body px-5 py-3">
                                                <div class="text-gray-500 text-sm">{{ $post->created_at }}</div>
                                                <h2 class="card-title text-xl font-bold">{{ $post->title }}</h2>
                                                <p class="card-text">{{ $post->post_text }}</p>
                                                <a class="btn btn-primary" href="#!">Read more →</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widgets-->
            <div class="lg:col-span-4 px-3 py-2 border-2 border-gray-500 rounded-lg">
                <div class="card">
                    <div class="card-header font-bold">Categories</div>
                    <div class="card-body">
                        <div class="grid grid-cols-1">
                            <ul class="list-none">
                                @foreach ($categories as $category)
                                    <li><a href="{{ route('dashboard.index') }}?category_id={{ $category->id }}"
                                            class="text-blue-500 hover:underline">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div> --}}

        <header class="py-2 bg-gray-200 border-b-2 border-gray-300 mb-16">
            <div class="container mx-auto">
                <div class="text-center my-10">
                    <h1 class="font-semibold text-3xl">Welcome to Blog Home!</h1>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container mx-auto px-10">
            <div class="flex flex-wrap -mx-4">
                <!-- Blog entries-->
                <div class="w-full lg:w-2/3 px-4">
                    <!-- Nested row for non-featured blog posts-->
                    <div class="flex flex-wrap -mx-4">
                        @foreach ($posts as $post)
                            <div class="w-full lg:w-1/2 px-4">
                                <!-- Blog post-->
                                <div class="card mb-16">
                                    <a href="{{ route('posts.show', $post->id) }}"><img class="w-full h-64 object-cover rounded-t-[10px]"
                                            src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                    <div class="p-6">
                                        <div class="text-gray-600">{{ $post->created_at }}</div>
                                        <h2 class="font-semibold text-2xl">{{ $post->title }}</h2>
                                        <p class="text-gray-700">{{ $post->post_text }}</p>
                                        <a class="text-blue-500 hover:text-blue-800" href="#!">Read more →</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Side widgets-->
                <div class="w-full lg:w-1/3 px-4">
                    <div class="card mb-16">
                        <div class="px-6 py-4 font-semibold text-xl border-b-2 border-gray-300">Categories</div>
                        <div class="p-6">
                            <div class="flex flex-wrap -mx-4">
                                <div class="w-full px-4">
                                    <ul class="list-none mb-0">
                                        @foreach ($categories as $category)
                                            <li><a class="text-blue-500 hover:text-blue-800" href="{{ route('dashboard.index') }}?category_id={{ $category->id }}">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





</x-app-layout>
