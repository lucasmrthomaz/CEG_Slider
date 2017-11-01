<?php

/**
 * Created by PhpStorm.
 * User: Thomaz
 * Date: 29/09/2017
 * Time: 06:17
 */


/**
 * Class SliderPhotos
 */
class SliderPhotos
{
    /*
    Repetir cada imagem e sua respectiva
    miniatura em quanto houver elementos
    a serem exibidos
    */

    /*
    <!-- Item 0 -->
    <li data-thumb="slider_photos/$filename">
    <img src="slider_photos/$filename" />
    */

    /**
     *
     */
    public function showItems($profile)
    {
        define('IMAGEPATH', 'slider_photos/');
        switch ($profile)
        {
            case 'diop_ceg':
                foreach (glob(IMAGEPATH . $profile. '/' . '*') as $image) {
                    //echo($image);
                    echo("<li data-thumb='" . $image . "'/>");
                    echo("<img src='" . $image . "'/>");
                }
                break;
            case 'diop_ceg_rio':
                foreach (glob(IMAGEPATH . $profile. '/' . '*') as $image) {
                    //echo($image);
                    echo("<li data-thumb='" . $image . "'/>");
                    echo("<img src='" . $image . "'/>");
                }
                break;
            case 'diop_gnsps':
                foreach (glob(IMAGEPATH . $profile. '/' . '*') as $image) {
                    //echo($image);
                    echo("<li data-thumb='" . $image . "'/>");
                    echo("<img src='" . $image . "'/>");
                }
                break;
            case 'gnv_oficina':
                foreach (glob(IMAGEPATH . $profile. '/' . '*') as $image) {
                    //echo($image);
                    echo("<li data-thumb='" . $image . "'/>");
                    echo("<img src='" . $image . "'/>");
                }
                break;
            case 'gnv_vendedor':
                foreach (glob(IMAGEPATH . $profile. '/' . '*') as $image) {
                    //echo($image);
                    echo("<li data-thumb='" . $image . "'/>");
                    echo("<img src='" . $image . "'/>");
                }
                break;
            case 'tecnico_gns':
                foreach (glob(IMAGEPATH . $profile. '/' . '*') as $image) {
                    //echo($image);
                    echo("<li data-thumb='" . $image . "'/>");
                    echo("<img src='" . $image . "'/>");
                }
                break;
            default:
                foreach (glob(IMAGEPATH . '*') as $image) {
                    //echo($image);
                    echo("<li data-thumb='" . $image . "'/>");
                    echo("<img src='" . $image . "'/>");
                }
                break;
        }

        return $profile;
    }

}

?>