
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
           
            <h4 style="color: #f5a425;">Admin:<br>{{Auth::user()->name}}</h4>
            </center>
            <div><a href="{{route('filiéres.index')}}" style="padding:15px 35px;">Filiéres</a></div>
            <div><a href="{{route('modules.index')}}" style="padding:15px 35px;">Module</a></div>
            <div><a href="{{route('groupes.index')}}" style="padding:15px 35px;">Groupes</a></div>
            <div><a href="{{route('profs.index')}}">Professeurs</a></div>
            <div><a href="{{route('etudiants.index')}}">Etudiant</a></div>
            <div><a href="{{route('events.index')}}">Events</a></div>
            <div><a href="{{ route('Messages')}}"> Messages</a></div>
            <div><a href="{{route('ContactForAdmin')}}"> Contact</a></div>
            <div><a href="{{route('courses')}}">Courses</a></div>

            <br><br><br><br><br>
            <br><br><br><br><br>
        </aside>


        <article>
            <!-- content -->
            @yield("adminContent")
        </article>
    </section>



    @endsection
