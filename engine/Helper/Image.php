<?php

namespace Engine\Helper;


class Image
{
    const DIR_MASK_PNG = '%s/%s.png';

    public static function loadPng($files_img, $dir, $name , $types){

        if (!empty($files_img) && $files_img['error'] <= 0){
            $img_info = getimagesize($files_img['tmp_name']);

            if (in_array($img_info['mime'], $types)){
                $str_image = file_get_contents($files_img['tmp_name']);
                $image_png = imagecreatefromstring($str_image);

                if (!file_exists($dir)){
                    mkdir($dir, 0777, true);
                }

                $full_file_name = sprintf(self::DIR_MASK_PNG, $dir, $name);

                return imagePng($image_png, $full_file_name);
            }
        }
        return false;
    }

    //TODO write deleteImage method
    public static function deleteImage(){}

}