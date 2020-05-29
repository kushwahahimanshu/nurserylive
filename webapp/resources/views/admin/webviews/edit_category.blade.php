@extends('admin.dashboard_master') 
@section('main_content')
	@include('admin.common.admin_page_title') 
	<div class="row">
		@include('admin.components.admin_edit_sub_category')
	</div> 
@endsection