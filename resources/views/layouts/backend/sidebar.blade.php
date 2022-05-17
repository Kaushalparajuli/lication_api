<?php
$url = Route::current()->getName();
// dd($url);
?>
<div class="d-flex border border-right flex-column flex-shrink-0 text-dark bg-white" style="width: 280px;height:100vh;">
    <div class="p-3  border-bottom">
        <a href="/" class="d-align-items-center mb-3 mb-md-0 me-md-auto text-primary fw-bold text-decoration-none">
            <span class="fs-4 text-center">Location Nepal</span>
        </a>
    </div>


    <ul class="nav nav-pills p-3 flex-column mb-auto">
        <li>
            <a href="/admin" class="nav-link text-dark @if ($url == null) active text-white @endif">
                <i class="fa fa-home"></i>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/tokens"
                class="nav-link text-dark  @if ($url == 'tokens.index') active text-white @endif"
                aria-current="page">
                <i class="fa-solid fa-coins"></i>
                Tokens
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/documentation"
                class="nav-link text-dark  @if ($url == 'documentation.index') active text-white @endif"
                aria-current="page">
                <i class="fa-solid fa-coins"></i>
                Documentation
            </a>
        </li>


    </ul>


</div>
