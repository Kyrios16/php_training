<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\Contracts\Services\ImportAndExportServiceInterface;

class UserController extends Controller
{

    private $fileInterface;

    public function __construct(ImportAndExportServiceInterface $fileInterface)
    {
        $this->fileInterface = $fileInterface;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function fileImportExport()
    {
        return view('file-import');
    }

    /**
     * To import data
     * @param $request input data from request
     * @return \Illuminate\Support\Collection
     */
    public function fileImport(Request $request)
    {
        $this->fileInterface->fileImport($request);
        return back();
    }

    /**
     * To export file
     * @return export file
     */
    public function fileExport()
    {
        return $this->fileInterface->fileExport();
    }
}
