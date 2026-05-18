![gdw_opengraph](https://medios.gdw.mx/github_assets/gdw_widgetzendesk/gdw_widgetzendesk_01.jpg)

# GDW_WidgetZendesk
[![Latest Stable Version](https://img.shields.io/packagist/v/gdw/widgetzendesk?style=for-the-badge)](https://packagist.org/packages/gdw/widgetzendesk) [![PHP Version Require](https://img.shields.io/packagist/dependency-v/gdw/widgetzendesk/php?style=for-the-badge)](https://packagist.org/packages/gdw/widgetzendesk) [![Magento Framework Require](https://img.shields.io/packagist/dependency-v/gdw/widgetzendesk/magento%2Fframework?style=for-the-badge)](https://packagist.org/packages/gdw/widgetzendesk) [![License](https://img.shields.io/packagist/l/gdw/widgetzendesk?style=for-the-badge)](https://packagist.org/packages/gdw/widgetzendesk)





Agrega de forma sencilla el chat de zendesk o zopim en tu Magento.

* Habilita preconnect.
* Carga de script asíncrona. 
* Agrega los enlaces externos en csp_whitelist.xml.
* Se puede agregar un retrazo de segundos para cargar el chat.
* Permite excluir la carga del chat en el checkout.
* Permite excluir la carga del chat en CMS o productos detectando clases en la etiqueta body.
* Soporta multi-store.


## Compatibilidad
✓ Magento 2.4.4+ (rama 4.4.x)

###### Ejecuta los siguientes comandos en la ruta base de Magento.

### Instalación 

```
composer require gdw/widgetzendesk

php bin/magento module:enable GDW_WidgetZendesk
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

### Actualización 

```
composer update gdw/widgetzendesk

php bin/magento module:enable GDW_WidgetZendesk
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

### Eliminación del módulo

```
php bin/magento module:disable GDW_WidgetZendesk

composer remove gdw/widgetzendesk

php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

### Expresiones de gratitud

* 📢 Comenta a otros sobre este proyecto.
* 👨🏽‍💻 Da las gracias públicamente.
* [🍺 Invítame una cerveza.](https://www.paypal.me/gestiondigitalweb)

### Otros enlaces
* [Sitio web](https://gdw.mx/?utm_source=github&utm_medium=gdw&utm_campaign=widgetzendesk&utm_id=link)
* [Listado de Módulos](https://gdw.mx/modulos/)
* [Facebook](https://www.facebook.com/GestionDigitalWeb)
* [Youtube](https://www.youtube.com/c/Gestiondigitalweb)

## Changelog

Consulta el changelog del modulo en:

- [https://docs.gdw.mx/modulos/gdw_widgetzendesk/changelog](https://docs.gdw.mx/modulos/gdw_widgetzendesk/changelog)
