<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     
    <title>Document</title>
</head>
<body>
    

    <section>
        <div class="container">
            <form action="resultado.php">
                
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Documento</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"  name="documento">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"  name="nombre">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"  name="apellido">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"  name="email">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"  name="telefono">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Direccion</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"  name="direccion">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Fecha de nacimiento</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"  name="fecha">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Genero</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"  name="genero">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Estado civil</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"  name="estado">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Auxilio de transporte</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"  name="aux">
                        </div>
                    </div>
                    
                    <div class="col-3">
                        <select  name="ocupacion" class="form-select" aria-label="Default select example">
                            
                            <option value="Ingeniero">Ingeniero</option>
                            <option value="Tecnologo">Tecnologo</option>
                            
                        </select>
                    </div>

                    <div class="col-3 mt-3">
                        <select  name="ciudad" class="form-select" aria-label="Default select example">
                            <option selected>Ciudad</option>
                            <option value="Bogota">Bogota</option>
                            <option value="Cali">Cali</option>
                            <option value="Medellin">Medellin</option>
                            
                        </select>
                    </div>
                    

                    <input class="btn btn-success mt-3"  type="submit" value="Enviar">
            </form>
        </div>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>