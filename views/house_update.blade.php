@extends('master_for_user')
@section('content')
<section>
   <div id="head">
            <div class="line">

                  <!-- Form for updating house table -->
                  <form action="{{route('storehouse')}}" method="POST" class="form-inline">

                       {{ csrf_field() }}

                        
                        <input type="text" name="house_type" class="form-control"
                        placeholder="Please enter house type" >

                        <input type="text" name="address"  class="form-control" placeholder="Please enter house address" >

                        <input type="text" name="city"  class="form-control" placeholder="Please enter city">

                        <input type="text" name="area" class="form-control" placeholder="Please enter area">

                        <input type="text" name="cost"  class="form-control" placeholder="Please enter house cost">

                        <input type="text" name="flat_number"  class="form-control" placeholder="Please enter flat number"> 
                
                        

                        
                         
                        <input type="submit"  class="btn btn-primary" value="Update"> 

                     </form>

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
                                 
                                 

                                 <a href="{{route('getedithouse', $row->id)}}" class="btn btn-warning">Edit</a>

                                 <form action="{{route('deletehouse', $row->id)}}" method="POST" style="display: inline;" onsubmit="
                                 if(confirm('Delete? Are you sure?'))
                                 {
                                    return true
                                 }
                                 else
                                 {
                                    return false
                                 }; ">

                                 

                                 {{ csrf_field() }}

                                 <button type="submit" class="btn btn-danger">Delete</button>
                     
                                    
                                 </form>
                        <!-- <a href="{{route('deletehouse')}}" class="btn btn-danger">Delete</a> -->
                                 
                                 
                              </td>
                        <?php $i+=1; ?>      

                           </tr>
                       @endforeach
            
               </table>
            </div>
         </div>
</section>

@endsection