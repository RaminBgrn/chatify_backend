<?php

namespace App\Livewire\Chat;

use Livewire\Component;

class ChatList extends Component
{

    public $selectedConversation;

    public function render()
    {
        $user = auth()->user();
        return view('livewire.chat.chat-list', [
            'conversation' => $user->conversation()->latest('updated_at')->get()
        ]);
    }
}
