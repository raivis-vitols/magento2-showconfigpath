<?php

declare(strict_types=1);

namespace ArchApps\ShowConfigPath\Plugin;

use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Config\Block\System\Config\Form\Field as Subject;

class ConfigFormField
{
    public function beforeRender(Subject $subject, AbstractElement $element)
    {
        $comment = $element->getData('comment');
        $fieldConfig = $element->getData('field_config');
        $configPath = "{$fieldConfig['path']}/{$fieldConfig['id']}";

        $style = "display:block; margin:10px 0; color:#999";
        $html = "<span style='$style'>$configPath</span>";
        $element->setData('comment', $html . $comment);

        return [$element];
    }
}
