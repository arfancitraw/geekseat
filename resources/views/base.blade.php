<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GeekSeat Test</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Styles -->
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

        <style>
            body {
                font-family: 'Roboto', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        @include('witch')
        <script type="text/javascript">
        $(document).ready(function () {

        })
        function validateForm() {
            var name1 = document.getElementById("personage1").value;

            if(name1 == "") {
              document.getElementById("blankMsg").innerHTML = "**Fill the name";
              return false;
            }
        }
        function submit()
        {
            $("#result").show();
            $.post('{{ url('village') }}', $('#witchForm').serialize()).done(function (response) {
                var sum = 0;
                var total = 0;
                var htm = "";
                var data = response.data;
                $.each(data, function (index, value) {
                  total++;
                  $('input[name="person['+index+'][show_age]"]').val(value.age);
                  $('input[name="person['+index+'][show_year]"]').val(value.year);
                  $('input[name="person['+index+'][killed_number]"]').val(value.killed_number);
                  $('input[name="person['+index+'][killed_year]"]').val(value.killed_year);
                  sum += value.killed_number;
                  if(index > 1)
                  {
                      htm += " + ";
                  }

                  htm += value.killed_number;
                })

                $(showResult).html("("+htm+")/"+total+" = "+ (sum/total));
            });
        }
        </script>  
    </body>
</html>
