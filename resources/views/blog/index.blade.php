<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <h1>My blog</h1>

      {{ $name }}

      <p>Numero studenti: {{ $students }}</p>
    </header>

    @if ($students > 20)
    <p>Classe numerosa: {{ $students }}</p>
    @else
    <p>Lorem</p>
    @endif

    @dump($teachers)

    @foreach ($teachers as $teacher)
    @if($loop->last)
      {{ $teacher . '. ' }}
    @else
      {{ $teacher . ', ' }}
    @endif

    @endforeach

  </body>
</html>
