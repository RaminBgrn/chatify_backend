<?php

namespace App\Livewire;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Livewire\Component;

class Users extends Component
{

    public function message($userId)
    {
        $authenticationUserId = auth()->id();

        $existingConversation = Conversation::where(function ($query) use ($authenticationUserId, $userId) {
            $query->where('sender_id', $authenticationUserId)->where('receiver_id', $userId);
        })->orWhere(function ($query) use ($authenticationUserId, $userId) {
            $query->where('sender_id', $userId)->where('receiver_id', $authenticationUserId);
        })->first();

        if ($existingConversation) {
            return redirect()->route('chat', ['query' => $existingConversation->id]);
        }

        $createConversation = Conversation::create([
            'sender_id' => $authenticationUserId,
            'receiver_id' => $userId
        ]);
        return redirect()->route('chat', ['query' => $createConversation->id]);
    }

    public function render()
    {
        return view('livewire.users', ['users' => User::where('id', '!=', auth()->id())->get()]);
    }
}
