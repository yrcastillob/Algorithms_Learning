# El algoritmo de Fisher-Yates (Español)
También conocido como** algoritmo de mezcla aleatoria o barajado aleatorio**, es un algoritmo utilizado para reorganizar aleatoriamente una lista de elementos. En su forma clásica, el algoritmo opera sobre una lista de elementos y produce una permutación aleatoria de estos elementos de manera uniforme.

**Qué es:** El algoritmo de Fisher-Yates es una técnica fundamental en la computación para generar permutaciones aleatorias. Es particularmente útil en situaciones donde se necesita una distribución uniforme de elementos y se desea evitar sesgos en el ordenamiento aleatorio.

**Cuándo utilizarlo:** Se utiliza cuando se requiere una reorganización aleatoria de elementos, como en aplicaciones de juegos, sorteos, cifrado seguro o algoritmos de optimización que requieren exploración aleatoria del espacio de búsqueda.

**Tipo de algoritmo:** El algoritmo de Fisher-Yates es un algoritmo de mezcla aleatoria o barajado aleatorio. Pertenece a la categoría de algoritmos de reordenamiento, que se utilizan para cambiar el orden de los elementos en una lista o secuencia de manera aleatoria.

**Ventajas:**

1. Garantiza una distribución uniforme de las permutaciones.
2. Es eficiente, con una complejidad de tiempo lineal.
3. Es fácil de implementar y entender.
4. No requiere memoria adicional, ya que opera in situ sobre la lista dada.

**Desventajas:**

1. La generación de permutaciones aleatorias puede ser costosa para listas muy grandes.
2. No es adecuado para aplicaciones donde se requiere una verdadera aleatoriedad criptográfica.

**Algoritmos similares:** Otros algoritmos de mezcla aleatoria incluyen el algoritmo de Durstenfeld, que es una variante del algoritmo de Fisher-Yates pero más comúnmente implementado en lenguajes de programación modernos. También existen algoritmos de barajado específicos para aplicaciones criptográficas, como el algoritmo de Fisher-Yates con mezcla a través de una fuente de entropía segura. Además, técnicas como el barajado de cartas múltiples y el barajado basado en mezclas son variantes que ofrecen diferentes enfoques para el mismo problema de la generación de permutaciones aleatorias.



# Fisher-Yates Algorithm (English)
Also known as the random shuffle algorithm, the Fisher-Yates algorithm is **used to randomly reorganize a list of elements**. In its classic form, the algorithm operates on a list of elements and produces a random permutation of these elements uniformly.

**What it is:** The Fisher-Yates algorithm is a fundamental technique in computing for generating random permutations. It is particularly useful in situations where a uniform distribution of elements is needed and biased random ordering is to be avoided.

**When to use it:** It is used when a random reorganization of elements is required, such as in gaming applications, drawings, secure encryption, or optimization algorithms that require random exploration of the search space.

**Type of algorithm:** The Fisher-Yates algorithm is a random shuffle algorithm. It belongs to the category of reordering algorithms, which are used to change the order of elements in a list or sequence randomly.

**Advantages:**

1. Ensures a uniform distribution of permutations.
2. Efficient, with linear time complexity.
3. Easy to implement and understand.
4. Does not require additional memory, as it operates in place on the given list.

**Disadvantages:**

1. Generating random permutations can be costly for very large lists.
2. Not suitable for applications requiring true cryptographic randomness.

**Similar algorithms:** Other random shuffle algorithms include the Durstenfeld algorithm, which is a variant of the Fisher-Yates algorithm but more commonly implemented in modern programming languages. There are also shuffle algorithms specific to cryptographic applications, such as the Fisher-Yates algorithm with mixing through a secure entropy source. Additionally, techniques like multiple deck shuffling and mix-based shuffling are variants that offer different approaches to the same problem of generating random permutations.


# Pseudo código

```
function FisherYatesShuffle(arr):
    // 1. Obtener la longitud del arreglo
    n = length(arr)
    
    // 2. Iterar desde el último elemento hasta el segundo
    for i from n - 1 to 1 do:

        // 3. Generar un número aleatorio entre 0 e i, inclusive
        j = random integer between 0 and i inclusive
        
        // 4. Intercambiar el elemento en la posición i con el elemento en la posición j
        swap arr[i] and arr[j]

```

**Documentación detallada:**

1. **Obtener la longitud del arreglo:**

Descripción: Esta línea de código calcula la longitud del arreglo de entrada. Es importante para determinar el rango de iteración en el bucle principal del algoritmo.

Consideraciones: Asegúrate de que la función length() devuelve el tamaño del arreglo correctamente. En algunos lenguajes de programación, esto puede ser simplemente una propiedad del objeto o una función incorporada.

2. **Iterar desde el último elemento hasta el segundo:**

Descripción: Este bucle itera desde el último elemento del arreglo hasta el segundo elemento. No necesitamos iterar hasta el primer elemento porque no hay necesidad de intercambiar el último elemento consigo mismo.
Consideraciones: Asegúrate de que el bucle itere en el rango correcto, desde n - 1 hasta 1, inclusive.

3. **Generar un número aleatorio entre 0 e i, inclusive:**

Descripción: En cada iteración del bucle, generamos un número aleatorio j entre 0 y i, ambos inclusive. Este número aleatorio determina el índice del elemento con el que se intercambiará el elemento actual en la posición i.
Consideraciones: Utiliza una función adecuada para generar números aleatorios en el rango especificado. Asegúrate de que la función devuelva números enteros y de que incluya el límite superior (i) en el rango de generación.

4. **Intercambiar el elemento en la posición i con el elemento en la posición j:**

Descripción: En cada iteración del bucle, intercambiamos el elemento en la posición i del arreglo con el elemento en la posición aleatoria j. Esto reordena aleatoriamente los elementos en el arreglo.
Consideraciones: Asegúrate de que la función swap intercambie los elementos correctamente sin perder ninguno de ellos. Esto generalmente implica usar una variable temporal para almacenar temporalmente uno de los elementos durante el intercambio.

**Nota: generado con Chat GPT**