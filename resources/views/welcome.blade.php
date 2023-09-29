Root template
Next, setup the root template that will be loaded on the first page visit to your application. This will be used to load your site assets (CSS and JavaScript), and will also contain a root <div> in which to boot your JavaScript application.

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>
This template should include your assets, as well as the @inertia and @inertiaHead directives.

By default, Inertia's Laravel adapter will assume your root template is named app.blade.php. If you would like to use a different root view, you can change it using the Inertia::setRootView() method.