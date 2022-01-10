# 👨‍💻 Aplikasi Sistem penggajian

This Application in build using **Laravel** and full feature **REST-API**.

## 📍 Get Started

+ ### Configuration
    + Open your terminal and typing ``git clone https://github.com/destroylord/sistem-penggajian-simpel.git``.
    + Please copy and paste file ``.env.example`` to ``.env``
    + Then you typing ``php artisan key:generate`` in terminal
    + Create a database with name same file in ``.env``
    + Then you migrate and Seeder this project ``php artisan migrate --seed``
    + Last you running this application using terminal ``php artisan serve``

+ ### API using POSTMAN
    + **GET Employee**
    <details><summary>Example:</summary>
    1. Endpoint: http://127.0.0.1:8000/api/v1/employee
    2. Method : GET
    3. ScreenShot: 
        ![Employee!](/public/images/API/Get-employee.PNG "Get Employee")
    </details>

+ ### Running QUEUE
    + You can insert using POSTMAN.
    + <details><summary>Get Employee</summary>
       ![Batch](/public/images/Batch.PNG "Batch")
    </details>
    + Then you can running queue with typing terminal ``php artisan queue:work``
    + Check you database in table employees_salary

## Testing 

Not finished yet 😥

## 📎 Conclusion

This application is simple with fire making that has been provided by the [Pt.Kledo Berhati Nyaman](https://kledo.com/) ❤️ team with a comfortable heart.
