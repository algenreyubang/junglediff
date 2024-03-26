<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            [
                "id" => 1,
                "name" => "John Doe",
                "username" => "johndoe123",
                "email" => "johndoe@example.com",
                "contactnum" => "123-456-7890"
            ],
            [
                "id" => 2,
                "name" => "Jane Smith",
                "username" => "janesmith456",
                "email" => "janesmith@example.com",
                "contactnum" => "987-654-3210"
            ],
            [
                "id" => 3,
                "name" => "Alice Johnson",
                "username" => "alicej",
                "email" => "alice@example.com",
                "contactnum" => "555-555-5555"
            ],
            
        ];
        
        return response()->json($data); 
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
