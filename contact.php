<!-- Header -->
<?php include("./template/header.php") ?>

<head>
    <style>
        .button {
            top: 50%;
            left: 50%;
            margin: 0;
            position: absolute;
            display: inline-block;
            padding: 15px 25px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: lightblue;
            border: none;
            border-radius: 15px;
        }

        .button:hover {
            background-color: gainsboro
        }

        .button:active {
            background-color: gainsboro;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include("./template/navbar.php") ?>

    <!-- Body -->
    <div class="container">
        <div class="row ptop30">
            <div class="col-2">
                <img src="./image/peter.png" class="rounded-circle" width="80%">
            </div>
            <div class="col-8">
                <h1><br>อายุ 16</h1>
            </div>
        </div>
        <div class="row ptop10">
            <div class="col-6">
                <h4>ความสามารถ<br>FiveM Lua Developer<br>Discord Bot Js Developer</h4>
            </div>
            <div class="col-6">
                <h4>สนใจใน<br>FiveM Lua Developer<br>Discord Bot Js Developer</h4>
            </div>
        </div>
        <div class="row ptop10">
            <div class="col-6">
                <h4>ชอบเล่น<br>One Punch Man The Strongest<br>FiveM Server Trippie</h4>
            </div>
        </div>

        <div class="row ptop10">
            <div class="col-3">
                <button class="button">
                    <a href="mailto:chanakan7174@gmail.com">Email</a>
                </button>
            </div>
            <div class="col-3">
                <button class="button">
                    <a href="https://facebook.com/PeterGamez01" target="_blank">Facebook</a>
                </button>
            </div>
            <div class="col-3">
                <button class="button">
                    <a href="https://discordapp.com/users/601772071382679553" target="_blank">Discord</a>
                </button>
            </div>
            <div class="col-3">
                <button class="button">
                    <a href="https://github.com/PeterGamez" target="_blank">Github</a>
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div style="padding-top: 80px;">
        <?php include("./template/footer.php") ?>
    </div>
</body>

