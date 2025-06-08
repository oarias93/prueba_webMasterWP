
# 🧩 Instalación y Configuración de WordPress – Prueba Técnica Web Master

Este documento describe los pasos realizados para configurar un entorno profesional en WordPress, siguiendo buenas prácticas de seguridad, rendimiento y posicionamiento SEO. La implementación se basa en herramientas modernas ampliamente recomendadas por comunidades como Stack Overflow y WordPress.org.

---

## ⚙️ 1. Instalación del Sitio

Se utilizó **Local by Flywheel** como entorno de desarrollo local para facilitar la configuración y administración del servidor, base de datos y certificado SSL.

Pasos realizados:
1. Crear nuevo sitio: `WebMasterOnVacation`
2. Configuración:
   - PHP 8.1
   - MySQL 8+
   - Servidor: Apache / Localhost Xampp
3. Instalación de WordPress limpia desde el instalador automático

---

## 🎨 2. Tema Base

Se utilizó el tema **Hestia** como base de desarrollo:

- Código semántico
- Ligero y sin dependencias innecesarias

Personalización básica realizada en Apariencia → Personalizar:
- Logo
- Colores y tipografías base
- Configuración de menú

---

## 🔌 3. Plugins Instalados

### 📈 Yoast SEO
> Uno de los plugins más utilizados y mejor calificados para optimización SEO on-page.

**Ventajas:**
- Configuración sencilla de títulos y metadescripciones
- Análisis de legibilidad
- Generación de sitemap automático
- Control de indexación por página

### 🔐 Wordfence Security
> Plugin de seguridad avanzado, ampliamente recomendado en foros profesionales.

**Características clave:**
- Firewall en tiempo real
- Escaneo automático de malware
- Protección contra ataques de fuerza bruta
- Notificaciones automáticas de vulnerabilidades
- Restricción por país/IP

### 🔄 WPS Limit Login Attempts
> Refuerza la seguridad en el acceso al admin limitando intentos de login.

**Beneficios:**
- Configuración simple y efectiva
- Registro de intentos fallidos
- IP ban automático tras múltiples intentos

### 🧠 Google reCAPTCHA (Opcional)
> Validación CAPTCHA para formularios de contacto.

- Se puede configurar mediante plugin o insertando el script y el token en el formulario (versión ligera recomendada para evitar dependencias).
- La clave pública y secreta fueron generadas en el panel oficial de Google reCAPTCHA.

---

## 🧭 4. Estructura del Menú

El sitio cuenta con un menú principal de 3 niveles:

```
Inicio
Ofertas
Destinos
├── Destinos Nacionales
│   ├── Cartagena
│   └── San Andres
│   └── La guajira
├── Destinos Internacionales
│   ├── Aruba
│   └── Republica dominicana
Contacto
```

Configurado en: Apariencia → Menús → Menú Principal

---

## ✉️ 5. Formulario de Contacto

Se utilizó el **bloque de formulario contact form 7**. También se configuró para ser compatible con reCAPTCHA opcional.


---

## 🔐 6. Seguridad Adicional Configurada

- Desactivada la edición de archivos desde el panel (via `wp-config.php`)
```php
define('DISALLOW_FILE_EDIT', true);
```

- Enlace personalizado de acceso al admin
- HTTPS forzado (certificado local activo)

---

## 📦 7. Recomendaciones Futuras

- Agregar integración SMTP para envío de formularios más confiable
- Implementar copias de seguridad automáticas
- Minificar scripts en producción
- Revisión periódica de logs con Wordfence
- Activar doble autenticación para administradores

---

## 📂 Entregables Disponibles

- Sitio funcional con WordPress
- Tema base hestia personalizado
- Plugins configurados
- Menú multinivel
- Formulario + reCAPTCHA
- Seguridad y performance optimizados

---

## 👨‍💻 Autor

**Oscar Eduardo Arias**  
Web Master Senior | Desarrollador Frontend Dev  
