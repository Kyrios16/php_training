<?php

namespace App\Dao;

use App\Contracts\Dao\ImportAndExportDaoInterface;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;

class ImportAndExportDao implements ImportAndExportDaoInterface
{
    /**
     * To import data
     * @param $request input data from request
     * @return $fileData
     */
    public function fileImport($request)
    {
        $fileData = Excel::import(new UsersImport, $request->file('file')->store('temp'));
        return $fileData;
    }

    /**
     * To export file
     * @return excel file
     */
    public function fileExport()
    {
        $exportFile = Excel::download(new UsersExport, 'users-collection.xlsx');
        return $exportFile;
    }
}
