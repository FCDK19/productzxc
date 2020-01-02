<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=no">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
  </head>
  <body>

<div class="columns">
  
<div class="column">
 <section class="section">
    <div class="columns">
      

<div class="column">
  <p class="title is-4">Products</p>

<table class="table is-hoverable is-striped is-fullwidth">
  <thead>
    <tr>
      <td>id</td>
      <td>name</td>
      <td>category_name</td>
      <td>tags</td>
    </tr>
  </thead>
  <tbody>
    <tr  style="cursor: pointer;" onclick='show_modal()'>
    @foreach ($products as $product)
      <td>{{ $product->id }}</td>
      <td>{{ $product->name }}</td>
      @endforeach

      @foreach ($categories as $category)
      <td>{{ $category->name }}</td>
      @endforeach

      @php ($names = [])
      @foreach ($tags as $tag)
      @php ($names[] = $tag->name)
      @endforeach
      <td>{{ implode(', ', $names) }}</td>
    </tr>
  </tbody>
</table>
</div>
</div>


<div id="modal-1" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">{{ $product->name }}</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
     <p>descr: {{ $product->descr }}</p>
     <p>category: <b>{{ $category->name }}</b></p>
     <p>tags: <b>{{ implode(', ', $names) }}</b></p>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success">Save changes</button>
      <button class="button">Cancel</button>
    </footer>
  </div>
</div>
  
 </section>
</div>

</div>

<script type="text/javascript">
function show_modal(){
  $(".modal").addClass("is-active");
}

$(".delete").click(function() {
   $(".modal").removeClass("is-active");
});
$(".modal-background").click(function() {
   $(".modal").removeClass("is-active");
});
</script>
  </body>
</html>
