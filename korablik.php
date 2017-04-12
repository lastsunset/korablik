<!DOCTYPE html>
<html>

<body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- CSS -->
    <style>
        .center {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            width: 26px;
            height: 24px;
            background: url("sprites-example.png") no-repeat;
            box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.2);
        }

        .center:hover {
            background-position: -151px 0;
            cursor: pointer;
        }
    </style>
    <div class="center"></div>

    <!--JQ-->
    <script>
        $(document).ready(function() {

            $(function() {
                $('input[name=calendar]').datepicker();
                $('input[name=calendar1]').datepicker();
            });

            $('#forma').submit(function() {
                  var msg = {
                         'date'  : $('input[name=calendar]').val(),
                         'date1' : $('input[name=calendar1]').val()
                    };                 
                   if ( $('input[name=calendar]').val() || $('input[name=calendar1]').val() != '')
                         {
                $.ajax({
                    type: "POST",
                    url: "/test.php",
                    data: msg,
                    success: function(data) {
                        $('input.mybutton').val('спасибо, менеджер скоро свяжется с вами');
                        $('#forma')[0].reset();
                    },
                    error: function() {
                        alert("Возникла ошибка!");
                    }
                });
              }
              else $('input.mybutton').val('Заполните поля');
            });
        });

        
            $(function() {
    var $inputs = $('#txtOne, #txtTwo, #txtThree');
    
    $inputs.on('change paste input', function() {
        $inputs.not(this).attr('disabled', this.value == '' ? null : true);
    });
});
        
    </script>
    <form method="POST" action="javascript:void(0);" id="forma">
        <input type="text" id="txtOne" name="calendar" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy">
        <input type="text" id="txtTwo" name="calendar1" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy">
        <input type="submit" class="mybutton" value="свяжитесь со мной!">
    </form>

    <!--HTML-->    
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
        }

        .col1 {
            color: gray;
            line-height: 1.5;
            text-align: right;
            vertical-align: top;
        }

        .col2 {
            vertical-align: top;
            text-align: center;
        }
    </style>
    <br/>
    <table border="1" width="500px">

        <tr>
            <td width="110" align="right">6</td>
            <td width="110">7</td>
            <td rowspan="3" width="210" class="col2">Тест стиля<sup><s>Произвольный текст</sup></s>
            </td>
            <td>9</td>
        </tr>
        <tr>
            <td align="right">10</td>
            <td>11</td>
            <td>12</td>
        </tr>
        <tr>
            <td class="col1" rowspan="2" colspan="2"><u><i><b>Жирный, курсив серого цвета с подчеркиванием и увеличенным интервалом.</b></i></u></td>
            <td>14</td>
        </tr>
        <tr>
            <td colspan="2" height="80">
                <ul>
                    <li>Первый</li>
                    <li>Второй
                        <ol type="1">
                            <li>Снова второй</li>
                            <ul type="square">
                                <li>И снова второй</li>
                            </ul>
                            <li>Опять второй</li>
                        </ol>
                    </li>
                    <li>Третий</li>
                </ul>
            </td>
        </tr>
    </table>

    <!--JS Not completed-->
    <script>
    var config = {
    id1: First = {
    count: 25,
    price: 99
    },
    id2: Next = {
      count: 20,
      price: 1214
    },
    id3: Sec = {
      count: 100,
      price: 41221
    }            
    };
    console.log(config);
</script>
</body>

</html>