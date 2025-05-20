# Middleware_SS

# Verifica – Sistema de Clasificación Etaria Preventiva

## 📌 Descripción General

**Verifica** es un sistema web desarrollado con Laravel como parte de una iniciativa preventiva de una institución de salud. Su objetivo es clasificar a los visitantes según su edad antes de permitirles el acceso a contenidos informativos y servicios orientados a su grupo etario, sin necesidad de registro o autenticación previa.

## 🎯 Objetivo del Proyecto

Desarrollar una aplicación segura y modular que:
- Reciba la edad de un visitante mediante un formulario inicial.
- Valide y registre la edad.
- Clasifique a la persona automáticamente en función de su rango etario.
- Redirija al usuario a la vista correspondiente.
- Aplique principios de desarrollo seguro (validación, separación de responsabilidades, input seguro).

---

## ✅ Requisitos Funcionales Implementados

| Funcionalidad | Descripción |
|---------------|-------------|
| Formulario inicial | Vista pública con formulario para ingresar edad (0-120 años) |
| Middleware personalizado | Valida la edad, registra en BD, redirige según rango etario |
| Servicio auxiliar | `AgeRouterService` determina ruta destino desde lógica separada |
| Vistas por grupo | Cada grupo etario tiene su vista y controlador dedicado |
| Validación segura | Inputs validados en frontend y backend |
| Ruta de error | Vista amigable para edad inválida |

---

## 🧪 Clasificación Etaria y Rutas

| Edad         | Clasificación       | Ruta        |
|--------------|---------------------|-------------|
| 0 - 5        | Bebés               | `/bebes`    |
| 6 - 12       | Niños               | `/ninos`    |
| 13 - 17      | Adolescentes        | `/adolescentes` |
| 18 - 25      | Jóvenes adultos     | `/jovenes`  |
| 26 - 59      | Adultos             | `/adultos`  |
| 60 - 74      | Adultos mayores     | `/mayores`  |
| 75 - 120     | Personas longevas   | `/longevos` |
| Fuera de rango | Edad inválida     | `/error`    |

---

## 🛠️ Tecnologías Usadas

- PHP 
- Laravel 
- MySQL (via XAMPP)
- Blade (Motor de plantillas de Laravel)



