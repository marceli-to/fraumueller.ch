<select 
  {{ $attributes->merge(['class' => 'w-full relative rounded-sm px-10 py-10 bg-white bg-[url("../icons/chevron-down.svg")] bg-[length:15px_auto] font-barlow-medium font-medium border-0 focus:ring-0 text-charcoal appearance-none accent-sandstone']) }}>
  {{ $slot }}
</select>