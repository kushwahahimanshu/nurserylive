@extends('admin.dashboard_master') 
@section('main_content')
	@include('admin.common.admin_page_title') 
	<div class="row">
		@if($flag==1)
		 @include('admin.components.vendor_show_order')
		  @elseif($flag==2)
		   @include('admin.components.order_details')
		   @endif
	</div> 
@endsection