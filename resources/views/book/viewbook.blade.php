@extends('layer.main')
 @section('conta')

<div class="container" >
  <div class="wrap">

  
    <div class="row">

     <div class="col-md-4">
        <div class="card">
          <div class="card-body">
           <img src="{{URL::to($book->image)}}" style="height: 300px; width: 280px;">
          </div>
        </div>
      </div>

      <div class="col-md-8">
       <div class="card">
          <div class="card-body">
          	<table>
          		<tr>
                  <td><h4> ID  </h4> </td>
                  <td><h4>:{{$book->id}}</h4>  </td>
                </tr>
                <tr>
                 <td><h4> Title       </h4> </td>
                  <td><h4>:{{$book->title}}</h4>  </td>
                </tr
                <tr>
                  <td><h4>Aithor      </h4> </td>
                  <td><h4>:{{$book->author}}</h4>  </td>
                </tr>
                <tr>
                  <td><h4> Catagory    </h4> </td>
                  <td><h4>:{{$book->catagory_name}}</h4>  </td>
                </tr>
                <tr>
                  <td><h4> Slug       </h4> </td>
                  <td><h4>:{{$book->catagory_slug}}</h4>  </td>
                </tr>
                <tr>
                 <td><h4> Details    </h4> </td>
                  <td><h4>{{$book->details}}</h4>  </td>
                </tr>
            </table>
           
            
           
      
          </div>
        </div>
      </div> 

 </div>

  </div>
  </div>
  


@endsection
