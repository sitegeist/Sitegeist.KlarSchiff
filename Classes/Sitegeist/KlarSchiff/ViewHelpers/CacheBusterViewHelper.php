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
     * @param string $identifier
     * @return string
     */
    public function render($identifier = '')
    {
        return $this->cacheBusterService->getCacheBusterIdentifier($identifier);
    }

}
