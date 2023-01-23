<?php

use App\Models\trade;
use support\view\View;

function asset($name)
{
    echo "public/" . $name;
}

function img($imgcode)
{
    echo stream_get_contents($imgcode);
}


if (!function_exists("lastId")) {
    function lastId($table, $conn)
    {
        $sql = "SELECT `id` FROM `$table` WHERE id = (SELECT MAX(id) FROM `$table`) ";
        $stmt = $conn->query($sql);
        $data = $stmt->fetch();
        return  $data['id'];
    }
}

if (!function_exists("view")) {

    /**
     * function to return view
     * @param string $name
     * @param null $data 
     * @return bool
     * @throws Exception
     */
    function view($name, $data = null)
    {

        $newName = View::viewFinder($name);
        View::viewComposer($newName, $data);
    }
}

if (!function_exists("uri")) {
    function uri($uri)
    {
        return explode("/", $uri);
    }
}

if (!function_exists("extension")) {
    function extension($name)
    {
        $arry = explode(".", $name);
        $extension = end($arry);
        $actualExtension = strtolower($extension);
        return $actualExtension;
    }
}

if (!function_exists("upload")) {
    function upload($file)
    {
        $name = $file['name'];
        // $size = $file['size'];
        $error = $file['error'];
        $tmp_name = $file['tmp_name'];

        $ext =  extension($name);
        $string = "abcdefghijklmnopqrstuvwxyz1234567890";
        $strgen = str_shuffle($string);
        $newStrName = substr($strgen, 0, 12);
        $new_name = "file" . $newStrName . "media." . $ext;
        $filename = "public/uploads/" . $new_name;

        $validExt = array("jpg", "png", "jpeg", "gif", "mp4", "mov", "mp3", "m4a");
        if (in_array($ext, $validExt)) {
            if ($error == 0) {
                if ($file['size'] < 50000000) {
                    $up = move_uploaded_file($tmp_name, $filename);
                    if ($up) {
                        return $filename;
                    }
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}

if (!function_exists("formError")) {
    function formError($error)
    {
        if (isset($_GET[$error])) {
?>
            <span class="text-danger text-sm"><?php echo $_GET[$error] ?></span>
<?php
        }
    }
}

if (!function_exists("validate")) {
    function validate(array $request, array $data)
    {

        $error = [];
        foreach ($request as $key => $value) {
            foreach ($data as $dkey => $dvalue) {
                if ($key === $dkey) {
                    foreach ($dvalue as $ddvalue) {
                        $tv = explode(":", $ddvalue);
                        if ($tv[0] === "max") {
                            if (strlen($value) > $tv[1]) {
                                array_push($error, "$key ecxide the maxmum length");
                            }
                        }
                        if ($tv[0] === "min") {
                            if (strlen($value) < $tv[1]) {
                                array_push($error, "$key does not meet the maxmum length");
                            }
                        }
                        if ($tv[0] === "required") {
                            if ($value === "") {
                                array_push($error, "$key must not be empty");
                            }
                        }
                        if ($tv[0] === "string") {
                            if (!is_string($value)) {
                                array_push($error, "$key must be string");
                            }
                        }
                    }
                }
            }
        }
        return $error;
    }
}



if (!function_exists("createfile")) {
    function createfile($fname, $data)
    {
        $file = fopen("resources/views/" . $fname, "w") or die("failed to open file");
        $writtefile = fwrite($file, $data);
        if ($writtefile) {
            return true;
            fclose($file);
        } else {
            return false;
            fclose($file);
        }
    }
}


if (!function_exists("redirect")) {
    function redirect($url, array $message = null)
    {
        $messages = "";
        if (is_array($message)) {
            if (count($message) > 0) {
                // $messages = "?";
                foreach ($message as $key => $value) {
                    $messages = "?" . $key . "=" . $value . "&";
                }
            }
        }
        $redirect = $url . $messages;
        header("location:$redirect");
        exit();
    }
}


if (!function_exists("lastTwoUrl")) {
    function lastTwoUrl()
    {
        $uri = urldecode(       //*****///*** */ */
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)  //**** */
        );
        /**********/ /****//**/ //*** */ */ */ */
        $urlArray = uri($uri);
        $url = end($urlArray);
        $array = [];
        if (isset($_SESSION['lastTwoUrl'])) {
            $array = $_SESSION['lastTwoUrl'];
            if (count($array) == 1) {
                $array[1] = $url;
                $_SESSION['lastTwoUrl'] =  $array;
                // echo "woow";
            }

            if (count($array) == 2) {
                $lastUrl = $array[1];
                $array[0] = $lastUrl;
                $array[1] = $url;
                $_SESSION['lastTwoUrl'] =  $array;
            }
        } else {
            $array = [$url];
            $_SESSION['lastTwoUrl'] = $array;
        }
    }
}


function urlHit()
{
    if (isset($_SESSION['hitUrl'])) {
        $array = $_SESSION['hitUrl'];
        $uri = urldecode(       //*****///*** */ */
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)  //**** */
        );
        /**********/ /****//**/ //*** */ */ */ */
        $urlArray = uri($uri);
        $url = end($urlArray);
        if (in_array($url, $array)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}


function session_url($url)
{
    if (isset($_SESSION['hitUrl'])) {
        ifSessionExist($url);
    } else {
        ifSessionNotExist($url);
    }
}


function ifSessionExist($url)
{
    $array = $_SESSION['hitUrl'];
    $count = count($array);
    $array[$count] = $url;
    $_SESSION['hitUrl'] = $array;
}

function ifSessionNotExist($url)
{
    $_SESSION['hitUrl'] = [];
    $array = $_SESSION['hitUrl'];
    $count = count($array);
    $array[$count] = $url;
    $_SESSION['hitUrl'] = $array;
}

function dd($key)
{
    echo "<pre>";
    if (is_array($key)) {
        foreach ($key as $key => $value) {
            echo $key . " => ";
            print_r(json_encode($value));
            echo "<br><br>";
        }
    } elseif (is_object($key)) {
        print_r($key);
    } else {
        echo $key;
    }
    die;
}

use App\Models\User;
use support\Database\DB;
use support\lib\dictionaly;
use support\token\token;


if (!function_exists("dictional")) {
    function dictionaly($englishWord)
    {
        $dict = new dictionaly();
        $language = $_COOKIE['language'];
        $dictionaly = $dict->english_swahili();

        if ($language === "english") {
            echo $englishWord;
        } else {
            $word = strtolower($englishWord);
            if (!isset($dictionaly[$word])) {
                $swahiliWord = $englishWord;
            } else {
                $swahiliWord = $dictionaly[$word];
            }

            echo $swahiliWord;
        }
    }
}





function redirectback(array $message = null)
{
    redirect('home');
}

if (!function_exists("language")) {
    function language()
    {
        if (isset($_COOKIE['language'])) {
        } else {
            setcookie('language', $_ENV['LANGUAGE'], time() + 60 * 60 * 24 * 30);
        }
    }
}


if (!function_exists("encriptId")) {
    function encriptId($data)
    {
        $cipher = 'camellia-192-cfb1';
        if (in_array($cipher, openssl_get_cipher_methods())) {
            $iv_legth = openssl_cipher_iv_length($cipher);
            $option = 0;
            $encryption_iv = '1234567891025000';
            $encryption_key = $_ENV['KEY'];
            $cipterText = openssl_encrypt($data, $cipher, $encryption_key, $option, $encryption_iv);
            return $cipterText;
        }
    }
}


if (!function_exists("decriptID")) {
    function decriptID($data)
    {
        $cipher = 'camellia-192-cfb1';
        if (in_array($cipher, openssl_get_cipher_methods())) {
            $iv_legth = openssl_cipher_iv_length($cipher);
            $option = 0;
            $encryption_iv = '1234567891025000';
            $encryption_key = $_ENV['KEY'];
            $cipterText = openssl_decrypt($data, $cipher, $encryption_key, $option, $encryption_iv);
            return $cipterText;
        }
    }
}

if (!function_exists("csrf")) {
    function csrf()
    {
        $tocken  = new token();
        return $tocken->token();
    }
}

if (!function_exists("formInput")) {
    function formInput($name = "",$type = "text",$value = "",$placeholder = "", $id = "", $class = "")
    {
        echo "
            <input type='$type' name='$name' class='$class' placeholder='$placeholder' id='$id' value='$value'>
        ";
    }
}

if (!function_exists("csrf_Token")) {
    function csrf_Token()
    {
        echo "
            <input type='hidden' name='csrf_Token'  value='".csrf()."'>
        ";
    }
}

if (!function_exists("reference_no")) {
    function reference_no()
    {
        return random_int(1, 10000).substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 2);
    }
}

if(!function_exists("setsession")){
    function setsession($name,$value){
       $_SESSION[$name] = $value;
    }
}

if(!function_exists("unsetsession")){
    function unsetsession($name){
        if(isset($_SESSION[$name])){
            unset($_SESSION[$name]);
        }
    }
}

if(!function_exists("getsession")){
    function getsession($name){
        if(isset($_SESSION[$name])){
            return $_SESSION[$name];
        }else{
            return false;
        }
    }
}