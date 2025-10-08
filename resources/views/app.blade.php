<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/js/app.js')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title inertia>{{ config('app.name', 'Laravel') }}</title>
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>