<div>
    <a href="{{ route('app.stores.show', $store->id) }}"
        class="bg-white p-3 w-full flex flex-col rounded-md dark:bg-gray-800 shadow {{ $store->id == request('id', null) ? 'border dark:border-gray-300 dark:bg-gray-900' : '' }}">
        <div
            class="flex xl:flex-row flex-col items-center font-medium text-gray-900 dark:text-white pb-2 mb-2 xl:border-b border-gray-200 border-opacity-75 dark:border-gray-700 w-full">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&s=046c29138c1335ef8edee7daf521ba50"
                class="w-7 h-7 mr-2 rounded-full" alt="profile" />
            {{ $store->name }}
        </div>
        <div class="flex items-center w-full">
            <div class="text-xs py-1 px-2 leading-none dark:bg-gray-900 bg-blue-100 text-blue-500 rounded-md">
                Design</div>
            <div class="ml-auto text-xs text-gray-500">Products: {{ $store->products->count() }}</div>
        </div>
    </a>
</div>