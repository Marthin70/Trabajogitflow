<?php

class MunicipiosController extends BaseController {

    /**
     * Municipio Repository
     *
     * @var Municipio
     */
    protected $municipio;

    public function __construct(Municipio $municipio)
    {
        $this->municipio = $municipio;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $municipios = $this->municipio->all();

        return View::make('municipios.index', compact('municipios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('municipios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Municipio::$rules);

        if ($validation->passes())
        {
            $this->municipio->create($input);

            return Redirect::route('municipios.index');
        }

        return Redirect::route('municipios.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $municipio = $this->municipio->findOrFail($id);

        return View::make('municipios.show', compact('municipio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $municipio = $this->municipio->find($id);

        if (is_null($municipio))
        {
            return Redirect::route('municipios.index');
        }

        return View::make('municipios.edit', compact('municipio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Municipio::$rules);

        if ($validation->passes())
        {
            $municipio = $this->municipio->find($id);
            $municipio->update($input);

            return Redirect::route('municipios.show', $id);
        }

        return Redirect::route('municipios.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->municipio->find($id)->delete();

        return Redirect::route('municipios.index');
    }

}