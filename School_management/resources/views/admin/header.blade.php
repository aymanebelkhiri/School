
@extends('header')
@section('content')

   
    <br><br><br><br><br>
    <style>
        aside{
            margin-top: -40px;
            padding: 10px;
            padding-top:0px ;
            background-color: #222e47;
            height: 1252px;
            font-family:Arial, Helvetica, sans-serif;
            width: 250px;
            box-sizing: border-box;
            text-align: center;
        }
        aside div {
            margin-bottom: 40px;
            color: white;
            text-align: center;
            box-sizing: border-box;
        }
        aside div a {
            color: white;
            padding: 15px 57px;
            text-decoration: none
            
        }
        aside div a:hover{
            border: 2px solid #f5a425;
            color: white;
        }
        .menu2{
            display: none;
        }
    </style>


    <section class="d-flex">

        <aside><br>
            <center>
                @if (Auth::check())
                    <h4 style="color: #f5a425;">Admin:<br>{{ Auth::user()->name }}</h4>
                @endif
            </center>
            <hr>
            <div><a href="/groupes" style="padding:15px 35px;">Groupes</a></div>
            <div><a href="/profs">Professeurs</a></div>
            <div><a href="/etudiants">Etudiant</a></div>
            <div><a href="/events">Events</a></div>
            <div><a href="/exams">Exams</a></div>
            <div><a href="{{ route('Messages')}}"> Messages</a></div>
            <div><a href="{{ route('Contact') }}"> Contact</a></div>
            <div><a href="/courses">Courses</a></div>
            <div><a href="/Contact">Contact</a></div>
            <br><br><br><br><br>
            <br><br><br><br><br>
        </aside>
        


        <article>
            <!-- content -->
            @yield("adminContent")
        </article>
    </section>



    @endsection