<?php
namespace App\Http\Controllers;


use App\Http\Controllers\AppBaseController;
use App\Http\Requests\UpdateSkillsConsultoresRequest;
use App\Repositories\SkillsConsultoresRepository;
use App\Repositories\ConsultorRepository;
use App\Models\Skill;
use App\Models\Nivel;
use App\Models\Categoria;
use  App\Models\SubCategoria;
use App\Models\Consultor;
use App\Repositories\UserRepository;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Flash;
use Response;



class MisSkillsController extends AppBaseController
{

    /** @var  UserRepository */
    private $userRepository;

    /** @var  SkillsConsultoresRepository */
    private $skillsConsultoresRepository;

    /** @var  ConsultorRepository */
    private $consultorRepository;

    public function __construct(UserRepository $userRepo, 
                            SkillsConsultoresRepository $skillsConsultoresRepo,
                            ConsultorRepository $consultorRepo)
    {
        $this->userRepository = $userRepo;
        $this->skillsConsultoresRepository = $skillsConsultoresRepo;
        $this->consultorRepository = $consultorRepo;
    }

    public function getAuthUser ()
    {
        return Auth::user();
    }

    public function index(){

        //Obtenemos el usuario logeado
        $user = $this->getAuthUser();

        //Obtenemos al consultor respecto al mail
        $consultor = $this->consultorRepository->all(array('email' => $user->email));

        //Obtenemos las skills del consultor logeado
        $skillsConsultores = $this->skillsConsultoresRepository->all(array('con_id'=> $consultor[0]->con_id));

        $lst_categorias = Categoria::all();

        $lst_subcatgorias = SubCategoria::all();
        $lst_consultor = Consultor::all();

        //Lista de skills que tiene el sistema
        $lista_skills = Skill::all();

        //Lista de niveles que tiene el sistema
        $lista_niveles = Nivel::all();
        
        return view('misskills.index')->with('user', $user)
            ->with('lst_skillsConsultor', $skillsConsultores)
            ->with('lst_skills', $lista_skills)
            ->with('lst_niveles', $lista_niveles)
            ->with('lst_categorias', $lst_categorias) 
            ->with('lst_subcatgorias', $lst_subcatgorias)
            ->with('lst_consultor', $lst_consultor);
    }
    
    public function update ($id, Request $request)
    {
        
        
    }    

}    
