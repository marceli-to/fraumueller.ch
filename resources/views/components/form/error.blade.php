@props(['message'])
<span {{ $attributes->merge(['class' => 'inline-block w-auto text-red-900 text-xs leading-none']) }}>
  {{ $message }}
</span> 