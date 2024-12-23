<?php

class Uploader
{
    private $destinationPath;
    private $errorMessage;
    private $extensions = [];
    private $allowAll = false;
    private $maxSize;
    private $uploadName;
    private $sequence;
    private $sameFileName = false;
    private $sameName = false;

    public $name = 'Uploader';
    public $useTable = false;

    public function setDir($path)
    {
        $this->destinationPath = rtrim($path, '/') . '/';
        $this->allowAll = false;
    }

    public function allowAllFormats()
    {
        $this->allowAll = true;
    }

    public function setMaxSize($sizeMB)
    {
        $this->maxSize = $sizeMB * (1024 * 1024);
    }

    public function setExtensions(array $options)
    {
        $this->extensions = $options;
    }

    public function setSameFileName()
    {
        $this->sameFileName = true;
        $this->sameName = true;
    }

    private function getExtension($filename)
    {
        return strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    }

    public function setMessage($message)
    {
        $this->errorMessage = $message;
    }

    public function getMessage()
    {
        return $this->errorMessage;
    }

    public function getUploadName()
    {
        return $this->uploadName;
    }

    public function setSequence($seq)
    {
        $this->sequence = $seq;
    }

    private function generateRandomString()
    {
        return strtotime(date('Y-m-d H:i:s')) . rand(1111, 9999) . rand(11, 99) . rand(111, 999);
    }

    public function sameName($useSameName)
    {
        $this->sameName = $useSameName;
    }

    public function uploadFile($fileBrowse)
    {
        $result = false;
        $file = $_FILES[$fileBrowse];
        $size = $file["size"];
        $name = $file["name"];
        $ext = $this->getExtension($name);

        if (!$this->isValidDirectory()) {
            $this->setMessage("Destination folder is not a directory or not writable.");
        } elseif (empty($name)) {
            $this->setMessage("File not selected.");
        } elseif ($size > $this->maxSize) {
            $this->setMessage("File is too large.");
        } elseif ($this->isAllowedExtension($ext)) {
            $this->uploadName = $this->generateUploadName($ext);
            if (move_uploaded_file($file["tmp_name"], $this->destinationPath . $this->uploadName)) {
                $result = true;
            } else {
                $this->setMessage("Upload failed, try later.");
            }
        } else {
            $this->setMessage("Invalid file format.");
        }

        return $result;
    }

    private function isValidDirectory()
    {
        return is_dir($this->destinationPath) && is_writable($this->destinationPath);
    }

    private function isAllowedExtension($ext)
    {
        return $this->allowAll || in_array($ext, $this->extensions);
    }

    private function generateUploadName($ext)
    {
        if ($this->sameFileName) {
            return $this->uploadName;
        }
        return substr(md5(rand(1111, 9999)), 0, 8) . $this->generateRandomString() . ".$ext";
    }

    public function deleteUploaded()
    {
        unlink($this->destinationPath . $this->uploadName);
    }
}

?>