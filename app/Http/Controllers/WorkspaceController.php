<?php

namespace App\Http\Controllers;

use App\ComputerConfig;
use App\SoftwareConfig;
use App\Workspace;
use Illuminate\Http\Request;
use Auth;

class WorkspaceController extends Controller
{
    public function overview(){
        $user = Auth::user();
        $workspaces = Workspace::all()->where('user_id', $user->id);
//        return json_encode($workspaces);
        return view('workspace.overview', ['user' => $user, 'workspaces' => $workspaces]);
    }

    public function add(){


        return view('workspace.add');
    }

    public function save(Request $r){
        $user = Auth::user();

        $computer = new ComputerConfig();
        $computer->cpu = $r->input('cpu');
        $computer->ram = $r->input('ram');
        $computer->screen_amount = $r->input('screen_amount');
        $computer->screen_resolution = $r->input('screen_resolution');
        $computer->save();

        $software = new SoftwareConfig();
        $software->os = $r->input('os');
        $software->browser = $r->input('browser');
        $software->save();

        $workspace = new Workspace();
        $workspace->user_id = $user->id;
        $workspace->computer_config_id = $computer->id;
        $workspace->software_config_id = $software->id;
        $workspace->save();

//        return json_encode($workspace);
        return redirect('workspace');
    }
}
