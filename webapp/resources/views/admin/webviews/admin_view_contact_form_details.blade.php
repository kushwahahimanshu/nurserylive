@extends('admin.dashboard_master') 
@section('main_content')
	@include('admin.common.admin_page_title') 
	<div class="row">
		@include('admin.components.admin_view_contact_form_details')
	</div> 
@endsection