<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // query builder
        // get data
        // $student = DB::table('students')->get();

        // create data
        // DB::table('students')->insert([
        //     'name' => 'query builder',
        //     'gender' => 'L',
        //     'nis' => '0272625',
        //     'class_id' => 3
        // ]);

        //update data
        // DB::table('students')->where('id', 27)->update([
        //     'name' => 'query builder 2',
        //     'class_id' => 1
        // ]);

        // delete
        // DB::table('students')->where('id', 27)->delete();

        // orm
        // get data
        // $student =  Student::all();

        // create data
        // Student::create([
        //     'name' => 'eloquent',
        //     'gender' => 'P',
        //     'nis' => '0272633',
        //     'class_id' => 1
        // ]);

        // update data
        // Student::findOrFail(28)->update([
        //     'name' => 'eloquent 2',
        //     'class_id' => 4
        // ]);

        // delete
        // Student::findOrFail(28)->delete();
        // dd($student);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
