<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Logbook;
use PDF;
class PrintController extends Controller
{
      public function index()
      {
            $logbooks = Logbook::all();
            return view('printstudent')->with('logbooks', $logbooks);
      }
      public function prnpriview($logbookId)
      {

            $logbook = Logbook::find($logbookId);
            
            // return view('studentsprint')->with('logbook', $logbooks);
            $pdf = PDF::loadView('studentsprint',compact('logbook'));
            return $pdf->download('test.pdf');
      }
}
