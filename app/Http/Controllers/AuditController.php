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

        $audits = Audit::with('theuser')->get();

        // var_dump($audits);
        // dd($audits);ZSA
        return view('audit', compact('audits'));
    }
}
