<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateclientesRequest;
use App\Http\Requests\UpdateclientesRequest;
use App\Repositories\clientesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Alert;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\estados;
use App\municipios;

class clientesController extends AppBaseController
{
    /** @var  clientesRepository */
    private $clientesRepository;

    public function __construct(clientesRepository $clientesRepo)
    {
        $this->clientesRepository = $clientesRepo;
        $this->middleware(['auth']);
        $this->middleware('permission:clientes-list');
        $this->middleware('permission:clientes-create', ['only' => ['create','store']]);
        $this->middleware('permission:clientes-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:clientes-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the clientes.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->clientesRepository->pushCriteria(new RequestCriteria($request));
        $clientes = $this->clientesRepository->all();

        return view('clientes.index')
            ->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new clientes.
     *
     * @return Response
     */
    public function create()
    {
        $estados = estados::pluck('nombre','id');
        $municipios = municipios::where('id_edo',1)->get();
        $municipios = $municipios->pluck('nombre','id');
        return view('clientes.create')->with(compact('estados','municipios'));
    }

    /**
     * Store a newly created clientes in storage.
     *
     * @param CreateclientesRequest $request
     *
     * @return Response
     */
    public function store(CreateclientesRequest $request)
    {
        $input = $request->all();

        $clientes = $this->clientesRepository->create($input);

        Flash::success('Cliente guardado correctamente.');
        Alert::success('Cliente guardado correctamente.');

        return redirect(route('clientes.index'));
    }

    /**
     * Display the specified clientes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clientes = $this->clientesRepository->findWithoutFail($id);

        if (empty($clientes)) {
            Flash::error('Cliente no encontrado');
            Alert::error('Cliente no encontrado');

            return redirect(route('clientes.index'));
        }

        return view('clientes.show')->with('clientes', $clientes);
    }

    /**
     * Show the form for editing the specified clientes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clientes = $this->clientesRepository->findWithoutFail($id);

        if (empty($clientes)) {
            Flash::error('Cliente no encontrado');
            Alert::error('Cliente no encontrado');

            return redirect(route('clientes.index'));
        }
        $estados = estados::pluck('nombre','id');

        $municipios = municipios::where('id_edo',$clientes->estado_id)->get();
        $municipios = $municipios->pluck('nombre','id');

        return view('clientes.edit')->with(compact('clientes','estados','municipios'));
    }

    /**
     * Update the specified clientes in storage.
     *
     * @param  int              $id
     * @param UpdateclientesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclientesRequest $request)
    {
        $clientes = $this->clientesRepository->findWithoutFail($id);

        if (empty($clientes)) {
            Flash::error('Cliente no encontrado');
            Alert::error('Cliente no encontrado');

            return redirect(route('clientes.index'));
        }

        $clientes = $this->clientesRepository->update($request->all(), $id);

        Flash::success('Cliente actualizado correctamente.');
        Alert::success('Cliente actualizado correctamente.');

        return redirect(route('clientes.index'));
    }

    /**
     * Remove the specified clientes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clientes = $this->clientesRepository->findWithoutFail($id);

        if (empty($clientes)) {
            Flash::error('Cliente no encontrado');
            Alert::error('Cliente no encontrado');

            return redirect(route('clientes.index'));
        }

        $this->clientesRepository->delete($id);

        Flash::success('Cliente borrado correctamente.');
        Alert::success('Cliente borrado correctamente.');

        return redirect(route('clientes.index'));
    }

    public function GetMunicipios($id)
    {
      $municipios = municipios::where('id_edo',$id)->select('id','nombre')->get();
      return $municipios;
    }

}
