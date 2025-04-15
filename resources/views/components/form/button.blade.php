@props(['type' => 'submit'])
<button type="{{ $type }}" {{ $attributes->merge(['class' => 'bg-sandstone hover:bg-emerald text-ivory hover:text-white transition-all rounded-sm font-barlow-bold font-bold text-md md:text-lg font-medium flex uppercase py-5 px-15 transition-all']) }}>
  {{ $slot}}
</button>