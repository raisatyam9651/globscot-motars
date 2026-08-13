<?php
/**
 * Globe Scott Motors - Functions & Helper Utilities
 */

require_once __DIR__ . '/config.php';

/**
 * Check if a menu item matches the current active page
 */
function is_active_menu($page_name, $current_page) {
    if (is_array($page_name)) {
        return in_array($current_page, $page_name) ? 'active current-menu-item current_page_item' : '';
    }
    return ($current_page === $page_name) ? 'active current-menu-item current_page_item' : '';
}

/**
 * Clean & sanitize user input for contact form
 */
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

/**
 * Helper to generate relative link or asset path
 */
function asset_url($path) {
    return ltrim($path, '/');
}


