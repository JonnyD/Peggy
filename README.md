# Peggy
A PHP Client for 80Legs.com API.

## Installation
Add to composer.json

```"jonnyd/peggy": "1.*"```

## Usage
### Initialize
```php
$peggy = new Peggy\Client('<your api key>');
```
### Making API Calls
#### Crawls
```php
// create crawl
$request = $peggy->crawl()->createCrawlRequest($crawlName, $appName, $urllist, $maxDepth, $maxUrls);
$peggy->crawl()->create($request);

// get crawl
$crawl = $peggy->crawl()->get($crawlName);
echo $crawl->getName();

// cancel crawl
$peggy->crawl()->cancel($crawlName);

// get all crawls
$allCrawls = $peggy->crawl()->all();
foreach ($allCrawls as $crawl) {
   echo $crawl->getName();
}
```

#### Results
```php
// get result
$result = $peggy->result()->get($crawlName);
$urls = $result->getUrls(); // Returns the results of the crawl specified by CRAWL_NAME. This will return a 404 if no results have been posted. Example Url: "http://s3.amazonaws.com/results1"
```

#### Apps
```php
// upload app
$request = $peggy->app()->createAppRequest($name, $filePath);
$peggy->app()->upload($request);

// get app
$app = $peggy->app()->get($appName); // this API is broken on 80legs.com

// remove app
$peggy->app()->remove($appName);

// get all apps
$allApps = $peggy->app()->all();
foreach ($allApps as $app) {
    echo $app->getName();
}
```

#### Url Lists
```php
// create url list
$request = $peggy->urllist()->createUrllistRequest($name, $filePath);
$peggy->urllist()->upload($request);

// get url list
$urllist = $peggy->urllist()->get($name);
echo $urllist->getName();

// remove url list
$peggy->urllist->remove($name);

// get all url lists
$allUrllists = $peggy->urllist()->all();
foreach ($allUrllists as $urllist) {
    echo $urllist->getName();
}
```

#### User
```php
// get me
$me = $peggy->user()->me();

// get user
$user = $peggy->user()->get($token);
```

## Todo
* Tests
* Error Handling
* anything else?

## Pull Requests
Welcomed!
