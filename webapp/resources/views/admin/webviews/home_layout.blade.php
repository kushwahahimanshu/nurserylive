@extends('admin.dashboard_master') 
@section('main_content')
	@include('admin.common.admin_page_title') 
	<div class="row">
		@if($flag==1)
		  @include('admin.components.admin_add_home_layout')
		   @elseif($flag==2)
		    @include('admin.components.admin_add_home_section_layout')
		@endif
	</div> 
@endsection