<?php
namespace GDW\WidgetZendesk\Block;

use GDW\Core\Helper\Data;
use GDW\Core\Util\Parser;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class ViewChat extends Template
{
    protected $context;
    protected $parser;
    protected $helperData;
    
    public function __construct(Parser $parser, Data $helperData, Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->parser = $parser;
        $this->helperData = $helperData;
    }

    public function getKey()
    {
        return $this->helperData->getConfigValue('gdw/seo_zendesk/key') ?? '';
    }

    public function getDelay()
    {
        return $this->helperData->getConfigValue('gdw/seo_zendesk/delay_time') ?? 0;
    }

    public function getEnableCheckout()
    {
        return $this->helperData->getConfigValue('gdw/seo_zendesk/enable_checkout') ?? 0;
    }

    public function getExcludeLoad()
    {
        return $this->parser->textareaToArray($this->helperData->getConfigValue('gdw/seo_zendesk/exclude_extraclass') ?? '');
    } 
}