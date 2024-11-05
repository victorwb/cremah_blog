@include('admin.layouts.header')
  <div id="wrapper">
    <!-- Sidebar -->
@include('admin.layouts.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
@include('admin.layouts.navbar')      
        <!-- Topbar -->
        
        <!-- Container Fluid-->
@include('admin.layouts.container')       
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
@include('admin.layouts.footer')
      <!-- Footer -->

@extends('admin.layouts.main')

@section('title', 'Home Page') <!-- Set a custom title for this page -->

@section('content')
    <h1>Welcome to the Home Page</h1>
    <p>This is the content of the home page.</p>
@endsection
