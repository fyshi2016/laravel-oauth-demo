@extends('layouts.app')

@section('content')
<div class="container">
    <h2>OAuth 管理</h2>
    <passport-clients></passport-clients>
    <passport-authorized-clients></passport-authorized-clients>
    <passport-personal-access-tokens></passport-personal-access-tokens>
</div>
@endsection

