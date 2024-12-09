# Lista de ejemplo con duplicados
lista = [1, 2, 2, 3, 4, 4, 5, 5, 5]

# Remover duplicados convirtiendo la lista en un conjunto y luego de nuevo en una lista
lista_sin_duplicados = list(set(lista))

print("Lista sin duplicados:", lista_sin_duplicados)
