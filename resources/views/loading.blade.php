

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/style/loading.css')}}">
    <title>Chargement...</title>
</head>
<body>
   
<div class="body-loading">
        <div class="loader"></div>
    </div> 
 <div class=" row body-loading "> 
   <div class=" col bloc">
    <span>A</span>
    <span>I</span>
    <span>-</span>
    <span>M</span>
    <span>A</span>
    <span>G</span>
    <span>I</span>
    <span>N</span>
    <span>A</span>
    <span>T</span>
    <span>I</span>
    <span>O</span>
    <span>N</span>
  </div>
</div> 

  <script> 

setTimeout(() => {
     window.location.href = "{{ url('index') }}";
    //   Redirige vers la page d'accueil
}, 1200); // temps --> 
  </script>
  <script src="{{asset('js/gsap.min.js')}}"></script>
    <script src="{{asset('assets/js/loading.js')}}"></script>
</body>
</html>  
