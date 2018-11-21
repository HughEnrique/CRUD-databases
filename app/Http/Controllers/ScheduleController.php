<?php

namespace ProyectoLaravel\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoLaravel\Schedule;
use ProyectoLaravel\Area;
use ProyectoLaravel\Course;



class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::orderBy('startime','ASC')->get();
        $courses = Course::All();
        return view('schedules.index',compact(['schedules','courses']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::All();
        $courses = Course::All();

        return view('schedules.create',compact(['courses','areas']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'startime' => 'required',
            'endtime' => 'required',
            'courses' => 'required',
            'areas' => 'required',
            'check-box' => 'required'
             ]);

        $schedule = new Schedule;
        if ($request->input('check-box')==1) {
            $schedule->startime = $request->input('startime');
            $schedule->endtime = $request->input('endtime');
            $schedule->day = 'Monday';
            $schedule->course_id = $request['courses'];
            $schedule->area_id = $request['areas'];        
            //$schedule->save();    
        }
        if ($request->input('check-box')==2) {
            $schedule->startime = $request->input('startime');
            $schedule->endtime = $request->input('endtime');
            $schedule->day = 'Tuesday';
            $schedule->course_id = $request['courses'];
            $schedule->area_id = $request['areas'];        
            //$schedule->save();    
        }
        if ($request->input('check-box')==3) {
            $schedule->startime = $request->input('startime');
            $schedule->endtime = $request->input('endtime');
            $schedule->day = 'Wednesday';
            $schedule->course_id = $request['courses'];
            $schedule->area_id = $request['areas'];        
            //$schedule->save();    
        }
        if ($request->input('check-box')==4) {
            $schedule->startime = $request->input('startime');
            $schedule->endtime = $request->input('endtime');
            $schedule->day = 'Thursday';
            $schedule->course_id = $request['courses'];
            $schedule->area_id = $request['areas'];        
            //$schedule->save();    
        }
        if ($request->input('check-box')==5) {
            $schedule->startime = $request->input('startime');
            $schedule->endtime = $request->input('endtime');
            $schedule->day = 'Friday';
            $schedule->course_id = $request['courses'];
            $schedule->area_id = $request['areas'];        
            //$schedule->save();    
        }
        $schedule->save();

        $schedules = Schedule::orderBy('startime','ASC')->get();
        $courses = Course::All();
        return view('schedules.index', compact(['schedules','courses']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses = $id;
        $areas = Area::All();
        $schedules = Schedule::orderBy('startime','ASC')->get();
        return view('schedules.show', compact(['courses','areas','schedules']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
