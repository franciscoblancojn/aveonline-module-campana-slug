# Aveonline Módulo de Campaña Slug

**Contributors:** Francisco Blanco
**Tags:** aveonline, elementor, url slug, campaña, link tracking
**Requires at least:** 5.0
**Tested up to:** 5.9
**Stable tag:** 1.2.0
**License:** GPLv2 or later
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html

Plugin de WordPress que agrega un widget de Elementor para configurar URLs de campaña con slug por página. Diseñado para integrarse con la plataforma de envíos **Aveonline** en Colombia.

## Descripción

Este plugin permite añadir un widget de Elementor ("Ave Campaign Slug") que reescribe en el frontend los enlaces que apuntan a una URL específica (por defecto `https://guias.aveonline.co/registrarse`), reemplazándolos por una URL con un slug de campaña personalizado (ej. `https://guias.aveonline.co/registrarse?campana=mi-slug`).

### Funcionalidades

- **Widget de Elementor** que se inserta en cualquier página.
- **Configuración por página** de la URL a reemplazar, URL base con campaña y slug.
- **Conservación de parámetros URL**: opción para mantener los parámetros de la URL actual (excepto `campana`) en los enlaces reescritos.
- **Actualizador automático** vía GitHub Releases.

## Requisitos

- WordPress 5.0+
- **Elementor** (plugin necesario para el funcionamiento del widget)
- PHP 8.0+ (usa `str_ends_with()`)
- Elementor debe estar activo en el sitio

## Instalación

1. Descarga el archivo `.zip` del plugin desde [GitHub](https://github.com/franciscoblancojn/aveonline-module-campana-slug).
2. Ve al administrador de WordPress en **Plugins → Añadir nuevo**.
3. Haz clic en **Subir plugin**.
4. Selecciona el archivo `.zip` descargado y haz clic en **Instalar ahora**.
5. Activa el plugin.

## Uso

1. Edita una página con **Elementor**.
2. Busca el widget **"Ave Campaign Slug"** en la categoría **General**.
3. Arrástralo a la página (no necesita contenido visible, funciona con atributos `data-*`).
4. Configura las opciones:
   - **URL a remplazar**: URL que será reemplazada en los enlaces (por defecto `https://guias.aveonline.co/registrarse`).
   - **URL Base**: URL base con el parámetro de campaña (por defecto `https://guias.aveonline.co/registrarse?campana=`).
   - **Slug**: identificador único de la campaña (ej. `black-friday-2026`).
   - **Conservar Parámetros de URL**: activa/desactiva la preservación de parámetros URL existentes.

Al guardar la página, el JavaScript del plugin reescribirá automáticamente todos los enlaces `<a>` que contengan la URL configurada para que apunten a la URL con el slug de campaña.

## Archivos del Plugin

```
aveonline-module-campana-slug/
├── index.php   # Archivo principal del plugin
├── update.php                          # Actualizador automático vía GitHub
├── package.json                        # Herramientas de desarrollo
├── README.md                           # Este archivo
├── js/
│   └── ave-slug-url.js                 # JavaScript frontend para reescritura de enlaces
└── widgets/
    └── ave-slug-widget.php             # Widget de Elementor
```

## Desarrollador

- **Nombre:** Francisco Blanco
- **Web:** https://franciscoblanco.vercel.app/
- **Email:** blancofrancisco34@gmail.com

## Repositorio

- **GitHub:** https://github.com/franciscoblancojn/aveonline-module-campana-slug

## Licencia

Este plugin se distribuye bajo los términos de la **GNU General Public License v2.0 o posterior**.
