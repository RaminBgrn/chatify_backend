<div x-data="{ type: 'all', query: @entangle('query') }" x-init="setTimeout(() => {
            conversationElement = document.getElementById('conversation-' + query ');
                if (conversationElement) {
                    conversationElement.scrollIntoView({ 'behavior': 'smooth' });
                }
            }), 200;" class="flex flex-col translate-all h-full overflow-hidden">
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
    <main class="overflow-y-auto overflow-hidden grow h-full relative" style="contain: content">
        <ul class="p-2 grid w-full spacey-y-2">
            @if ($conversation)

                @foreach ($conversation as $key => $item)
                    <li id="convertation-{{ $item->id }}" wire:key="{{ $item->id }}"
                        class="py-3 hover:bg-gray-500 rounded-2xl dark:hover:bg-gray-700/70 transition colors duration-150 flex gap-4 relative w-full cursor-pointer px-2 my-1 {{ $item->id == $selectedConversation?->id ? 'bg-gray-700' : 'bg-gray-800' }} ">
                        <a href="#" class="shrink-0">
                            <x-avatar src="https://i.pravatar.cc/100{{ $key }}" />
                        </a>
                        <aside class="grid grid-cols-12 w-full">
                            <a href="{{ route('chat', $item->id) }}"
                                class="col-span-11 border-b border-gray-600 pb-2  gray-200 relative overflow-hidden truncate leading-5 w-full flex-nowrap p-1">
                                {{-- name and data --}}
                                <div class="flex justify-between w-full items-center">
                                    <h6 class="truncate font-medium tracking-wider text-gray-400">
                                        {{ $item->getReceiver()->name }}
                                    </h6>
                                    <small class="text-gray-500">
                                        {{-- {{ $conversation->messages?->last()?->created_at?->shortAbsoluteDiffForHumans() }} --}}
                                        5d
                                    </small>
                                </div>
                                {{-- message body --}}

                                <div class="flex gap-x-2 items-center">

                                    {{-- Double Tick --}}
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-check2-all fill-blue-400"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                                            <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                                        </svg>
                                    </span>


                                    {{-- Single Tick --}}
                                    {{-- <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                    <path
                                        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                                </svg>
                            </span> --}}

                                    <p class="grow truncate text-sm font-[100] text-gray-500">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat similique
                                        cumque
                                        consectetur saepe delectus corporis rerum nam, ad, aliquid vel fugit explicabo
                                        est,
                                        maiores voluptas. Consectetur doloribus quam nobis illum!
                                    </p>

                                    <span
                                        class="font-bold p-px px-2 text-xs shrink-0 rounded-full bg-blue-500 text-white">5</span>

                                </div>

                            </a>

                            <div class="col-span-1 flex flex-col text-center my-auto">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-three-dots-vertical fill-gray-500"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                            </svg>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">

                                        <div class="w-full p-1">
                                            <button
                                                class="items-center gap-3 flex w-full px-4 py-2 text-left text-sm leading-5 text-gray-400 hover:bg-gray-600 transition-all duration-150 ease-in-out focus:outline-none focus:bg-gray-700">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-person-circle fill-gray-400 w-5 h-5 text-gray-700"
                                                        viewBox="0 0 16 16">
                                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                                        <path fill-rule="evenodd"
                                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                                    </svg>
                                                </span>

                                                View Profile
                                            </button>
                                            <button
                                                class="items-center gap-3 flex w-full px-4 py-2 text-left text-sm leading-5 text-gray-400 hover:bg-gray-600 transition-all duration-150 ease-in-out focus:outline-none focus:bg-gray-700">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-person-circle fill-gray-400 w-5 h-5 text-gray-700"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                                    </svg>
                                                </span>

                                                Delete
                                            </button>
                                        </div>

                                    </x-slot>
                                </x-dropdown>
                            </div>
                        </aside>
                    </li>
                @endforeach

            @endif
        </ul>
    </main>
</div>
