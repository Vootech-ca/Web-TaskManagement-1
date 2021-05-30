<?php

namespace App\Traits;

use Intervention\Image\Facades\Image;

trait FileUpload
{
    public $mimes       = 'jpeg,png,jpg,gif';
    public $maxSize     = 8192;
    public $fileWidth   = 1920;
    public $fileHeight  = 1080;
    public $thumbWidth  = 350;
    public $thumbHeight = 240;

    /**
     * Image upload trait used in controllers to upload files
     * @param $file
     * @param $fileName
     * @param $folder
     * @param string $subFolder
     * @param string $type
     * @param null $mimes
     * @param null $maxSize
     * @return string
     */
    public function saveImages($file, $fileName, $folder, string $subFolder = 'images', string $type = '|image', $mimes = null, $maxSize = null): string
    {
        $mimes = $mimes ?? $this->mimes;
        $maxSize = $maxSize ?? $this->maxSize;

        optional(request())->validate([
            $fileName => 'required' . $type . '|mimes:' . $mimes . '|max:' . $maxSize
        ]);

        $destinationPath = DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . $subFolder;

        $file_name = time() . '_' . $file->getClientOriginalName();

        $image = Image::make($file);

        $image->resize($this->fileWidth, $this->fileHeight, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path() . $destinationPath . $file_name);

        $image->resize($this->thumbWidth, $this->thumbHeight, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path() . $destinationPath . DIRECTORY_SEPARATOR . 'thumbnails' . DIRECTORY_SEPARATOR . $file_name);

        return $file_name;
    }
}
