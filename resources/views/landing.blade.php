@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    @include('sections.hero')

    {{-- Trusted Partners & Client Marquee --}}
    @include('sections.partners')

    {{-- Engineering Services --}}
    @include('sections.services')

    {{-- Technology Stack Explorer --}}
    @include('sections.tech-stack')

    {{-- Case Studies / Product Showcase --}}
    @include('sections.showcase')

    {{-- Key Performance Indicators & Stats --}}
    @include('sections.stats')

    {{-- Client Testimonials --}}
    @include('sections.testimonials')

    {{-- Transparent Pricing Models --}}
    @include('sections.pricing')

    {{-- Interactive FAQ --}}
    @include('sections.faq')

    {{-- Contact & Project Estimation Form --}}
    @include('sections.contact')
@endsection
