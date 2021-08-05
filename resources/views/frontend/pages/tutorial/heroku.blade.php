@extends('frontend.layouts.default',[
'title'=>'Heroku',
'currentClass'=>'heroku',
'keywords'=>'Laravel Heroku',
'description'=>'Laravel Heroku',
])

@section('content')
    <h3>Heroku update process</h3>
    <p>
        1. git status
    </p>
    <input type="text" readonly value="git status" name="" id="git_status">
    <button value="copy" onclick="copyFunction('git_status', 'git_statusButton')" id="git_statusButton" type="button"
        class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> &nbsp; Copy
    </button>

    <p>
        2. git add .
    </p>
    <input type="text" readonly value="git add ." name="" id="git_add">
    <button value="copy" onclick="copyFunction('git_add', 'git_addButton')" id="git_addButton" type="button"
        class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> &nbsp; Copy
    </button>

    <p>
        3. git commit -am "message"
    </p>
    <input type="text" readonly value="git commit -am" name="" id="git_commit">
    <button value="copy" onclick="copyFunction('git_commit', 'git_commitButton')" id="git_commitButton" type="button"
        class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> &nbsp; Copy
    </button>

    <p>
        4. git push heroku master
    </p>
    <input type="text" readonly value="git push heroku master" name="" id="git_push">
    <button value="copy" onclick="copyFunction('git_push', 'git_pushButton')" id="git_pushButton" type="button"
        class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> &nbsp; Copy
    </button>

    <p>
        Project link
    </p>
    <input type="text" readonly value="https://laravel-course-with-enan.herokuapp.com/" name="" id="project_link">
    <button value="copy" onclick="copyFunction('project_link', 'project_linkButton')" id="project_linkButton" type="button"
        class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> &nbsp; Copy
    </button>

@endsection
