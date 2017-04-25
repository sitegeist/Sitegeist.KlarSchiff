<?php
namespace Sitegeist\KlarSchiff\ViewHelpers;

use Neos\Flow\Annotations as Flow;
use Neos\FluidAdaptor\Core\ViewHelper\AbstractViewHelper;
use Sitegeist\KlarSchiff\Service\CacheBusterService;

class CacheBusterViewHelper extends  AbstractViewHelper
{
    /**
     * @Flow\Inject
     * @var CacheBusterService
     */
    protected $cacheBusterService;

    /**
     * Generate a unique cache buster for the given identifier
     * the idenifier is changed whenever the cache
     * Sitegeist_KlarSchiff_CacheBusterIdentifierCache is flushed
     *
     * @param string $identifier
     * @return string
     */
    public function render($identifier = 'default')
    {
        return $this->cacheBusterService->getCacheBusterIdentifier($identifier);
    }

}
