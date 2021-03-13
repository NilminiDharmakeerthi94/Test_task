<?php

namespace App\Http\Controllers;
use App\Email_manager;
use Illuminate\Http\Request;
use App\Exports\Email_managersExport;
use App\Imports\Email_managersImport;
use Maatwebsite\Excel\Facades\Excel;

class EmailManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
        public function index()
        {
            
            $email_managers = Email_Manager::latest()->paginate(env('PER_PAGE'));
            return view('email_managers.index',compact('email_managers'));                       // function for the show data
        }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        
        $email_managers      = Email_manager::all();
        return view('email_managers.create',compact('email_managers'));    // function for retrive the added data
    }
    

    public function store(Request $request)
    {
       
        
        Email_manager::create([
            'id'       => request('id'),    // function for add new email
            'name'   => request('name'),
            'number'        => request('number'),
            'email'        => request('email'),
        ]);
        return redirect()->route('email_managers.index')->withSuccess('Data has been added');
    }


    public function importExportView()
    {
       return view('email_managers.index');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new email_managersExport, 'email_managers.xlsx');          // function for the export file
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new email_managersImport,request()->file('file'));  // function for the import file
           
        return back();
    }

    
 
}
