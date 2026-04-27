### Gestión de Flota Estelar en PHP
Este proyecto es un ejercicio práctico de Programación Orientada a Objetos (POO) en PHP. Simula la gestión de una flota de naves espaciales, permitiendo realizar seguimientos de distancia, control de combustible y reparaciones automáticas.

### Tecnologías Utilizadas
PHP 8.1+

Enums (para tipos de naves)

Typed Properties (Tipado estricto de datos)

### Estructura del Proyecto
El sistema se basa en tres componentes principales:

Nave: Clase base que representa un vehículo espacial con propiedades como combustible, distancia recorrida y estado.

Flota: Clase controladora que gestiona un conjunto de naves y contiene la lógica de negocio.

TipoNave: Un Enum que limita las categorías a EXPLORADORA, CARGA y BATALLA.

### Funcionalidades Principales
Registro de Naves: Capacidad para añadir múltiples naves a una flota centralizada.

Cálculo de Nave Viajera: Lógica para encontrar qué nave ha recorrido la mayor distancia.

Filtro de Combustible: Identificación de naves con menos del 20% de combustible.

Sistema de Reparación: Método automático que repara y reposta naves averiadas con combustible crítico.
