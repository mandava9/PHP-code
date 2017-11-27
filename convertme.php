<?php
    function fahrenheit_to_celsius($given_value)
    {
        $celsius=5/9*($given_value-32);
        return $celsius ;
    }

    function celsius_to_fahrenheit($given_value)
    {
        $fahrenheit=$given_value*9/5+32;
        return $fahrenheit ;
    }

?>

<html>
    <head>
        <title>Temp. Convert.</title>
    </head>
    <body>
        <form action="" method="post">
        <table>
           
            <tr>
                <td>
                    <select name="first_temp_type_name">
                        <option value="fahrenheit">Fahrenheit</option>
                        <option value="celsius">Celsius</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="given_value">
                </td>
            </tr>
            <tr>
                <td>
                    <select name="second_temp_type_name">
                        <option value="fahrenheit">Fahrenheit</option>
                        <option value="celsius">Celsius</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btn" value="Convert">
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    if(isset($_POST['btn']))
                    {
                        $first_temp_type_name=$_POST['first_temp_type_name'];
                        $second_temp_type_name=$_POST['second_temp_type_name'];
                        $given_value=$_POST['given_value'];
                        if($first_temp_type_name=='fahrenheit')
                        {
                            $celsious=fahrenheit_to_celsius($given_value);
                            echo "Fahrenheit $given_value = $celsious Celsious";
                        }
                        if($first_temp_type_name=='celsius')
                        {
                            $fahrenheit=celsius_to_fahrenheit($given_value);
                            echo "Celsious  $given_value = $fahrenheit Fahrenheit";
                        }
                        
                        
                    }
                    
                    ?>
                </td>
            </tr>
        </table>
        </form>
		<p><a href="index.html">Return</a></p>
</html>
    </body>