<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLineaServicioRequest;
use App\Http\Requests\UpdateLineaServicioRequest;
use App\Repositories\LineaServicioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LineaServicioController extends AppBaseController
{
    /** @var  LineaServicioRepository */
    private $lineaServicioRepository;

    public function __construct(LineaServicioRepository $lineaServicioRepo)
    {
        $this->lineaServicioRepository = $lineaServicioRepo;
    }

    /**
     * Display a listing of the LineaServicio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $lineaServicios = $this->lineaServicioRepository->paginate(20);

        return view('linea_servicios.index')
            ->with('lineaServicios', $lineaServicios);
    }

    /**
     * Show the form for creating a new LineaServicio.
     *
     * @return Response
     */
    public function create()
    {
        return view('linea_servicios.create');
    }

    /**
     * Store a newly created LineaServicio in storage.
     *
     * @param CreateLineaServicioRequest $request
     *
     * @return Response
     */
    public function store(CreateLineaServicioRequest $request)
    {
        $input = $request->all();

        $lineaServicio = $this->lineaServicioRepository->create($input);

        Flash::success('Linea Servicio saved successfully.');

        return redirect(route('lineaServicios.index'));
    }

    /**
     * Display the specified LineaServicio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lineaServicio = $this->lineaServicioRepository->find($id);

        if (empty($lineaServicio)) {
            Flash::error('Linea Servicio not found');

            return redirect(route('lineaServicios.index'));
        }

        return view('linea_servicios.show')->with('lineaServicio', $lineaServicio);
    }

    /**
     * Show the form for editing the specified LineaServicio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lineaServicio = $this->lineaServicioRepository->find($id);

        if (empty($lineaServicio)) {
            Flash::error('Linea Servicio not found');

            return redirect(route('lineaServicios.index'));
        }

        return view('linea_servicios.edit')->with('lineaServicio', $lineaServicio);
    }

    /**
     * Update the specified LineaServicio in storage.
     *
     * @param int $id
     * @param UpdateLineaServicioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLineaServicioRequest $request)
    {
        $lineaServicio = $this->lineaServicioRepository->find($id);

        if (empty($lineaServicio)) {
            Flash::error('Linea Servicio not found');

            return redirect(route('lineaServicios.index'));
        }

        $lineaServicio = $this->lineaServicioRepository->update($request->all(), $id);

        Flash::success('Linea Servicio updated successfully.');

        return redirect(route('lineaServicios.index'));
    }

    /**
     * Remove the specified LineaServicio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lineaServicio = $this->lineaServicioRepository->find($id);

        if (empty($lineaServicio)) {
            Flash::error('Linea Servicio not found');

            return redirect(route('lineaServicios.index'));
        }

        $this->lineaServicioRepository->delete($id);

        Flash::success('Linea Servicio deleted successfully.');

        return redirect(route('lineaServicios.index'));
    }
}
