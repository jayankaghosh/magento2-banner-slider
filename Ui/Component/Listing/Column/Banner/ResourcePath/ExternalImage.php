<?php
/**
 *
 * @package     magento2
 * @author      Jayanka Ghosh (joy)
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        https://www.codilar.com/
 */

namespace Codilar\BannerSlider\Ui\Component\Listing\Column\Banner\ResourcePath;


class ExternalImage implements ProcessorInterface
{

    /**
     * @param array $item
     * @return string
     */
    public function process(array $item): string
    {
        $resourcePath = $item['resource_path'];
        return sprintf('<img style="width: 200px; height: auto;" src="%s" alt="%s" />', $resourcePath, $resourcePath);
    }
}