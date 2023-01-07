<?php

namespace App\Helpers;

use App\Mail\SendOtpMail;
use App\Models\Follow;
use Illuminate\Support\Facades\Mail;

trait FollowTrait
{
    public function follow_store($model)
    {
        $departments = [
            'App\Models\Consulting'             => 1,
            // 'App\Models\Consulting'          => 2,
            'App\Models\Volunteer'              => 3,
            'App\Models\CooperativeTraining'    => 4,
            'App\Models\IndividualTraining'     => 5,
            'App\Models\Contact'                => 6,
            'App\Models\Recruitment'            => 7,
        ];

        $class_name = get_class($model);
        $department = $departments[$class_name];
        if ($department == 1) {
            $department = $model->type;
        }
        Follow::create([
            'user_id'       => auth()->id(),
            'name'          => $this->getName($model, $departments[$class_name]),
            'forable_type'  => $class_name,
            'forable_id'    => $model->id,
            'department'    => $department, // 1 => advisors, 2 => class_action, 3 => volunteer, 4 => training_entities, 5 => training_individuals, 6 => content_us
            'status'        => 1,
        ]);
        return true;
    }

    public function getName($model, $department)
    {
        $name = '';
        switch ($department) {
            case '1':
                $name = $model->name;
                break;
            case '2':
                $name = $model->full_name;
                break;
            case '3':
                $name = $model->full_name;
                break;
            case '4':
                $name = $model->entity_name;
                break;
            case '5':
                $name = $model->full_name;
                break;
            case '6':
                $name = $model->name;
                break;

            default:
                # code...
                break;
        }
        return $name;
    }

    public function follow_update($model)
    {
        $class_name = get_class($model);
        $follow = Follow::where([
            'forable_type'  => $class_name,
            'forable_id'    => $model->id
        ]);
        if ($follow) {
            $follow->update(['status' => $model->status]);
        }
        return true;
    }
}
