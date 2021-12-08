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
     * Initialize the arguments.
     *
     * @return void
     * @api
     */
    public function initializeArguments()
    {
        $this->registerArgument('identifier', 'string', 'identifier', false, 'default');
    }
    
    /**
     * Generate a unique cache buster for the given identifier
     * the idenifier is changed whenever the cache
     * Sitegeist_KlarSchiff_CacheBusterIdentifierCache is flushed
     *
     * @return string
     */
    public function render()
    {
        return $this->cacheBusterService->getCacheBusterIdentifier($this->arguments['identifier']);
    }

}
