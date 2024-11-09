<x-app-layout>
    <div class="max-w-6xl mx-auto my-16">
        <h5 class="text-center text-5xl font-bold py-3 text-white">Users</h5>
        <div class="grid sm:grid-cols-1  md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-2 p-2">
            @foreach ($users as $key => $user)
                <div class="w-full bg-gray-800 border border-gray-600 rounded-lg p-5 shadow">
                    <div class="flex flex-col items-center pb-3">
                        <img src="https://i.pravatar.cc/100{{ $key }}" alt="image"
                            class="w-24 h-24 mb-4  rounded-full shadow-lg">
                        <h5 class="mb-1 text-xl font-medium text-gray-300">
                            {{ $user->name }}
                        </h5>
                        <span class="text-sm text-gray-400">{{ $user->email }}</span>
                        <div class="flex mt-4 space-x-3 md:mt-6">
                            <x-secondary-button>
                                Add Friend
                            </x-secondary-button>
                            <x-primary-button wire:click="message({{ $user->id }})">
                                Message
                            </x-primary-button>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-app-layout>
