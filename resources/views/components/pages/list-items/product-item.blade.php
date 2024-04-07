<div>
    <a href="{{ route('app.products.show', $product->id) }}" class="block">
        <div class="bg-white p-4 rounded-lg shadow-sm  dark:bg-gray-800 {{ $product->id == request('id', null) ? 'border dark:border-gray-300 dark:bg-gray-900' : '' }}">
            <div class="flex items-center">
                <img src="https://via.placeholder.com/24x24" alt="{{ $product->name }}"
                    class="w-32 h-24 object-cover rounded-full">
                <div class="ml-4">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-white">{{ $product->name }}</h2>
                    <span class="mt-1 text-sm text-gray-600 dark:text-gray-400">Price: ${{ $product->price }}</span>
                </div>
            </div>
        </div>
    </a>
</div>