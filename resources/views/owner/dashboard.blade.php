@extends('layout.main')

@section('title','Owner Control Page')

@section('content')
<body>
<div class="container">
    <div></div>
        <div class="row">
            <div class="row">
                @foreach ($furniture as $list)
                    
                <div class="col s3">
                    <div class="card small">
                        <div class="card-image waves-effect waves-block waves-light ">
                          <img class="activator" src="{{asset('images/table-parallel.jpg')}}">
                          <span class="card-title">{{$list->labelTable}}{{$list->tableNumber}}</span>
                        </div>
                        <div class="card-content">
                            <p>status: {{$list->status}}</p>
                            <p>number of chair: {{$list->chairNumber}}</p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">Update Furniture<i class="material-icons right">close</i></span>
                          <div>
                              <form>
                                    <div class="row">
                                        <div class="switch">
                                            <label>
                                              Outdoor
                                              @if ($list->labelTable == "O")
                                              <input type="checkbox">
                                              @elseif ($list->labelTable == "I")
                                              <input type="checkbox" checked>
                                              @else
                                              <h1>Error</h1>
                                              @endif
                                              <span class="lever"></span>
                                              Indoor
                                            </label>
                                          </div>
                                    </div>
                                    <div class="row">
                                        <div class="switch">
                                            <label>
                                              Available
                                              @if ($list->status == "available")
                                              <input type="checkbox">
                                              @else
                                              <input type="checkbox" checked>
                                              @endif
                                              <span class="lever"></span>
                                              UnAvailable
                                            </label>
                                          </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a class="waves-effect waves-light btn red">Delete</a>
                                        </div>
                                        <div class="col">
                                            <a class="waves-effect waves-light btn">Update</a>
                                        </div>
                                    </div>
                              </form>
                          </div>
                        </div>
                      </div>

                      
                </div>
                @endforeach

              </div>
              
        </div>
           
           <div style="position:fixed;bottom:0;right:10px;padding:0 0 10px 30%;">
            <a class="btn-floating btn-large waves-effect waves-light red" href="dashboard/upgrade-store"><i class="material-icons">add</i></a>
           </div>

          
</div>
@endsection

