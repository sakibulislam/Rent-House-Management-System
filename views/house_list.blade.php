@extends('master')

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

        
               
        
         <!-- GALLERY -->	
         <div id="third-block">
            <div class="line">
               <h2>House Gallery</h2>
               <p class="subtitile">
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3">
                     <img src="img/third-small.jpg">      
                     <p class="subtitile">
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/second-small.jpg">      
                     <p class="subtitile">
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/third-small.jpg">      
                     <p class="subtitile">
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/second-small.jpg">      
                     <p class="subtitile">
                     </p>
                  </div>
               </div>
            </div>
         </div>
         
      </section>	

@endsection