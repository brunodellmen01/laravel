<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Employees;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employees::get();

        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company_id = Companies::pluck('name', 'id');
        return view('employee.create', compact('company_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Employees::create($request->all());
            Session::flash('flash_success', 'Registrado com sucesso');
            return redirect()->action(
                [EmployeesController::class, 'index']
            );
        } catch (Exception $e) {
            Session::flash('error', 'Ocorreu um erro, contate-o o suporte técnico!');
            return redirect()->action(
                [EmployeesController::class, 'index']
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
            $employee = Employees::firstOrFail($id);
            $company_id = Companies::pluck('name', 'id');
            return view('employee.edit', compact('employee', 'company_id'));
        } catch (\Throwable $th) {
            Session::flash('flash_error', 'Registro editado com sucesso!');
            return redirect()->action(
                [EmployeesController::class, 'index']
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
    public function update(Request $request, $id)
    {
        try {
            $employee = Employees::firstOrFail($id);
            $employee->fill($request->all())->update();
            Session::flash('flash_success', 'Registro atualizado com sucesso');
            return redirect()->action(
                [EmployeesController::class, 'index']
            );
        } catch (\Throwable $th) {
            Session::flash('flash_error', 'Ocorreu um erro, contate-o o sporte técnico!');
            return redirect()->action(
                [EmployeesController::class, 'index']
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
            $employee = Employees::findOrFail($id);

            $employee->delete();
            Session::flash('flash_success', 'Registro apagado com sucesso');
            return redirect()->action(
                [EmployeesController::class, 'index']
            );
        } catch (\Throwable $th) {
            Session::flash('flash_error', 'Ocorreu um erro, contate-o o sporte técnico!');
            return redirect()->action(
                [EmployeesController::class, 'index']
            )->withErrors($th->getMessage());
        }
    }
}
