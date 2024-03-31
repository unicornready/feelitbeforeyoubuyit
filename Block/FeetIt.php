<?php

namespace Unicornready\FeelItBeforeYouBuyIt\Block;

use Magento\Catalog\Block\Product\View;

class FeetIt extends View
{
    const IS_ENABLED_XML = 'feelitbeforeyoubuyit/settings/enable';
    const BTN_LABEL_XML = 'feelitbeforeyoubuyit/settings/btn_label';

    /**
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->_scopeConfig->getValue(self::IS_ENABLED_XML);
    }

    /**
     * @return string
     */
    public function getBtnLabel()
    {
        return $this->_scopeConfig->getValue(self::BTN_LABEL_XML);
    }
}
