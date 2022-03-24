<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog as MasterModel;
use App\ViewBlog as MasterViewModel;
use Sentinel;
use Redirect;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{

    public function __construct(){

        $this->active = "blogs";
        $this->model = "Blog";
        $this->select = [
            'id',
            'title',
            'created_at'
        ];
        // 1 = all
        // 2 = only
        // 3 = exeptions
        $this->request_whit = 1;
        $this->only = [
        ];
        $this->exeptions = [
        ];
        $this->compact = ['word', 'active', 'model', 'view', 'columns', 'select', 'actions'];

        //Catalogs
    }

    public function columns()
    {
        $columns = [
            trans('validation.attributes.id'),
            trans('validation.attributes.title'),
            trans('validation.attributes.created_at'),
            trans('validation.attributes.actions'),
        ];

        return $columns;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $word = '';
        $active = '';
        $model = '';
        $view = '';
        $columns = '';
        $select = '';
        $actions = '';
        $active = $this->active;
        $model = $this->model;
        $view = 'index';
        $word = trans('module_'.$this->active.'.module_title');
        $columns = $this->columns();
        $select = $this->select;
        // 1 = (show, edit, delete)
        // 2 = (show, edit)
        // 3 = (show, delete)
        // 4 = (edit, delete)
        // 5 = (show)
        // 6 = (edit)
        // 7 = (delete)
        $actions = 1;

        return view('admin.index', compact($this->compact));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $word = '';
        $active = '';
        $model = '';
        $view = '';
        $columns = '';
        $select = '';
        $actions = '';
        $active = $this->active;
        $model = $this->model;
        $word = trans('module_'.$this->active.'.module_title');
        $columns = $this->columns();
        $select = $this->select;

        // Catalogs

        return view('admin.create', compact($this->compact));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $folder = public_path()."/uploads/blogs/";
        $random = date("Ymd_His_");


        $file = $request->image_1;
        $fileName = $file->getClientOriginalName();
        $image_1 = $random. '_' .$fileName;
        $file->move($folder, $image_1);

        $file = $request->image_2;
        $fileName = $file->getClientOriginalName();
        $image_2 = $random. '_' .$fileName;
        $file->move($folder, $image_2);

        $item = MasterModel::create([
           'title' => $request->title,
           'description' => $request->description,
           'written_by' => $request->written_by,
           'available' => $request->available,
           'image_1' => $image_1,
           'image_2' => $image_2,
        ]);

        if($item){
            return Redirect::route($this->active)->with('success', trans('module_'.$this->active.'.crud.create.success'));
        }else{
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.create.error'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $word = '';
        $active = '';
        $model = '';
        $view = '';
        $columns = '';
        $select = '';
        $actions = '';
        $item = MasterViewModel::find($id);

        $active = $this->active;
        $word = trans('module_'.$this->active.'.module_title');

        return view('admin.show', compact($this->compact, 'item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $word = '';
        $active = '';
        $model = '';
        $view = '';
        $columns = '';
        $select = '';
        $actions = '';
        $item = MasterModel::find($id);

        $active = $this->active;
        $model = $this->model;
        $word = trans('module_'.$this->active.'.module_title');
        $columns = $this->columns();
        $select = $this->select;

        // Catalogs

        return view('admin.edit', compact($this->compact, 'item'));
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
        $item = MasterModel::find($id);

        $folder = public_path()."/uploads/blogs/";
        $random = date("Ymd_His_");

        if(is_null($request->image_1)){
            $image_1 = $item->image_1;
        }
        else{
            $file = $request->image_1;
            $fileName = $file->getClientOriginalName();
            $image_1 = $random. '_' .$fileName;
            $file->move($folder, $image_1);
        }

        if(is_null($request->image_2)){
            $image_2 = $item->image_2;
        }
        else{
            $file = $request->image_2;
            $fileName = $file->getClientOriginalName();
            $image_2 = $random. '_' .$fileName;
            $file->move($folder, $image_2);
        }

        MasterModel::where('id', $id)->update([
           'title' => $request->title,
           'description' => $request->description,
           'written_by' => $request->written_by,
           'available' => $request->available,
           'image_1' => $image_1,
           'image_2' => $image_2,
        ]);

        if($item->save()){
            return Redirect::route($this->active)->with('success', trans('module_'.$this->active.'.crud.update.success'));
        }else{
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.update.error'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        if(MasterModel::destroy($request->id)){
            return Redirect::route($this->active)->with('success', trans('module_'.$this->active.'.crud.delete.success'));
        }else{
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.delete.error'));
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRestore()
    {
        $word = '';
        $active = '';
        $model = '';
        $view = '';
        $columns = '';
        $select = '';
        $actions = '';
        $active = $this->active;
        $model = $this->model;
        $view = 'delete';
        $word = trans('module_'.$this->active.'.module_title');
        $columns = $this->columns();
        $select = $this->select;
        $actions = 1;

        return view('admin.deleted', compact($this->compact));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postRestore(Request $request)
    {
        $item = MasterModel::onlyTrashed()->find($request->id);

        if($item->restore()){
            return Redirect::route($this->active.'.deleted')->with('success', trans('module_'.$this->active.'.crud.restore.success'));
        }else{
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.restore.error'));
        }
    }
}
