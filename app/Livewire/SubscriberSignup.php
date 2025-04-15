<?php
namespace App\Livewire;
use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SubscriberNotification;

class SubscriberSignup extends Component
{
  #[Rule('required|email')]
  public $email;

  public function save()
  {
    $this->validate();

    Subscriber::create([
      'email' => $this->email,
    ]);

    Notification::route('mail', $this->email)->notify(new SubscriberNotification([
      'email' => $this->email,
    ]));

    session()->flash('status', 'You have been subscribed to the newsletter!');
    $this->reset('email');
  }

}
