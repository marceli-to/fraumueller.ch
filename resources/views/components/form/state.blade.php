<div x-data="{ open: true }" x-show="open">
  <div class="bg-green-600 rounded-sm text-white font-barlow-medium font-medium py-15 pl-15 pr-30 fixed top-10 left-10 inline-block w-auto z-[101]">
    <div class="relative">
      <a href="javascript:;" x-on:click="open = false">
        Vielen Dank, wir haben Ihre Anfrage erhalten.
        <x-icons.cross class="!w-15 !h-15 absolute -top-5 -right-20" />
      </a>
    </div>
  </div>
</div>