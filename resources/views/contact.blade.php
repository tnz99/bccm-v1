@extends('components.layout')
@section('body_class',$bodyClass,)
@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')

<section class="d-flex z-3 story-section align-items-center" style="margin-top: 25vh;">
    <div class="{{ $darkThemeFlag ? 'text-white' : 'text-black' }} story-header">
        <h2 class="story-header-text">we are</h2>
        <h2 class="story-header-text">{{ $name }}</h2>
        <p class="story-header-description">{{ $description }}</p>
    </div>

    <div class= "containerfb">
        <a href="#" class="fb-div"><img class= "fb" src="../images/backgrounds/fb.png" alt="img"/></a>
        <a href="#" class="fb-div"><img class= "ig" src="../images/backgrounds/ig.png" alt="img"/></a>
        <a href="#" class="fb-div"><img class= "email" src="../images/backgrounds/email.png" alt="img"/></a>
    </div>
</section>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
   
@endsection