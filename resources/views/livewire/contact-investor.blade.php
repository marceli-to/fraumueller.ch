<form wire:submit="save" class="mt-15 lg:mt-20">
  @if (session()->has('status'))
    <x-form.state />
  @endif

  <x-layout.grid class="sm:gap-y-15 lg:gap-x-25 lg:gap-y-20">
    <x-honeypot />
    <input type="hidden" wire:model="request_type" value="investor" />
    <x-layout.span class="relative sm:col-span-full">
      <x-form.input name="firstname" placeholder="Vorname*" isWire="true" />
      @error('firstname')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative sm:col-span-full">
      <x-form.input name="name" placeholder="Name*" isWire="true" />
      @error('name')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative sm:col-span-full">
      <x-form.input name="address" placeholder="Adresse*" isWire="true" />
      @error('address')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative sm:col-span-full">
      <x-form.input name="location" placeholder="PLZ/Ort*" isWire="true" />
      @error('location')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative sm:col-span-full">
      <x-form.input name="date_of_birth" type="date" placeholder="Geburtsdatum*" isWire="true" />
      @error('date_of_birth')
        <x-form.error message="{{ $date_of_birth }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative sm:col-span-full">
      <x-form.input name="email" type="email" placeholder="E-Mail*" isWire="true" />
      @error('email')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative sm:col-span-full">
      <x-form.input name="phone" placeholder="Telefon*" isWire="true" />
      @error('phone')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative sm:col-span-full">
      <x-form.textarea name="message" placeholder="Nachricht*" isWire="true" />
      @error('message')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative sm:col-span-full">
      @error('privacy')
        <x-form.error 
          message="Datenschutzerklärung muss akzeptiert werden"
          class="relative right-auto left-0 mb-6"
          />
      @enderror
      <div class="flex items-start">
        <x-form.checkbox name="privacy" id="privacy_investor" isWire="true" class="mt-2 lg:mt-6" />
        <x-form.checkbox-label for="privacy_investor" class="ml-6 lg:!ml-10">
          Ich habe die <a href="{{ route('page.privacy') }}" title="Datenschutzerklärung" target="_blank" class="hover:underline underline-offset-2 decoration-1">Datenschutzerklärung</a> gelesen und akzeptiere diese
        </x-form.checkbox-label>
      </div>
    </x-layout.span>
    <x-layout.span class="sm:col-span-full mt-5">
      <x-form.button>
        <div wire:loading>
          <x-form.spinner class="mr-12" />
        </div>
        Absenden
      </x-form.button>
    </x-layout.span>
  </x-layout.grid>
</form>
