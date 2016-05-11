<?php
namespace Sitegeist\KlarSchiff\Eel;

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Eel\ProtectedContextAwareInterface;
use Sitegeist\KlarSchiff\Service\CacheBusterService;

class CacheBusterHelper implements ProtectedContextAwareInterface
{

    /**
     * @Flow\Inject
     * @var CacheBusterService
     */
    protected $cacheBusterService;


    public function byId($identifier = '') {
        return "dasds";
        //return $this->cacheBusterService->getCacheBusterIdentifier($identifier);
    }

    public function allowsCallOfMethod($methodName) {
        return TRUE;
    }

}
