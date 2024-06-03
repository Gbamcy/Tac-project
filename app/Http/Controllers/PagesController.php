<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function terms()
    {
        return view('pages.terms');
    }

    public function rules()
    {
        return view('pages.rules');
    }

    public function LoanTerm()
    {
        return view('pages.LoanTerm');
    }

    public function media()
    {
        return view('pages.media');
    }

    public function FAQ()
    {
        return view('pages.FAQ');
    }

    public function index()

    {
        return view('pages.admin_directive');
    }

    public function blog()
    {
        return view('pages.blog');
    }
    public function privacyPolicy()
    {
        return view('pages.privacyPolicy');
    }





}
