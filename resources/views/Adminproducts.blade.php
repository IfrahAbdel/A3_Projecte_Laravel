
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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg d-flex justify-content-center align-items-center ">
                <div class="cart-table-wrap">
                    <div>
                        <x-primary-button class="mb-6 float-end" onclick="window.location='{{ route('products.create') }}'">Add Product</x-primary-button>
                    </div>
                    <table class="cart-table text-center border-collapse">
                        <thead class="cart-table-head">
                            <tr class="table-head-row m-1">
                                <th class="product-image">Product Image</th>
                                <th class="product-name">Name</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                                <th class=""></th>
                                <th class=""></th>
    
                            </tr>
                        </thead>
                        <tbody class="" >
                            @foreach ($products as $product)     
                            <tr class="table-body-row m-2 ">
                                <td class="product-image border text-center ">
                                    
                                    <img src="{{url($product->image()->first()->url)}}" alt=""  style="max-height: 100px ; min-height:100px; max-width: 100px ; min-width:100px ; display: inline-block">
                                    
                                </td>
                                <td class="product-name border">{{ $product->name }}</td>
                                <td class="product-price border"> {{ $product->price }} €</td>
                                <td class="product-quantity border">{{ $product->stock }}</td>
                                <td class="product-total border"></td>
                                <td>
                                    <x-primary-button >
                                        <a href=" {{ route('products.edit', $product) }}">Edit</a>
                                    </x-primary-button>
                                   <x-danger-button>
                                        <form action="{{ route('products.destroy', $product) }}" method="delete">
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