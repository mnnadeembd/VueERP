<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::latest()->get();
        return response()->json(compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            $request->all()
        ], 201);
        try {

            // ✅ Validation
            $request->validate([
                'name' => 'required|string|max:100',
                'email' => 'required|email|unique:customers,email',
                'phone' => 'nullable|string|max:20',
                'address' => 'nullable|string|max:255',
                'gender' => 'nullable',
                'dob' => 'nullable|date',
                'password' => 'required|min:6',
                'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $customer = new Customer();

            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->gender = $request->gender;
            $customer->dob = $request->dob;

            // ✅ password hash
            $customer->password = Hash::make($request->password);

            // ✅ photo upload
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('customers'), $filename);
                $customer->photo = $filename;
            }

            $customer->save();

            return response()->json([
                'message' => 'Customer created successfully',
                'customer' => $customer
            ], 201);

        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Failed to create customer',
                'error' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return response()->json(compact('customer'));
    }

    /**
     * Update the specified resource.
     */
    public function update(Request $request, $id)
    {
        try {
            $customer = Customer::findOrFail($id);

            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->gender = $request->gender;
            $customer->dob = $request->dob;

            if ($request->password) {
                $customer->password = Hash::make($request->password);
            }

            // update photo
            if ($request->hasFile('photo')) {

                // delete old image
                if ($customer->photo && file_exists(public_path('customers/' . $customer->photo))) {
                    unlink(public_path('customers/' . $customer->photo));
                }

                $file = $request->file('photo');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('customers'), $filename);

                $customer->photo = $filename;
            }

            $customer->save();

            return response()->json([
                'message' => 'Customer updated successfully',
                'customer' => $customer
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Failed to update',
                'error' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource.
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);

        // delete photo
        if ($customer->photo && file_exists(public_path('customers/' . $customer->photo))) {
            unlink(public_path('customers/' . $customer->photo));
        }

        $customer->delete();

        return response()->json([
            'success' => 'Customer deleted successfully'
        ], 200);
    }
}
