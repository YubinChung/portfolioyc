<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use Validator;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menus'] = Menu::all();

        return view('admin.menu.index', $data);

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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Menu::$rules);
        if($validator->fails()){
            return redirect('/admin/menuList')->withErrors($validator->errors())->withInput();

        }

        $data['menus'] = Menu::all();

        if($request->id){ $data['menus'] = Menu::find($request->id);

            // edit

        }else{
            $data['menus'] = new Menu();
            $data['menus']->m_order = Menu::count();
        }

        $data['menus']->name = $request->name;
        $data['menus']->slug = $request->slug;
        $data['menus']->status = $request->status == null ? 'unpublished' : 'published';
        $data['menus']->save();

//        $data['menus'] = Menu::where('status','=','published')->get();

        return back()->with('message', $data['menus']->name." has been stored");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/admin/menuList');
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
        $data['menus'] = Menu::findOrFail($id);
        $data['menus'] ->name = $request->name;
        $data['menus'] ->slug = $request->slug;
        $data['menus'] ->status = $request->status;
        $data['menus'] ->save();

        return back()->with('message', $data['menus']->name." has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['menus'] = Menu::findOrFail($id);
        $data['menus']->delete();

        return redirect('/admin/menuList')->with('message', $data['menus']->name." has been deleted");
    }
}
