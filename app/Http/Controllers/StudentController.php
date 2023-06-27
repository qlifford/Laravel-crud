<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; 
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    public function index()
    {
        $data = Student::paginate(2);
        // return $data;
        return view('students', compact('data'));
    }
    public function add_student()
    {
        return view('add_students');
    }

    public function save_student(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'address' => 'required',

            ]);
            // dd($request->all());
            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            $address = $request->address;

            $data = new Student();
            $data->name = $name;
            $data->email = $email;
            $data->phone = $phone;
            $data->address = $address;
            $data->save();

            Alert::success('success', 'Student added successfully');

            return redirect()->back();
            
        }
        public function edit_student($id)
        {
            $data = Student::where('id', '=', $id)->first();
            return view('edit_students', compact('data'));
        }
        public function update_student(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'address' => 'required',

            ]);
            // dd($request->all());
            $id = $request->id;
            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            $address = $request->address;

            Student::where('id','=',$id)->update([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
            ]);
            Alert::info('success', 'Record updated successfully');

            return redirect()->back();



        }
        public function delete_student($id)
        {
            Student::where('id','=',$id)->delete();

            Alert::error('Done', 'Record Deleted');
            // return redirect()->back()->with('message', 'Record Deleted');
            return redirect()->back();

        }

    
}
