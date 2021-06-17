<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <div class="about-section">
        <h1 style ="text-align:center">ASSALAMUALAIKUM WR.WB</h1>

            <p style ="text-align:center"> <b>NAMA  : SYUKUR YAKUB</b></p>
            <p style ="text-align:center"> <b>NIM   : 311910696</b></p>
            <p style ="text-align:center"> <b>KELAS : TI.19.C1</b></p>
            <p style ="text-align:center"> <b>Phone : 085609349306</b></p>
            <p style ="text-align:center"> <b><i>from Pelita Bangsa University</i></b></p>

        <h2 style = "text-align:center">GOOD JOB</h2>
            <img class = "logo" src="bet.jpg" width="200" >
            <style>
                h2
                {
                    background-color: yellow;
                    color: rgb(20, 57, 220);
                    font-family: sans-serif;
                    text-align: center;
                    width: 45%;
                    margin:auto;
                    padding: 10px;
                }  
            </style> 
        <br><center><button class="button">Contact</button></center></br>
                     <style>
                        button
                        {
                            background-color: blue;
                            color: white;
                            font-family: sans-serif;
                            text-align: center;
                            width: 50%;
                            margin:auto;
                            padding: 6px;
                        }  
                    </style> 
    </div>
        <?= $this->include('template/footer'); ?>
</body>
</html>