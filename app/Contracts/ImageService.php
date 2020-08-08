<?php

namespace App\Contracts;

interface ImageService
{
    public function upload($data): string;
    public function get(string $url);
}
