<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="/products" method="post">
      @csrf
      <ul>
        <li>
          <label for="">Nombre</label>
          <input type="text" name="name" value="">
        </li>
        <li>
          <label for="">Precio sugerido</label>
          <input type="text" name="suggestedPrice" value="">
        </li>
        <li>
          <label for="">Brand</label>
          <input type="text" name="brand" value="">
        </li>
        <li>
          <label for="">NetWeight</label>
          <input type="text" name="netWeight" value="">
        </li>
        <li>
          <label for="">Description</label>
          <input type="text" name="description" value="">
        </li>
        <li>
          <label for="">Imagen</label>
          <input type="file" name="avatar" value="">
        </li>
        <li>
          <input type="submit" value="guardar">
        </li>
      </ul>
    </form>
  </body>
</html>
