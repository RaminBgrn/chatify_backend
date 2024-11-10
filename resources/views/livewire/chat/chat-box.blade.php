<div class="w-full overflow-hidden">
    <div class=" flex flex-col overflow-y-auto grow h-full">

        <header class="w-full static inset-x-0 flex pb-[5px] pt-[5px] top-0 z-10 bg-gray-800 border-b border-gray-700">
            <div class="flex w-full items-center px-2 lg:px-4 gap-2 md:gap-5">
                <a class="shrink-0 lg:hidden" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-arrow-left-short fill-gray-200" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                    </svg>
                </a>
                <div class="shrink-0">
                    <x-avatar class="h-9 w-9 lg:w-11 lg:h-11" />
                </div>
                <h6 class="font-bold truncate text-gray-400">{{ $selectedConversation->getReceiver()->name }}</h6>
            </div>
        </header>


        <main
            class="flex flex-col gap-3 p-2.5 overflow-y-auto flex-grow overscroll-contain overflow-x-hidden w-full my-auto"
            style="overflow-y:auto">

            <div @class(['max-w-[85%] md:max-w-[78%] flex w-auto gap-2 relative mt-2'])>

                {{-- avatar --}}

                <div @class(['shrink-0'])>
                    <x-avatar />
                </div>

                <div @class([
                    'flex flex-wrap text-[15px] rounded-xl p-2.5 flex flex-col text-black bg-[#f6f6f8fb]',
                    'rounded-bl-none border border-gray-200/20' => false,
                    'rounded-br-none bg-blue-500/50 text-white' => true,
                ])>
                    <p class="whitespace-normal truncate text-sm md:text-base tracking-wide lg:tracking-normal">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi nemo quas soluta sequi
                        obcaecati enim, sint quasi. Dolor velit asperiores, in autem quisquam fuga! Esse aperiam
                        corrupti iusto cum harum?
                    </p>
                    <div class="ml-auto flex gap-2">
                        <p @class(['text-xs', 'text-gray-500' => false, 'text-white' => true])>
                            5:25 am
                        </p>

                        <div>
                            <span @class(['text-gray-500'])>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check2-all fill-white" viewBox="0 0 16 16">
                                    <path
                                        d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                                </svg>
                            </span>

                            {{-- <span @class(['text-gray-500'])>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check2" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </span> --}}
                        </div>
                    </div>
                </div>

            </div>

        </main>

        <footer class="shrink-0 z-10 bg-gray-800 inset-x-0">
            <div class="p-2 border-t border-gray-700">
                <form action="POST" autocapitalize="off">
                    @csrf
                    <input type="hidden" autocomplete="false" style="display:none">
                    <div class="grid grid-cols-12">
                        <input type="text" autocomplete="false" autofocus placeholder="Write message here"
                            maxlength="1700"
                            class="col-span-10 bg-gray-200 border-0 outline-0 focus:border-0 focus:ring-0 rounded-lg focus:outline-none placeholder-gray-900">
                        <button type="submit" class="col-span-2">Send</button>
                    </div>
                </form>
                @error('body')
                    <p>{{ message }}</p>
                @enderror
            </div>
        </footer>
    </div>
</div>
