# Files and Folders
It's a work in progress, but for now it goes as follows:
1. Add folders to `/projects` with project titles. For example `0_intro`, `1_contextual` or `project_1`, `project_2`.
2. The `.php` file inside the project folder is the project content. 
3. Add images to the same project folder including background images for title spreads
4. In `index.php` add the path to the projects in the order you want to display them
5. In `settings.php` name your projects in the order they are in `index.php`

# settings.php
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

# index.php
Adjust project order in accordance with the order in settings.php (this may be automated in the future)

# css/style.css
Scroll to `.title-bg-img-n` to define the background image for the title spread of a project. By default, we use 0.jpg as background-filename. 
