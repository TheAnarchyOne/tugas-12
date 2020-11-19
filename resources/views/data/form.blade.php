<!DOCTYPE html>
<html lang="en">

    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
            <title>Document</title>
    </head>

    <body>

        <h1> Buat Akun Baru! </h1> 

        <h2> Sign Up Form </h2>

        <form action="/login" method="POST">
            @csrf

            <p> First name: </p>
            <input type="text" placeholder="Masukkan first name" name="first">
            <p> Last name: </p>
            <input type="text" placeholder="Masukkan last name" name="last">
            <br> <br>

            <p> Gender: </p>
            <input type="radio" name="gender" value="0"> Male <br>
            <input type="radio" name="gender" value="1"> Female <br>
            <input type="radio" name="gender" value="2"> Other <br>

            <p> Nationality: </p>
            <select name="" id="">
                <option value="idn"> Indonesian </option>
                <option value="mls"> Malaysian </option>
                <option value="sgn"> Singaporean </option>
                <option value="aus"> Australian </option>
            </select>

            <p>Language Spoken:</p>
            <input type="checkbox" name="ls" value="0"> Bahasa Indoenesia <br>
            <input type="checkbox" name="ls" value="1"> English <br>
            <input type="checkbox" name="ls" value="2"> Other <br>

            <p>Bio:</p>
            <textarea cols="30" rows="10"></textarea>
            <br> <br>
            
            <input type="submit" value="Sign Up"> </>
        </form>
            
    </body>

</html>