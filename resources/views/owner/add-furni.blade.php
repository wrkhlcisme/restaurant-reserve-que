@extends('layout.main')

@section('title','Owner Control Page')

@section('content')
<body>
<form method="post" action="/admin/dashboard">
    @csrf
       <div class="row">
        <div class="input-field col s2">
            <input id="furniture" name="furnitureType" type="text" class="validate">
            <label for="furniture">Furniture Type</label>
          </div>
        <div class="input-field col s2">
            <input id="tableCount" name="tableCount" type="number" class="validate">
            <label for="table">New Table</label>
          </div>
          <div class="input-field col s2">
            <input id="chair" name="chair" type="number" class="validate">
            <label for="chair">Chair per Table</label>
          </div>
          <div class="input-field col s4">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
              </button>

          </div>
         
       </div>
       
   </form>
   @endsection