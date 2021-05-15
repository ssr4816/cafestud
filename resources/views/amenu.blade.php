@extends("atheme")
@section("content")
<div class="inner-banner"></div>
<div class="container">
<div class="row">
  <div class="col">
  <h3 class="title-big mt-4">Menu</h3>
  </div>
</div>
<div class="row mt-4">
  <div class="col">
  </div>
  <br><br>
</div>
  <div class="row mt-4">
    <div class="col">
    <table class="table table-dark table-hover mt-4">
      <thead>
        
        <th>Day</th>
        <th>Breakfast</th>
        <th>Lunch</th>
        <th>Dinner</th>
        <th></th>
      </thead>
      @foreach($items as $row)
        <tr>            
            <td>{{$row['Day']}} </td>
            <td>{{$row['Breakfast']}}</td>
            <td>{{$row['Lunch']}}</td>
            <td>{{$row['Dinner']}}</td>
            <td><a href="edit/{{$row['id']}}" class="btn btn-outline-secondary">Edit</a> </td>    
        </tr>
      @endforeach
      
    </table>
    </div>
  </div>
</div>

@endsection