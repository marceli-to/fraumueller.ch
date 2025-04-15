@props(['type' => 'text', 'placeholder' => '', 'name'])
<input 
  type="text" 
  wire:model="{{ $name }}" 
  placeholder="{{ $placeholder }}"
  class="bg-transparent border !border-white font-sangbleu-italic italic text-xs md:text-sm xl:text-base px-10 py-5 md:py-10 align-middle w-full !ring-0 focus:!ring-0 placeholder:text-white placeholder:leading-none">