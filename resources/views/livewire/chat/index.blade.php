<x-app-layout>
    <div
        class= "fixed h-full flex lg:shadow-sm overflow-hidden inset-0 lg:top-16 lg:inset-x-2 m-auto lg:h-[90%] rounded-t-lg">
        <div
            class="relative w-full md:w-[320px] xl:w-[400px] overflow-y-auto shrink-0 h-full rounded-lg mr-1  bg-gray-800">
            <livewire:chat.chat-list>

        </div>

        <div class="hidden md:grid w-full rounded-lg bg-gray-800 h-full relative overflow-y-auto ml-1"
            style="contain:content">
            <div class="m-auto text-center justify-center flex flex-col gap-3 ">
                <h3 class="font-medium text-2xl text-gray-400 "> Choose convertion to start chating </h3>
            </div>
        </div>

    </div>
</x-app-layout>
