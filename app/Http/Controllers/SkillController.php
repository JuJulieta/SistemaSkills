<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use App\Repositories\SkillRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\SubCategoria;
use App\Models\Categoria;
use Flash;
use Response;

class SkillController extends AppBaseController
{
    /** @var  SkillRepository */
    private $skillRepository;

    public function __construct(SkillRepository $skillRepo)
    {
        $this->skillRepository = $skillRepo;
    }

    /**
     * Display a listing of the Skill.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $skills = $this->skillRepository->all();
        $lista_subCategorias = SubCategoria::all();
        $lista_categorias = Categoria::all();
        
        return view('skills.index')
            ->with('skills', $skills)
            ->with('lst_subCategorias', $lista_subCategorias)
            ->with('lst_categorias', $lista_categorias);
        
    }

    /**
     * Show the form for creating a new Skill.
     *
     * @return Response
     */
    public function create()
    {
        $lista_subCategorias = SubCategoria::all()->pluck('scat_id','scat_nombre','cat_id');
        $lista_categorias = Categoria::all()->pluck('cat_id','cat_nombre');
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();
        $skills = $this->skillRepository->all();

        return view('skills.create')
        ->with('skills', $skills)
        ->with('lst_subCategorias', $subcategorias)
        ->with('lst_categorias', $categorias);
    }

    /**
     * Store a newly created Skills in storage.
     *
     * @param CreateSkillRequest $request
     *
     * @return Response
     */
    public function store(CreateSkillRequest $request)
    {
       
        $input = $request->all();

        $skills = $this->skillRepository->create($input);

        Flash::success('Skill guardado exitosamente.');

        return redirect(route('skills.index'));
    }

    /**
     * Display the specified Skills.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $skills = $this->skillRepository->find($id);
        $lista_subCategorias = SubCategoria::all();
        $lista_categorias = Categoria::all();

        if (empty($skills)) {
            Flash::error('Skill no encontrado.');
            return redirect(route('skills.index'));
        }

        return view('skills.show')
        ->with('skills', $skills)
        ->with('lst_subCategorias', $lista_subCategorias)
        ->with('lst_categorias', $lista_categorias);
    }

    /**
     * Show the form for editing the specified Skill.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $skills = $this->skillRepository->find($id);
        $lista_subCategorias = SubCategoria::all();
        $lista_categorias = Categoria::all();
        

        if (empty($skills)) {
            Flash::error('Skill no encontrado.');

            return redirect(route('skills.index'));
        }

        return view('skills.edit')->with('skills', $skills)
        ->with('lst_subCategorias', $lista_subCategorias)
        ->with('lst_categorias', $lista_categorias);
    }

    /**
     * Update the specified Skill in storage.
     *
     * @param int $id
     * @param UpdateSkillRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSkillRequest $request)
    {
        $skills = $this->skillRepository->find($id);

        if (empty($skills)) {
            Flash::error('Skill no encontrado.');

            return redirect(route('skills.index'));
        }

        $skills = $this->skillRepository->update($request->all(), $id);

        Flash::success('Skill modificado exitosamente.');

        return redirect(route('skills.index'));
    }

    /**
     * Remove the specified Skill from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $skills = $this->skillRepository->find($id);

        if (empty($skills)) {
            Flash::error('Skill no encontrado.');

            return redirect(route('skills.index'));
        }

        $this->skillRepository->delete($id);

        Flash::success('Skill eliminado exitosamente.');

        return redirect(route('skills.index'));
    }
}
