<?php

namespace App\Http\Controllers;

use stdClass;
use App\Mail\ContactInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PanelController extends Controller
{
    public function index()
    {

        return view('panel.index');
    }

    static public function MailCcontacto(Request $request)
    {
    }
}
