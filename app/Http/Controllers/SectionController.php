<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
   

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        // $sections = Section::orderBy('id')->paginate(100);
        return view('sections.index');
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

  
    public function show(Section $section)
    {
        //
    }

    
    public function edit(Section $section)
    {
        //
    }


    public function update(Request $request, Section $section)
    {
        //
    }

 
    public function destroy(Section $section)
    {
        //
    }
}
