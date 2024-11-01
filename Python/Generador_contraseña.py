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

