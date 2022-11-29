<?php

namespace App\Services;

use App\Models\Project;
use Bugsnag\BugsnagLaravel\Facades\Bugsnag;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\ProjectTag;
use Illuminate\Support\Facades\Storage;

class ProjectUpdateService
{
    public function __construct(
        protected ProjectService $projectService,
    ) {
        //
    }
    
    public function update(array $request, $project_id)
    {
        try {
            DB::beginTransaction();

            $project = Project::find($project_id);
            $old_path = $project->thumb;

            $project->category_id = $request['category_id'];
            $project->title = $request['title'];
            $project->sub_title = $request['sub_title'];
            $project->description = $request['description'];
            $project->excerpt = $request['content'];
            $project->body = $request['content'];
            $project->thumb = isset($request['path']) ? $request['path']  : $old_path;
            $project->meta_description = $request['content'];
            $project->status = $request['status'];
            $project->save();

            if(isset($request['path'])){
                Storage::disk('projects')->delete($old_path);
            }

            DB::commit();
        } catch (Exception $exception) {
            //Bugsnag::notifyException($exception);
            DB::rollBack();
            throw new Exception($exception);
        }
    }
}
