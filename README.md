# nth-prime

- Fuente: https://exercism.org/tracks/php/exercises/nth-prime 

## Dado el array de todos los números primos:

- Se define número primo como aquel número entero mayor de 1 que es "solo" divisible entre él mismo y entre 1. Si los dividimos entre otros números diferentes va a resultar un número que no es entero.

- Lo que se peretende en este ejercicio es que el usuario introduzca un número, el cual va a ser la posición del número primo dentro del array de números primos

- Ejemplo: 
    Array de números primos = (2, 3, 5, 7, 11, 13, 17, 19...)
    Si el usuario introduce el número 6, entonces el sistema devolvera el número 13 porque ese número está en la posición 6ª dentro del array

### Pruebas
Se han añadido archivos a través de: 
https://github.com/exercism/php/tree/main/exercises/practice/nth-prime 

Para comprobación de errores a traves de terminal: 
$ vendor/bin/phpunit