<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Querry using Eloquent ORM
        $customers = Customer::all(); // All rtecords from the table
        return view('customers.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Form to create customer
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:50|unique:customers,username',
            'email' => 'required|email|unique:customers,email',
            'password_hash' => 'required|min:8',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'date_of_birth' => 'nullable|date',
            'address' => 'nullable',
            'phone_number' => 'nullable|max:20',
        ]);

        Customer::create($validatedData);

        return redirect()->route('customers.index');
    }

    /**
     * Display the specific resource.
     */
    public function show(string $id)
    {
        $customer = Customer::find($id);
        return view('customers.show', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::find($id);
        return view('customers.edit', ['customer' => $customer]);
    }

    /**
     * update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:50|unique:customers,username,' . $id,
            'email' => 'required|email|unique:customers,email,' . $id,
            'password_hash' => 'required|min:8',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'date_of_birth' => 'nullable|date',
            'address' => 'nullable',
            'phone_number' => 'nullable|max:20',
        ]);

        $customer = Customer::find($id);
        $customer->update($validatedData);

        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from the storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
