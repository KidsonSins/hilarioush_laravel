<?php

namespace App\Http\Controllers;

use App\Event;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\EventsCreateRequest;
use Intervention\Image\Facades\Image;


use App\Http\Requests;

class AdminEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('backend.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventsCreateRequest $request)
    {
        $input = $request->all();
        if ($request->file('photo_id')){
            $orgFile= $request->file('photo_id');
            $destinationPath = 'uploads/news_thumbnail';
            $name = time().$orgFile->getClientOriginalName();

            Image::make($orgFile->getRealPath())->resize(400, null, function ($constraint){
                $constraint->aspectRatio();
            })->crop(370,200)->save($destinationPath.'/'.$name);

            $orgFile->move('uploads', $name);
            $photo = Photo::create(['path'=>$name]);
            $input['photo_id']=$photo->id;

        }
        Event::create($input);
        return redirect('/admin/events');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('frontend.news_detail', compact('event'));
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
        $input = $request->all();
        if ($request->file('photo_id')){
            $orgFile = $request->file('photo_id');
            $destinationPath = ('uploads/news_thumbnail');

            $name = time().$orgFile->getClientOriginalName();
            //resize and crop code
            Image::make($orgFile->getRealPath())->resize(400, null, function ($constraint){
                $constraint->aspectRatio();
            })->crop(370,200)->save($destinationPath.'/'.$name);


            $orgFile->move('uploads', $name);
            $photo = Photo::create(['path'=>$name]);
            $input['photo_id']= $photo->id;

        }
        $event = Event::findOrFail($id);
        $event->update($input);
        return redirect('admin/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        if ($event->photo){
            unlink('uploads/'.$event->photo->path);
        }
        $event->delete();
        return redirect(route('admin.events.index'));
    }
}
