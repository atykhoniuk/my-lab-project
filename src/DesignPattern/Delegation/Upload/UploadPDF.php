<?php declare(strict_types=1);


namespace App\DesignPattern\Delegation\Upload;


use App\DesignPattern\Delegation\Interfaces\UploadInterface;

class UploadPDF implements UploadInterface
{

    protected $upload;

    public function uploadFile(string $value): self
    {
        $this->upload = $value;

        return $this;
    }

}