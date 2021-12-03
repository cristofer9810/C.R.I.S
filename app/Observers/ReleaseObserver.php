<?php

namespace App\Observers;

use App\Models\Release;
use Illuminate\Support\Facades\Storage;

class ReleaseObserver
{
 
    public function created(Release $release)
    {
        if (! \App::runningInConsole()) {
            $release->user_id = auth()->user()->id;
        }
    }

   
    public function deleting(Release $release)
    {
        if ($release->image) {
            Storage::delete($release->image->url);
        }
    }

}
