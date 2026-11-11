@extends('layouts.app')

@section('title', 'CTFCA School Website')

@section('content')
    <section style="max-width: 720px;">
        <p class="eyebrow" style="font-size:.78rem;letter-spacing:.09em;text-transform:uppercase;color:var(--muted);font-weight:600;margin-bottom:6px;">Phase 1 — Foundations</p>
        <h1>Welcome to Christ The Foundation Christian Academy</h1>
        <p class="lede" style="margin-top:12px;">
            This is the Laravel foundation for the CTFCA school information website.
            Public pages, content management, and additional features will be introduced in later phases.
        </p>
        <p style="margin-top:18px;">
            <img src="{{ asset('images/ctfca-logo.png') }}" alt="CTFCA logo" width="96" height="96">
        </p>
        <p class="muted" style="margin-top:12px;font-size:.9rem;">
            Foundation only. No announcements, events, or content modules are implemented yet.
        </p>
    </section>
@endsection