<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSkillsConsultoresRequest;
use App\Http\Requests\UpdateSkillsConsultoresRequest;
use App\Repositories\SkillsConsultoresRepository;
use App\Models\SkillsConsultores;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Consultor;
use App\Models\Skill;
use App\Models\Nivel;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;
use Response;

class SkillsConsultoresController extends AppBaseController
{
    /** @var  SkillsConsultoresRepository */
    private $skillsConsultoresRepository;

    public function __construct(SkillsConsultoresRepository $skillsConsultoresRepo)
    {
        $this->skillsConsultoresRepository = $skillsConsultoresRepo;
    }

    /**
     * Display a listing of the SkillsConsultores.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $skillsConsultores = $this->skillsConsultoresRepository->paginate(20);

        $lista_consultores = Consultor::all();
        $lista_skills = Skill::all();
        $lista_niveles = Nivel::all();

        return view('skills_consultores.index')
            ->with('skillsConsultores', $skillsConsultores)
            ->with('lst_consultores', $lista_consultores)
            ->with('lst_skills', $lista_skills)
            ->with('lst_niveles', $lista_niveles);
    }

    /**
     * Show the form for creating a new SkillsConsultores.
     *
     * @return Response
     */
    public function create()
    {   
        $lista_consultores = Consultor::select(
            DB::raw("CONCAT(con_nombres,' ',con_apellidos) AS fullname"),'con_id')
            ->pluck('fullname', 'con_id');
        //$lista_consultores->prepend('... Seleccione ...');
        $lista_skills = Skill::all()->pluck('skl_nombre', 'skl_id');
        //$lista_skills->prepend('... Seleccione ...');
        $lista_niveles = Nivel::all();
        //$lista_niveles->prepend('... Seleccione ...');
        $arr_datos=array();
        $consultor=null;

        return view('skills_consultores.create')
            ->with('lst_consultores', $lista_consultores)
            ->with('lst_skills', $lista_skills)
            ->with('lst_resultado', $arr_datos)
            ->with('consultor', $consultor)
            ->with('lst_niveles', $lista_niveles);
    }


    /**
     * Store a newly created SkillsConsultores in storage.
     *
     * @param CreateSkillsConsultoresRequest $request
     *
     * @return Response
     */
    public function store(CreateSkillsConsultoresRequest $request)
    {
        $input = $request->all();

        $skillsConsultores = $this->skillsConsultoresRepository->create($input);

        Flash::success('Skills Consultores saved successfully.');

        return redirect(route('skillsConsultores.index'));
    }

    /**
     * Display the specified SkillsConsultores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $skillsConsultores = $this->skillsConsultoresRepository->find($id);
        $lista_consultores = Consultor::all();
        $lista_skills = Skill::all();
        $lista_niveles = Nivel::all();

        if (empty($skillsConsultores)) {
            Flash::error('Skills Consultores not found');

            return redirect(route('skillsConsultores.index'));
        }

        return view('skills_consultores.show')->with('skillsConsultores', $skillsConsultores)            
            ->with('lst_consultores', $lista_consultores)
            ->with('lst_skills', $lista_skills)
            ->with('lst_niveles', $lista_niveles);
    }

    /**
     * Show the form for editing the specified SkillsConsultores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $skillsConsultores = $this->skillsConsultoresRepository->find($id);
        $lista_consultores = Consultor::select(
            DB::raw("CONCAT(con_nombres,' ',con_apellidos) AS fullname"),'con_id')
            ->pluck('fullname', 'con_id');
        $lista_skills = Skill::all()->pluck('skl_nombre', 'skl_id');
        $lista_niveles = Nivel::all();

        if (empty($skillsConsultores)) {
            Flash::error('Skills Consultores not found');

            return redirect(route('skillsConsultores.index'));
        }

        return view('skills_consultores.edit')->with('skillsConsultores', $skillsConsultores)
            ->with('lst_consultores', $lista_consultores)
            ->with('lst_skills', $lista_skills)
            ->with('lst_niveles', $lista_niveles);
    }

    /**
     * Update the specified SkillsConsultores in storage.
     *
     * @param int $id
     * @param UpdateSkillsConsultoresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSkillsConsultoresRequest $request)
    {
        $skillsConsultores = $this->skillsConsultoresRepository->find($id);

        if (empty($skillsConsultores)) {
            Flash::error('Skills Consultores not found');

            return redirect(route('skillsConsultores.index'));
        }

        $skillsConsultores = $this->skillsConsultoresRepository->update($request->all(), $id);

        Flash::success('Skills Consultores updated successfully.');

        return redirect(route('skillsConsultores.index'));
    }

    /**
     * Remove the specified SkillsConsultores from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $skillsConsultores = $this->skillsConsultoresRepository->find($id);

        if (empty($skillsConsultores)) {
            Flash::error('Skills Consultores not found');

            return redirect(route('skillsConsultores.index'));
        }

        $this->skillsConsultoresRepository->delete($id);

        Flash::success('Skills Consultores deleted successfully.');

        return redirect(route('skillsConsultores.index'));
    }


    public function buscar(Request $request)
    {

        $lista_consultores = Consultor::select(
            DB::raw("CONCAT(con_nombres,' ',con_apellidos) AS fullname"),'con_id')
            ->pluck('fullname', 'con_id');
        //$lista_consultores->prepend('... Seleccione ...');
 
        //$lista_skills->prepend('... Seleccione ...');
        $lista_niveles = Nivel::all();
        $lista_skills = Skill::all()->pluck('skl_nombre', 'skl_id');
        $consultor = null;

        /**
         * Buscamos por lista de skills
         * 
         */
        $filtro = array();
        $arr_salida = array();

