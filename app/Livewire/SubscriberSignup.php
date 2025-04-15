<?php
namespace App\Livewire;
use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Notification;
// use App\Notifications\NewsletterConfirmation; // Uncomment if you send confirmation

class SubscriberSignup extends Component
{
  #[Rule('required|email')]
  public $email;

  public function save()
  {
    $this->validate();

    // Store the subscriber email
    Subscriber::create([
      'email' => $this->email,
    ]);

    // Optional: Send confirmation email
    // Notification::route('mail', $this->email)->notify(new NewsletterConfirmation());

    session()->flash('status', 'You have been subscribed to the newsletter!');
    $this->reset('email');
  }

}
