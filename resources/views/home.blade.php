@extends('layouts.master')


@section('title')
    Home Page | {{ env('APP_NAME') }}
@endsection

@section('content')
    @php
        // dd($users_obj)
    @endphp

    <div class="container mb-4">

        <?php
        function hello()
        {
            echo 'This Our Home Page';
        }
        ?>
        <h1 class="text-center py-2">
            <?php hello(); ?>
        </h1>

        <p>

            {{ $name . '=' . $age }}

            {{-- Hi  {{ $name . ' ' . $welcome_note; }} --}}

            {{-- @if ($age > 18)
            You are adult
        @else
            You are child
        @endif --}}
        </p>

        <p>
        <ul>
            <h4>By ForEach Loop</h4>
            @foreach ($datas as $key => $data)
                <li>
                    ({{ $key + 1 }})
                    {{ $data }}
                </li>
            @endforeach
            <br> <br>
            @foreach ($datas as $data)
                <li>
                    ({{ $loop->index + 1 }})
                    {{ $data }}
                </li>
            @endforeach

            <h4>By For Loop</h4>
            @for ($i = 0; $i < count($datas); $i++)
                <li>
                    {{ $datas[$i] }}
                </li>
            @endfor

        </ul>

        <ul>
            <h4>Users Object of Array</h4>
            <ul>
                @foreach ($users_obj as $user_obj)
                    <li>
                        {{ $user_obj->name }} : {{ $user_obj->age }}
                    </li>
                @endforeach
            </ul>
        </ul>

        </p>

        <section>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
