<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function invite()
    {
        return view('backend.admin.member.invite.index');
    }
    public function data()
    {
        return view('backend.admin.member.data.index');
    }
    public function create()
    {
        return view('backend.admin.member.data.create');
    }
    public function edit()
    {
        return view('backend.admin.member.data.edit');
    }
}
