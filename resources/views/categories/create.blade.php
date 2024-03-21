<x-app-layout>
    <x-slot name="navigation">
        @include('layouts.navigationAdmin')
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CREATE NEW CATEGORY') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-dark dark:text-gray-200">
                    <form action="{{ route('categories.store') }}" enctype="multipart/form-data" method="post"
                        class="container">
                        @csrf
                        <div class="row m-3 justify-content-center align-items-center">
                            <div class="col-12 col-sm-8">
                                <div class="row m-3">
                                    <label for="name">Category Name:</label>
                                    <input type="text" class="form-control-sm" id="name" name="name"
                                        required>
                                </div>

                                <div class="row m-3">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control-sm" id="description" name="description" rows="3" required></textarea>
                                </div>
                                <div class="row m-3">
                                    <label for="image">Category Image:</label>
                                    <input type="file" class="form-control-file-sm" id="image" name="image">
                                </div>

                                <button type="submit" class="btn btn-primary text-dark">Create Category</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>