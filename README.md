# Story
Minimal, full-screen online portfolio for job applications. Potential employers are sent a `yourwebsite.com/company` URL and they only see the projects they're supposed to see. You set up your projects once, and then send out multiple websites with no effort at all.

# Installation
Drag this project to the root of your server, or into a folder but then you'll have to use URL redirects from your domain host to make this nice and clean

# Files and Folders
You'll see three folders: `company`, `projects` and `system`.
`projects` is your projects folder — it's where you'll put all your projects.
`system` is the background action. Ideally you don't have to touch it.
`company` is one of many folders you'll use for applications. It contains `settings.php` and `index.php`, where you define company name, which projects from the `projects` folder to display, define project titles, and their order.

It's a work in progress, but for now it goes as follows:
1. Add folders to `/projects` with project titles. For example `0_intro`, `1_contextual` or `project_1`, `project_2`.
2. The `.php` file inside the project folder is the project content. 
3. Add images to the same project folder including background images for title spreads
4. In `index.php` add the path to the projects in the order you want to display them
5. In `settings.php` name your projects in the order they are in `index.php`

# `settings.php`
Use the `$variables` to set

    $company       = "Company Name"
    $greeting      = "Hello Company Name/Recipient"
    $published     = "June 2018"

    $first_name    = "Your First Name"
    $last_name     = "Your Last Name"
    $showNumbers   = True or False
    $hideSide      = True or False

    $intro         = "Introduction"
    $project_1     = "Project 1"
    $project_2     = "Project 2"
    ...
    $contact       = "Contact"

# `index.php`
Adjust project order in accordance with the order in settings.php (this may be automated in the future)

# `system/css/style.css
Scroll to `.title-bg-img-n` to define the background image for the title spread of a project. By default, we use 0.jpg as background-filename. 
