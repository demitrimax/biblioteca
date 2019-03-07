<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatelibrosRequest;
use App\Http\Requests\UpdatelibrosRequest;
use App\Repositories\librosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Flash;
Use Alert;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\editoriales;
use App\Models\autores;
use App\Models\genero;

class librosController extends AppBaseController
{
    /** @var  librosRepository */
    private $librosRepository;

    public function __construct(librosRepository $librosRepo)
    {
        $this->librosRepository = $librosRepo;
    }

    /**
     * Display a listing of the libros.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->librosRepository->pushCriteria(new RequestCriteria($request));
        $libros = $this->librosRepository->all();

        return view('libros.index')
            ->with('libros', $libros);
    }

    /**
     * Show the form for creating a new libros.
     *
     * @return Response
     */
    public function create()
    {
        $editoriales = editoriales::pluck('nombre','id');
        $autores = autores::pluck('nombre','id');
        $generos = genero::pluck('nombre','id');
        return view('libros.create')->with(compact('editoriales','autores','generos'));
    }

    /**
     * Store a newly created libros in storage.
     *
     * @param CreatelibrosRequest $request
     *
     * @return Response
     */
    public function store(CreatelibrosRequest $request)
    {

        $rules = [
          'nombre'        => 'required',
          'anioedit'      => 'required|date',
          'editorial_id'  => 'required',
        ];

        $messages = [
            'nombre.required'              => 'El nombre del libro es requerido',
            'anioedit.required'            => 'Es necesario una fecha de Edición',
            'anioedit.date'                => 'La fecha debe ser válida',

        ];

        $this->validate($request, $rules, $messages);


        $input = $request->all();

        $libros = $this->librosRepository->create($input);

        if($request->has('portadaimg'))
        {
          $file = $request->file('portadaimg');
          $path = public_path() . '/portadas/';
          $nombre = uniqid().$file->getClientOriginalName();
          $file->move($path, $nombre);

          $portadaurl = 'portadas/'.$nombre;
          $libros->portadaimg = $portadaurl;
          $libros->save();
        }

        Flash::success('Libro guardado correctamente.');
        Alert::success('Libro guardado correctamente.');

        return redirect(route('libros.index'));
    }

    /**
     * Display the specified libros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $libros = $this->librosRepository->findWithoutFail($id);

        if (empty($libros)) {
            Flash::error('Libro no encontrado');
            Alert::error('Libro no encontrado');

            return redirect(route('libros.index'));
        }

        //Storage::setVisibility($libros->portadaimg, 'public');
        return view('libros.show')->with(compact('libros'));
    }

    /**
     * Show the form for editing the specified libros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        $libros = $this->librosRepository->findWithoutFail($id);

        if (empty($libros)) {
            Flash::error('Libro no encontrado');
            Alert::error('Libro no encontrado');

            return redirect(route('libros.index'));
        }
        $editoriales = editoriales::pluck('nombre','id');
        $autores = autores::pluck('nombre','id');
        $generos = genero::pluck('nombre','id');
        return view('libros.edit')->with(compact('libros','editoriales','autores','generos'));
    }

    /**
     * Update the specified libros in storage.
     *
     * @param  int              $id
     * @param UpdatelibrosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatelibrosRequest $request)
    {
      $rules = [
        'nombre'        => 'required',
        'anioedit'      => 'required',
        'editorial_id'  => 'required',
      ];

      $messages = [
          'nombre.required'              => 'El nombre del libro es requerido',
          'anioedit.required'            => 'Es necesario una fecha de Edición',

      ];

      $this->validate($request, $rules, $messages);

        $libros = $this->librosRepository->findWithoutFail($id);

        if (empty($libros)) {
          Flash::error('Libro no encontrado');
          Alert::error('Libro no encontrado');

            return redirect(route('libros.index'));
        }

        $libros = $this->librosRepository->update($request->all(), $id);

        if($request->has('portadaimg'))
        {
          $file = $request->file('portadaimg');
          $path = public_path() . '/portadas/';
          $nombre = uniqid().$file->getClientOriginalName();
          $file->move($path, $nombre);

          $portadaurl = 'portadas/'.$nombre;
          $libros->portadaimg = $portadaurl;
          $libros->save();
        }

        Flash::success('Libro actualizado correctamente.');
        Alert::success('Libro actualizado correctamente.');

        return redirect(route('libros.index'));
    }

    /**
     * Remove the specified libros from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $libros = $this->librosRepository->findWithoutFail($id);

        if (empty($libros)) {
          Flash::error('Libro no encontrado');
          Alert::error('Libro no encontrado');

            return redirect(route('libros.index'));
        }

        $this->librosRepository->delete($id);

        Flash::success('Libro borrado correctamente.');
        Alert::success('Libro borrado correctamente.');

        return redirect(route('libros.index'));
    }
}
