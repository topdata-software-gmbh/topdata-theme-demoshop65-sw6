<?php declare(strict_types=1);

namespace Topdata\TopdataThemeDemoshop65SW6;

use Shopware\Core\Framework\Plugin;
use Shopware\Storefront\Framework\ThemeInterface;

class TopdataThemeDemoshop65SW6 extends Plugin implements ThemeInterface
{
    public function getThemeConfigPath(): string
    {
        return 'theme.json';
    }
}