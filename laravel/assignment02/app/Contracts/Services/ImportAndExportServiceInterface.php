<?php

namespace App\Contracts\Services;

interface ImportAndExportServiceInterface
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
