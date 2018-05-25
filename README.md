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
1. Add folders to `/projects` with project titles. For example `intro`, `suitcase` or `bikesharing`.
2. The `page.php` file inside the project folder is the project content.
3. The `spread_n.php` are the individual spreads. Use this if you want to exclude a page of a project for a company  
4. Add images to the same project folder including background images for title spreads
5. In `settings.php` define the project folders and, in the same file, name your projects
6. Also in `settings.php` change the CSS variables like highlight color or `$site_border`.

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
    $project_1     = "Suitcase"
    $project_2     = "Bike Sharing New York"
    ...
    $contact       = "Contact"

    $intro_url     = "../projects/introduction";
    $project_1_url = "../projects/suitcase";
    $project_2_url = "../projects/bikesharing";
    ...
    $contact_url     = "../projects/contact";

*Make sure the `$x_url` matches the name of the project folder.*
