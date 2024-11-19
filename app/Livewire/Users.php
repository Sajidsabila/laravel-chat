<?php

namespace App\Livewire;

use App\Models\Conversation;
use App\Models\User;
use Livewire\Component;

class Users extends Component
{

    public function render()
    {
        $users = User::where('id', '!=', auth()->id())->get();
        return view('livewire.users', compact('users'));
    }

    public function message($userId)
    {
        $authenticatedUserId = auth()->id();
        $existingConverstion = Conversation::where(function ($query) use ($authenticatedUserId, $userId) {
            $query->where('sender_id', $authenticatedUserId)
                ->where('receiver_id', $userId);
        })->orWhere(function ($query) use ($authenticatedUserId, $userId) {
            $query->where('sender_id', $userId)
                ->where('receiver_id', $authenticatedUserId);
        })->first();

        if ($existingConverstion) {
            return redirect()->route('chat', ['query' => $existingConverstion->id]);
        }

        $createdConversation = Conversation::create([
            'sender_id' => $authenticatedUserId,
            'receiver_id' => $userId
        ]);
        return redirect()->route('chat', ['query' => $createdConversation->id]);
    }
}
