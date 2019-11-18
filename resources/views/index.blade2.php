 
@foreach($restaurant as $index)

$A = {{$index -> rName}}








@endforeach
@foreach($favorite as $favo)

$B = {{$favo -> rid}}
@endforeach
<?php 
use App\favorite;
 $A = favorite::where('mid','=','5')->get();
  echo "$A";
  ?>

  @if($index->rName = $favo -> rid)
  $C = C
  @else
  $C = 0
  @endif
  