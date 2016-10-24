<?php
namespace common\models;

use yii\base\Model;
use yii\base\Exception;

class File extends Model
{
    public $fileName;
    public $extension;
    public $body;

    public function rules()
    {
        return [
            [['fileName', 'extension'], 'required'],
        ];
    }

    public function createFile()
    {
        $dir = dirname(dirname(__DIR__)) . '/upload/';
        $this->fileName = mb_strtolower($this->fileName);
        if (!preg_match('/^\.(\w+)$/', $this ->extension)) {
            return false;
        }
        $fp = fopen($dir . $this->fileName . $this->extension , 'w');
        if (!$fp) {
            return false;
        }
        fwrite($fp, $this->body);
        fclose($fp);
        return true;
    }

    public function updateFile()
    {
        return $this->createFile();
    }

    public function removeFile($fileName)
    {
        $dir = dirname(dirname(__DIR__)) . '/upload/';
        if (!file_exists($dir . $fileName)){
            return false;
        }
        try {
            unlink($dir . $fileName);
        } catch (Exception $e) {
            return false;
        }
        return true;
    }

    public function getAllFiles()
    {
        $files = $this->find('*.txt');
        $data = [];
        foreach ($files as $file) {
            $data[] = basename($file);
        }
        return $data;
    }

    public function findByName($fileName)
    {
        $dir = dirname(dirname(__DIR__)) . '/upload/';
        return (file_exists($dir . $fileName)) ? true : false;
    }

    public function find($pattern)
    {
        $dir = dirname(dirname(__DIR__)) . '/upload/';
        $files = glob("$dir/$pattern");
        return ($files) ? $files : false;
    }
}