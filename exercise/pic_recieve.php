<?php
/**
 * Created by PhpStorm.
 * User: ZP
 * Date: 2018/1/20
 * Time: 22:27
 */


    session_start();
    $session_id='1'; //$session id
    $path = "../upload/";

        $valid_formats = array("jpg", "png", "gif", "bmp");
        if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
        {
            $name = $_FILES['photoimg']['name'];
            $size = $_FILES['photoimg']['size'];

            if(strlen($name))
            {
                list($txt, $ext) = explode(".", $name);
                if(in_array($ext,$valid_formats))
                {
                    if($size<(1024*1024))
                    {
                        $actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
                        $tmp = $_FILES['photoimg']['tmp_name'];
                        if(move_uploaded_file($tmp, $path.$actual_image_name))
                        {


                            echo "<img src='../upload/".$actual_image_name."'  class='preview'>";
                        }
                        else
                            echo "failed";
                    }
                    else
                        echo "Image file size max 1 MB";
                }
                else
                    echo "Invalid file format..";
            }

            else
                echo "Please select image..!";

            exit;
        }
    ?>




//http://libs.baidu.com/jquery/1.11.3/jquery.min.js