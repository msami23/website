<?php

namespace App\Http\Controllers\Admin;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    protected $rules=[
        'name'=>'required|string|max:255|min:3',
        'description'=>'nullable|string|max:2000',
        'parent_id'=>'nullable|int|exists:categories,id',
     ];
     public function __construct()
     {
         $this->middleware('auth');//->except('index'); استثناء
     }


     public function panel(){
         return view('admin.panel.panel');
     }

    //lest all categories
    public function index($id = null)
    {
        if($id){
            $category = Category::findOrFail($id);
          //  $categories= Category::where('parent_id','=', $id)->get();
                $categories = $category->children()->with('parent')->get();
        }else{
            $categories= Category::whereNull('parent_id')->with('parent')->get();
            $category = null;
        }


       return view('admin.categories.index',[
           'categories'=> $categories,
            'parent'=>$category,

       ]);

    }

    //show create form
    public function create()
    {
            return view('admin.categories.create');
    }

    //create category on form submit
    public function store(Request $request)
    {
        $request->validate($this->rules);
        $category = new Category();
        $category->name = $request->post('name');//$request->input('name'); /$request->get('name');/$request->name;
        $category->description = $request->post('description');
        $category->parent_id = $request->post('parent_id');
        $category->save();
        $message = sprintf('%s created!',$category->name);//message or successfly
        return redirect(route('categories'))->with('success',$message);

    }

    //show edit form
    public function edit($id)
    {
        $category = Category::find($id);
       if(!$category){
            abort(404);

        }

        return view('admin.categories.edit',[
            'category'=> $category,
        ]);


    }

     //update category on form submit
     public function update(Request $request,$id)
     {
        $request->validate($this->rules);

        $category = Category::findOrFail($id);
        $category->name = $request->post('name');
        $category->description = $request->post('description');
        $category->parent_id = $request->post('parent_id');
        $category->save();
        $message = sprintf('%s update!',$category->name);//message or successfly
        return redirect(route('categories'))->with('success',$message);

        return redirect(route('categories'));
     }

     public function delete($id)
     {
        $category = Category::findOrFail($id);
        $category->delete();
        $message = sprintf('%s created!',$category->name);//message or successfly
        return redirect(route('categories'))->with('success',$message);

        return redirect(route('categories'));


     }


}
