@extends('layout')

@section('header')
    <div class="myHeader">
        <div class="myHeaderTitle">
            <h1 class="position-relative" style="text-align: center; color: #5E81AC; font-size: 48px">Welkom bij mijn Portofolio!</h1>
        </div>
        <div class="myHeaderSubtitle">
            <h2 class="position-relative" style="text-align: center; color: #D8DEE9; font-size: 22px">Web, Desktop en Mobile Developer</h2>
        </div>
    </div>
@stop
@section('content')
    @vite('resources/css/home.css')
    <div class="myScrollContainer">
        <div class="frame" style="height: 60vh">
            <h1 class="position-relative" style="text-align: center; margin-top: 2%;  color: #2e3440; font-size: 32px">Mijn Top Projecten!</h1>
            <div class="myProjectsHolder">
                <div class="myProject" style="left: 8%">
                    <div class="myProjectPictureHeader"></div>
                </div>
                <div class="myProject" style="left: 10%;">
                    <div class="myProjectPictureHeader"></div>
                </div>
                <div class="myProject" style="left: 12%">
                    <div class="myProjectPictureHeader"></div>
                </div>
            </div>
        </div>
        <div class="frame" style="height: 60vh">
            <h1 class="position-relative" style="text-align: center; color: #2e3440; font-size: 32px">Mijn Skills</h1>
            <div class="skillIcon">
                <div class="skillIconBG"></div>
                <div class="skillIconBG"></div>
                <div class="skillIconBG"></div>
            </div>
            <div class="skillText"></div>
        </div>
    </div>
@stop
