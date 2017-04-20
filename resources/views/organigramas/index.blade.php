@extends('layouts.app')

@section('content')
    <h1>Organigrama</h1>
    <div id="chart-container"></div>
@endsection

@section('script')
    <script src="js/jquery.orgchart.js"></script>
    <link rel="stylesheet" href="css/jquery.orgchart.css">

@endsection
