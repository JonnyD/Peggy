<?php

namespace Peggy\API;

use Peggy\Request\Urllist\CreateUrllistRequest;
use Peggy\Response\UrlList\UrlListResponse;
use Peggy\Response\UrlList\ListUrlListResponse;

class Urllist extends AbstractAPI
{
    const URL_RESPONSE_CLASS = 'Peggy\Response\UrlList\UrlListResponse';
    const LIST_URLS_RESPONSE_CLASS = 'Peggy\Response\UrlList\ListUrlListResponse';

    /**
     * @return UrlListResponse[]
     */
    public function all()
    {
        /** @var ListUrlListResponse $listUrlListResponse */
        $listUrlListResponse = $this->getRequest('urllists/', self::LIST_URLS_RESPONSE_CLASS);
        $allUrllists = $listUrlListResponse->getData();
        return $allUrllists;
    }

    /**
     * @param CreateUrllistRequest $request
     * @return null
     */
    public function upload(CreateUrllistRequest $request)
    {
        $headers = ['content-type' => 'application/octet-stream'];;
        return $this->putRequest('urllists/'.urlencode($request->getName()), self::URL_RESPONSE_CLASS, $request, $headers);
    }

    /**
     * @param string $urllistName
     * @return UrlListResponse
     */
    public function get($urllistName)
    {
        return $this->getRequest('urllists/'.urlencode($urllistName));
    }

    /**
     * @param string $urllistName
     * @return null
     */
    public function remove($urllistName)
    {
        return $this->deleteRequest('urllists/'.urlencode($urllistName));
    }

    /**
     * @param string $name
     * @param string $filePath
     * @return CreateUrllistRequest
     */
    public function createUrllistRequest($name, $filePath)
    {
        return new CreateUrllistRequest($name, $filePath);
    }
}