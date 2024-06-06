<?php

declare(strict_types=1);

namespace ArchApps\ShowConfigPath\Plugin;

use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Config\Block\System\Config\Form\Field as Subject;

class ConfigFormField
{
    public function beforeRender(Subject $subject, AbstractElement $element): array
    {
        $fieldConfig = $element->getData('field_config');
        $configPath = "{$fieldConfig['path']}/{$fieldConfig['id']}";
        $html = "<span class='aa-scp-path-comment'>$configPath</span>";
        $element->setData('comment', $html . $element->getData('comment'));

        return [$element];
    }
}
