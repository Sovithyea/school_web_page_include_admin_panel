@if (session()->has('message'))
<div class="alert text-success m-3" role="alert">
    {{session()->get('message')}}
  </div>
@endif

@if (session()->has('error'))
<div class="alert text-danger m-3" role="alert">
    {{session()->get('error')}}
  </div>
@endif

<script>
    setTimeout(function() {
        bootstrap.Alert.getOrCreateInstance(document.querySelector(".alert")).close();
    }, 2000)
</script>