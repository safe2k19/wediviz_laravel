<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Popup;
use Illuminate\Http\Request;

class PopupController extends Controller
{
    public function create(Request $request)
    {
        $Popup = new Popup();
        $Popup->name = $request->get('name');
        $Popup->email = $request->get('email');
        $Popup->phone = $request->get('phone');
        $Popup->save();
    }
}
