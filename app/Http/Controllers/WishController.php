<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Wish;
use Illuminate\Http\Request;

class WishController extends Controller
{
    public function list()
    {
        $listes = Wish::all();
        return view('list.list', compact('listes'));
    }
    public function lists()
    {
        $listes = Wish::all();
        return view('list.listes', compact('listes'));
    }

    public function add(Request $request)
    {
        if ($request->method() == "POST") {
            $list = new Wish();
            $this->isValidate($request,$list);
            return redirect()->route("liste", ["id" => $list->id]);
        }
        $categories=Category::all();
        return view('list.add', compact('categories'));
    }
    public function detail(Wish $wish)
    {
        return view('list.detail', compact("wish"));
    }
    //effacer une liste
    public function delete(Wish $list)
    {
        $list->delete();
        return redirect()->route('liste');
    }
    //éditer une liste
    public function edit(Wish $list, Request $request)
    {
        if ($request->isMethod("post")) {
            $this->isValidate($request, $list);
            return redirect()->route("liste", ["list" => $list->id]);
        }
        $categories=Category::all();
        // $list->remove();
        return view('list.edit', compact("list","categories"));
    }
    public function isValidate(Request $request, Wish $list){
        $request->validate([
            "title"=>['required',"min:5","max:250"],
            "description"=>['required',"min:10","max:250"],
            'category'=>['required','regex:/^[0-9]+$/'],
            "author"=>['required',"min:4","max:250",'regex:/^[a-zA-Z]+$/']
        ]);
        $list->title = $request->input('title');
        $list->description = $request->input('description');
        $list->author = $request->input('author');
        $list->isPublished = true;
        $list->category_id = $request->input('category');
        $list->save();
    }
}
