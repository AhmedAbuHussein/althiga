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

    public function mard_as_read()
    {
        auth()->user()->unreadNotifications->markAsRead();
        return redirect()->route('admin.notifications.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.notifications_readed_msg')
        ]);
    }

    public function mark_read($id)
    {
        auth()->user()->unreadNotifications()->where('id', $id)->update(['read_at'=> now()]);
        return redirect()->route('admin.notifications.index')->with([
            "notify-type"=> "success",
            "notify-message"=> __('site.notifications_readed_msg')
        ]);
    }

    public function destroy($id)
    {
        auth()->user()->notifications()->where('id', $id)->delete();
        return response()->json(['message'=> __('site.item deleted successfully')], 200);
    }
}
