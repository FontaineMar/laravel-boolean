@extends('layouts.layout-home')

@section('candidatiMain')
    <form class="bkg-default">
       <h3>nome</h3>
       <input type="text" name="name" id="">
       <h3>cognome</h3>
       <input type="text" name="surname" id="">
       <h3>email</h3>
       <input type="text" name="email" id="">
       <h3>numero di telefono</h3>
       <input type="number" name="number">
       <button>canditati</button>
    </form>
@endsection
