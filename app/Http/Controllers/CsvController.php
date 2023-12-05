<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CsvData;

class CsvController extends Controller
{
    public function showForm()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
        ]);

        $file = $request->file('csv_file');
        $path = $file->path();

        $data = array_map('str_getcsv', file($path));

        foreach ($data as $row) {

            $expectedColumnCount = 17;

            if(count($row)>=$expectedColumnCount){
            CsvData::create([
                'column1' => $row[0],
                'column2' => $row[1],
                'column3' => $row[2],
                'column4' => $row[3],
                'column5' => $row[4],

                'column6' => $row[5],
                'column7' => $row[6],
                'column8' => $row[7],
                'column9' => $row[8],
                'column10' => $row[9],

                'column11' => $row[10],
                'column12' => $row[11],
                'column13' => $row[12],
                'column14' => $row[13],
                'column15' => $row[14],
                'column16' => $row[15],
                'column17' => $row[16],
             

                // Add other columns here (column3 to column12)
            ]);
        } 
        else {

            \Log::error('csv row does not have all the req cloumns:',['row'=>$row]);
        }
    }
        return redirect()->back()->with('success', 'CSV file uploaded successfully');
    }

    public function show()
    {
        $csvData = CsvData::all();
        return view('show',compact('csvData'));
    }
    public function PaginationData(Request $request){
        $page =$request->input('page',1);
        $perpage = 10;
        $csvDaTa = CsvData::paginate($perpage,['*'],'page',$page);
        return response()->json($csvDaTa);
    }
}