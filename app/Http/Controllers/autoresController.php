<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateautoresRequest;
use App\Http\Requests\UpdateautoresRequest;
use App\Repositories\autoresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Flash;
use Alert;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class autoresController extends AppBaseController
{
    /** @var  autoresRepository */
    private $autoresRepository;

    public function __construct(autoresRepository $autoresRepo)
    {
        $this->autoresRepository = $autoresRepo;
    }

    /**
     * Display a listing of the autores.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->autoresRepository->pushCriteria(new RequestCriteria($request));
        $autores = $this->autoresRepository->all();

        return view('autores.index')
            ->with(compact('autores'));
    }

    /**
     * Show the form for creating a new autores.
     *
     * @return Response
     */
    public function create()
    {
        return view('autores.create');
    }

    /**
     * Store a newly created autores in storage.
     *
     * @param CreateautoresRequest $request
     *
     * @return Response
     */
    public function store(CreateautoresRequest $request)
    {
        $input = $request->all();

        $autores = $this->autoresRepository->create($input);

        if($request->has('foto'))
        {
          $file = $request->file('foto');
          $path = public_path() . '/autoress/';
          $nombre = uniqid().$file->getClientOriginalName();
          $file->move($path, $nombre);

          $fotourl = 'autoress/'.$nombre;
          $autores->foto = $fotourl;
          $autores->save();
        }

        Flash::success('Autor guardado correctamente.');
        Alert::success('Autor guardado correctamente.');

        return redirect(route('autores.index'));
    }

    /**
     * Display the specified autores.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $autores = $this->autoresRepository->findWithoutFail($id);

        if (empty($autores)) {
            Flash::error('Autor no encontrado');
            Alert::error('Autor no encontrado');

            return redirect(route('autores.index'));
        }

        return view('autores.show')->with('autores', $autores);
    }

    /**
     * Show the form for editing the specified autores.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $autores = $this->autoresRepository->findWithoutFail($id);

        if (empty($autores)) {
            Flash::error('Autor no encontrado');
            Alert::error('Autor no encontrado');

            return redirect(route('autores.index'));
        }

        return view('autores.edit')->with('autores', $autores);
    }

    /**
     * Update the specified autores in storage.
     *
     * @param  int              $id
     * @param UpdateautoresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateautoresRequest $request)
    {
        $autores = $this->autoresRepository->findWithoutFail($id);

        if (empty($autores)) {
            Flash::error('Autor no encontrado');
            Alert::error('Autor no encontrado');

            return redirect(route('autores.index'));
        }

        $autores = $this->autoresRepository->update($request->all(), $id);

        if($request->has('foto'))
        {
          $file = $request->file('foto');
          $path = public_path() . '/autoress/';
          $nombre = uniqid().$file->getClientOriginalName();
          $file->move($path, $nombre);

          $fotourl = 'autoress/'.$nombre;
          $autores->foto = $fotourl;
          $autores->save();
        }

        Flash::success('Autor actualizado correctamente.');
        Alert::success('Autor actualizado correctamente.');

        return redirect(route('autores.index'));
    }

    /**
     * Remove the specified autores from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $autores = $this->autoresRepository->findWithoutFail($id);

        if (empty($autores)) {
            Flash::error('Autor no encontrado');
            Alert::error('Autor no encontrado');

            return redirect(route('autores.index'));
        }

        $this->autoresRepository->delete($id);

        Flash::success('Autor borrado correctamente.');
        Alert::success('Autor borrado correctamente.');

        return redirect(route('autores.index'));
    }
}
