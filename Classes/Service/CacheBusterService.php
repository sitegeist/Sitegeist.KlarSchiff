<?php
namespace Sitegeist\KlarSchiff\Service;

use Neos\Flow\Annotations as Flow;

class CacheBusterService
{
    /**
     * @Flow\Inject
     * @var \Neos\Cache\Frontend\VariableFrontend
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
            $value = \Neos\Flow\Utility\Algorithms::generateUUID();
            $this->cacheBusterIdCache->set($identifier, $value);
            return $value;
        }
    }
}