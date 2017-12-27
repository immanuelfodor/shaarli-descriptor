<?php
/**
 * Shaarli Descriptor Plugin
 *
 * @author Immánuel Fodor 
 * @link https://fodor.it
 */

use Shaarli\Config\ConfigManager;

/**
 * Injecting our Javascript code to the editlink page.
 * 
 * Hook render_editlink.
 *
 * Template placeholders:
 *   - edit_link_plugin: add fields after tags.
 *
 * @param $data array         data passed to plugin
 * @param $conf ConfigManager instance
 *
 * @return array altered $data.
 */
function hook_shaarli_descriptor_render_editlink($data, $conf)
{
    $descriptionRows = $conf->get('plugins.DESCRIPTION_ROWS');
    if (empty($descriptionRows) || 
        ! is_numeric($descriptionRows) || 
        (is_numeric($descriptionRows) && ((int)$descriptionRows) < 1)
    ) {
        $descriptionRows = 4;
    }

    $html = file_get_contents(PluginManager::$PLUGINS_PATH .'/shaarli_descriptor/shaarli_descriptor.html');
    $html = sprintf($html, $descriptionRows);
    $data['edit_link_plugin'][] = $html;

    return $data;
}

/**
 * This function is never called, but contains translation calls for GNU gettext extraction.
 */
function shaarli_descriptor_dummy_translation()
{
    // meta
    t('Customizer plugin for the Description field on the Edit Link page.');
    t('The number of rows that define the hight of the Description textarea. Default: 4');
}
