
@extends('layouts.master');

@section('title')
    Contact Page | {{ env('APP_NAME') }}
@endsection


@section('content')

        
    <div class="container">

        <?php
            function hello(){
                echo "Wellcome To Our Contact Page";
            }
        ?>
        <h1> 
            <?php hello() ?>    
        </h1>

    </div>
    
@endsection

