<?php

namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

trait UploadFile
{
    /**
     * public içindeki bir dosyayı alır, işleyip storage/public içine kaydeder.
     *
     * @param  \Illuminate\Http\UploadedFile|string  $file
     */
    public function uploadFilePublicPath($file, ?string $destinationPath = null, ?int $width = 1600): string
    {
        dd($file);
    }
}
