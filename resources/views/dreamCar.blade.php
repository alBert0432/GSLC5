@extends('layouts.main')

@section('container')

    <body>
        <div class="form-forza">
            <center>
                <form action="<?php $_PHP_SELF; ?>" method="GET" id="form-horizon">
                    Choose your Dream Car : Integra Type-R, NSX, RSX Type-S, A110
                    <input type="text" name="horizon" id="submit-btn" />
                    <input type="submit" id="submit-btn" />
                </form>

                @switch($hari = $_GET["horizon"])
                    @case('Integra Type-R')
                        <h3>Horizon Car :</h3>
                        <img class="image" src="https://static.wikia.nocookie.net/70d14bbe-adb6-449c-bfd8-807c6bd3f7e4" height=450px
                            width="500px">
                    @break

                    @case('NSX')
                        <h3>Horizon Car :</h3>
                        <img class="image" src="https://i.redd.it/ohpz0n6ypdt61.jpg" height=450px width="500px">
                    @break

                    @case('RSX Type-S')
                        <h3>Horizon Car :</h3>
                        <img class="image" src="https://www.kudosprime.com/fh5/images/users/car_2_77989_6227ea227356e.jpg"
                            height=450px width="500px">
                    @break

                    @case('A110')
                        <h3>Horizon Car :</h3>
                        <img class="image" src="https://pbs.twimg.com/media/EMLaM2NVUAAI2uO?format=jpg&name=4096x4096" height=450px
                            width="500px">
                    @break

                    @default
                @endswitch

            </center>
        </div>

    </body>
@endsection

<style>
    body {
        background-image: url(https://media.evo.co.uk/image/private/s--X-WVjvBW--/f_auto,t_content-image-full-desktop@1/v1628615872/evo/2021/08/Forza%20Horizon%205%20map%20update-5.jpg);
        background-size: 2000px;
        background-repeat: no-repeat;
    }

    h3 {
        color: salmon;
    }

    #form-horizon {
        color: salmon;
        font-size: 35px;
        margin-top: 70px;
        font-weight: bold;
    }

    #submit-btn {
        border-radius: 13px;
    }
</style>
