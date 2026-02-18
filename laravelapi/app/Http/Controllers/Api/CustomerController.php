<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return response()->json(compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //return response()->json($request->all());
        try {
            $customer = new Customer();
            $customer->name = $request->customer['name'];
            $customer->email = $request->customer['email'];
            $customer->phone = $request->customer['phone'];
            $customer->address = $request->customer['address'];
            // $customer->gender = $request->customer['gender'];
            // $customer->dob = $request->customer['dob'];
            // $customer->photo = $request->customer['photo'];

            $customer->save();
            return response()->json(['message' => 'Customer created successfully', 'customer' => $customer], 201);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Failed to create customer', 'error' => $th->getMessage()], 500);
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return response()->json(['success' => 'Customer deleted successfully'], 200);
    }
}
