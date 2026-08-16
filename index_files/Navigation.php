<?php
namespace Prowem;

/**
 * Renders the site header from templates/navigation.php.
 */
class Navigation {
    public function render(): void {
        include __DIR__.'/templates/navigation.php';
    }
}
