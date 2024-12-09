# Lista para almacenar la información de cada usuario
usuarios = []

# Recolectar datos de 5 usuarios
for i in range(5):
    print(f"Ingrese la información del usuario {i + 1}:")
    nombre = input("Nombre: ")
    apellido = input("Apellido: ")
    edad = int(input("Edad: "))
    correo = input("Correo electrónico: ")
    cantidad_hijos = int(input("Cantidad de hijos: "))
    
    # Crear un diccionario para cada usuario
    usuario = {
        "nombre": nombre,
        "apellido": apellido,
        "edad": edad,
        "correo": correo,
        "cantidad_hijos": cantidad_hijos
    }
    
    # Agregar el diccionario a la lista de usuarios
    usuarios.append(usuario)

# Mostrar la lista de usuarios
print("\nInformación de los usuarios:")
for usuario in usuarios:
    print(usuario)
