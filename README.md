# College Task - Simple Design Upload CRUD

This is a Simple Design Upload CRUD as my assignment to study Web Programming in College in 2023. The project allows users to efficiently manage designer data and their design works by providing a simple interface to add, update, and delete designer information, as well as upload and manage design files. This application helps maintain accurate records of designers and their creations, promoting better organization and accessibility of creative assets.

Tech Stack: HTML, PHP, Assets (CSS & JS), & DATABASE

## Features

- **Add Designer**: A form to input name, email, gender, and upload a design file (PNG, JPG, JPEG).
- **View Designer List**: Display all designers that have been added along with their details and design images.
- **Update Designer Data**: Edit information for existing designers.
- **Delete Designer**: Remove designers from the list.

## Technologies Used

- PHP (Native)
- MySQL
- HTML/CSS

## How to Use

1. **Clone the Repository**:

   ```bash
   git clone https://github.com/RyanGA09/CollegeTask_SimpleDesignUploadCRUD.git
   ```

   (Replace username with your GitHub username)

2. **Setup Database**

   - Create a Database & Table

   1. Open your MySQL client and run the following command to create a database named `designers`:

      ```sql
      CREATE DATABASE webdesign;
      USE webdesign;
      ```

   2. run the following command to create a table named `upload_design`

   ```sql
   CREATE TABLE upload_design
   (
      id_design INT AUTO_INCREMENT PRIMARY KEY,
      designer_name VARCHAR(70),
      designer_email VARCHAR(100),
      designer_gender ENUM('Male', 'Female'),
      design_url VARCHAR(200),
      time_added DATETIME
   );

   ```

   - Import the provided SQL file (upload_design.sql) to create the necessary database and table structure.
   - You can do this using a tool like phpMyAdmin or any MySQL client by executing the SQL script.

3. **Configure Database Connection**

   - Open the connect.php file and ensure the connection settings are correct:

   ```php
   <?php
    $connected = mysqli_connect("localhost", "root", "", "webdesign");
   ?>

   ```

   - Modify the username, password, and database name if necessary to match your local setup.

4. **Run the Application**

   You can run the application using a local server:

   - XAMPP: Place the project folder in the htdocs directory and access it via [XAMPP](http://localhost/simpleDesignUploadCRUD/).
   - Laragon: Place the project folder in the www directory and access it via [Laragon](http://localhost/simpleDesignUploadCRUD/) (assuming the project name is webdesign).
   - Other Local Servers: If you're using another local server setup, ensure the project files are placed in the appropriate directory for that server, and access it using the corresponding URL (e.g., [http://localhost/simpleDesignUploadCRUD/]).

## Contributing

Feel free to fork the repository and submit pull requests, or make changes directly in the repository for improvements or bug fixes. Please ensure that your contributions adhere to the existing style and coding standards.

Important: When contributing, please create a new branch for your changes instead of pushing directly to the main branch. To do this:

1. With Forking:

   1. Fork Repository
      On the project page you want to contribute to, click the "Fork" button in the upper right corner. This will create a copy of the repository in your GitHub account.
   2. Clone Forked Repository
      After forking, open your terminal and run the following command to clone the forked repository to your local machine:

      ```bash
      git clone https://github.com/your-username/SimpleDesignUploadCRUD.git
      ```

   3. Navigate to the Project Directory
      Change to the project directory with the command:

      ```bash
      cd SimpleDesignUploadCRUD
      ```

   4. Create a new branch
      Create a new branch for the feature or bug fix you want to add:

      ```bash
      git checkout -b your-feature-branch
      ```

   5. Make your changes and commit them
      Make the necessary changes in the code. After that, add the changes to the staging area and commit:

      ```bash
      git add .
      ```

      ```bash
      git commit -m "Add a descriptive message about your changes"
      ```

   6. Push the branch to your forked repository
      After committing, push the new branch to your forked repository on GitHub:

      ```bash
      git push -u origin your-feature-branch
      ```

   7. Open a pull request from your branch to the main branch of the original repository.

   - Go to the original repository (the one you forked) on GitHub.
   - Click the "Pull Requests" tab and then click "New Pull Request".
   - Select your branch from your fork as the source (base) and the main branch from the original repository as the target (compare).
   - Provide a suitable description and submit the pull request.

2. Without Forking

   1. Create a new branch
      Create a new branch for the feature or bug fix you want to add:

      ```bash
      git checkout -b your-feature-branch
      ```

   2. Make your changes and commit them
      Make the necessary changes in the code. After that, add the changes to the staging area and commit:

      ```bash
      git add .
      ```

      ```bash
      git commit -m "Add a descriptive message about your changes"
      ```

   3. Push the branch to your branch at the repository
      Push the new branch to the repository:

      ```bash
      git push -u origin your-feature-branch
      ```

   4. Merge changes back to the main branch:
      If you have write access to the main repository, you can merge your changes back to the main branch:
      ```bash
      git checkout main
      git merge your-feature-branch
      ```

   5. (Optional) Delete the branch after merging:
      After merging, you can delete the feature branch to keep the repository clean:
      ```bash
      git branch -d your-feature-branch
      ```

**_By following these guidelines, you help maintain a clean and manageable project history._**

## License

&copy;2023 Ryan Gading Abdullah. All rights reserved.

This project is licensed under the MIT License - see the [MIT LICENSE](LICENSE) for details.
