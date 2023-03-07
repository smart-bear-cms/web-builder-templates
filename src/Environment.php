<?php

namespace nguyenanhung\Platforms\WebBuilderSDK\WebBuilderTemplates;

/**
 * Interface Environment
 *
 * @package   nguyenanhung\Platforms\WebBuilderSDK\WebBuilderTemplates
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
interface Environment
{
    const VERSION = '2.0.0';
    const LAST_MODIFIED = '2023-03-07';
    const AUTHOR_NAME = 'Hung Nguyen';
    const AUTHOR_EMAIL = 'dev@nguyenanhung.com';
    const PROJECT_NAME = 'Web Builder SDK Platform - Templates Packages by Hung Nguyen';
    const USE_BENCHMARK = false;
    const USE_DEBUG = false;

    /**
     * Hàm lấy thông tin phiên bản Package
     *
     * @author  : 713uk13m <dev@nguyenanhung.com>
     * @time    : 10/13/18 15:12
     *
     * @return string Current Project Version, VD: 0.1.0
     */
    public function getVersion();
}
