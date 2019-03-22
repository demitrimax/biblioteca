<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateejemplaresRequest;
use App\Http\Requests\UpdateejemplaresRequest;
use App\Repositories\ejemplaresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Alert;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\libros;
use App\Models\ejemplares;
use App\Models\carrito;
use Auth;

class ejemplaresController extends AppBaseController
{
    /** @var  ejemplaresRepository */
    private $ejemplaresRepository;

    public function __construct(ejemplaresRepository $ejemplaresRepo)
    {
        $this->ejemplaresRepository = $ejemplaresRepo;
        $this->middleware(['auth']);
        $this->middleware('permission:ejemplares-list');
        $this->middleware('permission:ejemplares-create', ['only' => ['create','store']]);
        $this->middleware('permission:ejemplares-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:ejemplares-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the ejemplares.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ejemplaresRepository->pushCriteria(new RequestCriteria($request));
        $ejemplares = $this->ejemplaresRepository->all();
        $libros = libros::has('ejemplares')->orderBy('nombre','ASC')->paginate(10);
        //dd($libros);
        return view('ejemplares.index')
            ->with(compact('ejemplares','libros'));
    }

    /**
     * Show the form for creating a new ejemplares.
     *
     * @return Response
     */
    public function create()
    {
        $libros = libros::pluck('nombre','id');
        return view('ejemplares.create')->with(compact('libros'));
    }

    /**
     * Store a newly created ejemplares in storage.
     *
     * @param CreateejemplaresRequest $request
     *
     * @return Response
     */
    public function store(CreateejemplaresRequest $request)
    {
        $input = $request->all();

        $ejemplares = $this->ejemplaresRepository->create($input);

        Flash::success('Ejemplares guardado correctamente.');
        Alert::success('Ejemplares guardado correctamente.');

        return redirect(route('ejemplares.index'));
    }

    /**
     * Display the specified ejemplares.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ejemplares = $this->ejemplaresRepository->findWithoutFail($id);

        if (empty($ejemplares)) {
            Flash::error('Ejemplares no encontrado');
            Alert::error('Ejemplares no encontrado');

            return redirect(route('ejemplares.index'));
        }

        return view('ejemplares.show')->with('ejemplares', $ejemplares);
    }

    /**
     * Show the form for editing the specified ejemplares.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ejemplares = $this->ejemplaresRepository->findWithoutFail($id);

        if (empty($ejemplares)) {
            Flash::error('Ejemplares no encontrado');
            Alert::error('Ejemplares no encontrado');

            return redirect(route('ejemplares.index'));
        }
        $libros = libros::pluck('nombre','id');
        return view('ejemplares.edit')->with(compact('ejemplares','libros'));
    }

    /**
     * Update the specified ejemplares in storage.
     *
     * @param  int              $id
     * @param UpdateejemplaresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateejemplaresRequest $request)
    {
        $ejemplares = $this->ejemplaresRepository->findWithoutFail($id);

        if (empty($ejemplares)) {
            Flash::error('Ejemplares no encontrado');
            Alert::error('Ejemplares no encontrado');

            return redirect(route('ejemplares.index'));
        }

        $ejemplares = $this->ejemplaresRepository->update($request->all(), $id);

        Flash::success('Ejemplares actualizado correctamente.');
        Alert::success('Ejemplares actualizado correctamente.');

        return redirect(route('ejemplares.index'));
    }

    /**
     * Remove the specified ejemplares from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ejemplares = $this->ejemplaresRepository->findWithoutFail($id);

        if (empty($ejemplares)) {
            Flash::error('Ejemplares no encontrado');
            Alert::error('Ejemplares no encontrado');

            return redirect(route('ejemplares.index'));
        }

        $this->ejemplaresRepository->delete($id);

        Flash::success('Ejemplares borrado correctamente.');
        Alert::success('Ejemplares borrado correctamente.');

        return redirect(route('ejemplares.index'));
    }

    public function GetEjemplares($id)
    {
      $ejemplares = ejemplares::where('libro_id',$id)->select('id','numeje')->get();
      return $ejemplares;
    }

    public function guardacarrito(Request $request)
    {
      //dd($request);
      $rules = [
        'ejemplar'   => 'required',
      ];

      $messages = [
          'ejemplar.required'    => 'El ejemplar es requerido',

      ];

      $this->validate($request, $rules, $messages);


        $input = $request->all();



        $carrito = new carrito();
        $carrito->user_id = Auth::user()->id;
        $carrito->ejemplar_id = $input['ejemplar'];

        if (isset($input['cliente'])) {
            $carrito->cliente_id = $input['cliente'];
        }
        $carrito->fecha = date('Y-m-d');
        $carrito->save();
        Alert::success('Se agregó el ejemplar al carrito.');

        return back();
    }
    public function eliminardelcarrito($id)
    {
      $carrito = carrito::find($id);
      $carrito->delete();
      Alert::success('Elemento Eliminado');
      return back();
    }
}
