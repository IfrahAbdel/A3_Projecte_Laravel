<x-app-layout>
    <x-slot name="navigation">
        @include('layouts.navigation')
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('HOME PAGE') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container d-flex align-items-center mw-100 p-5 flex-wrap">
                    @foreach ($products as $product)
                        <x-single-product :product="$product" />
                    @endforeach
            </div>
        </div>
    </div>
</x-app-layout>