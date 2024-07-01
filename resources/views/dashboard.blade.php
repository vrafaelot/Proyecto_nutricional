@extends('layouts/dashboard')
@php $dashboard = false; @endphp
@livewire('navigation-menu')
<div>
<x-inicio1 />
    <x-inicio2 />
    <x-inicio3 />
    <x-inicio4 />
</div>
@extends('partials/footer')
