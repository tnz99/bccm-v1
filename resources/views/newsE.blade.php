@extends('components.layout')
@section('body_class', 'the-newsE')

@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')

<section class="story-section gallery-wrapper">
    <div class="gallery-container">
        <div class="options">
            <div class="option active" style="background:   #DA8495; opacity: 0.7;">
                <div class="image active-image" style="background-image:url('../images/backgrounds/about.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">National Communications to the UNFCCC</div>
                        {{-- <div class="sub">Empowering Change for a Sustainable Tomorrow</div> --}}
                    </div>
                </div>
            </div>
            <div class="description">
                <div class="image-content scroll text-white">
                    Parties to the United Nations Framework Convention on Climate Change are required to submit national communication on a periodic basis as a reporting obligation.  National communications offer countries the opportunity to contribute with technically sound studies and information that can be used for designing mitigation and adaptation measures. The ultimate goal of the National Communications process is to support integration of climate change considerations into relevant social, economic and environmental policies and actions.
                    <a href="http://www.nec.gov.bt/projects/details/national-communications-to-the-unfccc" target="tab">Read More...</a>
                </div>
            </div>
        </div>

        <div class="option" style="background:   #DA8495; opacity: 0.7;">
            <div class="image" style="background-image: url('../images/backgrounds/about.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Gender Responsive Nationally Determined Contribution (NDC) Implementation in Bhutan</div>
                        {{-- <div class="sub">Shaping a Sustainable Future!</div> --}}
                    </div>
                </div>
               
            </div>
            <div class="description">
                <ul class="image-content scroll text-white">
                    <div>
                        The Royal Government of Bhutan committed to remain carbon neutral in 2009 by ensuring that its forests sequester more carbon than emitted through other actions. This commitment was reiterated in 2015 in Bhutan’s Intended Nationally Determined Contribution to the Paris Agreement and this was ratified by the Parliament in 2017. Building on UNDP’s extensive foundational work supporting low-emission development and climate change finance, the NDC Support Project will support the Royal Government of Bhutan to achieve transformational change by using NDC implementation as a mechanism to scale up investments in inclusive, gender-responsive climate actions that help achieve NDC targets and, through this, deliver on the Paris Agreement and the SDGs
                        <a href="http://www.nec.gov.bt/projects/details/gender-responsive-nationally-determined-contribution-ndc-implementation-in-bhutan" target="tab">Read More...</a>
                    </div>
                </ul>
            </div>
        </div>
        <div class="option" style="background:   #DA8495; opacity: 0.7;">
            <div class="image" style="background-image: url('../images/backgrounds/about.png');">
                <div class="label">
                    <div class="info">
                        <div class="main">Preparation of a National Adaptation Plan (NAP) for Bhutan, with a focus on the water sector (2019-2023).</div>
                        <div class="sub">Shaping a Sustainable Future!</div>
                    </div>
                </div>
               
            </div>
            <div class="description">
                <ul class="image-content scroll text-white">
                    <div>
                        The Kingdom of Bhutan launched its NAP process in 2015 with the definition of a national NAP road-map and an update of the 2012 NAPA. This NAP project aims to build on Bhutan’s Nationally Determined Contribution (NDC) by accelerating the NDC vision to scale up adaptation in the medium- to long-term and by focusing on priority sectors in the NDC, such as water resources. While Bhutan has been budgeting national resources for adaptation through its Five-Year Plans and the Bhutan Trust Fund for Environmental Conservation, climate change spending still forms only two percent of the national budget, demonstrating the need for external funding as highlighted in the NDC. In addition to financial limitations, Bhutan faces barriers related to coordination, learning and awareness, technical capacity for climate information, systematic identification and appraisal of adaptation options, and monitoring and evaluation. In order to enhance adaptation planning, all of these challenges need addressing. 
                        <a href="http://www.nec.gov.bt/projects/details/preparation-of-a-national-adaptation-plan-nap-for-bhutan-with-a-focus-on-the-water-sector-2019-2023" target="tab">Read More...</a>
                    </div>

                </ul>
            </div>
        </div>    
    </div>
</div>
<h1 class="text-white">Climate Projects</h1>
    
</section>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
@endsection