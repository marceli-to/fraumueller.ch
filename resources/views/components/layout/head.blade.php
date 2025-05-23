<!doctype html>
<html lang="de" class="h-full bg-white scroll-smooth overflow-y-auto">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Frau Müller | Das Magazin für die Fussball-EM 2025</title>
<meta name="description" content="Das Magazin für die Fussball-EM 2025">
<meta property="og:title" content="Frau Müller | Das Magazin für die Fussball-EM 2025">
<meta property="og:description" content="Das Magazin für die Fussball-EM 2025">
<meta property="og:url" content="{{ url()->current()}}/media/opengraph.jpg">
<meta property="og:site_name" content="Frau Müller | Das Magazin für die Fussball-EM 2025">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="Frau Müller" />
<link rel="manifest" href="/site.webmanifest" />
@vite('resources/css/app.css')
@livewireStyles
</head>
<body class="antialiased font-chlorite-light text-white flex min-h-full flex-col relative">
  <div class="absolute z-50 right-15 xl:right-20 top-15 xl:top-20 w-auto h-auto flex items-center gap-x-15 xl:gap-x-20">
    <a 
      href="https://www.instagram.com/fraumueller_magazin/" 
      title="Folge uns auf Instagram"
      class="text-white size-26 xl:size-30 opacity-100 hover:opacity-70 transition-opacity"
      target="_blank">
      <x-icons.instagram class="w-full h-auto" />
    </a>
    <a 
      href="https://www.linkedin.com/company/frau-mueller" 
      class="text-white size-24 xl:size-28 opacity-100 hover:opacity-70 transition-opacity"
      target="_blank">
      <x-icons.linkedin class="w-full h-auto" />
    </a>
    <a 
      href="mailto:mail@fraumueller.ch" 
      title="Schicke uns eine E-Mail"
      class="text-white size-28 xl:size-32 opacity-100 hover:opacity-70 transition-opacity"
      target="_blank">
      <x-icons.mail class="w-full h-auto" />
    </a>
  </div>