# Simple Item Management System

This is a simple Item Management System that demonstrates basic CRUD (Create, Read, Update, Delete) operations using PHP and a MySQL database. The project is designed to be run in a Docker environment.

## Features

- View a list of items
- Create a new item
- Edit an existing item
- Delete an item

## Installation and Setup

1. Clone the repository to your local machine:

   ```bash
   git clone https://github.com/your-username/simple-item-management.git

2. Navigate to the project directory:
    cd mymvc

3. Copy the .env.example file to .env and update the database connection details.

4. docker-compose up -d

5. Access the project in your web browser at http://localhost.

## Usage
Access the homepage to view the list of items.

Click on "Create Item" to add a new item.

Click on an item's "Edit" button to modify its details.

Click on an item's "Delete" button to remove it.

Technology Stack
Docker
PHP
MySQL
Directory Structure
app/: Contains the application's controllers, models, and views.
public/: Publicly accessible files (entry point, assets).
resources/: Views and assets for the application.
Core/: Core framework files (e.g., Database, Controller).


