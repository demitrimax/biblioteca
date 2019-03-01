<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateeditorialesRequest;
use App\Http\Requests\UpdateeditorialesRequest;
use App\Repositories\editorialesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Alert;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class editorialesController extends AppBaseController
{
    /** @var  editorialesRepository */
    private $editorialesRepository;

    public function __construct(editorialesRepository $editorialesRepo)
    {
        $this->editorialesRepository = $editorialesRepo;
    }

    /**
     * Display a listing of the editoriales.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->editorialesRepository->pushCriteria(new RequestCriteria($request));
        $editoriales = $this->editorialesRepository->paginate(10);

        return view('editoriales.index')
            ->with('editoriales', $editoriales);
    }

    /**
     * Show the form for creating a new editoriales.
     *
     * @return Response
     */
    public function create()
    {
        return view('editoriales.create');
    }

    /**
     * Store a newly created editoriales in storage.
     *
     * @param CreateeditorialesRequest $request
     *
     * @return Response
     */
    public function store(CreateeditorialesRequest $request)
    {
        $input = $request->all();

        $editoriales = $this->editorialesRepository->create($input);

        Flash::success('Editorial guardada correctamente.');
        Alert::success('Editorial guardada correctamente.');

        return redirect(route('editoriales.index'));
    }

    /**
     * Display the specified editoriales.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $editoriales = $this->editorialesRepository->findWithoutFail($id);

        if (empty($editoriales)) {
            Flash::error('Editorial no encontrada');
            Alert::error('Editorial no encontrada');

            return redirect(route('editoriales.index'));
        }

        return view('editoriales.show')->with('editoriales', $editoriales);
    }

    /**
     * Show the form for editing the specified editoriales.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $editoriales = $this->editorialesRepository->findWithoutFail($id);

        if (empty($editoriales)) {
            Flash::error('Editorial no encontrada.');
            Alert::error('Editorial no encontrada.');

            return redirect(route('editoriales.index'));
        }

        return view('editoriales.edit')->with('editoriales', $editoriales);
    }

    /**
     * Update the specified editoriales in storage.
     *
     * @param  int              $id
     * @param UpdateeditorialesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateeditorialesRequest $request)
    {
        $editoriales = $this->editorialesRepository->findWithoutFail($id);

        if (empty($editoriales)) {
            Flash::error('Editorial no encontrada.');
            Alert::error('Editorial no encontrada.');

            return redirect(route('editoriales.index'));
        }

        $editoriales = $this->editorialesRepository->update($request->all(), $id);

        Flash::success('Editorial actualizada correctamente.');
        Alert::success('Editorial actualizada correctamente.');

        return redirect(route('editoriales.index'));
    }

    /**
     * Remove the specified editoriales from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $editoriales = $this->editorialesRepository->findWithoutFail($id);

        if (empty($editoriales)) {
            Flash::error('Editorial no encontrada.');
            Alert::error('Editorial no encontrada.');

            return redirect(route('editoriales.index'));
        }

        $this->editorialesRepository->delete($id);

        Flash::success('Editorial eliminada correctamente.');
        Alert::success('Editorial eliminada correctamente.');

        return redirect(route('editoriales.index'));
    }
}
