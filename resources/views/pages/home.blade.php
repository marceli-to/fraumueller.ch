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
    <div class="flex items-start gap-x-20 xl:gap-x-30 mt-50 xl:mt-70">
      <img src="/media/arrow-right.png" width="300" height="230" class="block w-60 xl:w-120 h-auto mt-20 xl:mt-40">
      <a 
        href="https://wemakeit.com/projects/magazin-fuer-frauenfussball"
        target="_blank"
        title="Das Crowdfunding für die EM-Ausgabe"
        class="block bg-white text-black font-chlorite-bold font-bold text-xs sm:text-base xl:text-md leading-[1] w-auto h-auto rounded-md pt-5 pb-10 px-30 xl:px-50">
        Das Crowdfunding<br>für die EM-Ausgabe.<br>HIER.
      </a>
      <img src="/media/arrow-left.png" width="300" height="230" class="block w-60 xl:w-120 h-auto mt-20 xl:mt-40">
    </div>
    @livewire('subscriber-signup')
  </div>
</div>
@endsection