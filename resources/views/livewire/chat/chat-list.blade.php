<div x-data="{ type: 'all' }" class="flex flex-col translate-all h-full overflow-hidden">
    <header class="px-3 z-10 bg-gray-800 sticky top-0 w-full py-2">
        <div class="border-b border-gray-700 justify-between flex items-center pb-2 ">
            <div class="flex items-center gap-2">
                <h5 class="font-extrabold text-2xl text-gray-400">Chats</h5>
            </div>
            <button>
                <svg class="w-7 h-7 fill-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
                </svg>
            </button>
        </div>
        <div class="flex gap-3 items-center  p-2 ">
            <button @click="type='all'" :class="{ 'bg-blue-100 border-0 text-gray-800': type == 'all' }"
                class="inline-flex justify-center items-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-1 lg:py-2.5 border border-gray-600 text-gray-400">All</button>
            <button @click="type='deleted'" :class="{ 'bg-blue-100 border-0 text-gray-800': type == 'deleted' }"
                class="inline-flex justify-center items-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-1 lg:py-2.5 border border-gray-600 text-gray-400">Deleted</button>
        </div>
    </header>
    <main></main>
</div>
