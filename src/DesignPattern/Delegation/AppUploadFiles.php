<?php


namespace App\DesignPattern\Delegation;


use App\DesignPattern\Delegation\Interfaces\UploadInterface;
use App\DesignPattern\Delegation\Upload\UploadDOC;
use App\DesignPattern\Delegation\Upload\UploadPDF;

class AppUploadFiles implements UploadInterface
{

    /**
     * @var UploadDOC
     */
    private UploadDOC $uploadDOCFileService;

    /**
     * @var UploadPDF
     */
    private UploadPDF $uploadPDFFileService;

    public function __construct(UploadPDF $uploadPDFFileService,UploadDOC $uploadDOCFileService)
    {
        $this->uploadPDFFileService = $uploadPDFFileService;

        $this->uploadDOCFileService = $uploadDOCFileService;
    }

    public function uploadFile(string $value)
    {
        $this->uploadDOCFileService->uploadFile($value);

        $this->uploadPDFFileService->uploadFile($value);
    }

}