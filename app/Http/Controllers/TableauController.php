<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableauController extends Controller
{
    public function md_dashboard_01(Request $request) {
        $data = collect(
            ['initiative', 'phase', 'document', 'cluster', 'activity', 'plan', 'program', 'status']
        );
        return response()->json($data);
    }

    public function md_dashboard_02(Request $request) {}

    public function md_dashboard_03(Request $request) {}

    public function md_dashboard_04(Request $request) {}
}
