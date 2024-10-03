# Simple Design Upload CRUD

A simple application to manage designer data and design works. This project allows users to add, update, and delete designer information, as well as upload design files.

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
   git clone https://github.com/username/SimpleDesignUploadCRUD.git
   ```

   (Replace username with your GitHub username)

2. **Setup Database**

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

   - XAMPP: Place the project folder in the htdocs directory and access it via [XAMPP](http://localhost/design-manager/).
   - Laragon: Place the project folder in the www directory and access it via [Laragon](http://design-manager.test/) (assuming the project name is design-manager).
   - Other Local Servers: If you're using another local server setup, ensure the project files are placed in the appropriate directory for that server, and access it using the corresponding URL (e.g., [http://localhost/design-manager/]).

## Contributing

Feel free to fork the repository and submit pull requests for improvements or bug fixes. Please ensure that your contributions adhere to the existing style and coding standards.

Important: When contributing, please create a new branch for your changes instead of pushing directly to the main branch. To do this:

Create a new branch:

```bash
git checkout -b your-feature-branch
```

Make your changes and commit them:

```bash
git add .
```

```bash
git commit -m "Add a descriptive message about your changes"
```

Push the branch to your forked repository/ your own branch:

```bash
git push -u origin your-feature-branch
```

Open a pull request from your branch to the main branch of the original repository.

**_By following these guidelines, you help maintain a clean and manageable project history._**

## License

<!-- [MIT LICENSE](LICENSE) -->

&copy;2024 Ryan Gading Abdullah

## Contact

Feel free to replace the placeholders with your actual details, and let me know if you need further assistance! please contact me at [Gmail](mailto:ryangabdullah9@gmail.com).

## Support Me

[Saweria](https://saweria.co/en)
