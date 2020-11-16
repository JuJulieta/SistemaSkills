<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConsultorRequest;
use App\Http\Requests\UpdateConsultorRequest;
use App\Repositories\ConsultorRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Controllers\UserController;
use App\Models\LineaServicio;
use App\Models\Cargo;
use App\Models\Nivel;
use App\Models\Role;
use App\Models\User;
use App\Models\Skill;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Response;

class ConsultorController extends AppBaseController
{
    /** @var  ConsultorRepository */
    private $consultorRepository;
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(ConsultorRepository $consultorRepo, UserRepository $userRepo)
    {
        $this->consultorRepository = $consultorRepo;
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the Consultor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $consultors = $this->consultorRepository->all();
        $lista_niveles = Nivel::all();
        $lista_linea = LineaServicio::all();
        $lista_cargo = Cargo::all();
        return view('consultors.index')
            ->with('consultors', $consultors)
            ->with('lst_niveles', $lista_niveles)
            ->with('lst_linea', $lista_linea)
            ->with('lst_cargo', $lista_cargo);
    }
    

    /**
     * Show the form for creating a new Consultor.
     *
     * @return Response
     */
    public function create()
    {   
        $consultors = $this->consultorRepository->all();
        $lista_niveles = Nivel::all();
        $lista_linea = LineaServicio::all();
        $lista_cargo = Cargo::all();
        $lista_roles = Role::all();
        $user = User::all();

        return view('consultors.create')
        ->with('consultors', $consultors)
        ->with('lst_niveles', $lista_niveles)
        ->with('lst_linea', $lista_linea)
        ->with('lst_cargo', $lista_cargo)
        ->with('lst_user', $user) 
        ->with('lst_roles', $lista_roles);
    }

    /**
     * Store a newly created Consultor in storage.
     *
     * @param CreateConsultorRequest $request
     *
     * @return Response
     */
    public function store(CreateConsultorRequest $request)
    {
        $input = $request->all();

        $consultor = $this->consultorRepository->create($input);
        $consultors = $this->consultorRepository->all();
        $lista_niveles = Nivel::all();
        $lista_linea = LineaServicio::all();
        $lista_cargo = Cargo::all();

        Flash::success('Consultor guardado exitosamente.');

        return redirect(route('consultors.index'))
        ->with('consultors', $consultors)
        ->with('lst_niveles', $lista_niveles)
        ->with('lst_linea', $lista_linea)
        ->with('lst_cargo', $lista_cargo);
    }

    /**
     * Display the specified Consultor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $consultor = $this->consultorRepository->find($id);
        $lista_niveles = Nivel::all();
        $lista_linea = LineaServicio::all();
        $lista_cargo = Cargo::all();
        
        if (empty($consultor)) {
            Flash::error('Consultor no encontrado.');

            return redirect(route('consultors.index'));
        }

        return view('consultors.show')->with('consultor', $consultor)
        ->with('lst_niveles', $lista_niveles)
        ->with('lst_linea', $lista_linea)
        ->with('lst_cargo', $lista_cargo);
    }

    /**
     * Show the form for editing the specified Consultor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $consultor = $this->consultorRepository->find($id);

        $lista_niveles = Nivel::all();
        $lista_linea = LineaServicio::all();
        $lista_cargo = Cargo::all();
        $lista_roles = Role::all();
        $user = User::all();

        if (empty($consultor)) {
            Flash::error('Consultor no encontrado.');

            return redirect(route('consultors.index'));
        }

        return view('consultors.edit')->with('consultor', $consultor)
        ->with('lst_niveles', $lista_niveles)
        ->with('lst_linea', $lista_linea)
        ->with('lst_cargo', $lista_cargo)   
        ->with('lst_user', $user) 
        ->with('lst_roles', $lista_roles);
    }

    /**
     * Update the specified Consultor in storage.
     *
     * @param int $id
     * @param UpdateConsultorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConsultorRequest $request)
    {
        $consultor = $this->consultorRepository->find($id);

        if (empty($consultor)) {
            Flash::error('Consultor no encontrado.');

            return redirect(route('consultors.index'));
        }

        $consultor = $this->consultorRepository->update($request->all(), $id);
    
        Flash::success('Consultor modificado exitosamente.');

        return redirect(route('consultors.index'));
    }

    /**
     * Remove the specified Consultor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $consultor = $this->consultorRepository->find($id);

        if (empty($consultor)) {
            Flash::error('Consultor no encontrado.');

            return redirect(route('consultors.index'));
        }

        $this->consultorRepository->delete($id);

        Flash::success('Consultor eliminado exitosamente.');

        return redirect(route('consultors.index'));
    }
}
