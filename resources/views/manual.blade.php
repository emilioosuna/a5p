@extends('layouts.dashboard')
@section('pageheader')
Manual Usuario
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card card">
        <div class="card-header bg-black">Manual Usuario</div>
        <div class="card-body">
          <div class="panel card card-Teal">
             <div class="row">
                <div class="col-md-12">
                    <div class="row">
                       <embed src="{{ asset('manual/AgenteAduanas.pdf') }}" width="100%" height="650px"
                       type="application/pdf" zoom="5">
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
</div>
</div>


@endsection
