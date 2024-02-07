<?php
namespace GDW\WidgetZendesk\Block;

use GDW\Core\Helper\Data;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class ViewChat extends Template
{
    protected $context;
    protected $gdwHelper; 
    
    public function __construct(Data $gdwHelper, Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->gdwHelper = $gdwHelper;
    }

    public function getKey()
    {
        return $this->gdwHelper->getConfigValue('gdw/seo_zendesk/key') ?? '';
    }

    public function getDelay()
    {
        return $this->gdwHelper->getConfigValue('gdw/seo_zendesk/delay_time') ?? 0;
    }

    public function getEnableCheckout()
    {
        return $this->gdwHelper->getConfigValue('gdw/seo_zendesk/enable_checkout') ?? 0;
    }

    public function getExcludeLoad()
    {
        return $this->gdwHelper->getArrayTextarea($this->gdwHelper->getConfigValue('gdw/seo_zendesk/exclude_extraclass') ?? '');
    } 
}