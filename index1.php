<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CC Kelompok 5</title>
    <style>
        body {
            width: 100vw;
            height: 100vh;
        }
        body,
        div{
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            width: 100%;
            text-align: center;
        }

        table th {
            text-align: left;
            padding-left: 2rem;
        }
    </style>
</head>

<body>
    <h1>Kelompok 5 Cloud Computing</h1>
    <table>
        <tr>
            <td>1911511008</td>
            <th>KHAIRUNNISA</th>
        </tr>
        <tr>
            <td>1911511005</td>
            <th>MUHAMMAD NOVERI RAMADHAN</th>
        </tr>
        <tr>
            <td>1911512006</td>
            <th>HARITSAH YUDHA PRATAMA</th>
        </tr>
        <tr>
            <td>1911512015</td>
            <th>ABDUL HALIM</th>
        </tr>
        <tr>
            <td>1911512019</td>
            <th>RIZEM MAHENDRA</th>
        </tr>
        <tr>
            <td>1911512025</td>
            <th>ILHAM DWI BAKTI</th>
        </tr>
        <tr>
            <td>1911513003</td>
            <th>VANESSA ANNESYA</th>
        </tr>
        <tr>
            <td>1911513007</td>
            <th>FARID DARMAN</th>
        </tr>
    </table>
    <div style="width: 100%">
       <?php print_r($_SERVER['SERVER_SIGNATURE']); ?>
    </div>
</body>

</html>