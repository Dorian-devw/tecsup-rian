# 📄💻 LABORATORIO O3 | Estructura de datos y algoritmos  💻📄

###### 🏫Tecsup | 2025-1 | Frank Sinca Orozco

---

### 📝 Introducción a las Listas Enlazadas en Python 

Las listas enlazadas son estructuras de datos fundamentales que consisten en una secuencia de nodos, donde cada nodo contiene un valor y una referencia al siguiente nodo en la secuencia. A diferencia de las listas nativas de Python, las listas enlazadas no almacenan los elementos de manera contigua en memoria, lo que las hace más eficientes para ciertas operaciones como la inserción y eliminación de elementos.

#### ❓ ¿Cómo funcionan?

Cada nodo en una lista enlazada tiene dos componentes principales:
1. **Dato**: El valor que almacena el nodo.
2. **Referencia**: Un puntero al siguiente nodo en la lista (o `None` si es el último nodo).

Existen diferentes tipos de listas enlazadas:
- **Listas simplemente enlazadas**: Cada nodo apunta al siguiente.
- **Listas doblemente enlazadas**: Cada nodo apunta tanto al siguiente como al nodo anterior.
- **Listas circulares**: El último nodo apunta al primero, formando un ciclo.

#### ⚙️ ¿Para qué sirven?

Las listas enlazadas son útiles en situaciones donde:
- Se requiere una estructura dinámica que pueda crecer o reducirse fácilmente.
- Las operaciones de inserción y eliminación son frecuentes y deben ser rápidas.
- No se necesita acceso aleatorio a los elementos.

#### ✏️ Ejemplo práctico

A continuación, se muestra un ejemplo de implementación básica de una lista simplemente enlazada en Python:

```python
class Nodo:
    def __init__(self, dato):
        self.dato = dato
        self.siguiente = None

class ListaEnlazada:
    def __init__(self):
        self.cabeza = None

    def insertar(self, dato):
        nuevo_nodo = Nodo(dato)
        nuevo_nodo.siguiente = self.cabeza
        self.cabeza = nuevo_nodo

    def mostrar(self):
        actual = self.cabeza
        while actual:
            print(actual.dato, end=" -> ")
            actual = actual.siguiente
        print("None")

# Uso de la lista enlazada
lista = ListaEnlazada()
lista.insertar(3)
lista.insertar(2)
lista.insertar(1)
lista.mostrar()  # Salida: 1 -> 2 -> 3 -> None
```

En este ejemplo, se crea una lista enlazada que permite insertar elementos al inicio y mostrarlos en orden.


## 📕 **LABORATORIO O3 | RESOLUCIÓN 📕 **

### 📚 **1.Codificar en Python el método prepend y explicar para que sirve**

```python
lista = [10, 20, 30, 40, 50]

def prepend(lista, elemento): # Define prepend como una función que toma una lista y un elemento
    lista.insert(0, elemento) # Inserta el elemento al inicio de la lista

prepend(lista, 5) # Insertar el elemento al inicio de la lista
print("Después de agregar 5 al inicio:", lista) # Imprimir la lista después de agregar el elemento
```

>  💡 Este método se utiliza para agregar un elemento al inicio de una lista. En este caso, se inserta el número 5 al inicio de la lista original `[10, 20, 30, 40, 50]`, resultando en `[5, 10, 20, 30, 40, 50]`.
___

### 📚 **2.Codificar como eliminar elementos desde el primer elemento de una lista**

```python  
lista = [10, 20, 30, 40, 50]

def remove_first(lista): # Remover el primer elemento de la lista

remove_first(lista) # Llamar a la función para eliminar el primer elemento
print("Después de eliminar el primer elemento:", lista) # Imprimir la lista después de eliminar el primer elemento
```

> 💡 Este método se utiliza para eliminar el primer elemento de una lista. En este caso, se elimina el número 10 de la lista original `[10, 20, 30, 40, 50]`, resultando en `[20, 30, 40, 50]`.
___


### 📚 **3.Codificar un método que elimine un elemento de la lista partiendo de ir eliminando desde su último dato.**

