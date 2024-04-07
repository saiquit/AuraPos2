<div class="relative">
    <div id="sidebar"
        class="xl:w-80 w-58 flex-shrink-0 border-r border-gray-200 dark:border-gray-800 h-full overflow-y-auto lg:block hidden p-5 ">
        <div class="text-xs text-gray-400 tracking-wider flex justify-between align-middle">
            <div>
                <p class="uppercase">
                    {{ $title }}
                </p>
            </div>
            <div class="mt-2 flex items-center justify-center">
                @if ($page > 1)
                <button wire:click="decreasePage" class="text-gray-400 hover:text-gray-600 p-2">
                    <i class="fa fa-angle-left"></i>
                </button>

                @endif
                <span class="mx-2">{{ $page }} of {{ $lastPage }}</span>
                @if ($page < $lastPage) <button wire:click="increasePage" class="text-gray-400 hover:text-gray-600 p-2">
                    <i class="fa fa-angle-right"></i>
                    </button>
                    @endif
            </div>

        </div>
        <div class="relative mt-2">
            <input type="text"
                class="pl-8 h-9 bg-transparent border border-gray-300 dark:border-gray-700 dark:text-white w-full rounded-md text-sm"
                placeholder="Search" wire:model.live.debounce.250ms='query' />
            <svg viewBox="0 0 24 24"
                class="w-4 absolute text-gray-400 top-1/2 transform translate-x-0.5 -translate-y-1/2 left-2"
                stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
        </div>
        <div class="space-y-4 mt-3">
            @foreach ($items as $item)
            <x-pages.list-items.list-cover :item=$item />
            @endforeach
        </div>
    </div>
    <div id="dragHandle"
        class="cursor-col-resize w-6 absolute top-0 bottom-0 right-0 z-10 ">
    </div>

</div>