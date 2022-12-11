<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\NotificationsDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(NotificationsDataTable $dataTable)
    {
        return $dataTable->render('admin.notification.index');
    }
}
