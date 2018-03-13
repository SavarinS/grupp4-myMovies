<?php  ?>

<form method="post"action="{{route('movies.store')}}">
@csrf

  Movie name:<br>
  <input type="text" name="title" value="">
  <br>
  Description:<br>
  <input type="text" name="desc" value="">
  <br>
  Run Times:<br>
  <input type="number" name="runtimes" value="">
  <br>
  Release Year:<br>
  <input type="text" name="releaseyear" value="">
  <br>
  <br>
  <input type="submit" value="Create Movie">
</form>
