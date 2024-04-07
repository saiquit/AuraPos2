@extends('layouts.dashboard')
@section('content')
@livewire('global.side-list', ['model' => 'App\Models\Product', 'title' => 'Products'])

<div class="flex-grow bg-white dark:bg-gray-900 overflow-y-auto">
    <div
        class="sm:px-7 sm:pt-7 px-4 pt-4 flex flex-col w-full  bg-white dark:bg-gray-900 dark:text-white dark:border-gray-800 sticky top-0">
        <div class="flex w-full items-center">
            <div class="flex items-center text-3xl text-gray-900 dark:text-white">
                <img src="https://assets.codepen.io/344846/internal/avatars/users/default.png?fit=crop&format=auto&height=512&version=1582611188&width=512"
                    class="w-12 mr-4 rounded-full" alt="profile" />
                {{ $product->name }}
            </div>
            <div class="ml-auto sm:flex hidden items-center justify-end">
                <div class="text-right">
                    <a href="#" class="text-xs text-gray-400 dark:text-gray-400"><i class="fa fa-edit text-xl"></i></a>
                    <a href="#" class="text-xs text-red-600 dark:text-red-500 ml-2"><i
                            class="fa fa-trash text-xl"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div x-data="{ activeTab: 'overview' }" x-cloak>
        <div class="p-6">
            <template x-for="tab in ['overview', 'transfer', 'budgets', 'notifications', 'cards']">
                <a @click="activeTab = tab"
                    :class="tab === activeTab ? 'px-3 border-b-2 border-blue-500 text-blue-500 dark:text-white dark:border-white pb-1.5' : 'px-3 border-b-2 border-transparent text-gray-600 dark:text-gray-400 pb-1.5'"
                    href="#" x-text="tab.replace(/^\w/, c => c.toUpperCase())"></a>
            </template>
        </div>
        <template x-if="activeTab === 'overview'">
            <div class="sm:flex sm:flex-row sm:space-x-7 space-y-7">
                <div class="sm:w-1/2 w-full p-4">
                    <div class="border border-gray-300 rounded-lg p-4">
                        <table class="table-auto w-full">
                            <tbody>
                                <tr>
                                    <th class="text-left py-2">SKU:</th>
                                    <td class="text-left py-2">{{ $product->sku }}</td>
                                </tr>
                                <tr>
                                    <th class="text-left py-2">Category:</th>
                                    <td class="text-left py-2">{{ $product->category->name }}</td>
                                </tr>
                                <tr>
                                    <th class="text-left py-2">Unit:</th>
                                    <td class="text-left py-2">{{ $product->unit->name }}</td>
                                </tr>
                                <tr>
                                    <th class="text-left py-2">Cost:</th>
                                    <td class="text-left py-2">{{ number_format($product->cost, 2) }}</td>
                                </tr>
                                <tr>
                                    <th class="text-left py-2">Price:</th>
                                    <td class="text-left py-2">{{ number_format($product->price, 2) }}</td>
                                </tr>
                                <tr>
                                    <th class="text-left py-2">Tax:</th>
                                    <td class="text-left py-2">{{ number_format($product->tax, 2) }}</td>
                                </tr>
                                <tr>
                                    <th class="text-left py-2">Description:</th>
                                    <td class="text-left py-2">
                                        @if ($product->description)
                                        {!! $product->description !!}
                                        @else
                                        No description provided.
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="border border-gray-300 rounded-lg p-4 mt-4">
                        <h2 class="text-2xl font-bold mb-4">Store Stock</h2>
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th class="text-left py-2">Store</th>
                                    <th class="text-left py-2">Stock</th>
                                    <th class="text-left py-2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product->stores as $store)
                                <tr>
                                    <td class="text-left py-2">{{ $store->name }}</td>
                                    <td class="text-left py-2">{{ $store->pivot->stock }}</td>
                                    <td class="text-left py-2">{{ $store->pivot->status }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="border border-gray-300 rounded-lg p-4 mt-4">
                        <h2 class="text-2xl font-bold mb-4">Sales Information</h2>
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th class="text-left py-2">Store</th>
                                    <th class="text-left py-2">Sales (total)</th>
                                    <th class="text-left py-2">Sales (average)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product->stores as $store)
                                <tr>
                                    <td class="text-left py-2">{{ $store->name }}</td>
                                    <td class="text-left py-2">{{ $store->pivot->sales_total }}</td>
                                    <td class="text-left py-2">{{ $store->pivot->sales_average }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="sm:w-1/2 w-full p-4">
                </div>
            </div>
        </template>
        <template x-if="activeTab === 'transfer'">
            <div class="sm:p-7 p-4">Transfer content</div>
        </template>
        <template x-if="activeTab === 'budgets'">
            <div class="sm:p-7 p-4">Budgets content</div>
        </template>
        <template x-if="activeTab === 'notifications'">
            <div class="sm:p-7 p-4">Notifications content</div>
        </template>
        <template x-if="activeTab === 'cards'">
            <div class="sm:p-7 p-4">Cards content</div>
        </template>
    </div>
</div>

@endsection