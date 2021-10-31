<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use Illuminate\Support\Facades\DB;
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
        $request->validate([
            'file' => 'required|mimes:xls,xlsx,csv,pdf'
        ]);

        try {
            DB::beginTransaction();

            $this->fileInterface->fileImport($request);

            DB::commit();

            return redirect('/')->with('message', 'Posts uploaded successfully !');
        } catch (\Exception $e) {
            DB::rollback();

            return redirect('/')->with('message', 'Posts upload failed !');
        }
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
