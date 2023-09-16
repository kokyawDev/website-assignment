@extends('layouts.main')
@section('content')

{{--    @if($errors->any())--}}
{{--        @dd($errors)--}}
{{--    @endif--}}
    <div class="relative p-4 w-full max-w-full max-h-full">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal body -->
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-3">
                    <div>
                        <label for="name"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name <span class="text-red-500">*</span></label>
                        <input type="text" name="name" id="name"
                               value="{{ old('name') }}"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="Type Post Name">
                        @if($errors->has('name'))
                            <small class="text-red-500">* {{ $errors->first('name') }} *</small>
                        @endif
                    </div>

                    <div>
                        <label for="slug"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug <span class="text-red-500">*</span></label>
                        <input type="text" name="slug" id="slug"
                               value="{{ old('slug') }}"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="Type Post Slug">
                        @if($errors->has('slug'))
                            <small class="text-red-500">* {{ $errors->first('slug') }} *</small>
                        @endif
                    </div>

                    <div>
                        <label for="category_id"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category <span class="text-red-500">*</span></label>
                        <select name="category_id" id="category_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if($category->id == old('category_id')) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('category_id'))
                            <small class="text-red-500">* {{ $errors->first('category_id') }} *</small>
                        @endif
                    </div>
                </div>

                <div class="grid gap-4 mb-4 sm:grid-cols-1">
                    <div>
                        <label for="short_description"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Short Description <span class="text-red-500">*</span></label>
                        <textarea rows="5" name="short_description" id="short_description"
                                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  placeholder="Type Short Description">{{ old('short_description') }}</textarea>
                        @if($errors->has('short_description'))
                            <small class="text-red-500">* {{ $errors->first('short_description') }} *</small>
                        @endif
                    </div>
                </div>

                <div class="grid gap-4 mb-4 sm:grid-cols-1">
                    <div>
                        <label for="description"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description <span class="text-red-500">*</span></label>
                        <textarea rows="5" name="description" id="description"
                                  class="ckeditor block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  placeholder="Type Description">{{ old('description') }}</textarea>
                        @if($errors->has('description'))
                            <small class="text-red-500">* {{ $errors->first('description') }} *</small>
                        @endif
                    </div>

                </div>

                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="thumbnail"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Thumbnail <span class="text-red-500">*</span></label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="thumbnail" id="file_input" type="file" accept="image/*">
                        @if($errors->has('thumbnail'))
                            <small class="text-red-500">* {{ $errors->first('thumbnail') }} *</small>
                        @endif
                    </div>

                    <div>
                        <label for="cover"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cover <span class="text-red-500">*</span></label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="cover" id="file_input" type="file" accept="image/*">
                        @if($errors->has('cover'))
                            <small class="text-red-500">* {{ $errors->first('cover') }} *</small>
                        @endif
                    </div>
                </div>


                <button type="submit"
                        class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Create
                </button>
            </form>
        </div>
    </div>
@endsection
