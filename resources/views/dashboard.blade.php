@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="containertxt">
        <h1>
            <span class="text first-txt font-weight-bolder">Hello,</span>
            <span class="type first-txt font-weight-bolder"></span>
        </h1>

        <div class="jamdigi ml-1">
            <span class="text-dark">Local Time (GMT+7) : </span>
            <span id="hours">00</span>
            <span>:</span>
            <span id="minutes">00</span>
            <span>:</span>
            <span id="seconds">00</span>
            <span id="session">AM</span>
        </div>
    </div>

    <script src="../assets/js/index.js"></script>
    <script>
        window.ityped.init(document.querySelector('.type'), {
            strings: ['Selamat Datang', 'Welcome', 'Welkom', 'いらっしゃい', 'أهلا وسهلا', '欢迎你来', '환영합니다', 'Bienvenue',
                'Herzlich Willkommen'
            ],
            loop: true
        });
    </script>
    <script>
        function displayTime() {
            var dateTime = new Date();
            var hrs = dateTime.getHours();
            var min = dateTime.getMinutes();
            var sec = dateTime.getSeconds();
            var session = document.getElementById("session");

            if (hrs >= 12) {
                session.innerHTML = "PM";
            } else {
                session.innerHTML = "AM";
            }

            if (hrs > 12) {
                hrs = hrs - 12;
            }

            document.getElementById('hours').innerHTML = hrs;
            document.getElementById('minutes').innerHTML = min;
            document.getElementById('seconds').innerHTML = sec;

        }
        setInterval(displayTime, 10);
    </script>
@endsection
