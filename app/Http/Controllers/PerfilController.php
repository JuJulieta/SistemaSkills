<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePerfilRequest;
use App\Http\Requests\UpdatePerfilRequest;
use App\Repositories\PerfilRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PerfilController extends AppBaseController
{
    /** @var  PerfilRepository */
    private $perfilRepository;

    public function __construct(PerfilRepository $perfilRepo)
    {
        $this->perfilRepository = $perfilRepo;
    }

    /**
     * Display a listing of the Perfil.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $perfils = $this->perfilRepository->paginate(20);

        return view('perfils.index')
            ->with('perfils', $perfils);
    }

    /**
     * Show the form for creating a new Perfil.
     *
     * @return Response
     */
    public function create()
    {
        return view('perfils.create');
    }

    /**
     * Store a newly created Perfil in storage.
     *
     * @param CreatePerfilRequest $request
     *
     * @return Response
     */
    public function store(CreatePerfilRequest $request)
    {
        $input = $request->all();

        $perfil = $this->perfilRepository->create($input);

        Flash::success('Perfil saved successfully.');

        return redirect(route('perfils.index'));
    }

    /**
     * Display the specified Perfil.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $perfil = $this->perfilRepository->find($id);

        if (empty($perfil)) {
            Flash::error('Perfil not found');

            return redirect(route('perfils.index'));
        }

        return view('perfils.show')->with('perfil', $perfil);
    }

    /**
     * Show the form for editing the specified Perfil.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $perfil = $this->perfilRepository->find($id);

        if (empty($perfil)) {
            Flash::error('Perfil not found');

            return redirect(route('perfils.index'));
        }

        return view('perfils.edit')->with('perfil', $perfil);
    }

    /**
     * Update the specified Perfil in storage.
     *
     * @param int $id
     * @param UpdatePerfilRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePerfilRequest $request)
    {
        $perfil = $this->perfilRepository->find($id);

        if (empty($perfil)) {
            Flash::error('Perfil not found');

            return redirect(route('perfils.index'));
        }

        $perfil = $this->perfilRepository->update($request->all(), $id);

        Flash::success('Perfil updated successfully.');

        return redirect(route('perfils.index'));
    }

    /**
     * Remove the specified Perfil from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $perfil = $this->perfilRepository->find($id);

        if (empty($perfil)) {
            Flash::error('Perfil not found');

            return redirect(route('perfils.index'));
        }

        $this->perfilRepository->delete($id);

        Flash::success('Perfil deleted successfully.');

        return redirect(route('perfils.index'));
    }
}
