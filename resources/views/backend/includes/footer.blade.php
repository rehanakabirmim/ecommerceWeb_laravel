<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ asset ('backend') }}/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset ('backend') }}/assets/demo/chart-area-demo.js"></script>
<script src="{{ asset ('backend') }}/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset ('backend') }}/js/datatables-simple-demo.js"></script>

<script>$(document).ready(function () {
        // product image show buttom the input field
        $('.image').change(function (e) {
            e.preventDefault();
            let reader = new FileReader();
            var file = document.querySelector('.image').files[0];
            reader.onload = function(e){
                $('.imagePreview').attr('src', e.target.result);
            }
            reader.readAsDataURL(file);
        });
    });
    </script>
      @if(Session::has('message')){
		<script>
	

  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
		</script>
	}
  @endif


  

</body>
</html>
