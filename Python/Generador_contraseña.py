import random
import string

print("Bienvenido al generador de contraseñas aleatorias.")
print("Por favor, indica los requisitos de tu contraseña:")


mayusculas = int(input("¿Cuántas letras mayúsculas quieres incluir en la contraseña? "))
minusculas = int(input("¿Cuántas letras minúsculas quieres incluir en la contraseña? "))
numeros = int(input("¿Cuántos números quieres incluir en la contraseña? "))
especiales = int(input("¿Cuántos caracteres especiales quieres incluir en la contraseña? "))


caracteres_mayusculas = random.choices(string.ascii_uppercase, k=mayusculas)
caracteres_minusculas = random.choices(string.ascii_lowercase, k=minusculas)
caracteres_numeros = random.choices(string.digits, k=numeros)
caracteres_especiales = random.choices(string.punctuation, k=especiales)

contrasena = caracteres_mayusculas + caracteres_minusculas + caracteres_numeros + caracteres_especiales


random.shuffle(contrasena)


contrasena_final = ''.join(contrasena)


print("\nTu contraseña generada es:")
print(contrasena_final)


