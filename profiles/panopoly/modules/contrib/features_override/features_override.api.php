<?php

/**
 * Autogenerated hook that duplicates what alters are being exported via
 * features overrides.
 *
 * This hook should only ever be auto-exported.
 */
function hook_features_override_default() {
  return array();
}

/**
 * Allows modules to clean up the default and normal components.
 *
 * For whatever reason, extra information or inconstancies may be introduced
 * into the normal (current) or default (defined) components. This hook allows
 * modules to hook in and clean up whatever they need to.
 *
 * @param $default
 *   The object or array as defined in a default hook, unaltered.
 * @param $normal
 *   The current object, either the current default + alters or database
 *   overrides.
 * @param $context
 *   an array containing module and component information.
 */
function hook_features_override_component_overrides_alter(&$default, &$normal, $context) {
  if ($context['component'] == 'views_view') {
    unset($normal->api_version);
  }
}

/**
 * Component hook. The hook should be implemented using the name ot the
 * component, not the module, eg. [component]_features_export() rather than
 * [module]_features_export().
 *
 * Renders an addition to a feature.
 *
 * @return string
 *   A rendered string.
 * @see features_override_export_render_addition();
 */
function hook_features_override_export_render_addition() {
}

/**
 * Component hook. The hook should be implemented using the name ot the
 * component, not the module, eg. [component]_features_export() rather than
 * [module]_features_export().
 *
 * Renders a deletion to a feature.
 *
 * @return string
 *   A rendered string.
 * @see features_override_export_render_deletion();
 */
function hook_features_override_export_render_deletion() {
}