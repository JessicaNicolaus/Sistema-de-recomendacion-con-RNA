<?phpfunction get_ranking_medio($libro_id){   $data = \App\Models\Busquedas::where('libro_id', $libro_id)->avg('ranking');   if($data > 5){       $data = 5;   }    return number_format($data, 2);}function get_planes($plan_id){    $data = \App\Models\PlanEstudio::Find($plan_id);    if(count($data) > 0){        return $data->plan;    }    return '';}