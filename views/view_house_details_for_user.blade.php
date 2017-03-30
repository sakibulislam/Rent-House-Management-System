@extends('master_for_user')
@section('content')
<section>
   <div id="head">
            <div class="line">
                  <h1>House List</h1>
                  <table class="table">
                        <tr>
                           <td>Sl</td>
                           <td>House Type</td>
                           <td>House Status</td>
                           <td>Address</td>
                           <td>City</td>
                           <td>Area</td>
                           <td>Cost(Monthly)</td>
                           <td>Flat Number</td>
                           <td>Action</td>

                        </tr>
                        <?php $i=1; ?>
                        @foreach ($data as $row)
                           <tr>
                              <td>{{$i}}</td>
                              <td>{{$row->house_type}}</td>
                              <td>{{$row->house_status}}</td>
                              <td>{{$row->address}}</td>
                              <td>{{$row->city}}</td>
                              <td>{{$row->area}}</td>
                              <td>{{$row->cost}}</td>
                              <td>{{$row->flat_number}}</td>
                              <td>
                                 
                                 

                                 <a href="" class="btn btn-primary">Reserve</a>

                                 <a href="" class="btn btn-success">Rent</a>
                                 
                                 
                              </td>
                        <?php $i+=1; ?>      

                           </tr>
                       @endforeach
            
               </table>
            </div>
         </div>
</section>

@endsection