var classes = {
    'index': {
        'icon': '<i class="fas fa-indent"></i>',
        'title': 'Index',
        'url': 'home.html',
    },
    'installation': {
        'icon': '<i class="fas fa-hand-point-right"></i>',
        'title': 'Installation Process',
        'url': 'installation',
        'section_start': 'Section 1 - Laravel Basic'
    },
    'git': {
        'icon': '<i class="fas fa-hand-point-right"></i>',
        'title': 'Installation From Git',
        'url': 'installation-from-git',
    },
    'model': {
        'icon': '<i class="fas fa-hand-point-right"></i>',
        'title': 'Model',
        'url': 'model',
    },
    'views-and-routes': {
        'icon': '<i class="fas fa-hand-point-right"></i>',
        'title': 'Views & Routes',
        'url': 'routes-and-views',
    },
    'route': {
        'icon': '<i class="fas fa-hand-point-right"></i>',
        'title': 'Route',
        'url': 'route',
    },
    'view': {
        'icon': '<i class="fas fa-hand-point-right"></i>',
        'title': 'View',
        'url': 'views',
    },
    'controller': {
        'icon': '<i class="fas fa-hand-point-right"></i>',
        'title': 'Controller',
        'url': 'controller',
    },
    'layout': {
        'icon': '<i class="fas fa-hand-point-right"></i>',
        'title': 'Layout',
        'url': 'layout',
    },
    'middleware': {
        'icon': '<i class="fas fa-hand-point-right"></i>',
        'title': 'Middleware',
        'url': 'middleware',
    },
    'crud': {
        'icon': '<i class="fas fa-hand-point-right"></i>',
        'title': 'Create Read Update Delete',
        'url': 'crud',
        'section_start': 'Section 2 - Laravel Crud'
    },
};

var classes_names = Object.keys(classes);

document.addEventListener('DOMContentLoaded', function () {
    var index_element = document.getElementById("class_index");
    var prev_class = document.getElementById("prev_class");
    var next_class = document.getElementById("next_class");

    if (current_class != classes_names[0]) {
        the_prev_url = classes[classes_names[classes_names.indexOf(current_class) - 1]].url;
        prev_class.innerHTML = "<a href='" + the_prev_url + "'>" + "&lt;&lt; Previous Lesson" + "</a>";
    }

    if (current_class != classes_names[classes_names.length - 1]) {
        the_next_url = classes[classes_names[classes_names.indexOf(current_class) + 1]].url;
        next_class.innerHTML = "<a href='" + the_next_url + "'>" + "Next Lesson &gt;&gt;" + "</a>";
    }

    for (a = 0; a < classes_names.length; a++) {
        if (classes[classes_names[a]].section_start) {
            index_element.innerHTML += "<div class='section-index'>" + classes[classes_names[a]].section_start + "</div>";
        }
        if (current_class != classes_names[a]) {
            index_element.innerHTML += "<li>" + "<a href='" + classes[classes_names[a]].url + "'>" + classes[classes_names[a]].icon + "  " + classes[classes_names[a]].title + "</a>" + "</li>";
        } else {
            index_element.innerHTML += "<li>" + classes[classes_names[a]].icon + " " + classes[classes_names[a]].title + "</li>";
        }

    }

    if (document.getElementById("user_greeting_confirm")) {
        document.getElementById("user_greeting_confirm").onclick = function () {
            var username = document.getElementById("user_greeting_input").value;

            if (!username) {
                username = "guest user";
            }

            document.getElementById("user_greeting_message").innerHTML = "Welcome " + username + "!"
            document.getElementById("user_greeting_input").value = "";
        };
    }

}, false);
