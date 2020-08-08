<?php

namespace App\Services;

use App\Contracts\ImageService;
use JD\Cloudder\Facades\Cloudder;

class CloudderImageService implements ImageService
{

    /**
     * Stores the givetem image object
     * in storage and returns its url
     *
     * @param $data
     * @return string
     */
    public function upload($data): string
    {
        Cloudder::upload($data, null, [], "givetem");
        $result = Cloudder::getResult();
        return $result["secure_url"];
    }

    public function get(string $url)
    {
    }
}
