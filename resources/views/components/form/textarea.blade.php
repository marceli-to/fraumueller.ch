@props(['type' => 'text', 'placeholder' => '', 'name', 'isWire' => false])
@if ($isWire)
  <textarea 
    wire:model="{{ $name }}" 
    placeholder="{{ $placeholder }}" 
    class="w-full min-h-[150px] ring-0 focus:ring-0 border-none bg-white text-charcoal placeholder:text-charcoal"></textarea>
@else
  <textarea 
    name="{{ $name }}" 
    placeholder="{{ $placeholder }}" 
    class="w-full ring-0 focus:ring-0 border-none bg-white text-charcoal placeholder:text-charcoal"></textarea>
@endif