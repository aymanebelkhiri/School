@extends('header')
@foreach ($emp as $e)
    <p>Module: {{ $e->module->name }}</p>
    <p>Prof: {{ $e->prof->name }}</p>
    <p>Filiere: {{ $e->filiere->name }}</p>
@endforeach
