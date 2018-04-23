<?php

namespace App\Http\Controllers;

use App\Workspace;
use Illuminate\Http\Request;
use Auth;
use App\SoftwareConfig;
use App\ComputerConfig;


class WorkspaceController extends Controller
{
    public function overview(){
        $user = Auth::user();
        $workspaces = Workspace::get()->where('user_id', $user->id);
        return view('workspace.overview', ['user' => $user, 'workspaces' => $workspaces]);
    }
    public function add(){
        $user = Auth::user();

        return view('workspace.add', ['user' => $user]);
    }
    public function save(Request $r){
        $user = Auth::user();
        $software = new SoftwareConfig();
        $computer = new ComputerConfig();
        $workspace = new Workspace();

        $software->os = $r->input('os');
        $software->workspace_id = $workspace->id;
        $software->browser = $r->input('browser');
        $software->save();

        $computer->cpu = $r->input('cpu');
        $computer->ram = $r->input('ram');
        $computer->screen_amount = $r->input('screen_amount');
        $computer->screen_resolution = $r->input('screen_res');
        $computer->workspace_id = $workspace->id;
        $computer->save();

        $workspace->user_id = $user->id;
        $workspace->computer_config_id = $computer->id;
        $workspace->software_config_id = $software->id;
        $workspace->active = 0;
        $workspace->save();

        $computer->workspace_id = $workspace->id;
        $computer->save();

        $software->workspace_id = $workspace->id;
        $software->save();
        return redirect('/workspace/');
    }
}
