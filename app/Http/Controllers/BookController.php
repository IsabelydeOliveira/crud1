<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model01;
use App\User;

class BookController extends Controller
{
    private $objUser;
    private $objModel01;

    public function __construct(){
        $this->objUser=new User();
        $this->objModel01=new Model01();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelo=$this->objModel01->all();
        return view('index',compact('modelo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=$this->objUser->all();
        return view('create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $cad=$this->objModel01->create([
        'name'=>$request->name,
        'cep'=>$request->cep,
        'id_user'=>$request->id_user
      ]);
      if($cad){
        return redirect('hospital');
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
        $modelo=$this->objModel01->find($id);
        return view('show',compact('modelo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelo=$this->objModel01->find($id);
        $users=$this->objUser->all();
        return view('create', compact('modelo','users'));
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
        $this->objModel01->where(['id'=>$id])->update([
            'name'=>$request->name,
            'cep'=>$request->cep,
            'id_user'=>$request->id_user
        ]);
        return redirect('hospital');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $del= $this->objModel01->destroy($id);
       return($del)?"sim":"não";
    }
}
