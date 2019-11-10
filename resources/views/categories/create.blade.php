<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="/categories" method="post">
      @csrf
      <ul>
        <li>
          <label for="">Nombre</label>
          <input type="text" name="name" value="">
        </li>
        <li>
          <input type="submit" value="guardar">
        </li>
      </ul>
    </form>
  </body>
</html>
