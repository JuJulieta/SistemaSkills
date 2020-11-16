<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePerfilDetalleRequest;
use App\Http\Requests\UpdatePerfilDetalleRequest;
use App\Repositories\PerfilDetalleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PerfilDetalleController extends AppBaseController
{
    /** @var  PerfilDetalleRepository */
    private $perfilDetalleRepository;

    public function __construct(PerfilDetalleRepository $perfilDetalleRepo)
    {
        $this->perfilDetalleRepository = $perfilDetalleRepo;
    }

    /**
     * Display a listing of the PerfilDetalle.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $perfilDetalles = $this->perfilDetalleRepository->paginate(20);

        return view('perfil_detalles.index')
            ->with('perfilDetalles', $perfilDetalles);
    }

    /**
     * Show the form for creating a new PerfilDetalle.
     *
     * @return Response
     */
    public function create()
    {
        return view('perfil_detalles.create');
    }

    /**
     * Store a newly created PerfilDetalle in storage.
     *
     * @param CreatePerfilDetalleRequest $request
     *
     * @return Response
     */
    public function store(CreatePerfilDetalleRequest $request)
    {
        $input = $request->all();

        $perfilDetalle = $this->perfilDetalleRepository->create($input);

        Flash::success('Perfil Detalle saved successfully.');

        return redirect(route('perfilDetalles.index'));
    }

    /**
     * Display the specified PerfilDetalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $perfilDetalle = $this->perfilDetalleRepository->find($id);

        if (empty($perfilDetalle)) {
            Flash::error('Perfil Detalle not found');

            return redirect(route('perfilDetalles.index'));
        }

        return view('perfil_detalles.show')->with('perfilDetalle', $perfilDetalle);
    }

    /**
     * Show the form for editing the specified PerfilDetalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $perfilDetalle = $this->perfilDetalleRepository->find($id);

        if (empty($perfilDetalle)) {
            Flash::error('Perfil Detalle not found');

            return redirect(route('perfilDetalles.index'));
        }

        return view('perfil_detalles.edit')->with('perfilDetalle', $perfilDetalle);
    }

    /**
     * Update the specified PerfilDetalle in storage.
     *
     * @param int $id
     * @param UpdatePerfilDetalleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePerfilDetalleRequest $request)
    {
        $perfilDetalle = $this->perfilDetalleRepository->find($id);

        if (empty($perfilDetalle)) {
            Flash::error('Perfil Detalle not found');

            return redirect(route('perfilDetalles.index'));
        }

        $perfilDetalle = $this->perfilDetalleRepository->update($request->all(), $id);

        Flash::success('Perfil Detalle updated successfully.');

        return redirect(route('perfilDetalles.index'));
    }

    /**
     * Remove the specified PerfilDetalle from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $perfilDetalle = $this->perfilDetalleRepository->find($id);

        if (empty($perfilDetalle)) {
            Flash::error('Perfil Detalle not found');

            return redirect(route('perfilDetalles.index'));
        }

        $this->perfilDetalleRepository->delete($id);

        Flash::success('Perfil Detalle deleted successfully.');

        return redirect(route('perfilDetalles.index'));
    }
}
