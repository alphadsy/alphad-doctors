<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDoctor;
use App\Http\Requests\UpdateDoctor;
use App\Models\Doctor;
use App\utilities\Location;
use App\utilities\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class DoctorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('doctor')->only('edit', 'update');
        $this->middleware('auth')->except('index', 'show', 'search');
    }

    // get /doctors get all doctors
    public function index()
    {
        $doctors = Doctor::all();

        return view('doctors.index', ['doctors' => $doctors]);
    }

    // get /doctors/create create doctor page
    public function create()
    {
        return view('doctors.create');
    }

    // post /doctors create doctor
    public function store(CreateDoctor $request)
    {
        // can user create doctor
        $this->authorize('create', Doctor::class);

        //store
        $doctor = $request->user()->doctor()->create($request->only(
            ['association_id', 'specialization', 'bio', 'location', 'address', 'contact',]
        ));

        //upload avatar
        if ($request->hasFile('avatar')) {
            $doctor->avatar = $request->avatar->store('avatars');
            $doctor->save();
        }

        return redirect()->route('doctors.show', ['doctor' => $doctor]);
    }

    // get /doctors/{doctor} doctor page
    public function show(Doctor $doctor)
    {
        $doctors =[];

        return view('doctors.show', ['doctor' => $doctor, 'doctors' => $doctors]);
    }

    // get /doctors/edit edit doctor page
    public function edit()
    {
        $doctor = Auth::user()->doctor;

        return view('doctors.edit', ['doctor' => $doctor]);
    }

    // post /doctors update doctor
    public function update(UpdateDoctor $request)
    {
        //store
        $doctor = $request->user()->doctor;

        // can user update doctor
        $this->authorize('update', $doctor);

        // update
        $doctor->fill($request->only(
            ['bio', 'location', 'address', 'contact']
        ));

        // update avatar
        if ($request->hasFile('avatar')) {
            Storage::delete($doctor->avatar);
            $doctor->avatar = $request->avatar->store('avatars');
        }

        $doctor->save();

        return redirect()->route('doctors.show', ['doctor' => $doctor]);
    }

    public function destroy($id)
    {
        //
    }

}
