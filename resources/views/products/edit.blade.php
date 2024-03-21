<x-app-layout>
    <x-slot name="navigation">
        @include('layouts.navigationAdmin')
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PRODUCTS/ADMIN') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-dark dark:text-gray-800 align-items-center">
                    <form action="{{ route('products.update', compact('product')) }}" enctype="multipart/form-data" method="put" class="container">
                        @csrf
                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label for="name" class="col-sm-4 col-form-label">Product Name:</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}" required>
                                            </div>
                                        </div>
                    
                                        <div class="mb-3 row">
                                            <label for="description" class="col-sm-4 col-form-label">Description:</label>
                                            <div class="col-sm-8">
                                                <textarea id="description" name="description" class="form-control" rows="3" required>{{ $product->description }}</textarea>
                                            </div>
                                        </div>
                    
                                        <div class="mb-3 row">
                                            <label for="price" class="col-sm-4 col-form-label">Price:</label>
                                            <div class="col-sm-8">
                                                <input type="number" id="price" name="price" class="form-control" step="0.01" value="{{ $product->price }}" required>
                                            </div>
                                        </div>
                    
                                        <div class="mb-3 row">
                                            <label for="category_id" class="col-sm-4 col-form-label">Category:</label>
                                            <div class="col-sm-8">
                                                <select id="category_id" name="category_id" class="form-control" required>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                    
                                        <div class="mb-3 row">
                                            <label for="marca_id" class="col-sm-4 col-form-label">Brand:</label>
                                            <div class="col-sm-8">
                                                <select id="marca_id" name="marca_id" class="form-control" required>
                                                    @foreach ($marcas as $marca)
                                                        <option value="{{ $marca->id }}" {{ $product->marca_id == $marca->id ? 'selected' : '' }}>{{ $marca->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                    
                                        <div class="mb-3 row">
                                            <label for="stock" class="col-sm-4 col-form-label">Stock:</label>
                                            <div class="col-sm-8">
                                                <input type="number" id="stock" name="stock" class="form-control" value="{{ $product->stock }}" required>
                                            </div>
                                        </div>
                    
                                        <div class="mb-3 row">
                                            <label for="discount" class="col-sm-4 col-form-label">Discount:</label>
                                            <div class="col-sm-8">
                                                <input type="number" id="discount" name="discount" class="form-control" step="0.01" value="{{ $product->discount }}">
                                            </div>
                                        </div>
                    
                                        <div class="mb-3 row">
                                            <label for="image" class="col-sm-4 col-form-label">Product Image:</label>
                                            <div class="col-sm-8">
                                                <input type="file" id="image" name="image" class="form-control-file">
                                            </div>
                                        </div>
                    
                                        <div class="row justify-content-center">
                                            <div class="col-sm-8">
                                                <x-primary-button type="submit">{{ __('Save') }}</x-primary-button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
