<?php
namespace Sitegeist\KlarSchiff\ViewHelpers;

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper;
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
