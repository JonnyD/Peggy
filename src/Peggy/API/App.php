<?php

namespace Peggy\API;

use Peggy\Request\App\CreateAppRequest;
use Peggy\Response\App\AppResponse;
use Peggy\Response\App\ListAppsResponse;
use GuzzleHttp\Psr7\Response as GuzzleResponse;

class App extends AbstractAPI
{
    const APP_RESPONSE_CLASS = 'Peggy\Response\App\AppResponse';
    const LIST_APPS_RESPONSE_CLASS = 'Peggy\Response\App\ListAppsResponse';

    /**
     * @return AppResponse[]
     */
    public function all()
    {
        /** @var ListAppsResponse $listAppsResponse */
        $listAppsResponse = $this->getRequest('apps/', self::LIST_APPS_RESPONSE_CLASS);
        $allApps = $listAppsResponse->getData();
        return $allApps;
    }

    /**
     * @param CreateAppRequest $request
     * @return AppResponse
     */
    public function upload(CreateAppRequest $request)
    {
        $headers = ['content-type' => 'application/octet-stream'];
        return $this->putRequest('apps/'.$request->getName(), self::APP_RESPONSE_CLASS, $request, $headers);
    }

    /**
     * @param string $appName
     * @return GuzzleResponse
     */
    public function get($appName)
    {
        //todo API doesn't work as expected on 80legs.com
        return $this->getRequest('apps/'.urlencode($appName));
    }

    /**
     * @param string $appName
     * @return null
     */
    public function remove($appName)
    {
        return $this->deleteRequest('apps/'.urlencode($appName));
    }

    /**
     * @param string $name
     * @param string $filePath
     * @return CreateAppRequest
     */
    public function createAppRequest($name, $filePath)
    {
        return new CreateAppRequest($name, $filePath);
    }
}