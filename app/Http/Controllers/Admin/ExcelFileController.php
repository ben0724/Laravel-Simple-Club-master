<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ExcelFile;
use Storage;

class ExcelFileController extends Controller
{
    public function index() {
        $excel_files = ExcelFile::all();

        return view('admin.excel_files.index', compact('excel_files'));
    }

    public function upload() {
        $this->authorize('upload', ExcelFile::class);

        return view('admin.excel_files.upload');
    }

    public function store(Request $request) {
        $this->authorize('upload', ExcelFile::class);

        $filename = uniqid().".".$request->file->getClientOriginalExtension();
        $request->file->storeAs('excel_files', $filename);

        $excel_file = new ExcelFile;
        $excel_file->name = $request->file->getClientOriginalName();
        $excel_file->path = 'excel_files/'.$filename;
        $excel_file->save();
        
        session()->flash('message', "A new file '{$excel_file->name}' is uploaded successfully!");

        return redirect('/admin/excel_files');
    }

    public function download(Request $request, $id) {
        $excel_file = ExcelFile::findOrFail($id);

        $this->authorize('download', $excel_file);

        return Storage::download($excel_file->path, $excel_file->name);
    }

    public function destroy($id) {
        $excel_file = ExcelFile::findOrFail($id);

        $this->authorize('delete', $excel_file);

        $name = $excel_file->name;
        
        Storage::delete($excel_file->path);        
        $excel_file->delete();

        session()->flash('message', "Excel file '{$name}' is deleted successfully!");

        return redirect('/admin/excel_files');
    }
}