        if($request->skl_id){

            foreach($request->skl_id as $key => $value){
                array_push($filtro, $value);
            }    
            $respuesta = $this->skillsConsultoresRepository->buscar(array("skl_consultor_skill.skl_id" => $filtro));    
            
            
        
            foreach($respuesta as $key => $value){
                
                $arr_datos = array();
                $con_id = $value->con_id;     

                if(isset($arr_salida) &&  isset($arr_salida[$con_id])){

                    if(is_null($arr_salida[$con_id]['skl_nombre_2']) ){
                        $arr_salida[$con_id]['skl_id_2'] = $value->skl_id ;
                        $arr_salida[$con_id]['skl_nombre_2'] = $value->skl_nombre ;
                        $arr_salida[$con_id]['nvl_skill_2'] = $value->nvl_nombre;

                    }elseif(!is_null($arr_salida[$con_id]['skl_nombre_2']) &&  is_null($arr_salida[$con_id]['skl_nombre_3'])){
                        $arr_salida[$con_id]['skl_nombre_3'] = $value->skl_id ;
                        $arr_salida[$con_id]['skl_nombre_3'] = $value->skl_nombre ;
                        $arr_salida[$con_id]['nvl_skill_3'] = $value->nvl_nombre;
                    }

                }else{
                    $arr_datos['con_id'] = $value->con_id;
                    $arr_datos['con_nombres'] = $value->con_nombres;
                    $arr_datos['con_apellidos'] = $value->con_apellidos;
                    $arr_datos['skl_id_1'] = $value->skl_id;
                    $arr_datos['skl_nombre_1'] = $value->skl_nombre;
                    $arr_datos['nvl_skill_1'] = $value->nvl_nombre;
                    $arr_datos['skl_id_2'] = $value->skl_id;
                    $arr_datos['skl_nombre_2'] = NULL;
                    $arr_datos['nvl_skill_2'] = NULL;
                    $arr_datos['skl_id_3'] = $value->skl_id;
                    $arr_datos['skl_nombre_3'] = NULL;
                    $arr_datos['nvl_skill_3'] = NULL;   
                    $arr_salida[$con_id] = $arr_datos;
                }
            }


            return view('skills_consultores.create')
            ->with('lst_consultores', $lista_consultores)
            ->with('lst_skills', $lista_skills)
            ->with('lst_niveles', $lista_niveles)
            ->with('lst_resultado', $arr_salida)
            ->with('consultor', $consultor);

            /*array(2) { 
                [1]=> array(6) { 
                    ["con_id"]=> int(1) 
                    ["con_nombres"]=> string(7) "Ricardo" 
                    ["con_apellidos"]=> string(6) "Romero" 
                    ["skl_nombre_1"]=> string(9) "Cassandra" 
                    ["skl_nombre_2"]=> string(5) "MySQL" 
                    ["skl_nombre_3"]=> string(5) "Redis" 
                } 
                [2]=> array(6) { 
                    ["con_id"]=> int(2)
                    ["con_nombres"]=> string(12) "Juan Esteban" 
                    ["con_apellidos"]=> string(12) "Reyes Lunari" 
                    ["skl_nombre_1"]=> string(5) "MySQL" 
                    ["skl_nombre_2"]=> NULL 
                    ["skl_nombre_3"]=> NULL 
                } }
            */
            /**
             * Aramamos el array de salida
             */

        }else if($request->con_id){
            $consultor = Consultor::select(
                DB::raw("CONCAT(con_nombres,' ',con_apellidos) AS fullname"),'con_id')
                ->where('con_id', $request->con_id)
                ->pluck('fullname', 'con_id');

            echo($consultor);
                    return view('skills_consultores.create')
            ->with('lst_consultores', $lista_consultores)
            ->with('lst_skills', $lista_skills)
            ->with('lst_niveles', $lista_niveles)
            ->with('lst_resultado', $arr_salida)
            ->with('consultor', $consultor);

        }


        return view('skills_consultores.create')
            ->with('lst_consultores', $lista_consultores)
            ->with('lst_skills', $lista_skills)
            ->with('lst_niveles', $lista_niveles)
            ->with('lst_resultado', $arr_salida)
            ->with('consultor', $consultor);


    }    

}
