<?php

namespace App\Utils;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UploadUtils
{
    public static function encryptAndStoreSensitiveFile($file): string
    {
        try {
            $content = file_get_contents($file->getRealPath());

            // Encrypt the contents
            $encrypted = Crypt::encrypt($content);

            // Store the encrypted contents in the private storage
            $filename = self::generateRandomName() . '.enc';
            Storage::disk('local')->put("private/{$filename}", $encrypted);

            return $filename;
        } catch (\Exception $e) {
            Log::error('Image processing error: ' . $e->getMessage());
            return '';
        }
    }

    public static function getSensitiveFile($filename)
    {
        //         التحكم في الوصول (Authorization)
        // قبل إرجاع الصورة لازم تتحقق من صلاحيات المستخدم (مثلاً باستخدام Gate أو Policy).

        $encrypted = Storage::disk('local')->get("private/{$filename}");
        $decrypted = Crypt::decrypt($encrypted);

        return response($decrypted, 200)
            ->header('Content-Type', 'image/jpeg'); // أو حسب نوع الصورة
    }


    public static function uploadMultipleImage($files): array
    {
        try {
            $imagePaths = [];
            if ($files) {
                foreach ($files as $file) {
                    if (!$file->isValid()) continue;

                    $fileName = self::GenerateRandomName() . '.' . $file->getClientOriginalExtension();
                    Storage::disk('local')->putFileAs(
                        'private',
                        $file,
                        $fileName
                    );

                    $imagePaths[] = $fileName;
                }
            }

            return $imagePaths;
        } catch (\Exception $e) {
            Log::error('Image processing error: ' . $e->getMessage());
            return [];
        }
    }

    public static function uploadImageToStorage($file, string $path = 'private'): string
    {
        try {
            if ($file) {
                $fileName = self::GenerateRandomName() . '.' . $file->getClientOriginalExtension();
                Storage::disk('local')->putFileAs(
                    $path,
                    $file,
                    $fileName
                );
                return $fileName;
            }

            return '';
        } catch (\Exception $e) {
            Log::error('Image processing error: ' . $e->getMessage());
            return '';
        }
    }

    // uploadMultipleImage to public
    public static function uploadMultipleImageToPublic($files): array
    {
        try {
            $imagePaths = [];
            if ($files) {
                $destinationPath = public_path('uploads');
                if (!file_exists($destinationPath)) {
                    @mkdir($destinationPath, 0777, true);
                }

                foreach ($files as $file) {
                    if (!$file || !$file->isValid()) continue;

                    $fileName = self::generateRandomName() . '.' . $file->getClientOriginalExtension();

                    try {
                        $file->move($destinationPath, $fileName);
                    } catch (\Throwable $e) {
                        $altPath = storage_path('app/public/uploads');
                        if (!file_exists($altPath)) {
                            @mkdir($altPath, 0777, true);
                        }
                        $file->move($altPath, $fileName);
                    }

                    $imagePaths[] = $fileName;
                }
            }

            return $imagePaths;
        } catch (\Exception $e) {
            Log::error('Image processing error: ' . $e->getMessage());
            return [];
        }
    }

    public static function uploadImageToPublic($file, string $path = 'uploads'): string
    {
        try {
            if ($file) {
                $fileName = self::GenerateRandomName() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path($path), $fileName);
                return $fileName;
            }

            return '';
        } catch (\Exception $e) {
            Log::error('Image processing error: ' . $e->getMessage());
            return '';
        }
    }


    private static function generateRandomName()
    {
        return 'img_' . date('mdYHis') . rand(1000, 10000) . uniqid();
    }
}
