<?php

namespace App\Contracts\Dao;

use App\Dao\ImportAndExportDao;

interface ImportAndExportDaoInterface
{
    /**
     * To import data
     * @param $request input data from request
     * 
     */
    public function fileImport($request);

    /**
     * To export file
     */
    public function fileExport();
}
