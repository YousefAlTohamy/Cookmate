@extends('layouts.recipe')
@section('content')
    <div id="dashboard" class="page-content">
        <h2>About</h2>
        <div id="about" class="about">
            <p>
                Welcome to <span style="color: #1577ea;"> {{ config('app.name') }} </span> dashboard. <br>
                <span style="color: #1577ea;"> {{ config('app.name') }} </span> This website was designed to showcase the
                most frequently requested recipes and those popular in most countries. <br>
                The control panel aims to make it easy to control and manage recipes from anywhere and on all devices using
                the website. <br>
                The control panel offers the administrator multiple customization options for everything related to recipes,
                such as adding new recipes, modifying information about a recipe currently listed on the site (changing the
                title, ingredients, or steps), or even deleting unwanted recipes. <br>
                Our goal is to spread happiness among people by enjoying foods and flavors that bring joy to the heart and
                put a smile on their faces, as soon as they smell the ingredients and food. <br>

                <span style="color: #1577ea;"> {{ config('app.name') }}</span>, Taste the Flavors of Bliss.
                <br><br>
            </p>
            <div class="dev-by">
                <p>
                    Developed by:
                    <a href="https://www.linkedin.com/in/yousefaltohamy" target="blank">Yousef Al-Tohamy Ahmed</a>
                </p>
            </div>
        </div>
    </div>
@endsection
