<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

    <body>
        {{-- <div class="container">
            <div class="card">
                <div class="card-body">
                    <x-sidebar title="My Sidebar" :info="$info" class="bg-primary">
                        <x-slot name="sidebartitle">Sidebar Cooler Title</x-slot>
                        <div>Additional Input</div>
                    </x-sidebar>
                </div>
            </div>
        </div> --}}

        <x-navbar title="Website Title"/>
        <br>
        <div class="container border">
            <h4>Button Different Style</h4>
            <x-buttons text="Button 1" class="btn btn-primary"/>
            <x-buttons text="Button 2" class="btn btn-success"/>
            <x-buttons text="Button 3" class="btn btn-warning"/>
            <x-buttons text="Button 4" class="btn btn-outline-info"/>
            <x-buttons text="Button 5" class="btn btn-secondary"/>
        </div>

        <div class="container border mt-3">
            <h4>Different Alert type</h4>
            <x-alert text="A Simple Dynamic Alert" class="alert alert-info" role="alert"/>
            <x-alert text="A Simple Dynamic Alert" class="alert alert-success" role="alert"/>
            <x-alert text="A Simple Dynamic Alert" class="alert alert-warning" role="alert"/>
            <x-alert text="A Simple Dynamic Alert" class="alert alert-primary alert-dismissible fade show" role="alert">
                <x-buttons text="" class="btn-close" data-bs-dismiss="alert" aria-label="Close" type="button" />
            </x-alert>
        </div>

        <div class="container border mt-3">
            <h4>Different Drop Downs</h4>
            <x-dropdown text="Dropdown Menu 1"/>
            <x-dropdown text="Dropdown Menu 2"/>
            <x-dropdown text="Dropdown Menu 3"/>
            <x-dropdown text="Dropdown Menu 4"/>
            <x-dropdown text="Dropdown Menu 5"/>
        <div>

        <div class="container border mt-3">
            <h4>Different Type of Input Forms</h4>

            <x-forms.input label="Username" placeholder="Enter Username" type="text" class="form-control" id="username" />
            <x-forms.input label="Email Address" placeholder="Enter Email" type="email" class="form-control" id="email" />
        </div>

        <div class="container border mt-3">
            <h4>Different Type of Text Area</h4>
            <x-forms.textarea label="Enter your Vision Here" id="textarea1"  class="form-control" row=10 />
        </div>
    </body>
</html>
