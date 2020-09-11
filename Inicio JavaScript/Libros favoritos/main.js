function agregarLibroFavorito(nombreLibro){
    if(!nombreLibro.includes("Fantastico")){
      librosFavoritos.push(nombreLibro)
    }
  }
  
  function imprimeLibrosFavoritos(){
    console.log(`Libros favoritos: ${librosFavoritos.length}`)
  }
  
  function printFavoriteBooks(){
    for(let libro of librosFavoritos){
      console.log("- " + libro)
    }
  }
  
  var librosFavoritos = []
  
  agregarLibroFavorito('Los 1 Fantastico')
  agregarLibroFavorito('1984')
  agregarLibroFavorito('Wiggeta')
  
  imprimeLibrosFavoritos()
  printFavoriteBooks()