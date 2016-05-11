<?php
namespace Sitegeist\KlarSchiff\Service;

use TYPO3\Flow\Annotations as Flow;

class CacheBusterService
{
    /**
     * @Flow\Inject
     * @var \TYPO3\Flow\Cache\Frontend\VariableFrontend
     */
    protected $cacheBusterIdCache;

    /**
     * @param string $identifier
     * @return string
     */
    public function getCacheBusterIdentifier ($identifier = 'default') {
        if ($this->cacheBusterIdCache->has($identifier)) {
            return ($this->cacheBusterIdCache->get($identifier));
        } else {
            $value = md5(rand());
            $this->cacheBusterIdCache->set($identifier, $value);
            return $value;
        }
    }
}