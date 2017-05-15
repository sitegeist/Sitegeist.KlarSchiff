<?php
namespace Sitegeist\KlarSchiff\EelHelpers;

use Neos\Flow\Annotations as Flow;
use Neos\Eel\ProtectedContextAwareInterface;
use Sitegeist\KlarSchiff\Service\CacheBusterService;

class CacheBusterHelper implements ProtectedContextAwareInterface
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
    public function get($identifier = 'default') {
        return $this->cacheBusterService->getCacheBusterIdentifier($identifier);
    }

    /**
     * Generate a unique cache buster for the given identifier
     * the idenifier is changed whenever the cache
     * Sitegeist_KlarSchiff_CacheBusterIdentifierCache is flushed
     *
     * @param string $identifier
     * @return string
     */
    public function getById($identifier = 'default') {
        return $this->get($identifier);
    }

    public function allowsCallOfMethod($methodName) {
        return TRUE;
    }

}
