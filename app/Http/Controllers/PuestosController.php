<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePuestosRequest;
use App\Http\Requests\UpdatePuestosRequest;
use App\Repositories\PuestosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PuestosController extends Controller
{
    /** @var  PuestosRepository */
    private $puestosRepository;

    public function __construct(PuestosRepository $puestosRepo)
    {
        $this->puestosRepository = $puestosRepo;
    }

    /**
     * Display a listing of the Puestos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->puestosRepository->pushCriteria(new RequestCriteria($request));
        $puestos = $this->puestosRepository->all();

        return view('puestos.index')
            ->with('puestos', $puestos);
    }

    /**
     * Show the form for creating a new Puestos.
     *
     * @return Response
     */
    public function create()
    {
        return view('puestos.create');
    }

    /**
     * Store a newly created Puestos in storage.
     *
     * @param CreatePuestosRequest $request
     *
     * @return Response
     */
    public function store(CreatePuestosRequest $request)
    {
        $input = $request->all();

        $puestos = $this->puestosRepository->create($input);

        Flash::success('Puestos saved successfully.');

        return redirect(route('puestos.index'));
    }

    /**
     * Display the specified Puestos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $puestos = $this->puestosRepository->findWithoutFail($id);

        if (empty($puestos)) {
            Flash::error('Puestos not found');

            return redirect(route('puestos.index'));
        }

        return view('puestos.show')->with('puestos', $puestos);
    }

    /**
     * Show the form for editing the specified Puestos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $puestos = $this->puestosRepository->findWithoutFail($id);

        if (empty($puestos)) {
            Flash::error('Puestos not found');

            return redirect(route('puestos.index'));
        }

        return view('puestos.edit')->with('puestos', $puestos);
    }

    /**
     * Update the specified Puestos in storage.
     *
     * @param  int              $id
     * @param UpdatePuestosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePuestosRequest $request)
    {
        $puestos = $this->puestosRepository->findWithoutFail($id);

        if (empty($puestos)) {
            Flash::error('Puestos not found');

            return redirect(route('puestos.index'));
        }

        $puestos = $this->puestosRepository->update($request->all(), $id);

        Flash::success('Puestos updated successfully.');

        return redirect(route('puestos.index'));
    }

    /**
     * Remove the specified Puestos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $puestos = $this->puestosRepository->findWithoutFail($id);

        if (empty($puestos)) {
            Flash::error('Puestos not found');

            return redirect(route('puestos.index'));
        }

        $this->puestosRepository->delete($id);

        Flash::success('Puestos deleted successfully.');

        return redirect(route('puestos.index'));
    }
}
