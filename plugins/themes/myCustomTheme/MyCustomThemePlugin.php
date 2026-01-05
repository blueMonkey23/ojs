<?php

/**
 * @file plugins/themes/myCustomTheme/MyCustomThemePlugin.php
 *
 * @brief My Custom Theme Plugin
 */

namespace APP\plugins\themes\myCustomTheme;

use PKP\plugins\ThemePlugin;

class MyCustomThemePlugin extends ThemePlugin
{
    /**
     * Initialize the theme's styles, scripts and hooks.
     */
    public function init()
    {
        // Kế thừa từ theme mặc định
        $this->setParent('default');

        // Load styles cho Đại học Mở Hà Nội
        $this->addStyle('hou-theme-style', 'styles/index.less');

        // Thêm option cho màu chủ đạo
        $this->addOption('primaryColor', 'FieldColor', [
            'label' => __('plugins.themes.houTheme.option.primaryColor.label'),
            'description' => __('plugins.themes.houTheme.option.primaryColor.description'),
            'default' => '#0066cc',
        ]);

        // Thêm option cho slogan
        $this->addOption('slogan', 'FieldText', [
            'label' => __('plugins.themes.houTheme.option.slogan.label'),
            'description' => __('plugins.themes.houTheme.option.slogan.description'),
            'default' => 'Đại học Mở Hà Nội - Nơi khởi đầu ước mơ',
        ]);

        // Thêm option hiển thị footer info
        $this->addOption('showFooterInfo', 'FieldOptions', [
            'label' => __('plugins.themes.houTheme.option.showFooterInfo.label'),
            'description' => __('plugins.themes.houTheme.option.showFooterInfo.description'),
            'type' => 'checkbox',
            'options' => [
                [
                    'value' => true,
                    'label' => __('plugins.themes.houTheme.option.showFooterInfo.enabled'),
                ],
            ],
        ]);
    }

    /**
     * Get the display name of this theme
     */
    public function getDisplayName()
    {
        return __('plugins.themes.houTheme.name');
    }

    /**
     * Get the description of this theme
     */
    public function getDescription()
    {
        return __('plugins.themes.houTheme.description');
    }
}
