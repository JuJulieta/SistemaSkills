<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubCategoriaRequest;
use App\Http\Requests\UpdateSubCategoriaRequest;
use App\Repositories\SubCategoriaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Categoria;
use Flash;
use Response;

class SubCategoriaController extends AppBaseController
{
    /** @var  SubCategoriaRepository */
    private $subCategoriaRepository;

    public function __construct(SubCategoriaRepository $subCategoriaRepo)
    {
        $this->subCategoriaRepository = $subCategoriaRepo;
    }

    /**
     * Display a listing of the SubCategoria.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $subCategorias = $this->subCategoriaRepository->all();
        $lista_categorias = Categoria::all();
      
        return view('sub_categorias.index')
            ->with('subCategorias', $subCategorias)
            ->with('lst_categorias', $lista_categorias);

    }

    /**
     * Show the form for creating a new SubCategoria.
     *
     * @return Response
     */
    public function create()
    {
        $subCategorias = $this->subCategoriaRepository->all();
        $lista_categorias = Categoria::all();
        //$lista_categorias->prepend('... Seleccione ...');
        return view('sub_categorias.create')
        ->with('subCategoria', $subCategorias)
        ->with('lst_categorias', $lista_categorias);

    }

    /**
     * Store a newly created SubCategoria in storage.
     *
     * @param CreateSubCategoriaRequest $request
     *
     * @return Response
     */
    public function store(CreateSubCategoriaRequest $request)
    {
        $input = $request->all();
        $lista_categorias = Categoria::all();
        $subCategoria = $this->subCategoriaRepository->create($input);

        Flash::success('SubCategoria guardada exitosamente.');

        return redirect(route('subCategorias.index'))
        ->with('lst_categorias', $lista_categorias)
        ;

    }

    /**
     * Display the specified SubCategoria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subCategoria = $this->subCategoriaRepository->find($id);
        $lista_categorias = Categoria::all();
        if (empty($subCategoria)) {
            Flash::error('SubCategoría no encontrada.');

            return redirect(route('subCategorias.index'));
        }

        return view('sub_categorias.show')
        ->with('subCategoria', $subCategoria)
        ->with('lst_categorias', $lista_categorias);
    }

    /**
     * Show the form for editing the specified SubCategoria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subCategoria = $this->subCategoriaRepository->find($id);
        $lista_categorias = Categoria::all();

        if (empty($subCategoria)) {
            Flash::error('SubCategoría no encontrada.');

            return redirect(route('subCategorias.index'));
        }

        return view('sub_categorias.edit')
        ->with('subCategoria', $subCategoria)
        ->with('lst_categorias', $lista_categorias);
    }

    /**
     * Update the specified SubCategoria in storage.
     *
     * @param int $id
     * @param UpdateSubCategoriaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubCategoriaRequest $request)
    {
        $subCategoria = $this->subCategoriaRepository->find($id);

        if (empty($subCategoria)) {
            Flash::error('SubCategoria no encontrada.');

            return redirect(route('subCategorias.index'));
        }

        $subCategoria = $this->subCategoriaRepository->update($request->all(), $id);

        Flash::success('SubCategoria actualizada exitosamente.');

        return redirect(route('subCategorias.index'));
    }

    /**
     * Remove the specified SubCategoria from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subCategoria = $this->subCategoriaRepository->find($id);

        if (empty($subCategoria)) {
            Flash::error('SubCategoría no encontrada.');

            return redirect(route('subCategorias.index'));
        }

        $this->subCategoriaRepository->delete($id);

        Flash::success('SubCategoría eliminada exitosamente.');

        return redirect(route('subCategorias.index'));
    }
}
