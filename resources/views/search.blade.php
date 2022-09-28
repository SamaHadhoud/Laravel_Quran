  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <script>
  $(document).ready(function() {

    $('#search').on('keyup', function(){
        var category = $('#cat').val();
        var name = $('#search').val();

      if (name == "") {
        $("#display").html("");
      } else {

        $.ajax({
          method: 'GET',
          url: "{{ route('search') }}",
          data: {
            'search': name,
            'category':category,
          },
          success: function(data){
            $('#display').html(data);
          }
        });
      }
    });

  });
  </script>
