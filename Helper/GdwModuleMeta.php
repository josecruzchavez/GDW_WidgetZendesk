<?php
declare(strict_types=1);

namespace GDW\WidgetZendesk\Helper;

final class GdwModuleMeta
{
    /** @return array{desc:string, config_path:string, config_anchor:string, repo_url:string, docs_url:string} */
    public static function getMeta(): array
    {
        return [
            'desc' => 'Integra el widget de Zendesk con control por configuracion y condiciones de carga.',
            'config_path' => 'adminhtml/system_config/edit/section/gdwmarketing',
            'config_anchor' => '#gdwmarketing_zendesk-link',
            'repo_url' => 'https://github.com/josecruzchavez/GDW_WidgetZendesk',
            'docs_url' => 'https://docs.gdw.mx/modulos/gdw_widgetzendesk',
        ];
    }
}