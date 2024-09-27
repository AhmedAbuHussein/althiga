<?php

namespace App\Listeners;

use App\Events\UploadImageEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UploadImageListener implements ShouldQueue
{
    
    /**
     * Handle the event.
     *
     * @param  \App\Events\UploadImageEvent  $event
     * @return void
     */
    public function handle(UploadImageEvent $event)
    {
        try {
            $url = env("CRM_BASE_URL")."/store-file";
            $response = Http::attach("file", file_get_contents($event->path), $event->name)
                ->post("$url", [
                    'filename' => $event->name,
                    "item_id"=> $event->itemId
                ]);
            if ($response->successful()) {
                try {
                    unlink($event->path);
                } catch (\Throwable $th) {
                }
                Log::info("Image Upload success: ", [$response->json()]);
            }
        } catch (\Throwable $th) {
            Log::error("Image Upload error: ", [$th]);
        }

    }
}
