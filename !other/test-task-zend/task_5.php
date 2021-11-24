<!DOCTYPE html>
<!-- http://www.megasoft.ru/tests/phpdeveloper/ -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task_5</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    .btn {
        margin: 2px;
        width: 50px;
    }
    </style>
</head>

<body>

    <script>
    $(document).ready(function() {
        var max = 3;
        $('body').append('<div class="group"></div>');
        for (i = 1; i <= max; i++)
            add_button(i);

        $('body .btn').on('click', function() {
            $('body .btn').each(function(index) {
                var t = parseInt($(this).text());
                if (t >= max) {
                    t = 0;
                }

                $(this).text(t + 1);
            });
        });

        function add_button(i) {
            console.log('add');
            var $button = $('<button class="btn">' + i + '</button><br>');
            $('body .group').append($button);
        }
    });
    </script>

</body>

</html>