<?php
    /**
     * User: Lucas Torres
     * Date: 02/07/2022
     * Time: 19:47
     */
    namespace Src\Services\Upload;

    use Exception;

    /**
     * Upload class
     * 
     * @final
     * @static
     * @author Lucas Torres <l.torres3001.lt@gmail.com>
     */
    final class Upload
    {
        /**
         * User image method
         *
         * @method array image()
         * @static
         * @param array $file_post
         * @return array
         */
        private static function image(array $file_post): array
        {
            $file_array = array();
            $file_key = array_keys($file_post);
            for ($i = 0; $i < count($file_post['name']); $i++)
            {
                foreach ($file_key as $key)
                {
                    $file_array[$i][$key] = $file_post[$key][$i];
                }
            }
            return $file_array;
        }
        /**
         * User image upload method
         *
         * @final
         * @method string|null imageUpload()
         * @static
         * @param array $img
         * @return string|null
         */
        final public static function imageUpload(array $img): ?string
        {
            $fileUploadErrors = array(
                0 => 'There is no error, teh file uploaded with success',
                1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
                2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
                3 => 'The uploaded file was only partially uploaded',
                4 => 'No file was uploaded',
                5 => 'Missing a temporary folder',
                6 => 'Failed to write file to disk.',
                7 => 'A PHP extension stopped the file upload.'
            );
            if (isset($img))
            {
                $file_img = self::image($img);
                for ($i = 0; $i < count($file_img); $i++)
                {
                    if ($file_img[$i]['error'])
                    {
                        throw new Exception
                        (
                            "{$file_img[$i]['name']} - {$fileUploadErrors[$file_img[$i]['error']]}"
                        );
                    } else
                    {
                        $extensions = array(
                            'jpg','png','jpeg','gif',
                            'JPG','PNG','JPEG','GIF'
                        );
                        $file_ext = explode(
                            '.',
                            $file_img[$i]['name']
                        );
                        $file_ext = end(
                            $file_ext
                        );
                        if (!in_array($file_ext, $extensions))
                        {
                            throw new Exception
                            (
                                "{$file_img[$i]['name']} - Invalid file extension!"
                            );
                        } else
                        {
                            $newImageName = sha1(
                                $file_img[$i]['name']
                            );
                            move_uploaded_file(
                                $file_img[$i]['tmp_name'],
                                "C:/xampp/htdocs/Folder/src/View/resources/storage/public/img/{$newImageName}.{$file_ext}"
                            );
                        }
                    }
                    return "{$newImageName}.{$file_ext}";
                }
            } else
            {
                return NULL;
            }
        }
    }