<?php

namespace App\Http\Controllers;

use App\Workspace;
use Illuminate\Http\Request;
use Auth;

class WorkspaceController extends Controller
{
    public function overview(){
        $user = Auth::user();
        $workspaces = Workspace::get()->where('user_id', $user->id);

        return view('workspace.overview', ['user' => $user, 'workspaces' => $workspaces]);
    }
}
