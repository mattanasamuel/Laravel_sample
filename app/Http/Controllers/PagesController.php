<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class PagesController extends Controller
{
    public function root():View
    {
        return view('pages.root');
    }

    public function about():View
    {
        //return View::make('pages.about');
        return view('pages.about');
    }

    /*
    public function staff():View
    {
        $staff = User::paginate(10); //solo i primi 10
        //return View::make('pages.about');
        return view('pages.staff', [
            'staff' => $staff,
            'title' => 'list of staff'
            ]); //passo la variabile nella vista staff
    }
    */

    public function staff():View
    {
        $staff = User::paginate(10); //solo i primi 10
        $title = "list of staff";
        //return View::make('pages.about');
        //return view('pages.staff', compact('staff', 'title')); //compatta i valori delle variabili in un array che passo alla vista


        return view('pages.staff')
            ->with('staff', $staff)
            ->with('title', $title); //stessa funzione abbreviata

        /* funziona solo teoricamente
        return view('pages.staff')
            ->withTitle($title)
            -withStaff($staff); */
    }

    public function blog():View
    {
        //return View::make('pages.about');
        return view('pages.blog');
    }
    public function contacts():View
    {
        //return View::make('pages.about');
        return view('pages.contacts');
    }
}
