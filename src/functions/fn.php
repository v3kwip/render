<?php

use AndyTruong\Render\RenderManager;

/**
 * Wrapper function to render input.
 *
 * @param string|array $input
 * @return string
 */
function at_render($input) {
    if (is_string($input)) {
        $input = array('source' => array('type' => 'string', 'value' => $input));
    }

    return at_id(new RenderManager())->render($input);
}
