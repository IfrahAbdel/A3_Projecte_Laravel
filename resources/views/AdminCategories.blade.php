
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
                <div class="cart-table-wrap">
                    <x-primary-button class="mb-6" onclick="window.location='{{ route('categories.create') }}'">Add Category</x-primary-button>
                    <table class="cart-table text-center border-collapse">
                        <thead class="cart-table-head">
                            <tr class="table-head-row m-1">
                                <th class="product-name">Description</th>
                                <th class=""></th>
    
                            </tr>
                        </thead>
                        <tbody class="" >
                            @foreach ($categories as $category)     
                            <tr class="table-body-row m-2 ">
                                <td class="product-name border">{{ $category->name }}</td>
                                <td class="product-name border">{{ $category->description }}</td>
                                <td>
                                    <x-primary-button >
                                        <a href=" {{ route('categories.edit', $category) }}">Edit</a>
                                    </x-primary-button>
                                    <x-danger-button >
                                        <form action="{{ route('categories.destroy', $category) }}" method="post">
                                        @csrf 
                                        @method('delete')
                                        <input type="submit" value="Delete">                                        
                                    </form>
                                    </x-danger-button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @isset($message)
                        <div class="alert alert-success">{{ $message }}</div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</x-app-layout>