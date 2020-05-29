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
					@if($order->count() >1) 
						<p style="font-size:18px; color:black; font-family:verdana;">{{$count++}}    &nbsp;Item Name: {{$order->product_name}}</p> 
						<div class="progress" class="col">  
							@if($order->status == 'Placed')
								<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Placed</div> 
							@elseif($order->status == 'Confirmed')
								<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Placed</div> 
								<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Confirmed</div>  
							@elseif($order->status == 'Packed')
								<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Placed</div> 
								<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Confirmed</div>
								<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Packed</div>  
							@elseif($order->status == 'Shifted')
								<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Placed</div> 
								<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Confirmed</div>
								<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Packed</div>  
								<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Shifted</div>  
							@elseif($order->status == 'Delivered')
								<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Placed</div> 
								<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Confirmed</div>
								<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Packed</div> 
								<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Shifted</div>  
								<div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">Delivered</div>
							 @endif
						</div> 
					@else
						 <p>order not found</p>
					@endif 
				</div> 
			</div>
		</div>
	</div>
</section> 
        
        