<!DOCTYPE html>
<html>
    <head>
        <title>Multiplication Table</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
        <body>
            <h1>Multiplication Table</h1>

         <input type="text" id="my_number" placeholder="Enter a number">
         <button onclick="myFunction()">submit number</button>
         <table id="my_table"></table>

        <script>
            function myFunction(){
            var inputNumber = $('#my_number').val();
            var table = $('#my_table');
            table.empty();
                for(var i = 1; i <= 12;i++){
                var result = inputNumber * i;
                var row = $('<tr>');
                row.append($('<td>').text(inputNumber + ' x ' + i + ' = '));
                row.append($('<td>').text(result));
                table.append(row);
            }

            console.log(inputNumber);
            console.log('Click submit number');
        }
        </script>
    </body>

</html>
