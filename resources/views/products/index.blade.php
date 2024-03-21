<x-app-layout>
    <x-slot name="navigation">
        @include('layouts.navigation')
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('PRODUCTS LIST') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div tabindex="0" class="focus:outline-none">
                    <div class="mx-auto container py-8">
                        <div class="container d-flex align-items-center mw-100 p-5 flex-wrap">
                            @foreach ($products as $product)
                                <x-single-product :product="$product" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- py-12 --}}
    </div>
</x-app-layout>
