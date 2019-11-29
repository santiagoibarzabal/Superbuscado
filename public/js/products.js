let listadoDeProductos = document.getElementById('colocar id')


function productInfo(product) {
  return '

      <div class="card">
        <p>${product.name}</p>
      </div>

  '
}

fetch('http://localhost:8000/api/movies')
  .then(function (response) {
    return response.json()
  })

  .then(function (products) {
    // cada producto del array pasa a la funcion callback
    products.data.map(function (product) {

      // la funcion genera el HTML de cada producto

      listadoDeProductos.innerHTML += productInfo(product)

    })
  })
