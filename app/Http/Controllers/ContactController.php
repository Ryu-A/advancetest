<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function top()
    {
        return view('top');
    }
    
    public function index()
    {
        return view('contact.index');
    }


    public function confirm(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'gender' => 'required|integer|between:1,2',
            'email' => 'required|email',
            'postcode' => 'required|size:8',
            'address' => 'required',
            'building_name' => 'nullable',
            'opinion' => 'required|max:120',
            'created_at' => 'date|nullable',
            'updated_at' => 'date|nullable',
        ]);
        $input = $request->input();
        
        $request->session()->put('input', $input);
        
        return view('contact.confirm', ['input' => $input]);
    }


    public function thanks(Request $request)
    {
        $input = $request->session()->get('input');
        if($request->has('back') == true){
            return redirect('/contact')->withInput($input);
        }
        else
        Contact::create($input);

        $request->session()->forget('input');
        return view('contact.thanks');
    }


    public function admin()
    {
        $contacts = Contact::Paginate(10);
        return view('admin', ['contacts' => $contacts]);
    }

    public function find()
    {
        return view('admin.find',['input' =>'']);
    }

    public function search(Request $request)
    {
        //検索フォームに入力された値を取得
        $fullname = $request->input('fullname');
        $gender = $request->input('gender');
        $created_at = $request->input('created_at');
        $created_at = $request->input('created_at');
        $email = $request->input('email');

        if(!empty($fullname)) {
            $query->where('fullname', 'LIKE', $fullname);
        }

        /*if(!empty($category)) {
            $query->where('category', 'LIKE', $category);
        }

        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%");
        }*/

        $contacts = $query->get();

        return view('admin.find', compact('id', 'fullname', 'gender', 'email', 'opinion'));
    }

    public function remove(Request $request)
    {
        $contact = Contact::find($request->id)->delete();
        
        return redirect('admin');
    }

}
