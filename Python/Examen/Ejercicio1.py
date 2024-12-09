
# Creamos una lista vacía para almacenar los números perfectos
numeros_perfectos = []

# Recorremos cada número del 1 al 5000
for num in range(1, 5001):
    # Paso 1: Encontramos los divisores propios del número actual
    divisores = []  # Lista para almacenar los divisores de cada número
    for i in range(1, num):
        if num % i == 0:
            divisores.append(i)
    
    # Paso 2: Calculamos la suma de los divisores propios
    suma_divisores = 0  # Inicializamos la suma en cero
    for divisor in divisores:
        suma_divisores += divisor
    
    # Paso 3: Verificamos si el número es perfecto
    if suma_divisores == num:
        numeros_perfectos.append(num)  # Agregamos el número perfecto a la lista

# Paso 4: Imprimimos la lista de números perfectos
print("Números perfectos entre 1 y 5000:", numeros_perfectos)
