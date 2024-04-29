![FK-KIOSK MANAGEMENT SYSTEM] (https://lh3.googleusercontent.com/fife/ALs6j_EPLzxFmyFoAPus-lcwPjdqjpIWr_yuqPMMmOjWfuvauufdN6ntOXqduB2kQKml16lbSQjpvQNQSZIYLJUNUSLBmuv0fA_rP9rhSkYZzBcf8dI9K3mcZhTf33GzNEs1OW6MjquOOmGb08pZi3vcjGRng1t4FcWScKoYfarEygfd6xnN2r4SbDRgHEXtbX9Xeq2fbYJGIuuTECh8KPLE2IsIhVAw4iSJ8VXEYHlLd8ROaHFCEMz7nlUZJjPYbBnBFRXE1H5U1R-JPlQYLV2TL1T39tNsub1JEmcBKZh1O-dSQVDzqcT9dHOnyQ9o6hh_aWWmXzIUBMdgBJTRMRbpIYx-SbQf1OAhoOZflLkk4ij5JC8QeArPmvXHdv5bjZ3XxZ9ZZzTAeBzI90Jixk5z80nCHlNrbljREJzCPbJ2N9Lbbx7IJlFHm4rWS57gdZS4Qp65e9rEt-WbmlycjO-vDPt2Qv1-GrDu_FYSPPFZN8yVLh2WJcXTBlgGHSe0tMB3SK7HCB2vO0jC86J0xpXJ4uFT3_JyGPinXhst2vD1AHOXp51V2T344203sq6qCvYcW-ujXQ8EWzDJtzhZ96l5oHpNUHfyvsFSiuLms6UJJaVFL6-X-pzo0lJJHO7S-Q9DeEZZ3FkghmGe42gTo87itE8UpfAEsciCjsUxPxxn7w85VqrWikGfnmtxRoGgvsOTeJSTHnVLA2G0nFrFFlTlrpUUiB2q4Uf34amOpJTSaTBdNMnQrccoc4LJNCN7whPn302s6KaW82k82hIr96SxSLw9UCO2bJHuW-a7z-sl_ik2nFWfya7q8RCMoqn612poJ9ZG7bmzxte02hBLUru5s-5NhHY69I3VLn0tCGApCeDdZtKF5xKyylqIGK3znlkNM9g3rcoDlNirOiHipB7-IcE8RPEBrG4cb9mr7X5ZoYuYkBQG9xiCcxHfv4Plm0li8IhMwoE_YBBn44iuDKx-z38dYQfKsnvZkTjW2qIuAz6Rvcu-Q34Cx3DyEeeVsee8TtQ-o9Fli_mfRbphvW2AamESyuYJqya5coeFZNi6PV_MtqsyqT5d4mJBpQfgnaZGMGeXlnlEW44iCgEvxxP33_64A7Lm9njHXIjZ8Jd0IGAerJEm1d7Hbrm-paNk3ussWZGZladONj1p4jQsNbBuO7nudVc3PLrgk_xE5DdmtAjt1TLJByB5Qe-X-SSzK3EVx13_y8kklEXr4Yv8Jc3LV7Hs51ECgi0H_kMFJVwPbwz5CelSLvVf05oQNQv_tMz_Z0u1gdCs9QigRRihEzm1_9juj3bZglwi1_ZB857NWwAa42w5zVaJOp9Q52oQxQTrEVca2iHnpdZN129HvRmICIQJAmgkGYP_8W1AxATjBA6-k7pnfWhYBnuT8OWJqG6SXFgTgODlrUeNCZDyLmcCgEpDvQBMd9YO2lLJd8KNSxJb7ET9GMv5Skla-q5eROkH4KEB8XJnYTRfJ9T4HdT1k1syKzPXy7E4qzHU7cvWaz8GSzRT3HY3N5OnL1cYOXzQkRrMO4wblurPPW5KmPRbzGsMoOwJAw0ln51wO3Tyfs3bhEXv2HNFrdGjXIRefUZwJB9P5KjAq8mlWd6M38CKsDFCbTC_CieCeYbajPJRSQ9NK6YYzkV702j09VTeBbZl1y-4uw5t4HAeGr8vJn1dLQqaVVCvAs28d0b3iPfRbjxPOaVS3e4FNQpFy5jEugsIe17b3zDs7AllD3KFOVHE-Bcn0dW-OlE=w1920-h911)
# FK-KIOSK MANAGEMENT SYSTEM
ONLINE KIOSK MANAGEMENT SYSTEM FOR FACULTY OF COMPUTING, UMPSA


## Install

To clone this project
```bash
    1. Open the Terminal in Laragon.
    2. Make sure the current directory is '/www'.
    3. Type in 'git clone <url> <project-name>'.
    4. Type in 'cd <project-name>' to enter the project's directory.
```

To setup this project
```bash
    1. Make sure the current directory is '/<project-name>'.
    2. Type in 'composer install' to install the packages and dependencies.
    3. Type in 'npm install' to install the packages and dependencies.
    4. Type in 'npm run build' to runs the build field from the package.json scripts field.
    5. Click on Database in Laragon/phpMyAdmin.
    6. Create a new database with the name of your project. Eg: <project_name>
    7. Type in 'code .' to open the current directory in VS Code.
    8. In the explorer tab on the left, copy the '.env.example' file and paste it in the same directory.
```

To publish this project
```bash
    1. Open the copied file and rename it to '.env'.
    2. In the '.env' file, edit the 'DB_DATABASE' value to the new Database name that you   have created.
    3. If your MySQL is using a password, edit the 'DB_PASSWORD' value with your password.
    4. In the Terminal, type in 'php artisan key:generate' to generate the project's 'APP_KEY'.
    5. Finally, type in 'php artisan migrate:fresh --seed' to migrate the database tables for the project.
```

## Run
```bash
  1. Type in 'cd <project-name>' to enter the project's directory.
  2. php artisan serve
```
    
## Download
 - [Laragon](https://laragon.org/download/)
 - [Visual Studio Code](https://code.visualstudio.com/download)


## Appendix
Developed and Deployed using Visual Studio Code, Laragon, Heidi SQL, Github.


## Programmer's
- [@Amir](https://github.com/amir1611)
- [@Satiya](https://github.com/satiyaganes06)
- [@Sofhia](https://github.com/SofhiaziziCool)
- [@Iman](https://github.com/chiciko10)


## Documentation
 - [Laravel](https://laravel.com/docs/10.x)
 - [Visual Studio Code](https://code.visualstudio.com/docs)

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
