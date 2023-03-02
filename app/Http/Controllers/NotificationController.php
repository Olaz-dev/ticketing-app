<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        
        $notifications = auth()->user()->unreadNotifications;
        return view('admin.notification.index',compact('notifications'));
    }
}
