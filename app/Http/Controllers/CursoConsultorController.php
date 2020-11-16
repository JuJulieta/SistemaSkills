<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCursoConsultorRequest;
use App\Http\Requests\UpdateCursoConsultorRequest;
use App\Repositories\CursoConsultorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CursoConsultorController extends AppBaseController
{
    /** @var  CursoConsultorRepository */
    private $cursoConsultorRepository;

    public function __construct(CursoConsultorRepository $cursoConsultorRepo)
    {
        $this->cursoConsultorRepository = $cursoConsultorRepo;
    }

    /**
     * Display a listing of the CursoConsultor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cursoConsultors = $this->cursoConsultorRepository->paginate(20);

        return view('curso_consultors.index')
            ->with('cursoConsultors', $cursoConsultors);
    }

    /**
     * Show the form for creating a new CursoConsultor.
     *
     * @return Response
     */
    public function create()
    {
        return view('curso_consultors.create');
    }

    /**
     * Store a newly created CursoConsultor in storage.
     *
     * @param CreateCursoConsultorRequest $request
     *
     * @return Response
     */
    public function store(CreateCursoConsultorRequest $request)
    {
        $input = $request->all();

        $cursoConsultor = $this->cursoConsultorRepository->create($input);

        Flash::success('Curso Consultor saved successfully.');

        return redirect(route('cursoConsultors.index'));
    }

    /**
     * Display the specified CursoConsultor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cursoConsultor = $this->cursoConsultorRepository->find($id);

        if (empty($cursoConsultor)) {
            Flash::error('Curso Consultor not found');

            return redirect(route('cursoConsultors.index'));
        }

        return view('curso_consultors.show')->with('cursoConsultor', $cursoConsultor);
    }

    /**
     * Show the form for editing the specified CursoConsultor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cursoConsultor = $this->cursoConsultorRepository->find($id);

        if (empty($cursoConsultor)) {
            Flash::error('Curso Consultor not found');

            return redirect(route('cursoConsultors.index'));
        }

        return view('curso_consultors.edit')->with('cursoConsultor', $cursoConsultor);
    }

    /**
     * Update the specified CursoConsultor in storage.
     *
     * @param int $id
     * @param UpdateCursoConsultorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCursoConsultorRequest $request)
    {
        $cursoConsultor = $this->cursoConsultorRepository->find($id);

        if (empty($cursoConsultor)) {
            Flash::error('Curso Consultor not found');

            return redirect(route('cursoConsultors.index'));
        }

        $cursoConsultor = $this->cursoConsultorRepository->update($request->all(), $id);

        Flash::success('Curso Consultor updated successfully.');

        return redirect(route('cursoConsultors.index'));
    }

    /**
     * Remove the specified CursoConsultor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cursoConsultor = $this->cursoConsultorRepository->find($id);

        if (empty($cursoConsultor)) {
            Flash::error('Curso Consultor not found');

            return redirect(route('cursoConsultors.index'));
        }

        $this->cursoConsultorRepository->delete($id);

        Flash::success('Curso Consultor deleted successfully.');

        return redirect(route('cursoConsultors.index'));
    }
}
