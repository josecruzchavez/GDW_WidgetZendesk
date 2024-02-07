![gdw_opengraph](https://php.gdw.mx/github_assets/gdw_widgetzendesk/gdw_widgetzendesk_01.jpg)

# GDW_WidgetZendesk
[![Latest Stable Version](http://poser.pugx.org/gdw/widgetzendesk/v?style=for-the-badge)](https://packagist.org/packages/gdw/widgetzendesk) [![Total Downloads](http://poser.pugx.org/gdw/widgetzendesk/downloads?style=for-the-badge)](https://packagist.org/packages/gdw/widgetzendesk) [![PHP Version Require](http://poser.pugx.org/gdw/widgetzendesk/require/php?style=for-the-badge)](https://packagist.org/packages/gdw/widgetzendesk)

Agrega de forma sencilla el chat de zendesk o zopim en tu Magento.

* Habilita preconnect.
* Carga de script asíncrona. 
* Agrega los enlaces externos en csp_whitelist.xml.
* Se puede agregar un retrazo de segundos para cargar el chat.
* Permite excluir la carga del chat en el checkout.
* Permite excluir la carga del chat en CMS o productos detectando clases en la etiqueta body.
* Soporta multi-store.


## Compatibilidad
✓ Magento 2.3.x, ✓ Magento 2.4.x

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
