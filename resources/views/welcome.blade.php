<!DOCTYPE html>
<html >
    <head>

        <!-- Styles -->
        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body>
    <h1 class=" text-3xl font-bold overline text-blue-600/100 ">
    Hello world!
  </h1>

    <button class="rounded-full ...">Save Changes</button>

    @livewire('hello-world', ['name' => 'Yazan'])

    @livewireScripts
    </body>
</html>
