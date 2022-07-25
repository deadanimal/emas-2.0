<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OwenIt\Auditing\Models\Audit;

class AuditController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $audits = Audit::all();

        // var_dump($audits);
        // dd($audits);
        return view('audit', compact('audits'));
    }
}
