<?php

namespace App\Services;

use App\Contracts\Dao\ImportAndExportDaoInterface;
use App\Contracts\Services\ImportAndExportServiceInterface;
use App\Imports\UsersImport;

class ImportAndExportService implements ImportAndExportServiceInterface
{

    private $fileDao;

    public function __construct(ImportAndExportDaoInterface $fileDao)
    {
        $this->fileDao = $fileDao;
    }

    /**
     * To import data
     * @param $request input data from request
     * @return file data
     */
    public function fileImport($request)
    {
        return $this->fileDao->fileImport($request);
    }

    /**
     * To export file
     * @return file
     */
    public function fileExport()
    {
        return $this->fileDao->fileExport();
    }
}
