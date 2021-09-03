<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompaniesRequest;
use App\Models\Companies;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Companies::get();

        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompaniesRequest $request)
    {
        try {
            Companies::create($request->all());
            Session::flash('flash_success', 'Registrado com sucesso');
            return redirect()->action(
                [CompaniesController::class, 'index']
            );
        } catch (Exception $e) {
            Session::flash('error', 'Ocorreu um erro, contate-o o suporte técnico!');
            return redirect()->action(
                [CompaniesController::class, 'index']
            )->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $company = Companies::firstOrFail($id);
            return view('company.edit', compact('company'));
        } catch (\Throwable $th) {
            Session::flash('flash_error', 'Registro editado com sucesso!');
            return redirect()->action(
                [CompaniesController::class, 'index']
            )->withErrors($th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompaniesRequest $request, $id)
    {
        try {
            $company = Companies::firstOrFail($id);
            $company->fill($request->all())->update();
            Session::flash('flash_success', 'Registro atualizado com sucesso');
            return redirect()->action(
                [CompaniesController::class, 'index']
            );
        } catch (\Throwable $th) {
            Session::flash('flash_error', 'Ocorreu um erro, contate-o o sporte técnico!');
            return redirect()->action(
                [CompaniesController::class, 'index']
            )->withErrors($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $company = Companies::findOrFail($id);

            $company->delete();
            Session::flash('flash_success', 'Registro apagado com sucesso');
            return redirect()->action(
                [CompaniesController::class, 'index']
            );
        } catch (\Throwable $th) {
            Session::flash('flash_error', 'Ocorreu um erro, contate-o o sporte técnico!');
            return redirect()->action(
                [CompaniesController::class, 'index']
            )->withErrors($th->getMessage());
        }
    }
}
