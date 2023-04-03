@extends('modules.templates.layouts')
@section('content')
<div class="d-flex align-items-center p-3 my-3 text-white rounded shadow-sm" style="background-color: purple">

<img class="me-3" src="{{ url('./assets/media/icons/icon-ibik.png') }}" alt="icon-ibik"

width="45" height="45">
<div class="lh-1">
    <h1 class="h6 mb-0 text-white lh-1">Bootstrap</h1>
        <small>Since 2011</small>
            </div>
            </div>
            <div class="card">
            <div class="card-header">
            <h3 class="card-title">This is a HOME page</h3>
            </div>
        <div class="card-body">
            {{-- Welcome folks.. --}}
            {{-- {{ $title }} --}}
            <p>NPM {{$data['npm']}} termasuk bilangan 
                @if ($data['npm'] % 2 === 0)
                    <span class="text-primary">GENAP</span>
                @else
                    <span class="text-info">GANJIL</span>    
                @endif
            
            {{-- switch case --}}
            <p>NPM {{$data['npm']}} termasuk bilangan 
                @switch($data['npm'] % 2)
                    @case(0)
                        <span class="text-primary">GENAP</span>
                        @break
                    @case(1)
                        <span class="text-info">GANJIL</span>
                        @break
                    @default
                        
                @endswitch

            {{-- FOR --}}
            <div class="skills">
                <h4 class="text-uppercase">Skill :</h4>
                <div class="d-flex flex-row justify-content-between">
                    <p class="text-dark">PHP</p>
                </div>
                    @for ($i = 0; $i < 5; $i++)
                        <span class="me-1 text-warning">
                            <i class="bi bi-star-fill"></i>
                        </span>
                    @endfor
                </div>

                <div class="d-flex flex-row justify-content-between">
                    <p class="text-dark">JAVA</p>
                </div>
                    @for ($i = 0; $i < 5; $i++)
                        <span class="me-1 text-warning">
                            <i class="bi bi-star{{ ($i>2) ? '-fill':''}}"></i>
                        </span>
                    @endfor
                </div>
            </div>
        </div>
</div>
@endsection