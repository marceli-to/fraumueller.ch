@extends('app')
@section('content')
<div class="relative w-full h-dvh">
  <div class="absolute inset-0 bg-black bg-opacity-30"></div>
  <div class="relative z-10 flex flex-col items-center justify-center h-full text-center">
    <h1 class="font-chlorite-medium font-medium text-2xl sm:text-3xl xl:text-4xl 2xl:text-5xl leading-none mb-5">
      Frau Müller
    </h1>
    <h2 class="font-sangbleu-italic italic uppercase text-xs sm:text-base xl:text-md 2xl:text-lg">
      Das Magazin zur Fussball-EM 2025<br>Coming soon.
    </h2>
    @livewire('subscriber-signup')
  </div>
</div>
@endsection