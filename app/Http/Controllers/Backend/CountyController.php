<?php

namespace App\Http\Controllers\Backend;

use App\Models\SubCounty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountyController extends Controller
{
    public function getSubCounty($id)
    {
        $html = '';
        $sections = SubCounty::where('county_id', $id)->get();

        foreach ($sections as $section) {
            $html .= '<option value="' . $section->id . '">' . $section->sub_county_name . '</option>';
        }

        return response()->json($html);
    }
}
