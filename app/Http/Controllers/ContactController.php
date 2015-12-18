<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Comment;
use App\Http\Requests\CreateCommentRequest;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contacts = Contact::all();
//        [
//            ['Blog(coming soon)',''],
//            ['Facebook','https://www.facebook.com/#/Rainlonely'],
//            ['Twitter','https://twitter.com/rainwr'],
//            ['Github','https://github.com/Rainlonely'],
//            ['G+','https://plus.google.com/u/0/+RainWu'],
//            ['Weibo','http://weibo.com/rainlonely'],
//            ['Linkedin','https://cn.linkedin.com/in/rain-wu-56523824']
//        ];
        return view('contact',compact('contacts'));
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
     * @param CreateCommentRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCommentRequest $request)
    {
        //validation

        //$input = Request::all();
        Comment::create($request->all());
        return redirect('comment');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $comments = Comment::latest()->get();
        return view('comment',compact('comments'));
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
     * @return \Illuminate\Http\Response
     */
    public function update()
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
