<?php
namespace GDW\WidgetZendesk\Block;

use GDW\Core\Helper\Data;
use GDW\Core\Util\Parser;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class ViewChat extends Template
{
    protected Parser $parser;
    protected Data $helperData;
    
    /**
     * @param array<string, mixed> $data
     */
    public function __construct(Parser $parser, Data $helperData, Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->parser = $parser;
        $this->helperData = $helperData;
    }

    public function getKey(): string
    {
        return $this->normalizeString($this->helperData->getConfigValue('gdw/seo_zendesk/key') ?? '');
    }

    public function getDelay(): int
    {
        return $this->toInt($this->helperData->getConfigValue('gdw/seo_zendesk/delay_time') ?? 0);
    }

    public function getEnableCheckout(): int
    {
        return $this->toInt($this->helperData->getConfigValue('gdw/seo_zendesk/enable_checkout') ?? 0);
    }

    /**
     * @return array<int, string>
     */
    public function getExcludeLoad(): array
    {
        $value = $this->helperData->getConfigValue('gdw/seo_zendesk/exclude_extraclass') ?? '';
        $excludeLoad = $this->parser->textareaToArray($this->normalizeString($value));

        return array_values(array_filter($excludeLoad, static fn (mixed $item): bool => is_string($item)));
    }

    private function normalizeString(mixed $value): string
    {
        return is_scalar($value) ? (string) $value : '';
    }

    private function toInt(mixed $value): int
    {
        if (is_int($value)) {
            return $value;
        }

        if (is_float($value) || (is_string($value) && is_numeric($value))) {
            return (int) $value;
        }

        return 0;
    }
}