```python  
lista = [10, 20, 30, 40, 50]

def remove_last(lista): # Remover el último elemento de la lista
    if lista: # Verificar si la lista no está vacía
        lista.pop() # Eliminar el último elemento de la lista

remove_last(lista)  # Llamar a la función para eliminar el último elemento
print("Después de eliminar el último elemento:", lista)  # Imprimir la lista después de eliminar el último elemento
```

> 💡 Este método se utiliza para eliminar el último elemento de una lista. En este caso, se elimina el número 50 de la lista original `[10, 20, 30, 40, 50]`, resultando en `[10, 20, 30, 40]`.

___

### 📚 **4.Codificar un método que nos permita obtener un dato cualquier de una lista**

```python
lista = [10, 20, 30, 40, 50]

def get(lista, index):  # Obtener un elemento de la lista por su índice
    if 0 <= index < len(lista):  # Verificar si el índice está dentro del rango de la lista    
        return lista[index]  # Obtener el elemento en la posición index
    return None # Si el índice no es válido, devolver None

print("Dato en índice 1:", get(lista, 1)) # Imprimir el elemento en el índice 1, que sería la 2da posición

```

> 💡 Este método se utiliza para obtener un elemento de la lista por su índice. En este caso, se obtiene el número 20 de la lista original `[10, 20, 30, 40, 50]`, ya que está en la posición 1 (segunda posición).

___

### 📚 **5.Codificar un método que nos permita actualizar un dato de una lista**

```python
lista = [10, 20, 30, 40, 50]

def update(lista, index, new_data): # Actualizar un elemento de la lista por su índice
    if 0 <= index < len(lista):   # Verificar si el índice está dentro del rango de la lista
        lista[index] = new_data  # Si el índice es válido, actualizar el elemento en esa posición

update(lista, 1, 100) # Llamar a la función para actualizar el elemento en el índice 1
print("Después de actualizar el índice 1 a 100:", lista)  # Imprimir la lista después de actualizar el elemento
```

> 💡 Este método se utiliza para actualizar un elemento de la lista por su índice. En este caso, se actualiza el número 20 en la lista original `[10, 20, 30, 40, 50]` a 100, resultando en `[10, 100, 30, 40, 50]`.

____


#### 📋 **Conclusión**

- Las listas enlazadas son una herramienta poderosa para manejar datos de manera dinámica. Aunque no son tan comunes en Python debido a las listas nativas, son esenciales para entender estructuras de datos y algoritmos más avanzados.  

- Bajo mi punto de vista, el uso de listas enlazadas es fundamental para comprender cómo funcionan las estructuras de datos en general y cómo se pueden aplicar en diferentes contextos. Además, la práctica con listas enlazadas me ha ayudado a mejorar mis habilidades de programación y a entender mejor la complejidad algorítmica. Estoy emocionado por seguir aprendiendo y aplicando estos conceptos en proyectos futuros.

- Me gustaría aprender más sobre estructuras de datos avanzadas, como árboles y grafos, y cómo se pueden aplicar en problemas del mundo real. También me interesa profundizar en algoritmos de búsqueda y ordenamiento, así como en la optimización de estructuras de datos para mejorar el rendimiento de las aplicaciones.

- Me gustaría mejorar mis habilidades en la implementación de algoritmos y estructuras de datos en Python, así como en la comprensión de su complejidad temporal y espacial. También quiero practicar más la resolución de problemas algorítmicos y participar en competencias de programación para fortalecer mis habilidades.

- Me gustaría practicar la implementación de algoritmos de búsqueda y ordenamiento, así como la resolución de problemas algorítmicos en plataformas como LeetCode o HackerRank. También quiero trabajar en proyectos que involucren estructuras de datos complejas para aplicar lo aprendido en situaciones del mundo real.

- Me gustaría investigar más sobre la teoría detrás de las estructuras de datos y algoritmos, así como su aplicación en diferentes áreas de la informática, como la inteligencia artificial y el procesamiento de datos.

____