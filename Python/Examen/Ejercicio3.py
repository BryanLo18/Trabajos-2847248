# Definimos las dos listas
lista1 = [1, 2, 3, 4, 2, 3]
lista2 = [3, 4, 4, 5, 6, 3]

# Creamos un diccionario vacío para almacenar el conteo de cada elemento
conteo = {}

# Contamos los elementos de la primera lista
for elemento in lista1:
    if elemento in conteo:
        conteo[elemento] += 1  # Incrementamos el conteo si ya existe
    else:
        conteo[elemento] = 1   # Lo añadimos al diccionario con conteo 1

# Contamos los elementos de la segunda lista
for elemento in lista2:
    if elemento in conteo:
        conteo[elemento] += 1  # Incrementamos el conteo si ya existe
    else:
        conteo[elemento] = 1   # Lo añadimos al diccionario con conteo 1

# Creamos un diccionario solo para los elementos repetidos
repetidos = {}
for elemento, cantidad in conteo.items():
    if cantidad > 1:  # Si el elemento aparece más de una vez
        repetidos[elemento] = cantidad

# Imprimimos los resultados
print("Conteo total de cada elemento:", conteo)
print("Elementos repetidos entre ambas listas:", repetidos)
