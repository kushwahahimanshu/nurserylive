<style>
	.progress{
		height:20px;  
		background-color:#ecf095;
		border-top-left-radius:4px;
		border-bottom-left-radius:4px;
		border-top-right-radius:4px;
		border-bottom-right-radius:4px;
	}
	.progress-bar{
		 
		font-size:20px;
		font-family:sans-serif;  
		color:black; 
	} 
</style>
 
<section class="theme-slider section-pt-space">
	<div class="container-fluid px-4">
		<div class="row"> 
			<div class="col-md-12  mb-3 p-0 p-md-3"> 
				<div class="col-md-12 mb-3 p-0 p-md-3">  
					<h2 class="text-center">Your Order Status</h2><br> 
					@php $count=1; @endphp 

					@if(count($order) > 0)
		          		@foreach($order as $r)  
							<p style="font-size:18px; color:black; font-family:verdana;">{{$count++}}    &nbsp;Item Name: {{$r->product_name}}</p> 
							<div class="progress" class="col">  
								@if($r->status == 'Placed')
									<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Placed</div> 
								@elseif($r->status == 'Confirmed')
									<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Placed</div> 
									<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Confirmed</div>  
								@elseif($r->status == 'Packed')
									<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Placed</div> 
									<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Confirmed</div>
									<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Packed</div>  
								@elseif($r->status == 'Shifted')
									<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Placed</div> 
									<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Confirmed</div>
									<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Packed</div>  
									<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Shifted</div>  
								@elseif($r->status == 'Delivered')
									<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Placed</div> 
									<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Confirmed</div>
									<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Packed</div> 
									<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Shifted</div>  
									<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Delivered</div>
								 @endif
							</div> 
						@endforeach 
					@else
						<p class="text-center" style="font-size:22px; padding-top:30px; color:red; font-family:verdana;">Order Not Found</p>
					@endif 
				</div> 
			</div>
		</div>
	</div>
</section> 
        
        