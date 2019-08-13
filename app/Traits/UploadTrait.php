<?php
namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadTrait
{
    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : str_random(25);
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }

     /**
     * Upload the file with slugging to a given path
     *
     * @param UploadedFile $image
     * @param $path
     * @return string
     */

    public function uploadFile(UploadedFile $image, $path, $name = null)
    {
        $extension = $image->getClientOriginalExtension();
        $name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
        $image_name = str_slug($name . str_random(10)) . '.' . $extension;
        $image->move($path, $image_name);
        return $image_name;
    }
}
