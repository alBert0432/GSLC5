@extends('layouts.main')

@section('container')

    <body>
        <h1 class="title" id="title-up">
            LEAVE YOUR
        </h1>

        <h1 class="title">
            LIMIT
        </h1>

        <a href="/dreamCar?horizon=" id="link-car">
            <h3 id="choose-car">
                Choose Your Dream Car
            </h3>
        </a>
    </body>
@endsection


<style>
    body {
        background-image: url(https://cdn.vox-cdn.com/uploads/chorus_asset/file/22984617/ForzaHorizon5_Launch_Review_04_16x9_WM.jpg);
        background-size: 2000px;
        background-repeat: no-repeat;
        background-position: center;
    }

    .title {
        color: white;
        font-size: 100px
    }

    #title-up {
        margin-top: 150px
    }

    #link-car {
        text-decoration: none;
        color: white;
    }

    #choose-car {
        background-color: rgb(255, 57, 239);
        width: 320px;
        border-radius: 10px;
        padding-left: 5px
    }
</style>
