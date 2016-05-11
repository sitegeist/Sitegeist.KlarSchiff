# Sitegeist.Klarschiff

## Flow Package to avoid browser caching for updated resources

This package adds a eel helper and view helpers that can be used to create cache buster parameters. 
The cachebusters params are regenereated on every cache-flush.

### Authors & Sponsors

* Martin Ficzel - ficzel@sitegeist.de

*The development and the public-releases of this package is generously sponsored 
by our employer http://www.sitegeist.de.*

### Usage

#### ViewHelper klarSchiff:CacheBuster 
```
{namespace klarSchiff=Sitegeist\KlarSchiff\ViewHelpers}
<link rel="stylesheet" type="text/css" href="{f:uri.resource(path: 'resource://Vendor.Site/Public/Styles/Main.css')}?cb={klarSchiff:CacheBuster(identifier:'default')}">
```
#### Eel Helper
```
value = 'http://www.vandor.site.tld/some_path'
value.@process.addCacheBuster = ${value + '?cb=' + SitegeistKlarSchiffCacheBuster:getById('default')}
```

### Installation 

in jour composer .json add the following lines
```
{
    ...
    "repositories": [{
    {
        "url": "ssh://git@git.sitegeist.de:40022/sitegeist/Sitegeist.KlarSchiff.git",
        "type": "vcs"
    }],
    "require": {
        ...
        "sitegeist/klarschiff": "@dev",
        ...
    }
    ...
}
```