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
        $publicPath = public_path('uploads/' . $filename);
        if (file_exists($publicPath)) {
            $mimeType = mime_content_type($publicPath) ?: 'image/jpeg';
            return response()->file($publicPath, [
                'Content-Type' => $mimeType,
                'Cache-Control' => 'public, max-age=31536000',
            ]);
        }

        if (Storage::disk('local')->exists("private/{$filename}")) {
            $image = Storage::disk('local')->get("private/{$filename}");
            return response($image, 200)->header('Content-Type', 'image/jpeg');
        }

        if (Storage::disk('public')->exists($filename)) {
            $image = Storage::disk('public')->get($filename);
            return response($image, 200)->header('Content-Type', 'image/jpeg');
        }

        abort(404, 'الملف غير موجود');
    }
}
