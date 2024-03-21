
<x-app-layout>
    <x-slot name="navigation">
        @include('layouts.navigation')
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Show PRODUCTS : '.$product->name.'') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5"> 
                                    @isset($info)
                                        <h3>{{ $info }}</h3>    
                                    @endisset 
                                </div>
                                <div class="col-md-5">
                                    <div class="single-product-img">
                                        <img src="{{asset($product->image()->first()->url)}}"  alt="">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="single-product-content">
                                        <h3>{{ $product->name }}</h3>
                                        <div class="d-flex justify-between ">
                                            <h4 class="text-decoration-line-through text-danger">{{ $product->price }} €</h4>
                                            <h4>{{ $product->price - ($product->price * $product->discount / 100) }} €</h4>
                                          </div>
                                        <p>{{ $product->description }}</p>
                                        <div class="single-product-form">
                                            <h4>Stock {{ $product->stock }}</h4>
                                            <p><strong>Categories: </strong>
                                                {{ $product->category->name }}
                                            </p>
                                        </div>
                                        <div class="comentario">
                                            {{-- @foreach ($product->comments as $comment) --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
    </div>
</x-app-layout>
