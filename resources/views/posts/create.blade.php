<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    <form action="{{ route('posts.store') }}" method="POST" class="flex flex-col">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input value="{{ old('title') }}" type="text" name="title" class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" id="title">
                            @if($errors->has('title'))
                                <span class="text-danger text-red-600 text-bold">{{ $errors->first('title') }}</span>
                            @endif
                        </div>

                        <div class="form-group py-5 flex items-center">
                            <label for="post_text" class="pr-3">Post Text</label>
                            <textarea name="post_text" class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" id="post_text">{{ old('post_text') }}</textarea>
                            @if($errors->has('post_text'))
                                <span class="text-danger text-red-600 text-bold">{{ $errors->first('post_text') }}</span>
                            @endif
                        </div>
                        <div class="form-group py-5">
                            <label for="category_id"> Category</label>
                            {{-- <select name="category_id"
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select> --}}
                        <select name="category_id" class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            <option value="">Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                            @if($errors->has('category_id'))
                                <span class="text-danger text-red-600 text-bold">{{ $errors->first('category_id') }}</span>
                            @endif
                        </div>
                        {{-- Category:
                        <br />
                        <select name="category_id"
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <br />
                        <br /> --}}
                        <button
                            class=" w-[70px] inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                            type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
