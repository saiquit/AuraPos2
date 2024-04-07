@extends('layouts.dashboard')
@section('content')
@livewire('global.side-list', ['model' => 'App\Models\Store', 'title' => 'Stores'])
<div class="flex-grow bg-white dark:bg-gray-900 overflow-y-auto">
    <div
        class="sm:px-7 sm:pt-7 px-4 pt-4 flex flex-col w-full border-b border-gray-200 bg-white dark:bg-gray-900 dark:text-white dark:border-gray-800 sticky top-0">
        <div class="flex w-full items-center">
            <div class="flex items-center text-3xl text-gray-900 dark:text-white">
                {{ $store->name }}
            </div>
            {{-- <div class="ml-auto sm:flex hidden items-center justify-end">
                <div class="text-right">
                    <div class="text-xs text-gray-400 dark:text-gray-400">Account balance:</div>
                    <div class="text-gray-900 text-lg dark:text-white">$2,794.00</div>
                </div>
                <button
                    class="w-8 h-8 ml-4 text-gray-400 shadow dark:text-gray-400 rounded-full flex items-center justify-center border border-gray-200 dark:border-gray-700">
                    <svg viewBox="0 0 24 24" class="w-4" stroke="currentColor" stroke-width="2" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="19" cy="12" r="1"></circle>
                        <circle cx="5" cy="12" r="1"></circle>
                    </svg>
                </button>
            </div> --}}
        </div>
    </div>
    <div class="sm:p-7 p-4">
        <section class="p-3 my-2 ">
            <div class="container grid grid-cols-1 gap-6 mx-auto sm:grid-cols-2 xl:grid-cols-4">
                @foreach (range(1,4) as $item)
                <div class="flex p-4 space-x-4 rounded-lg md:space-x-6 border border-gray-200 dark:border-gray-700">
                    <div class="flex justify-center p-2 align-middle rounded-lg sm:p-4 dark:bg-violet-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                            class="h-9 w-9 dark:text-gray-100">
                            <polygon
                                points="160 96.039 160 128.039 464 128.039 464 191.384 428.5 304.039 149.932 304.039 109.932 16 16 16 16 48 82.068 48 122.068 336.039 451.968 336.039 496 196.306 496 96.039 160 96.039">
                            </polygon>
                            <path
                                d="M176.984,368.344a64.073,64.073,0,0,0-64,64h0a64,64,0,0,0,128,0h0A64.072,64.072,0,0,0,176.984,368.344Zm0,96a32,32,0,1,1,32-32A32.038,32.038,0,0,1,176.984,464.344Z">
                            </path>
                            <path
                                d="M400.984,368.344a64.073,64.073,0,0,0-64,64h0a64,64,0,0,0,128,0h0A64.072,64.072,0,0,0,400.984,368.344Zm0,96a32,32,0,1,1,32-32A32.038,32.038,0,0,1,400.984,464.344Z">
                            </path>
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center align-middle">
                        <p class="text-3xl font-semibold leading-none">200</p>
                        <p class="capitalize">Orders</p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
    <!-- component -->
    @livewire('pages.store.product-table', ['store' => $store])
</div>
@endsection