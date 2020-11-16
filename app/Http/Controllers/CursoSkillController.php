<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCursoSkillRequest;
use App\Http\Requests\UpdateCursoSkillRequest;
use App\Repositories\CursoSkillRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CursoSkillController extends AppBaseController
{
    /** @var  CursoSkillRepository */
    private $cursoSkillRepository;

    public function __construct(CursoSkillRepository $cursoSkillRepo)
    {
        $this->cursoSkillRepository = $cursoSkillRepo;
    }

    /**
     * Display a listing of the CursoSkill.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cursoSkills = $this->cursoSkillRepository->paginate(20);

        return view('curso_skills.index')
            ->with('cursoSkills', $cursoSkills);
    }

    /**
     * Show the form for creating a new CursoSkill.
     *
     * @return Response
     */
    public function create()
    {
        return view('curso_skills.create');
    }

    /**
     * Store a newly created CursoSkill in storage.
     *
     * @param CreateCursoSkillRequest $request
     *
     * @return Response
     */
    public function store(CreateCursoSkillRequest $request)
    {
        $input = $request->all();

        $cursoSkill = $this->cursoSkillRepository->create($input);

        Flash::success('Curso Skill saved successfully.');

        return redirect(route('cursoSkills.index'));
    }

    /**
     * Display the specified CursoSkill.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cursoSkill = $this->cursoSkillRepository->find($id);

        if (empty($cursoSkill)) {
            Flash::error('Curso Skill not found');

            return redirect(route('cursoSkills.index'));
        }

        return view('curso_skills.show')->with('cursoSkill', $cursoSkill);
    }

    /**
     * Show the form for editing the specified CursoSkill.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cursoSkill = $this->cursoSkillRepository->find($id);

        if (empty($cursoSkill)) {
            Flash::error('Curso Skill not found');

            return redirect(route('cursoSkills.index'));
        }

        return view('curso_skills.edit')->with('cursoSkill', $cursoSkill);
    }

    /**
     * Update the specified CursoSkill in storage.
     *
     * @param int $id
     * @param UpdateCursoSkillRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCursoSkillRequest $request)
    {
        $cursoSkill = $this->cursoSkillRepository->find($id);

        if (empty($cursoSkill)) {
            Flash::error('Curso Skill not found');

            return redirect(route('cursoSkills.index'));
        }

        $cursoSkill = $this->cursoSkillRepository->update($request->all(), $id);

        Flash::success('Curso Skill updated successfully.');

        return redirect(route('cursoSkills.index'));
    }

    /**
     * Remove the specified CursoSkill from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cursoSkill = $this->cursoSkillRepository->find($id);

        if (empty($cursoSkill)) {
            Flash::error('Curso Skill not found');

            return redirect(route('cursoSkills.index'));
        }

        $this->cursoSkillRepository->delete($id);

        Flash::success('Curso Skill deleted successfully.');

        return redirect(route('cursoSkills.index'));
    }
}
