
mi_lista = ["Python","Python","Java","JavaScript","PHP"]

# Creamos un diccionario vacío para contar las apariciones de cada elemento
conteo_elementos = {}

# Recorremos cada elemento de la lista
for elemento in mi_lista:
    # Si el elemento ya está en el diccionario, incrementamos su contador
    if elemento in conteo_elementos:
        conteo_elementos[elemento] += 1
    # Si no está, lo añadimos con un contador de 1
    else:
        conteo_elementos[elemento] = 1

# Imprimimos el resultado del conteo
print("Conteo de elementos en la lista:", conteo_elementos)
