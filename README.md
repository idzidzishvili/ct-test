## About Project

You can add projects and then within each project add several tasks, reorder tasks, edit and delete projects or tasks

### Set up

- Create database in your mySql server
- Extract downloaded zip file and navigate to it
- Edit .env file accordingly (usually only line 14, DB_DATABASE setting needs to be changed)
- Run "php artisan migrate" to create tables in selected database
- After command will be finished  run "php artisan serve" to serve project


### Application usage

- Open link **[http://127.0.0.1:8000](http://127.0.0.1:8000)**
- By default you will go to **Projects** section, here you can add, edit or delete projects, create at least one project
- Now go to Tasks section, here you can add, edit, order or delete tasks, task can be created under any of created project
- In **Tasks** section you can order tasks, just move any of tasks up or down, on mouse release order will be saved in database, so if you refresh page tasks will now be ordered 
- Now go to **Project tasks** section, select any of project from drop-down list, you will see tasks under selected project
