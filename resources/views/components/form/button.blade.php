@props(['type' => 'submit'])
<button type="{{ $type }}" {{ $attributes->merge(['class' => 'text-white font-sangbleu-italic italic text-base md:text-base xl:text-md underline decoration-1 underline-offset-8 hover:no-underline']) }}>
  {{ $slot}}
</button>