<?php

namespace App\Http\Controllers;

use App\Utils\UploadUtils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function getSensitiveImage($filename)
    {
        // تحقق أن الملف موجود
        if (!Storage::disk('local')->exists("private/{$filename}")) {
            abort(404, 'الملف غير موجود');
        }

        return UploadUtils::getSensitiveFile($filename);

        // display in flutter
        //         Image.network(
        //   "http://192.168.1.34/api/v1/user/sensitive-image/123.enc",
        //   headers: {
        //     "Authorization": "Bearer YOUR_TOKEN",
        //   },
        // )
    }

    public function getImage($filename)
    {
        // تحقق أن الملف موجود
        if (!Storage::disk('local')->exists("private/{$filename}")) {
            abort(404, 'الملف غير موجود');
        }

        $image = Storage::disk('local')->get("private/{$filename}");
        Log::info($image);

        return response($image, 200)
            ->header('Content-Type', 'image/jpeg');

        // display in flutter
        //         Image.network(
        //   "http://192.168.1.34/api/v1/user/sensitive-image/123.enc",
        //   headers: {
        //     "Authorization": "Bearer YOUR_TOKEN",
        //   },
        // )
    }
}
