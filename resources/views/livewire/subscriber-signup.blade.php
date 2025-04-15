
<form wire:submit="save" class="mt-10 xl:mt-20">
  <x-honeypot />

  @if (session()->has('status'))
    <div class="text-green-300">
      Vielen Dank, wir haben Deine Anmeldung erhalten.
    </div>
  @else
    <div class="flex flex-col gap-y-10 lg:gap-y-20 items-center">
      @error('email')
        <div class="text-red-300">
          {{ $message }}
        </div>
      @enderror

      <div class="relative w-full">
        <x-form.input name="email" type="email" placeholder="E-Mail-Adresse" isWire="true" />
      </div>

      <x-form.button>
        <div wire:loading>
          <x-form.spinner class="mr-12" />
        </div>
        Abonnieren
      </x-form.button>
    </div>
  @endif
</form>



