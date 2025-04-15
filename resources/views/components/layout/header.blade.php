<header class="sticky md:relative top-0 z-50 bg-ivory h-auto" x-data="{ menu: false }">
  <x-layout.inner class="relative flex md:flex-col justify-center items-center w-full h-auto py-20 xl:py-30">
    <a href="{{ route('page.project') }}" title="Projekt | Alterswohnen Luppmenpark">
      <x-icons.logo class="block w-150 md:w-220 xl:w-[290px] h-auto md:mx-auto"/>
    </a>
    <x-menu.button class="md:hidden" />
    <x-menu.wrapper />
  </x-layout.inner>
</header>