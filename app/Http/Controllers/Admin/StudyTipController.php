<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudyTip;
use App\Http\Requests\StoreStudyTipRequest;
use App\Http\Requests\UpdateStudyTipRequest;

class StudyTipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $study_tips = StudyTip::orderBy('id', 'desc')->get();

        return view('admin.study_tip.index', compact('study_tips'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.study_tip.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudyTipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudyTipRequest $request)
    {
        // dd($request->all());
        $study_tip = new StudyTip();

            $study_tip->title = $request->title;
            $study_tip->link = $request->link;
            $study_tip->image = $request->image->store('study-tip', 'public');
        
        $study_tip->save();

        return redirect()->to('/admin/study-tip')->with('message', 'Successfully Create Study Tip');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudyTip  $studyTip
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $study_tip = StudyTip::findOrFail($id);

        return view('admin.study_tip.show', compact('study_tip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudyTip  $studyTip
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $study_tip = StudyTip::findOrFail($id);

        return view('admin.study_tip.edit', compact('study_tip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudyTipRequest  $request
     * @param  \App\Models\StudyTip  $studyTip
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudyTipRequest $request, $id)
    {
        $study_tip = StudyTip::findOrFail($id);
        
            $study_tip->title = $request->title;
            $study_tip->link = $request->link;
            if($request->image != '')
            {
                $study_tip->image = $request->image->store('study-tip', 'public');
            }
        
        $study_tip->save();

        return redirect()->to('/admin/study-tip')->with('message', 'Successfully update Study Tip');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudyTip  $studyTip
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $study_tip = StudyTip::findOrFail($id);
        $study_tip->delete();

        return redirect()->to('/admin/study-tip')->with('message', 'Successfully Delete Study Tip');
    }
}
