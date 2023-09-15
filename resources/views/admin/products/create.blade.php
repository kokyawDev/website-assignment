@extends('layouts.main')
@section('content')

    <div class="relative p-4 w-full max-w-full max-h-full">
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">

            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="name"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="name"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="Type Product name" required="">
                        @if($errors->has('name'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">{{ $errors->first('name') }}</p>
                        @endif

                    </div>

                    <div>
                        <label for="category_id"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select name="category_id" id="category_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                        @if($errors->has('category_id'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">{{ $errors->first('category_id') }}</p>
                        @endif
                    </div>
                </div>

                <div class="grid gap-4 mb-4 sm:grid-cols-1">
                    <div>
                        <label for="short_description"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Short Description</label>
                        <textarea rows="5" name="short_description" id="short_description"
                                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  placeholder="Type Product Description" required=""></textarea>
                        @if($errors->has('short_description'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">{{ $errors->first('short_description') }}</p>
                        @endif
                    </div>

                </div>

                <div class="grid gap-4 mb-4 sm:grid-cols-1">
                    <div>
                        <label for="description"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea rows="5" name="description" id="description"
                                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  placeholder="Type Product Description" required=""></textarea>
                        @if($errors->has('description'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">{{ $errors->first('description') }}</p>
                        @endif
                    </div>

                </div>

                <div class="grid gap-4 mb-4 sm:grid-cols-3">
                    <div>
                        <label for="price"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" name="price" id="price"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="Type Product price" required="">
                        @if($errors->has('price'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">{{ $errors->first('price') }}</p>
                        @endif
                    </div>

                    <div>
                        <label for="quantity"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                        <input type="number" name="quantity" id="quantity"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="Type Product quantity" required="">
                        @if($errors->has('quantity'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">{{ $errors->first('quantity') }}</p>
                        @endif
                    </div>

                    <div>
                        <label for="thumbnail"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Thumbnail</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="thumbnail" id="file_input" type="file" accept="image/*">
                        @if($errors->has('thumbnail'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">{{ $errors->first('thumbnail') }}</p>
                        @endif
                    </div>
                </div>

                <div class="grid gap-4 mb-4 sm:grid-cols-1">

                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="product_images">Product Images</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="product_images[]" id="product_images" type="file" accept="image/*" multiple>
                        @if($errors->has('product_images'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">{{ $errors->first('product_images') }}</p>
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
