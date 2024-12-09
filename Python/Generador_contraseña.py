<<<<<<< HEAD
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

=======
import secrets
import string

print("Bienvenido al generador de contraseñas")
mayusculas = int(input("¿Cuántas letras mayúsculas quieres incluir? "))
minusculas = int(input("¿Cuántas letras minúsculas quieres incluir? "))
numeros = int(input("¿Cuántos números quieres incluir? "))
especiales = int(input("¿Cuántos caracteres especiales quieres incluir? "))

def generador_contraseña(mayusculas, minusculas, numeros, especiales):
   
    letras_mayusculas = [secrets.choice(string.ascii_uppercase) for _ in range(mayusculas)]
    letras_minusculas = [secrets.choice(string.ascii_lowercase) for _ in range(minusculas)]
    digitos = [secrets.choice(string.digits) for _ in range(numeros)]
    caracteres_especiales = [secrets.choice(string.punctuation) for _ in range(especiales)]

 
    password = letras_mayusculas + letras_minusculas + digitos + caracteres_especiales
    secrets.SystemRandom().shuffle(password)

    return ''.join(password)


nuevo_pass = generador_contraseña(mayusculas, minusculas, numeros, especiales)

print("Tu contraseña generada es:", nuevo_pass)
>>>>>>> 6e7556846763b6fa877faff08804ff1640f897d3

