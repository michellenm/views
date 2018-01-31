<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cursos</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <div class = "container">
    <h1>Cursos</h1>
    <ul class="list-group">

@foreach ($cursos as $curso) <!--vai percvorrer o array 'cursos' e guardar o elemento na variavel 'curso'-->
        <li class="list-group-item" >{{$curso}}</li>
@endforeach

</ul>

<script type="text/javascript" src="/js/app.js">
</script>
  </body>
</html>
