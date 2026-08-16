<?php
namespace Prowem;

/**
 * Renders the home hero slider from templates/hero.php.
 */
class Hero {
    public function render(): void {
        include __DIR__.'/templates/hero.php';
    }
}
