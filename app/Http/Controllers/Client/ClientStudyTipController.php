<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\StudyTip;
use Illuminate\Http\Request;

class ClientStudyTipController extends Controller
{
    public function index()
    {
        $study_tips = StudyTip::orderBy('id', 'desc')->get();

        return view('client.pages.study-tip.index', compact('study_tips'));
    }

    public function show($id)
    {
        $study_tip = StudyTip::findOrFail($id);

        return view('client.pages.study-tip.show', compact('study_tip'));
    }
}
