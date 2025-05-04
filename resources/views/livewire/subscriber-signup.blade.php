
<form wire:submit="save" class="mt-10 xl:mt-20 text-sm sm:text-md p-20 md:max-w-lg">
  <x-honeypot />

  @if (session()->has('status'))
    <div class="leading-[1.2]">
      Vielen Dank, wir haben Deine Anmeldung erhalten. Du erhältst bald eine E-Mail mit einem Bestätigungslink.
    </div>
  @else
    <p class="mb-10 md:mb-20">Melde dich hier für den Newsletter an:</p>

    <div class="flex flex-col gap-y-10 xl:gap-y-20 items-center w-full">
      @error('email')
        <div class="text-red-300">
          {{ $message }}
        </div>
      @enderror

      <div class="relative w-full">
        <x-form.input name="email" type="email" placeholder="E-Mail" isWire="true" />
      </div>

      <x-form.button>
        <div wire:loading>
          <x-form.spinner class="mr-12" />
        </div>
        Anmelden
      </x-form.button>
    </div>
  @endif
</form>



