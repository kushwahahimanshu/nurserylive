@extends('admin.dashboard_master') 
@section('main_content')
	@include('admin.common.admin_page_title') 
	<div class="row">
		@include('admin.components.mobile_view_home_category')
	</div> 
@endsection