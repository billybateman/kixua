<?php

/** Check if environment is development and display errors **/
function downloadUrlToFile($url, $outFileName)
{
    set_time_limit(0);
    return copy($url, $outFileName);
}

function replaceDefaultWithModelName($filePath, $modelName) {
    $fileContents = file_get_contents($filePath);
    $updatedContents = str_replace('default', $modelName, $fileContents);
    return $updatedContents;
}


function extractMigrationTableName($string) {
    $parts = explode('_', $string, 3);
    return end($parts);
}

function redirect(string $url): void
{
    header("Location: $url");
    exit();
}

function mkmap($dir){
    //$ffs = scandir($dir);

    $ffs = array_diff(scandir($dir), array('.git', '.DS_Store','.vscode'));
                        
    echo '<ul>';
    foreach($ffs as $file){
        if($file != '.' && $file!= '..' ){

            $path=$dir.'/'.$file;
             echo "<li><a href='".$path."'>$file</a></li>";           

            if(is_dir($dir.'/'.$file)) mkmap($dir.'/'.$file);

        }
    }
    echo '</ul>';
}

function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
}

function normalizeUrl($url)
{
    $url = strtolower($url);
    $url = str_replace(['http://', 'https://', 'www.'], '', $url);
    return rtrim($url, '/');
}

function downloadVideo($url)
{
    $outputDir = CDN_FOLDER . "/videos/files/";
    if (!is_dir($outputDir)) {
        mkdir($outputDir, 0777, true);
    }

    $filename = uniqid() . '.mp4';
    $filePath = $outputDir . $filename;

    $command = "/usr/local/bin/yt-dlp -o " . escapeshellarg($filePath) . " " . escapeshellarg($url);
    shell_exec($command);

    return file_exists($filePath) ? $filename : "error";
}

function login()
{
    echo '<script type="text/javascript">window.location.href = "/login";</script>';
}

function filterXSS($string, $allowedTags = ['a', 'em', 'strong', 'cite', 'code', 'ul', 'ol', 'li', 'dl', 'dt', 'dd'])
{
    $string = str_replace(chr(0), '', $string);
    $string = preg_replace('%&\s*\{[^}]*(\}\s*;?|$)%', '', $string);
    $string = str_replace('&', '&amp;', $string);
    $string = preg_replace('/&amp;#([0-9]+;)/', '&#\1', $string);
    $string = preg_replace('/&amp;#[Xx]0*((?:[0-9A-Fa-f]{2})+;)/', '&#x\1', $string);
    $string = preg_replace('/&amp;([A-Za-z][A-Za-z0-9]*;)/', '&\1', $string);
    $string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    return addslashes($string);
}

function convertTitleToURL($str)
{
    $str = strtolower($str);
    $str = str_replace(' ', '-', $str);
    $str = preg_replace('/[^a-z0-9\-]/', '', $str);
    $str = preg_replace('/-+/', '-', $str);
    return trim($str, '-');
}

function setReporting()
{
    if (DEVELOPMENT_ENVIRONMENT) {
        error_reporting(E_ALL);
        ini_set('display_errors', 'On');
    } else {
        error_reporting(E_ALL);
        ini_set('display_errors', 'Off');
        ini_set('log_errors', 'On');
        ini_set('error_log', ROOT . DS . 'tmp' . DS . 'logs' . DS . 'error.log');
    }
    ini_set('post_max_size', '2000M');
    ini_set('upload_max_filesize', '2000M');
}

function stripSlashesDeep($value)
{
    return is_array($value) ? array_map('stripSlashesDeep', $value) : stripslashes($value);
}


function send_email ($to_email, $from_email, $from_name, $subject, $msg) {
    //split up to email array, if given
    if (is_array($to_email)) {
        $to_email_string = implode(', ', $to_email);
    }
    else {
        $to_email_string = $to_email;
    }
  
    //Assemble headers
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: $from_name <$from_email>" . "\r\n";
  
    //send via PHP's mail() function
    mail($to_email_string, $subject, $msg, $headers);
}

function removeMagicQuotes()
{
    $_GET = stripSlashesDeep($_GET);
    $_POST = stripSlashesDeep($_POST);
    $_COOKIE = stripSlashesDeep($_COOKIE);
}

function unregisterGlobals()
{
    if (ini_get('register_globals')) {
        $arrays = ['_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES'];
        foreach ($arrays as $array) {
            foreach ($GLOBALS[$array] as $key => $var) {
                if ($var === $GLOBALS[$key]) {
                    unset($GLOBALS[$key]);
                }
            }
        }
    }
}

function sendEmail($toEmail, $fromEmail, $fromName, $subject, $message)
{
    $toEmailString = is_array($toEmail) ? implode(', ', $toEmail) : $toEmail;
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: $fromName <$fromEmail>" . "\r\n";
    mail($toEmailString, $subject, $message, $headers);
}

function dumpHtmlTree($node, $showAttr = true, $deep = 0)
{
    $node->dump($node);
}

function randomPassword($length, $count, $characters)
{
    $symbols = [
        "lower_case" => 'abcdefghijklmnopqrstuvwxyz',
        "upper_case" => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        "numbers" => '1234567890',
        "special_symbols" => '!?~@#-_+<>[]{}'
    ];

    $characters = explode(",", $characters);
    $usedSymbols = '';
    foreach ($characters as $value) {
        $usedSymbols .= $symbols[$value];
    }

    $symbolsLength = strlen($usedSymbols) - 1;
    $passwords = [];

    for ($p = 0; $p < $count; $p++) {
        $pass = '';
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $symbolsLength);
            $pass .= $usedSymbols[$n];
        }
        $passwords[] = $pass;
    }

    return $passwords;
}

setReporting();
removeMagicQuotes();
unregisterGlobals();

?>