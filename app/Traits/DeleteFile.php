<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait DeleteFile
{
    /**
     * Delete an image from storage.
     *
     * @param string $imagePath
     * @return bool
     */

    public function deleteFile($filePath)
    {
        if (Storage::disk('public')->exists($filePath)) {
            return Storage::disk('public')->delete($filePath);
        }

        return false;
    }
}
