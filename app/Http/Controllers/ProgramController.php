<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use App\Models\Cluster;
use App\Models\Initiative;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;


class ProgramController extends Controller
{


    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $programs = Program::all();

        $initiatives = Initiative::all();

        return view('md.program.index', compact('programs', 'initiatives'));
    }


    public function create() {
        $user = Auth::user();
        $initiatives = Initiative::all();
        $clusters = Cluster::all();

        return view('md.program.create', compact('user', 'initiatives', 'clusters'));
    }

    public function store(StoreProgramRequest $request) {
        $progam = Program::create($request->all());
        return redirect()->route('program.index');
    }

    public function show(Program $program) {}

    public function edit(Program $program) {
        $initiatives = Initiative::all();
        $clusters = Cluster::all();

        return view('md.program.edit', compact('initiatives', 'program', 'clusters'));
    }

    public function update(UpdateProgramRequest $request, Program $program) {
        $program->update($request->all());
        return redirect()->route('program.index');
    }

    public function destroy(Program $program) {
        $program->delete();

        return redirect()->route('program.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
