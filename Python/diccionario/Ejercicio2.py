# Diccionario de ejemplo
diccionario = {'a': 3, 'b': 1, 'c': 2}

# Ordenamos el diccionario por valor en orden ascendente
diccionario_ordenado = dict(sorted(diccionario.items(), key=lambda item: item[1]))

print("Diccionario ordenado:", diccionario_ordenado)
